<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class Child_reservationController extends Controller
{   
   
    public function index(Child_reservation $child_reservation)
{
    return $child_reservation->get();
}
}
