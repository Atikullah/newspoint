<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Jobs;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string|min:2|max:50|unique:jobs',
            'status' => 'required',
        ]);

        $add_Jobs = new Jobs();
        $add_Jobs->name = $request->input('name');
        $add_Jobs->status = $request->input('status');
        $add_Jobs->save();
    }

    public function Index(){

        $Get_Jobs =Jobs::all();
        return response()->json([
            'Get_Jobs' => $Get_Jobs
        ],200);

    }
    public function View($name){
        $showjobs =Jobs::where('name',$name)->first();


        return response()->json(['showjobs' => $showjobs],200);

    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|min:4|max:50|',
            'status' => 'required',
        ]);
        $update_Jobs = Jobs::find($request->id);

        $update_Jobs -> name   = $request->input('name');
        $update_Jobs -> status = $request->input('status');
        if ($update_Jobs ->save()){
            $success = true;
        }else{
            $success = false;
        }
        return response()->json(['success' => $success],200);

    }

    public function removeitems(Request $request)
    {
        //return $request->categoriesData;
        $DeleteCount = 0;
        foreach ($request->JobsData as $id){
            $SelectedJobsData  = Jobs::find($id);
            $SelectedJobsData  ->delete();
            $DeleteCount++;
        }
        //$DeleteCount > 0 ?  $success = true :  $success = false; //same
        $success = $DeleteCount > 0 ? true : false;

        return response()->json(['success' => $success,'TotalDelete'=> $DeleteCount],200);

    }
    public function ChangStatus(Request $request){
        $Count = 0;
        foreach ($request->JobsData as $id){
            $JobsData = Jobs::find($id);
            $JobsData ->status = $request->status;
            $JobsData ->update();
            $Count++;
        }
        $success = $Count > 0;
        return response()->json(['success' => $success,'TotalCount'=> $Count],200);

    }
    public function Delete($id){
        Jobs::find($id)->delete();
    }
}
