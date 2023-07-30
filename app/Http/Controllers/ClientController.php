<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    //
    public function index(){
        return view('client.index');
    }
    public function create() {
        return view('client.create');
    }
    public function store(Request $request)

{
    $client = new Client();

    $client->first_name=Request('first_name');
    $client->last_name=Request('last_name');
    $client->email=Request('email');
    $client->phone_number=Request('phone_number');
    $client->business_name=Request('business_name');
    // $client->business_type=Request('business_type');
    $client->package=Request('package');
    $client->city=Request('city');
    $client->note=Request('note');
    $client->save();


        return redirect('/')->with('msg','Request Submitted Successfully');
}
}
  // {
    //     $clientData = $request->validate(
    //         [
    //         'first_name' =>'string|required',
    //         'last_name' =>'string',
    //         'email'=>'string|required|unique:users',
    //         'phone_number'=>'required',
    //         'business_name'=>'required',
    //         'business_type'=>'required',
    //         'package'=>'required',
    //         'city'=>'required',
    //         'note'=>'required',]
    //       );
    //           Client::create($clientData);
    //     return view('/');
    // }
