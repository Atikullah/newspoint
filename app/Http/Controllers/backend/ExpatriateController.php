<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Expatriate;
use Illuminate\Http\Request;

class ExpatriateController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string|min:2|max:50|unique:expatriates',
            'status' => 'required',
        ]);

        $add_Expatriate = new Expatriate();
        $add_Expatriate->name = $request->input('name');
        $add_Expatriate->status = $request->input('status');
        $add_Expatriate->save();
    }
    public function Index(){

        $Get_Expatriate =Expatriate::all();
        return response()->json(['Get_Expatriate' => $Get_Expatriate],200);

    }
    public function View($name){
        $showExpatriate =Expatriate::where('name',$name)->first();
        return response()->json(['showExpatriate' => $showExpatriate],200);

    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|min:4|max:50|',
            'status' => 'required',
        ]);
        $update_Expatriate = Expatriate::find($request->id);

        $update_Expatriate -> name   = $request->input('name');
        $update_Expatriate -> status = $request->input('status');
        if ($update_Expatriate ->save()){
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
        foreach ($request->ExpatriateData as $id){
            $SelectedExpatriateData  = Expatriate::find($id);
            $SelectedExpatriateData  ->delete();
            $DeleteCount++;
        }
        //$DeleteCount > 0 ?  $success = true :  $success = false; //same
        $success = $DeleteCount > 0 ? true : false;

        return response()->json(['success' => $success,'TotalDelete'=> $DeleteCount],200);

    }
    public function ChangStatus(Request $request){
        $Count = 0;
        foreach ($request->ExpatriateData as $id){
            $ExpatriateData = Expatriate::find($id);
            $ExpatriateData ->status = $request->status;
            $ExpatriateData ->update();
            $Count++;
        }
        $success = $Count > 0;
        return response()->json(['success' => $success,'TotalCount'=> $Count],200);

    }
    public function Delete($id){
        Expatriate::find($id)->delete();
    }
}
