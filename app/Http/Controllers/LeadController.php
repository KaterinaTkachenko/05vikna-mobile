<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;

class LeadController extends Controller
{
    public function addLead(Request $request){
        $lead = new Lead();
        $lead->status_id = 3; //id статуса "Новый"
        $lead->widget = $request->widget;
        $lead->page = $request->page;
        $lead->username = $request->username;
        $lead->phone = $request->phone;
        if ( isset($_SESSION["origURL"]) )
            $lead->refer = $_SESSION["origURL"];
        $lead->save();

        return view('form-ok');
    }

    public function submit_modal(Request $request){
        if($request->phone){
            $lead = new Lead();
            $lead->status_id = 3; //id статуса "Новый"
            $lead->widget = $request->widget;
            $lead->page = $request->page;
            $lead->phone = $request->phone;
            if ( isset($request->username))
                $lead->username = $request->username;
            if ( isset($_SESSION["origURL"]) )
                $lead->refer = $_SESSION["origURL"];
            $lead->save();

            $userData = array(                
                "phone" => $request->phone,
                "username"=> $request->username,
                "page"=> $request->page,
                "widget"=> $request->widget,
                "select1" => $request->select1, 
                "select2" => $request->select2, 
                "select3" => $request->select3, 
                "select4" => $request->select4, 
                "select5" => $request->select5, 
                "sectionCount" => $request->sectionCount, 
                "section1" => $request->section1, 
                "section2" => $request->section2, 
                "section3" => $request->section3, 
                "section4" => $request->section4, 
            );
            event(new \App\Events\ChangeOrderEvent($lead, $userData));

            $status = 'ok';
            echo $status;die;
        }
        else{
            $status = 'error';
            echo $status;die;
        }
    }
}
