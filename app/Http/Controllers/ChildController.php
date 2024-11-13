<?php 
namespace App\Http\Controllers;
use App\Models\Child;
use Illuminate\Http\Request;
use App\Http\Requests\ChildRequest;
class Childcontroller extends Controller 
{
   
 public function index(Child $child)
{
    return view('children.index')->with(['children' => $child->getPaginateByLimit()]);
}
public function create()
{
    return view('children.create');
}
public function show(Child $child)
{
    return view('children.show')->with(['child' => $child]);
 
}

public function store(Child $child, ChildRequest $request)
{
    $input_child = $request['child'];
    $input_reservations = $request->reservations_array;  
    $child->fill($input_child)->save();
    $child->reservations()->attach($input_reservations); 
    return redirect('/');
}
public function edit(Child $child)
{
    return view('children.edit')->with(['child' => $child]);
}
public function update(ChildRequest $request, Child $child)
{
    $input_child = $request['child'];
    $child->fill($input_child)->save();
    return redirect('/children/' .$child->id);
}
public function delete(Child $child)
{
    $child->delete();
    return redirect('/');
}
}
