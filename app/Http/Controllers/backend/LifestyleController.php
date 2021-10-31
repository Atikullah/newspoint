<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Lifestyle;
use Illuminate\Http\Request;
        //Lifestyle lifestyle
class LifestyleController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string|min:2|max:50|unique:lifestyles',
            'status' => 'required',
        ]);

        $add_Lifestyle = new Lifestyle();
        $add_Lifestyle->name = $request->input('name');
        $add_Lifestyle->status = $request->input('status');
        $add_Lifestyle->save();
    }
    public function Index(){

        $Get_Lifestyle =Lifestyle::all();
        return response()->json(['Get_Lifestyle' => $Get_Lifestyle],200);

    }
    public function View($name){
        $showlifestyle =Lifestyle::where('name',$name)->first();
        return response()->json(['showlifestyle' => $showlifestyle],200);

    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|min:4|max:50|',
            'status' => 'required',
        ]);
        $update_Lifestyle = Lifestyle::find($request->id);

        $update_Lifestyle -> name   = $request->input('name');
        $update_Lifestyle -> status = $request->input('status');
        if ($update_Lifestyle ->save()){
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
        foreach ($request->LifestyleData as $id){
            $SelectedLifestyleData  = Lifestyle::find($id);
            $SelectedLifestyleData  ->delete();
            $DeleteCount++;
        }
        //$DeleteCount > 0 ?  $success = true :  $success = false; //same
        $success = $DeleteCount > 0 ? true : false;

        return response()->json(['success' => $success,'TotalDelete'=> $DeleteCount],200);

    }
    public function ChangStatus(Request $request){
        $Count = 0;
        foreach ($request->LifestyleData as $id){
            $LifestyleData = Lifestyle::find($id);
            $LifestyleData ->status = $request->status;
            $LifestyleData ->update();
            $Count++;
        }
        $success = $Count > 0;
        return response()->json(['success' => $success,'TotalCount'=> $Count],200);

    }
    public function Delete($id){
        Lifestyle::find($id)->delete();
    }
}
