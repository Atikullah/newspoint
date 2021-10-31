<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Subdistrict;
use Illuminate\Http\Request;

class SubdistrictController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string|min:2|max:50|unique:subdistricts',
            'status' => 'required',
        ]);

        $add_Subdistrict = new Subdistrict();
        $add_Subdistrict->name = $request->input('name');
        $add_Subdistrict->status = $request->input('status');
        $add_Subdistrict->save();
    }
    public function Index(){

        $Get_Subdistrict =Subdistrict::all();
        return response()->json(['Get_Subdistrict' => $Get_Subdistrict],200);

    }

    public function View($name){
        $showsubdistrict =Subdistrict::where('name',$name)->first();
        return response()->json(['showsubdistrict' => $showsubdistrict],200);

    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|min:4|max:50|',
            'status' => 'required',
        ]);
        $update_Subdistrict = Subdistrict::find($request->id);

        $update_Subdistrict -> name   = $request->input('name');
        $update_Subdistrict -> status = $request->input('status');
        if ($update_Subdistrict ->save()){
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
        foreach ($request->SubdistrictData as $id){
            $SelectedSubdistrictData  = Subdistrict::find($id);
            $SelectedSubdistrictData  ->delete();
            $DeleteCount++;
        }
        //$DeleteCount > 0 ?  $success = true :  $success = false; //same
        $success = $DeleteCount > 0 ? true : false;

        return response()->json(['success' => $success,'TotalDelete'=> $DeleteCount],200);
    }
    public function ChangStatus(Request $request){
        $Count = 0;
        foreach ($request->SubdistrictData as $id){
            $SubdistrictData = Subdistrict::find($id);
            $SubdistrictData ->status = $request->status;
            $SubdistrictData ->update();
            $Count++;
        }
        $success = $Count > 0;
        return response()->json(['success' => $success,'TotalCount'=> $Count],200);

    }
    public function Delete($id){
        Subdistrict::find($id)->delete();
    }

}
