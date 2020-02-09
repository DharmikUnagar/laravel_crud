<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Response;
use App\Employee;
use App\Salary;
use App\Master;
use Illuminate\Support\Facades\Hash;
use DataTables;

class EmployeeController extends Controller{

  
  //Display List
  public function index(Request $request){
    if ($request->ajax()) {
      $data = Employee::get();
      return Datatables::of($data)
      ->addIndexColumn()
      ->addColumn('image', function($row){
        if($row->image){
          $image = '<a href="'.asset('images/upload/').'/'.$row->image.'" data-fancybox data-caption="'.$row->name.'"><img src="'.asset('images/upload/').'/'.$row->image.'" style="width:50%;" class="mb-2 img-thumbnail" /></a>';
        }else{
          $image = '<a href="'.asset('images/unknown.jpg').'" data-fancybox data-caption="images/unknown.jpg"><img src="'.asset('images/unknown.jpg').'" style="width:50%;" class="mb-2 img-thumbnail" /></a>';
        }
        return $image;
      })
      ->addColumn('action', function($row){
          $btn = ' <div class="btn-group btn-group-sm">';
          $btn .= '<button type="button" class="btn btn-edit btn-primary editItem" data-url="'.route('employees.edit', $row->id).'"><i class="fas fa-edit"></i></button>';
          $btn .= '<button data-toggle="tooltip" data-id="'.$row->id.'" data-original-title="Delete" type="button" class="btn btn-danger deleteItem"><i class="fas fa-trash-alt"></i></button>';
          $btn .= '</div>';
          return $btn;
      })
          ->rawColumns(['image', 'action'])
          ->make(true);
      }
    return view('employees.index');
  }
  //Create Page
  public function create(){
    return view('employees.create');
  }
  //Edit Page
  public function edit($id){
    $employee = Employee::where(['id' => $id])->first();
    if($employee){
        return view('employees.create',compact('employee'));
    }else{
       abort(404);
    } 
  }


  //Insert Record on database
  public function store(Request $request){
    $request->validate([
      'name' => 'required',
      'email' => 'required',
      'password' => 'required',
      'salary' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/', 
      'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5120',
      'phno' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
      'dob' => 'required',
    ]);
    $image = $request->file('image');
    if($image){
      $name = time().'_1.'.$image->getClientOriginalExtension();
      $destinationPath = public_path('images/upload');
      $image->move($destinationPath, $name);
    }else{
      $name = '';
    }
    Employee::create([
      'name'      => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password),
      'salary' => $request->salary,
      'image' => $name,
      'dob' => $request->dob,
      'phno'    => $request->phno,
    ]);
    return response()->json(['status' => 'success', 'message' => 'Employee created successfully.']);
  }


  //Update Record on database
  public function update(Request $request, Employee $employee){
     // echo "<pre/>"; print_r($request->all()); die;
      if($request->image){
        $request->validate([
          'name' => 'required',
          'email' => 'required',
          'salary' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/', 
          'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5120',
          'phno' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
          'dob' => 'required',
        ]);
      }else{
          $request->validate([
            'name' => 'required',
            'email' => 'required',
            'salary' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/', 
            'phno' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'dob' => 'required',
          ]);
      }
      if($request->image){
          $image = $request->file('image');
          $name = time().'_1.'.$image->getClientOriginalExtension();
          $destinationPath = public_path('images/upload');
          $image->move($destinationPath, $name);
          $employee['image'] = $name;
          if($request->old_image && file_exists( public_path('images/upload/'.$request->old_image))){
              unlink(public_path('images/upload/'.$request->old_image));
          }
      }
      $employee->update([
        'name'      => $request->name,
        'email' => $request->email,
        'salary' => $request->salary,
        'dob' => $request->dob,
        'phno'    => $request->phno,
      ]);
      return response()->json(['status' => 'success', 'message' => 'Employee updated successfully.']);
  }


  //Delete record from database
  public function destroy(Employee $employee){
    if($employee->image){
      unlink("images/upload/".$employee->image);
    }
    $employee->delete();
    return response()->json(['success'=>'Employee deleted successfully.']);
  }
}
