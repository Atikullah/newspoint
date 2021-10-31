<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string|min:2|max:50|unique:features',
            'status' => 'required',
        ]);

        $add_Feature = new Feature();
        $add_Feature->name = $request->input('name');
        $add_Feature->status = $request->input('status');
        $add_Feature->save();
    }

    public function Index(){

        $Get_Feature = Feature::all();
        return response()->json(['Get_Feature' => $Get_Feature],200);

    }

    public function View($name){
        $showFeature = Feature::where('name',$name)->first();
        return response()->json(['showFeature' => $showFeature],200);

    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|min:4|max:50|',
            'status' => 'required',
        ]);
        $update_Feature = Feature::find($request->id);

        $update_Feature -> name   = $request->input('name');
        $update_Feature -> status = $request->input('status');
        if ($update_Feature ->save()){
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
        foreach ($request->FeatureData as $id){
            $SelectedFeatureData  = Feature::find($id);
            $SelectedFeatureData  ->delete();
            $DeleteCount++;
        }
        //$DeleteCount > 0 ?  $success = true :  $success = false; //same
        $success = $DeleteCount > 0 ? true : false;

        return response()->json(['success' => $success,'TotalDelete'=> $DeleteCount],200);

    }

    public function ChangStatus(Request $request){
        $Count = 0;
        foreach ($request->FeatureData as $id){
            $FeatureData = Feature::find($id);
            $FeatureData ->status = $request->status;
            $FeatureData ->update();
            $Count++;
        }
        $success = $Count > 0;
        return response()->json(['success' => $success,'TotalCount'=> $Count],200);

    }

    public function Delete($id){
        Feature::find($id)->delete();
    }


}
