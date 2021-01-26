<?php

namespace Devaissamail\Mail\Http\Controllers;

use App\Http\Controllers\Controller;
use Devaissamail\Mail\Models\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    //

    public function store(Request $request){
        dd(config('mail_config.name'));
        Mail::create($request->all());

        return redirect('mail');
    }

    public function index(){

        return view('mail::mail',['mails' => Mail::all()]);
    }
}
