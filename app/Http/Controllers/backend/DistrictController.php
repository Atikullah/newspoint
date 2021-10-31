<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string|min:2|max:50|unique:districts',
            'status' => 'required',
        ]);

        $add_District = new District();
        $add_District->name = $request->input('name');
        $add_District->status = $request->input('status');
        $add_District->save();
    }
    public function Index(){

        $Get_District =District::all();
        return response()->json(['Get_District' => $Get_District],200);

    }

    public function View($name){
        $showdistrict =District::where('name',$name)->first();
        return response()->json(['showdistrict' => $showdistrict],200);

    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|min:4|max:50|',
            'status' => 'required',
        ]);
        $update_District = District::find($request->id);

        $update_District -> name   = $request->input('name');
        $update_District -> status = $request->input('status');
        if ($update_District ->save()){
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
        foreach ($request->DistrictData as $id){
            $SelectedDistrictData  = District::find($id);
            $SelectedDistrictData  ->delete();
            $DeleteCount++;
        }
        //$DeleteCount > 0 ?  $success = true :  $success = false; //same
        $success = $DeleteCount > 0 ? true : false;

        return response()->json(['success' => $success,'TotalDelete'=> $DeleteCount],200);
    }
    public function ChangStatus(Request $request){
        $Count = 0;
        foreach ($request->DistrictData as $id){
            $DistrictData = District::find($id);
            $DistrictData ->status = $request->status;
            $DistrictData ->update();
            $Count++;
        }
        $success = $Count > 0;
        return response()->json(['success' => $success,'TotalCount'=> $Count],200);

    }
    public function Delete($id){
        District::find($id)->delete();
    }
}
