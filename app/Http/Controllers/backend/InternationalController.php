<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\International;
use Illuminate\Http\Request;

class InternationalController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string|min:2|max:50|unique:internationals',
            'status' => 'required',
        ]);

        $add_country = new International();
        $add_country->name = $request->input('name');
        $add_country->status = $request->input('status');
        $add_country->save();
    }
    public function Index(){

        $get_country =International::all();
        return response()->json([
            'get_country' => $get_country
        ],200);

    }


    public function View($name){
        $showinter = International::where('name',$name)->first();


        return response()->json(['showinter' => $showinter],200);

    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|min:4|max:50|',
            'status' => 'required',
        ]);
        $update_international = International::find($request->id);

        $update_international -> name   = $request->input('name');
        $update_international -> status = $request->input('status');
        if ($update_international ->save()){
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
        foreach ($request->InternationalData as $id){
            $SelectedInternationalData  = International::find($id);
            $SelectedInternationalData  ->delete();
            $DeleteCount++;
        }
        //$DeleteCount > 0 ?  $success = true :  $success = false; //same
        $success = $DeleteCount > 0 ? true : false;

        return response()->json(['success' => $success,'TotalDelete'=> $DeleteCount],200);

    }
    public function ChangStatus(Request $request){
        $Count = 0;
        foreach ($request->InternationalData as $id){
            $InternationalData = International::find($id);
            $InternationalData ->status = $request->status;
            $InternationalData ->update();
            $Count++;
        }
        $success = $Count > 0;
        return response()->json(['success' => $success,'TotalCount'=> $Count],200);

    }

    public function Delete($id){
        International::find($id)->delete();
    }

}
