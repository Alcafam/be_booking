<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Utils\EventManager;
use Validator;

class EventController extends Controller
{
    public function event_list(Request $request): JsonResponse
    {
        $events = EventManager::get_all_events($request, 10, $request->page);
        return response()->json($events);
    }

    public function event_by_id(Request $request, $id): JsonResponse
    {
        $events = EventManager::get_event_by_id($request);
        return response()->json($events);
    }

    public function add_event(Request $request): JsonResponse
    {
        $validator = $this->event_validator($request);
        if($validator!==true){
            return response()->json([$validator],422);
        }

        $event = Event::create($request->all());
        return response()->json([
            'success' => true,
            'message' => 'New Event Added'
        ]);
    }

    public function update_event(Request $request, $id): JsonResponse
    {
        $validator = $this->event_validator($request);
        if($validator!==true){
            return response()->json([$validator],422);
        }

        $event = Event::findOrFail($id);
        $event->update($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Event Updated'
        ]);
    }

    public function check_if_deletable($id){
        $delete_stat = EventManager::count_bookings($id);
        $message = "Are you sure you want to Delete?";
        if($delete_stat>0){
            $delete_stat = ($delete_stat == 1 ? 'is '.$delete_stat. ' slot' :'are '.$delete_stat.' slots' );
            $message = "There {$delete_stat} booked for this event. Are you sure you want to Delete?";
        }
        return response()->json(['message' => $message]);
    }

    public function delete_event(Request $request, $id): JsonResponse
    {
        $event = Event::findOrFail($id);
        $event->bookings()->delete();
        $event->delete();
        
        return response()->json([
            'success' => true,
            'message' => 'Event Deleted'
        ]);
    }

    private function event_validator($request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'event_date' => 'required|date',
            'event_time' => 'required|custom_time_format',
            'location' => 'required|string|max:255',
            'total_capacity' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return [
                'success' => false,
                'message' => 'Validation errors',
                'errors' => $validator->errors()
            ];
        }
        return true;
    }

}
