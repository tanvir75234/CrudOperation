<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use Session;
use Carbon\Carbon;

class DoctorController extends Controller{
    public function index(){
        $data = Doctor::get();
        return view('doctors.all',compact('data'));
    }

    public function add(){
        return view('doctors.add');
    }

    public function view($id){
        $data = Doctor::where('id',$id)->firstOrFail();
        return view('doctors.view',compact('data'));
    }

    public function edit($id){
        $data = Doctor::where('id',$id)->first();
        return view('doctors.edit',compact('data'));
    }

    public function insert(Request $request){

        $insert = Doctor::insert([
            'name' => $request['name'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'category' => $request['category'],
            'updated_at' => Carbon::now('asia/dhaka')->toDateTimeString(),
            'created_at' => Carbon::now('asia/dhaka')->toDateTimeString(), 
        ]);

        if($insert){
            return back();
        }
    }

    public function update(Request $request){
        $id = $request['id'];

        $update = Doctor::where('id',$id)->update([
            'name' => $request['name'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'category' => $request['category'],
            'updated_at' =>Carbon::now('asia/dhaka')->toDateTimeString(),
            'created_at' =>Carbon::now('asia/dhaka')->toDateTimeString(),
        ]);

        if($update){
            return redirect('dashboard/doctor');
        }
    }
}
