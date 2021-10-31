<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Life;
use Illuminate\Http\Request;

class LifeController extends Controller
{

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string|min:2|max:50|unique:lives',
            'status' => 'required',
        ]);

        $add_Life = new Life();
        $add_Life->name = $request->input('name');
        $add_Life->status = $request->input('status');
        $add_Life->save();
    }
    public function Index(){

        $Get_Life =Life::all();
        return response()->json(['Get_Life' => $Get_Life],200);

    }
    public function View($name){
        $showLife =Life::where('name',$name)->first();
        return response()->json(['showLife' => $showLife],200);

    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|min:4|max:50|',
            'status' => 'required',
        ]);
        $update_Life = Life::find($request->id);

        $update_Life -> name   = $request->input('name');
        $update_Life -> status = $request->input('status');
        if ($update_Life ->save()){
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
        foreach ($request->LifeData as $id){
            $SelectedLifeData  = Life::find($id);
            $SelectedLifeData  ->delete();
            $DeleteCount++;
        }
        //$DeleteCount > 0 ?  $success = true :  $success = false; //same
        $success = $DeleteCount > 0 ? true : false;

        return response()->json(['success' => $success,'TotalDelete'=> $DeleteCount],200);

    }
    public function ChangStatus(Request $request){
        $Count = 0;
        foreach ($request->LifeData as $id){
            $LifeData = Life::find($id);
            $LifeData ->status = $request->status;
            $LifeData ->update();
            $Count++;
        }
        $success = $Count > 0;
        return response()->json(['success' => $success,'TotalCount'=> $Count],200);

    }
    public function Delete($id){
        Life::find($id)->delete();
    }
}
