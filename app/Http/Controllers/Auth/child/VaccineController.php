<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use Illuminate\Http\Request;

class VaccineController extends Controller
{
    public function index(Vaccine $vaccine)
{
    return $vaccine->get();
}


}
