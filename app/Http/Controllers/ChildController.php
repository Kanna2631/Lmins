<?php

namespace App\Http\Controllers;
use App\Models\Child;

use Illuminate\Http\Request;

class Childcontroller extends Controller
{
    public function index(Child $child)
{
    return $child->get();
}
}
