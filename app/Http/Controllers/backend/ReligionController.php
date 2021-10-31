<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Religion;
use Illuminate\Http\Request;

class ReligionController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string|min:2|max:50|unique:religions',
            'status' => 'required',
        ]);

        $add_Religions = new Religion();
        $add_Religions->name = $request->input('name');
        $add_Religions->status = $request->input('status');
        $add_Religions->save();
    }
    public function Index(){

        $Get_Religion =Religion::all();
        return response()->json(['Get_Religion' => $Get_Religion],200);

    }
    public function View($name){
        $showreligion =Religion::where('name',$name)->first();
        return response()->json(['showreligion' => $showreligion],200);

    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|min:4|max:50|',
            'status' => 'required',
        ]);
        $update_Religion = Religion::find($request->id);

        $update_Religion -> name   = $request->input('name');
        $update_Religion -> status = $request->input('status');
        if ($update_Religion ->save()){
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
        foreach ($request->ReligionData as $id){
            $SelectedReligionData  = Religion::find($id);
            $SelectedReligionData  ->delete();
            $DeleteCount++;
        }
        //$DeleteCount > 0 ?  $success = true :  $success = false; //same
        $success = $DeleteCount > 0 ? true : false;

        return response()->json(['success' => $success,'TotalDelete'=> $DeleteCount],200);

    }
    public function ChangStatus(Request $request){
        $Count = 0;
        foreach ($request->ReligionData as $id){
            $ReligionData = Religion::find($id);
            $ReligionData ->status = $request->status;
            $ReligionData ->update();
            $Count++;
        }
        $success = $Count > 0;
        return response()->json(['success' => $success,'TotalCount'=> $Count],200);

    }
    public function Delete($id){
        Religion::find($id)->delete();
    }
}
