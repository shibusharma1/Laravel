<?php

namespace App\Http\Controllers;

use App\Models\customers;
use Illuminate\Http\Request;

class abc extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //fetching data from database
        $customers=customers::all();
        // $url = "/customer";
        // $title = "Registration Form";
        $data=compact('customers');
        return view('customer_view',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //displaying a form
        $url = url("/customer");
        $title = "Registration Form";
        $btn = "Submit";
        $customers="";
        $data=compact('customers','url','title','btn');
        return view('form',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validating and storing data to database
        $request->validate(
            [
                'name' => 'required|string',
                'email' => 'required|email|unique:customers',
                'gender'=>  'required',
                'address' => 'required|string',
                'dob'=>'required|date',
                'password'=>'required|min:8',
                'confirm_password'=>'required|same:password'
            ]
            );
        $customer = new customers;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->password = md5($request['password']);
        $customer->address = $request['address'];
        $customer->gender = $request['gender'];
        $customer->dob = $request['dob'];
        //file saving to database
        $filename = time()."_shibu.".$request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('public/uploads',$filename);
        $customer->image = $filename;
        $customer->save();
        return redirect('/customer');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //displaying the data of a customer of id smth
        $customers=customers::find($id);
        echo "<pre>";
        print_r($customers);
        echo "</pre>";

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //to redirect to the form with id
        $customers=customers::find($id);
        $url = url("/customer/update").'/'.$id;
        $title = "Update Form";
        $btn = "Update";
        $data=compact('customers','url','title','btn');
        return view('updatefor',$data);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Updating the specific data of the user
        //validating and storing data to database
        $request->validate(
            [
                'name' => 'required|string',
                'email' => 'required|email',
                'gender'=>  'required',
                'address' => 'required|string',
                'dob'=>'required|date',
                'password'=>'required|min:8',
                'confirm_password'=>'required|same:password'
            ]
            ); 
        $customer = customers::find($id);
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->password = md5($request['password']);
        $customer->address = $request['address'];
        $customer->gender = $request['gender'];
        $customer->dob = $request['dob'];
        //file saving to database
        $filename = time()."_shibu.".$request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('public/uploads',$filename);
        $customer->image = $filename;
        $customer->save();
        return redirect('/customer');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {

        //return "hi";
        //to display the record of the specific user
        $customer=customers::find($id)->delete();
        return redirect('/customer');


    }
}
