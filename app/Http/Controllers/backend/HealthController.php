<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Health;
use Illuminate\Http\Request;

class HealthController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string|min:2|max:50|unique:healths',
            'status' => 'required',
        ]);

        $add_Health = new Health();
        $add_Health->name = $request->input('name');
        $add_Health->status = $request->input('status');
        $add_Health->save();
    }
    public function Index(){

        $Get_Health =Health::all();
        return response()->json(['Get_Health' => $Get_Health],200);

    }
    public function View($name){
        $showhealth =Health::where('name',$name)->first();
        return response()->json(['showhealth' => $showhealth],200);

    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|min:4|max:50|',
            'status' => 'required',
        ]);
        $update_Health = Health::find($request->id);

        $update_Health -> name   = $request->input('name');
        $update_Health -> status = $request->input('status');
        if ($update_Health ->save()){
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
        foreach ($request->HealthData as $id){
            $SelectedHealthData  = Health::find($id);
            $SelectedHealthData  ->delete();
            $DeleteCount++;
        }
        //$DeleteCount > 0 ?  $success = true :  $success = false; //same
        $success = $DeleteCount > 0 ? true : false;

        return response()->json(['success' => $success,'TotalDelete'=> $DeleteCount],200);

    }
    public function ChangStatus(Request $request){
        $Count = 0;
        foreach ($request->HealthData as $id){
            $HealthData = Health::find($id);
            $HealthData ->status = $request->status;
            $HealthData ->update();
            $Count++;
        }
        $success = $Count > 0;
        return response()->json(['success' => $success,'TotalCount'=> $Count],200);

    }
    public function Delete($id){
        Health::find($id)->delete();
    }
}
