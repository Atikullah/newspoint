<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Science;
use Illuminate\Http\Request;

class ScienceController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string|min:2|max:50|unique:sciences',
            'status' => 'required',
        ]);

        $add_Science = new Science();
        $add_Science->name = $request->input('name');
        $add_Science->status = $request->input('status');
        $add_Science->save();
    }
    public function Index(){

        $Get_Science =Science::all();
        return response()->json(['Get_Science' => $Get_Science],200);

    }
    public function View($name){
        $showScience =Science::where('name',$name)->first();
        return response()->json(['showScience' => $showScience],200);

    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|min:4|max:50|',
            'status' => 'required',
        ]);
        $update_Science = Science::find($request->id);

        $update_Science -> name   = $request->input('name');
        $update_Science -> status = $request->input('status');
        if ($update_Science ->save()){
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
        foreach ($request->ScienceData as $id){
            $SelectedScienceData  = Science::find($id);
            $SelectedScienceData  ->delete();
            $DeleteCount++;
        }
        //$DeleteCount > 0 ?  $success = true :  $success = false; //same
        $success = $DeleteCount > 0 ? true : false;

        return response()->json(['success' => $success,'TotalDelete'=> $DeleteCount],200);

    }
    public function ChangStatus(Request $request){
        $Count = 0;
        foreach ($request->ScienceData as $id){
            $ScienceData = Science::find($id);
            $ScienceData ->status = $request->status;
            $ScienceData ->update();
            $Count++;
        }
        $success = $Count > 0;
        return response()->json(['success' => $success,'TotalCount'=> $Count],200);

    }
    public function Delete($id){
        Science::find($id)->delete();
    }

}
