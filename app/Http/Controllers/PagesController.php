<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //
    public function getIndex(){
        #process variable data or params
        #talk to the model
        #receive data from the model
        #compile or process data from the model if needed
        #pass that data to the correct view
        return view('pages.welcome');
    }

    public function getAbout(){

        $first = 'Ashikul';
        $last = 'Tamal';

        $full = $first . ' ' . $last;
        $email = 'ashikul.tamal.aust@gmail.com';

        $data = [];

        $data['email'] = $email;
        $data['fullname'] = $full;
        return view('pages.about')->with('data', $data);

//        return view('pages.about')->with("fullname", $full)->with('email', $email);

//        return view('pages.about')->withFullname($full);
    }
    public function getContact(){
        return view('pages.contact');
    }

}
