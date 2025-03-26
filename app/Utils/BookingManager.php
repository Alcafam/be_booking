<?php
namespace App\Utils;

use App\Models\Event;
use App\Models\User;
use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class BookingManager
{
    public static function get_booking_by_id($request, $limit = 10, $offset = 1)
    {
        $event = Event::find($request->id); 
        // Paginate the users who have bookings for this event
        $usersWithBooking = $event->bookings()
            ->with('user:id,first_name,last_name,email')
            ->select('user_id') 
            ->groupBy('user_id') 
            ->paginate($limit, ['*'], 'page', $offset);

        // Format the data with the user details
        $usersWithBooking->getCollection()->transform(function ($booking) {
            $user = $booking->user;
            return [
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'email' => $user->email,
            ];
        });

        return $usersWithBooking; 
    }

}