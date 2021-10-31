<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string|min:2|max:50|unique:education',
            'status' => 'required',
        ]);

        $add_Education = new Education();
        $add_Education->name = $request->input('name');
        $add_Education->status = $request->input('status');
        $add_Education->save();
    }
    public function Index(){

        $Get_Education =Education::all();
        return response()->json(['Get_Education' => $Get_Education],200);

    }
    public function View($name){
        $showEducation =Education::where('name',$name)->first();
        return response()->json(['showEducation' => $showEducation],200);

    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|min:4|max:50|',
            'status' => 'required',
        ]);
        $update_Education = Education::find($request->id);

        $update_Education -> name   = $request->input('name');
        $update_Education -> status = $request->input('status');
        if ($update_Education ->save()){
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
        foreach ($request->EducationData as $id){
            $SelectedEducationData  = Education::find($id);
            $SelectedEducationData  ->delete();
            $DeleteCount++;
        }
        //$DeleteCount > 0 ?  $success = true :  $success = false; //same
        $success = $DeleteCount > 0 ? true : false;

        return response()->json(['success' => $success,'TotalDelete'=> $DeleteCount],200);

    }
    public function ChangStatus(Request $request){
        $Count = 0;
        foreach ($request->EducationData as $id){
            $EducationData = Education::find($id);
            $EducationData ->status = $request->status;
            $EducationData ->update();
            $Count++;
        }
        $success = $Count > 0;
        return response()->json(['success' => $success,'TotalCount'=> $Count],200);

    }
    public function Delete($id){
        Education::find($id)->delete();
    }
}
