<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getCategories = Categories::all();
        return response()->json(['getCategories' => $getCategories],200);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|min:4|max:50|unique:categories',
            'status' => 'required',
        ]);

        $add_categoris = new Categories();
        $add_categoris->name = $request->input('name');
        $add_categoris->status = $request->input('status');
        $add_categoris->save();

//        Categories::create([
//            'name'   => $request->name,
//            'status' => $request->status
//        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $showcategory = Categories::where('id',$id)->first();

            return response()->json(['showcategory' => $showcategory],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|min:4|max:50|',
            'status' => 'required',
        ]);
        $update_categoris = Categories::find($request->id);

        $update_categoris -> name   = $request->input('name');
        $update_categoris -> status = $request->input('status');
        if ($update_categoris ->save()){
            $success = true;
        }else{
            $success = false;
        }
        return response()->json(['success' => $success],200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Categories::find($id)->delete();
    }

    public function CatStatus($id)
    {
         ///Categories::find($id)->update(['status' => 1;
    }

    public function Remove(Request $request)
    {
        //return $request->categoriesData;
        $DeleteCount = 0;
        foreach ($request->categoriesData as $id){
           $SelectedCategoriesData  = Categories::find($id);
           $SelectedCategoriesData  ->delete();
           $DeleteCount++;
        }
        //$DeleteCount > 0 ?  $success = true :  $success = false; //same
        $success = $DeleteCount > 0 ? true : false;

        return response()->json(['success' => $success,'TotalDelete'=> $DeleteCount],200);

    }
    public function ChangStatus(Request $request){
        $Count = 0;
        foreach ($request->categoriesData as $id){
            $CategoriesData = Categories::find($id);
            $CategoriesData ->status = $request->status;
            $CategoriesData ->update();
            $Count++;
        }
        $success = $Count > 0;
        return response()->json(['success' => $success,'TotalCount'=> $Count],200);

    }

//    public  function isStatus(Request $request){
////        $status = $request->status;
//
//        if($status = 0) {
//            $status = Categories::find($status)->update(['status' => 1]);
//        }else{
//            $status = Categories::find($status)->update(['status' => 0]);
//        }
//        return response()->json(['status' => $status],200);
//
//
//
//    }





}
