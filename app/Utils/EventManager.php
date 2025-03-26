<?php
namespace App\Utils;

use App\Models\Event;
use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class EventManager
{
    public static function get_all_events($request, $limit = 10, $offset = 1)
    {
        if (is_object($request) && method_exists($request, 'user')) {
            $user = $request->user() ?? $request->user; //for api
        }
        
        $events = Event::select('events.*', DB::raw('(events.total_capacity - COUNT(bookings.id)) as remaining_slot'))
            ->leftJoin('bookings', 'bookings.event_id', '=', 'events.id')
            ->groupBy('events.id', 'events.total_capacity')
            ->orderBy('created_at', 'desc')
            ->paginate($limit, ['*'], 'page', $offset);
        
        $events->getCollection()->transform(function($event) {
            //format time to 12-hours
            $event->event_time = Carbon::parse($event->event_time)->format('g:i A'); // 12-hour format
            $totalBookings = Booking::where('event_id', $event->id)->count();
            if($totalBookings >= $event->total_capacity){
                $event->full_capacity = true;
            }else{
                $event->full_capacity = false;
            }
            return $event;
        });

        if($user->user_type=='user'){
            $eventsWithStatus = $events->getCollection()->map(function ($event) use ($user) {
                $totalBookings = Booking::where('event_id', $event->id)->count();
                // Check if the user has booked this event
                $booked = Booking::where('user_id', $user->id)
                                 ->where('event_id', $event->id)
                                 ->exists();
        
                $event->booked = $booked;
                return $event;
            });
            $events->setCollection($eventsWithStatus);
        }else{
            $eventsWithStatus = $events->getCollection()->map(function ($event) use ($user) {
                // Check if the event is almost full (80% or more booked)
                $totalBookings = Booking::where('event_id', $event->id)->count();
                
                if($event->total_capacity > 10){
                    if ($event->total_capacity > 0) {
                        $percentageBooked = ($totalBookings / $event->total_capacity) * 100;
                        $event->almost_full = $percentageBooked >= 80;
                    } else {
                        $event->almost_full = false;
                    }
                }else{
                // Check if the event is less than 10 in capacity
                    $remaining = $event->total_capacity - $totalBookings;
                    $event->almost_full = $remaining <= 2;
                }

                $event->total_bookings = $totalBookings;
                return $event;
            });
            $events->setCollection($eventsWithStatus);
        }

        return $events;
    }

    public static function get_event_by_id($request)
    {
        if (is_object($request) && method_exists($request, 'user')) {
            $user = $request->user() ?? $request->user; //for api
        }

        $event = Event::select('events.*', DB::raw('(events.total_capacity - COUNT(bookings.id)) as remaining_slot'))
            ->leftJoin('bookings', 'bookings.event_id', '=', 'events.id')
            ->where('events.id', $request->id)  // Corrected syntax here
            ->groupBy('events.id', 'events.total_capacity')
            ->first();
        
        $event->event_time = Carbon::parse($event->event_time)->format('g:i A');
        $totalBookings = Booking::where('event_id', $event->id)->count();
        if($totalBookings >= $event->total_capacity){
            $event->full_capacity = true;
        }else{
            $event->full_capacity = false;
        }

        if($user->user_type=='user'){
                $booked = Booking::where('user_id', $user->id)
                                 ->where('event_id', $event->id)
                                 ->exists();
                $event->booked = $booked;
        }else{
            // Check if the event is almost full (80% or more booked)
            $totalBookings = Booking::where('event_id', $event->id)->count();
            $eventCapacity = $event->total_capacity;
            
            if ($eventCapacity > 0) {
                $percentageBooked = ($totalBookings / $eventCapacity) * 100;
                $event->almost_full = $percentageBooked >= 80;
            } else {
                $event->almost_full = false; // If no capacity is set, assume it's not almost full
            }
            $event->total_bookings = $totalBookings;
            return $event;
        }

        return $event;
    }

    public static function count_bookings($id){
        $event = Event::find($id);
            // Count how many bookings are associated with this event
        $bookingCount = $event->bookings()->count();
        return $bookingCount;
    }
}
