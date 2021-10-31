<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string|min:2|max:50|unique:businesses',
            'status' => 'required',
        ]);

        $add_businesses = new Business();
        $add_businesses->name = $request->input('name');
        $add_businesses->status = $request->input('status');
        $add_businesses->save();
    }
    public function Index(){

        $Get_Business =Business::all();
        return response()->json([
            'Get_Business' => $Get_Business
        ],200);

    }
    public function View($name){
        $showbusiness =Business::where('name',$name)->first();
        return response()->json(['showbusiness' => $showbusiness],200);

    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|min:4|max:50|',
            'status' => 'required',
        ]);
        $update_Business = Business::find($request->id);

        $update_Business -> name   = $request->input('name');
        $update_Business -> status = $request->input('status');
        if ($update_Business ->save()){
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
        foreach ($request->BusinessData as $id){
            $SelectedBusinessData  = Business::find($id);
            $SelectedBusinessData  ->delete();
            $DeleteCount++;
        }
        //$DeleteCount > 0 ?  $success = true :  $success = false; //same
        $success = $DeleteCount > 0 ? true : false;

        return response()->json(['success' => $success,'TotalDelete'=> $DeleteCount],200);

    }
    public function ChangStatus(Request $request){
        $Count = 0;
        foreach ($request->BusinessData as $id){
            $BusinessData = Business::find($id);
            $BusinessData ->status = $request->status;
            $BusinessData ->update();
            $Count++;
        }
        $success = $Count > 0;
        return response()->json(['success' => $success,'TotalCount'=> $Count],200);

    }
    public function Delete($id){
        Business::find($id)->delete();
    }


}
