<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Entertainment;
use Illuminate\Http\Request;
         //Entertainment entertainment
class EntertainmentController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string|min:2|max:50|unique:entertainments',
            'status' => 'required',
        ]);

        $add_Entertainment = new Entertainment();
        $add_Entertainment->name = $request->input('name');
        $add_Entertainment->status = $request->input('status');
        $add_Entertainment->save();
    }
    public function Index(){

        $Get_Entertainment =Entertainment::all();
        return response()->json(['Get_Entertainment' => $Get_Entertainment],200);

    }
    public function View($name){
        $showentertainment =Entertainment::where('name',$name)->first();
        return response()->json(['showentertainment' => $showentertainment],200);

    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|min:4|max:50|',
            'status' => 'required',
        ]);
        $update_Entertainment = Entertainment::find($request->id);

        $update_Entertainment -> name   = $request->input('name');
        $update_Entertainment -> status = $request->input('status');
        if ($update_Entertainment ->save()){
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
        foreach ($request->EntertainmentData as $id){
            $SelectedEntertainmentData  = Entertainment::find($id);
            $SelectedEntertainmentData  ->delete();
            $DeleteCount++;
        }
        //$DeleteCount > 0 ?  $success = true :  $success = false; //same
        $success = $DeleteCount > 0 ? true : false;

        return response()->json(['success' => $success,'TotalDelete'=> $DeleteCount],200);

    }
    public function ChangStatus(Request $request){
        $Count = 0;
        foreach ($request->EntertainmentData as $id){
            $EntertainmentData = Entertainment::find($id);
            $EntertainmentData ->status = $request->status;
            $EntertainmentData ->update();
            $Count++;
        }
        $success = $Count > 0;
        return response()->json(['success' => $success,'TotalCount'=> $Count],200);

    }
    public function Delete($id){
        Entertainment::find($id)->delete();
    }
}
