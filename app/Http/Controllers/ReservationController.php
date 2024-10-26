<?php

namespace App\Http\Controllers;

use App\Models\Reserve;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(Reserve $reserve)
{
    return $reserve->get();
}


}
