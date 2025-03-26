<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\User;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Utils\BookingManager;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function booking_by_id(Request $request, $id): JsonResponse
    {
        $bookings = BookingManager::get_booking_by_id($request, 10, $request->page);
        return response()->json($bookings, 200);
    }

    public function book_event(Request $request, $id): JsonResponse
    {
        $user = Auth::user();
        $event = Event::find($id);
        if (!$event) {
            return response()->json([
                'code' => 404,
                'success' => false,
                'error' => 'Event not found.'
            ]);
        }

        $existingBooking = Booking::where('user_id', $user->id)
            ->where('event_id', $event->id)
            ->first();

        if ($existingBooking) {
            return response()->json([
                'code' => 400,
                'success' => false,
                'error' => 'You have already booked this event.'
            ]);
        }

        // Check if there is available capacity.
        $currentBookingCount = $event->bookings()->count();
        if ($currentBookingCount >= $event->total_capacity) {
            return response()->json([
                'code' => 400,
                'success' => false,
                'error' => 'Event is fully booked.'
            ]);
        }

        $booking = Booking::create([
            'user_id' => $user->id,
            'event_id' => $event->id,
        ]);

        return response()->json([
            'code' => 201,
            'success' => true,
            'message' => 'Successfully booked an Event.'
        ]);
    }

    public function delete_booking(Request $request, $id): JsonResponse
    {
        $user = Auth::user();
        $booking = Booking::where('user_id', $user->id)
            ->where('event_id', $id)
            ->first();
        if($booking){
            $booking->delete();
            return response()->json([
                'code' => 200,
                'success' => true,
                'message' => 'Booking Canceled'
            ]);
        }else{
            return response()->json([
                'code' => 400,
                'success' => false,
                'error' => 'You have not booked this event.'
            ]);
        }
        
    }
}
