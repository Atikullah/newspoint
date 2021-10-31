<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string|min:2|max:50|unique:videos',
            'status' => 'required',
        ]);

        $add_Video = new Video();
        $add_Video->name = $request->input('name');
        $add_Video->status = $request->input('status');
        $add_Video->save();
    }

    public function Index(){

        $Get_Video = Video::all();
        return response()->json(['Get_Video' => $Get_Video],200);

    }

    public function View($name){
        $showVideo = Video::where('name',$name)->first();
        return response()->json(['showVideo' => $showVideo],200);

    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|min:4|max:50|',
            'status' => 'required',
        ]);
        $update_Video = Video::find($request->id);

        $update_Video -> name   = $request->input('name');
        $update_Video -> status = $request->input('status');
        if ($update_Video ->save()){
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
        foreach ($request->VideoData as $id){
            $SelectedVideoData  = Video::find($id);
            $SelectedVideoData  ->delete();
            $DeleteCount++;
        }
        //$DeleteCount > 0 ?  $success = true :  $success = false; //same
        $success = $DeleteCount > 0 ? true : false;

        return response()->json(['success' => $success,'TotalDelete'=> $DeleteCount],200);

    }

    public function ChangStatus(Request $request){
        $Count = 0;
        foreach ($request->VideoData as $id){
            $VideoData = Video::find($id);
            $VideoData ->status = $request->status;
            $VideoData ->update();
            $Count++;
        }
        $success = $Count > 0;
        return response()->json(['success' => $success,'TotalCount'=> $Count],200);

    }

    public function Delete($id){
        Video::find($id)->delete();
    }



}
