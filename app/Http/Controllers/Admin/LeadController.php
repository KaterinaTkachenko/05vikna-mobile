<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lead;
use App\Status;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {       
        if($request->period == 'yesterday'){
            $period = \Carbon\Carbon::yesterday()->format('Y-m-d');
            $active = 'yesterday';
        }
        elseif($request->period == 'today'){
            $period = \Carbon\Carbon::today()->format('Y-m-d');
            $active = 'today';
        }
        
        if($request->period == 'yesterday' || $request->period == 'today'){
            $leads = Lead::whereDate('created_at', $period)->orderBy('id', 'desc')->sortable()->paginate(10);                   
        }
        elseif($request->period == 'month'){
            $leads = Lead::whereDate('created_at', '>=' ,(new \Carbon\Carbon)->subDays(30)->toDateString())->whereDate('created_at', '<=' ,(new \Carbon\Carbon)->now()->toDateString() )->sortable()->paginate(10);
            $active = 'month';
        }
        else{
            $leads = Lead::sortable()->paginate(10); 
            $active = 'allTime';
        }

        $status = Status::orderBy('id')->pluck('name', 'id');
        return view('admin.leads.index', compact('leads', 'status', 'active'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lead = new Lead();
        $status = Status::orderBy('id')->pluck('name', 'id');
        return view('admin.leads.create', compact('lead', 'status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'status_id' => 'required',            
            'phone' => 'required'
        ]);    

        $lead = Lead::create($request->all());
        return redirect('/admin/leads')->with('success', 'Заявка с id ' . $lead->id . ' добавлена!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lead = Lead::find($id);
        $status = Status::orderBy('id')->pluck('name', 'id');
        return view('admin.leads.edit', compact('lead', 'status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'status_id' => 'required',
            'phone' => 'required'
        ]);    

        $lead = Lead::updateOrCreate(['id'=>$id],$request->all());
        return redirect('/admin/leads')->with('success', 'Заявка с id ' . $lead->id . ' обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lead::find($id)->delete();
        return redirect('/admin/leads')->with('success', 'Заявка удалена!');
    }

    public function changeStatus(Request $request)
    {       
        $lead = Lead::find($request->lead_id);
        $lead->status_id = $request->status_id;
        $lead->save();
    }

    public function setPeriod(Request $request)
    {   
        if($request->period == 'yesterday'){
            // $period = date("Y-m-d", strtotime( '-1 days' ) )->day;
            $period = \Carbon\Carbon::yesterday()->format('Y-m-d');
            $active = 'yesterday';
        }
        if($request->period == 'today'){
            $period = \Carbon\Carbon::today()->format('Y-m-d');
            $active = 'today';
        }
        // dd($period);

        if($request->period == 'yesterday' || $request->period == 'today'){
            $leads = Lead::whereDate('created_at', $period)->orderBy('id', 'desc')->paginate(10);           
        }

        if($request->period == 'month'){
            $leads = Lead::whereDate('created_at', '>=' ,(new \Carbon\Carbon)->subDays(30)->toDateString())->whereDate('created_at', '<=' ,(new \Carbon\Carbon)->now()->toDateString() )->get();
            $active = 'month';
        }

        // if($request->period == 'all'){
        //    $leads = Lead::orderBy('id', 'desc')->paginate(10);
        // }

        $status = Status::orderBy('id')->pluck('name', 'id');
            return view('admin.leads.index', compact('leads', 'status', 'active'));
    }
}
