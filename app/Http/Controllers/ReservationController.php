<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\Clinic;
use App\Models\Child;
use App\Http\Requests\ReservationRequest;

class ReservationController extends Controller
{   
    public function create(Clinic $clinic)
    {
        
        return view('reservation')->with(['clinics' => $clinic->get()]);
    }
    public function index(Reservation $reservation, Clinic $clinic ,Child $child)
    {
        $children = Child::where('user_id', auth()->user()->id)->get();
        $childrenIds = $children->pluck('id');
        $reservations = Reservation::whereIn('child_id', $childrenIds)->get();
        // dd($reservation->get());
        return view('reservation')->with([
            'reservations' => $reservations,
            'clinics' => $clinic->get(),
            'children'=> $children,
          ]);
    }
    
    public function store(Reservation $reservation, ReservationRequest $request)
    {   
        $input = $request['reservation'];
        $input['is_cancelled']=false;
        // dd($input);
        $reservation->fill($input)->save();
        return redirect()->route('reservation.index')->with('success', '予約が作成されました');
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return redirect()->route('reservation.index')->with('flash_message', '予約をキャンセルしました。');
    }
}
