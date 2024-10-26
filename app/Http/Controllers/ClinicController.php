<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clinic;


class ClinicController extends Controller
{
    public function index(Clinic $clinic)
    {
        return $clinic->get();
    }
}
