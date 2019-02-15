<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class EmailController extends Controller
{
    //

    public function index(){

        return view('email.index');
    }

    //basic 
    public function sent_email(){
        $data = array(
            'name'=>'Admin',
            'position'=>'Programmer'
        );

        Mail::send('email.content',$data,function($message){
            //config sender,attach,from,subject
            $message->to('faridkonat@gmail.com');
            $message->from('testworkqaz@gmail.com');
            $message->subject('TEST SENDER EMAIL');
        });
        echo "Success sent,Check Your Inbox";
    }

    //attach
    public function sent_email_attach(){
        $data = array(
            'name'=>'Admin',
            'position'=>'Programmer'
        );
        
        Mail::send('email.content',$data,function($message){
            //config sender,attach,from,subject
            $message->to('faridkonat@gmail.com');
            $message->from('testworkqaz@gmail.com');
            $message->subject('TEST SENDER EMAIL');
            $message->attach(asset('sample.pdf'));
        });
        echo "Success sent,Check Your Inbox";
    }
}
