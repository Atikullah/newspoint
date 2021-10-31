<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Sports;
use Illuminate\Http\Request;

// Sports    sports
class SportsController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string|min:2|max:50|unique:sports',
            'status' => 'required',
        ]);

        $add_Sports = new Sports();
        $add_Sports->name = $request->input('name');
        $add_Sports->status = $request->input('status');
        $add_Sports->save();
    }
    public function Index(){

        $Get_Sports =Sports::all();
        return response()->json(['Get_Sports' => $Get_Sports],200);

    }
    public function View($name){
        $showsports =Sports::where('name',$name)->first();
        return response()->json(['showsports' => $showsports],200);

    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|min:4|max:50|',
            'status' => 'required',
        ]);
        $update_Sports = Sports::find($request->id);

        $update_Sports -> name   = $request->input('name');
        $update_Sports -> status = $request->input('status');
        if ($update_Sports ->save()){
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
        foreach ($request->SportsData as $id){
            $SelectedSportsData  = Sports::find($id);
            $SelectedSportsData  ->delete();
            $DeleteCount++;
        }
        //$DeleteCount > 0 ?  $success = true :  $success = false; //same
        $success = $DeleteCount > 0 ? true : false;

        return response()->json(['success' => $success,'TotalDelete'=> $DeleteCount],200);

    }
    public function ChangStatus(Request $request){
        $Count = 0;
        foreach ($request->SportsData as $id){
            $SportsData = Sports::find($id);
            $SportsData ->status = $request->status;
            $SportsData ->update();
            $Count++;
        }
        $success = $Count > 0;
        return response()->json(['success' => $success,'TotalCount'=> $Count],200);

    }
    public function Delete($id){
        Sports::find($id)->delete();
    }

}
