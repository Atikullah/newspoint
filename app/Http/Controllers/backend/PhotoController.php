<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string|min:2|max:50|unique:photos',
            'status' => 'required',
        ]);

        $add_Photo = new Photo();
        $add_Photo->name = $request->input('name');
        $add_Photo->status = $request->input('status');
        $add_Photo->save();
    }

    public function Index(){

        $Get_Photo =Photo::all();
        return response()->json(['Get_Photo' => $Get_Photo],200);

    }

    public function View($name){
        $showPhoto =Photo::where('name',$name)->first();
        return response()->json(['showPhoto' => $showPhoto],200);

    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|min:4|max:50|',
            'status' => 'required',
        ]);
        $update_Photo = Photo::find($request->id);

        $update_Photo -> name   = $request->input('name');
        $update_Photo -> status = $request->input('status');
        if ($update_Photo ->save()){
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
        foreach ($request->PhotoData as $id){
            $SelectedPhotoData  = Photo::find($id);
            $SelectedPhotoData  ->delete();
            $DeleteCount++;
        }
        //$DeleteCount > 0 ?  $success = true :  $success = false; //same
        $success = $DeleteCount > 0 ? true : false;

        return response()->json(['success' => $success,'TotalDelete'=> $DeleteCount],200);

    }

    public function ChangStatus(Request $request){
        $Count = 0;
        foreach ($request->PhotoData as $id){
            $PhotoData = Photo::find($id);
            $PhotoData ->status = $request->status;
            $PhotoData ->update();
            $Count++;
        }
        $success = $Count > 0;
        return response()->json(['success' => $success,'TotalCount'=> $Count],200);

    }

    public function Delete($id){
        Photo::find($id)->delete();
    }
}
