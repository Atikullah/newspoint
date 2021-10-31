<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Opinion;
use Illuminate\Http\Request;

class OpinionController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string|min:2|max:50|unique:opinions',
            'status' => 'required',
        ]);

        $add_Opinions = new Opinion();
        $add_Opinions->name = $request->input('name');
        $add_Opinions->status = $request->input('status');
        $add_Opinions->save();
    }
    public function Index(){

        $Get_Opinion =Opinion::all();
        return response()->json(['Get_Opinion' => $Get_Opinion],200);

    }
    public function View($name){
        $showOpinion =Opinion::where('name',$name)->first();
        return response()->json(['showOpinion' => $showOpinion],200);

    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|min:4|max:50|',
            'status' => 'required',
        ]);
        $update_Opinion = Opinion::find($request->id);

        $update_Opinion -> name   = $request->input('name');
        $update_Opinion -> status = $request->input('status');
        if ($update_Opinion ->save()){
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
        foreach ($request->OpinionData as $id){
            $SelectedOpinionData  = Opinion::find($id);
            $SelectedOpinionData  ->delete();
            $DeleteCount++;
        }
        //$DeleteCount > 0 ?  $success = true :  $success = false; //same
        $success = $DeleteCount > 0 ? true : false;

        return response()->json(['success' => $success,'TotalDelete'=> $DeleteCount],200);

    }
    public function ChangStatus(Request $request){
        $Count = 0;
        foreach ($request->OpinionData as $id){
            $OpinionData = Opinion::find($id);
            $OpinionData ->status = $request->status;
            $OpinionData ->update();
            $Count++;
        }
        $success = $Count > 0;
        return response()->json(['success' => $success,'TotalCount'=> $Count],200);

    }
    public function Delete($id){
        Opinion::find($id)->delete();
    }
}
