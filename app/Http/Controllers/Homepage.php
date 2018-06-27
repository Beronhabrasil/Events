<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\GoogleCalendar\Event;
use Carbon\Carbon;
use Announce;
use Facebook\FacebookRequest;



class Homepage extends Controller
{
 
    public function index() {
        
      
       
    
     return view('homepage');
    }
    public function InsertEvents(){
    
     $data = [];
        $data =[
            'name'=>'name',
            'EventTime'=> 'EventTime',
            'foto'=>'foto'
        ];
        
       $set = \App\Announce::insert($data);
    }
    
}
