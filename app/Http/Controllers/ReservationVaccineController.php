<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Reservation_vaccineController extends Controller
{
    public function index(Reservation_vaccine $reservetion_vaccine)
{
    return $reservetion_vaccine->get();
}
}
