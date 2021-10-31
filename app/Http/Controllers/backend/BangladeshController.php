<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Bangladesh;
use Illuminate\Http\Request;

class BangladeshController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string|min:2|max:50|unique:bangladeshes',
            //'image' => 'required|string|min:2|max:50|unique:internationals',
            'status' => 'required',
        ]);

        $add_bangladesh = new Bangladesh();
        $add_bangladesh->name = $request->input('name');
        //$add_bangladesh->image = $request->input('image');
        $add_bangladesh->status = $request->input('status');
        $add_bangladesh->save();
    }

    public function Index(){

        $Get_Bangladesh =Bangladesh::all();
        return response()->json([
            'Get_Bangladesh' => $Get_Bangladesh
        ],200);

    }
    public function View($name){
        $showBangladesh = Bangladesh::where('name',$name)->first();


        return response()->json(['showBangladesh' => $showBangladesh],200);

    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|min:4|max:50|',
            //'image' => 'required',
            'status' => 'required',
        ]);
        $update_bangladesh = Bangladesh::find($request->id);

        $update_bangladesh -> name   = $request->input('name');
        //$update_bangladesh -> image   = $request->input('image');
        $update_bangladesh -> status = $request->input('status');
        if ($update_bangladesh ->save()){
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
        foreach ($request->BangladeshData as $id){
            $SelectedBangladeshData  = Bangladesh::find($id);
            $SelectedBangladeshData  ->delete();
            $DeleteCount++;
        }
        //$DeleteCount > 0 ?  $success = true :  $success = false; //same
        $success = $DeleteCount > 0 ? true : false;

        return response()->json(['success' => $success,'TotalDelete'=> $DeleteCount],200);

    }
    public function ChangStatus(Request $request){
        $Count = 0;
        foreach ($request->BangladeshData as $id){
            $BangladeshData = Bangladesh::find($id);
            $BangladeshData ->status = $request->status;
            $BangladeshData ->update();
            $Count++;
        }
        $success = $Count > 0;
        return response()->json(['success' => $success,'TotalCount'=> $Count],200);

    }
    public function Delete($id){
        Bangladesh::find($id)->delete();
    }


}
