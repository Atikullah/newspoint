<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Reporter;
use App\Models\Subdistrict;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use app\User;

use Image;


class ReporterController extends Controller
{
    public function store(Request $request){



//        $image = strpos($request->image,';');
//        $img = substr($request->image,0, $image );     // find the image extension code 2nd way
//        $file = explode('/',$img);
//        echo end($file);
//        exit();

        $this->validate($request, [
            'name' => 'required|string|min:2|max:50',
            'designation' => 'required|string|min:2|max:50',
            'district_id' => 'required',
            'subdistrict_id' => 'required',
            'gender' => 'required',
            'email' => 'required|email|max:255|unique:reporters',
            'password' => 'required|string|max:50|min:6',
            'confirm_password' => 'required|same:password',
            'contact' => 'required|digits_between:0,15|unique:reporters',
            'fb' => 'required|unique:reporters',
//            'skype' => 'unique:reporters',
//            'instagram' => 'unique:reporters',
//            'linkedin' => 'unique:reporters',
            'image' => 'required',
            'status' => 'required',
        ]);

//        $image = request()->file('image');
//        $imageName = $image->getClientOriginalName();
//        $imageName = time().'_'.$imageName;
//        $image->move(public_path('images/reporters/'),$imageName);




//        $fileimage =  explode(';' ,$request->image) ;  // find the image extension code 1nd way
//        $file = explode('/',$fileimage[0]);
//
//        $imageName =  ($request->input('name'));
//        $fileExtension =  end($file);
//        $filename  =  $imageName.'.'.$fileExtension;

//        $success = Reporter::created([
//            'user_id'  => Auth()->user()->id,
//            'name'  => $request->name,
//            'designation'  => $request->designation,
//            'district_id'  => $request->district_id,
//            'subdistrict_id'  => $request->subdistrict_id,
//            'gender'  => $request->gender,
//            'email'  => $request->email,
//            'password'  => Hash::make($request->email),
//            'contact'  => $request->contact,
//            'fb'  => $request->fb,
//            'skype'  => $request->skype,
//            'instagram'  => $request->instagram,
//            'linkedin'  => $request->linkedin,
//            'address'  => $request->address,
//            'about'  => $request->about,
//            'achievement'  => $request->achievement,
//            'image'      =>  $imageName.'.'.$fileExtension,
//            'status'  => $request->status,
//
//        ]);
//         if($success){
//            Image::make($request->image)->resize(400, 200)->save(public_path('images/reporters/'). $filename);
//         }
//         return response()->json(['success' => $success],200);


//        $image = request()->file('image');
//        $img_gen = hexdec(uniqid()).'.'.$image->getClientOriginalName();
//
//        $imagename =  'images/reporters/'.$img_gen;



        $fileimage =  explode(';' ,$request->image) ;  // find the image extension code 1nd way
        $file = explode('/',$fileimage[0]);
        $fileExtension =  end($file);
        $imageName = time().'.'.$fileExtension;
        $img = Image::make($request->image)->resize(400, 200)->save(public_path('images/reporters/').$imageName);


//        $upload_path = public_path('images/reporters/');
//        $img->save($upload_path.$imageName);
//        $fileExtension =  end($file);
//        $filename  =  $imageName.'.'.$fileExtension;



        $add_Reporter = new Reporter();
        $add_Reporter->user_id = Auth()->user()->id;
        $add_Reporter->name = $request->input('name');
        $add_Reporter->designation = $request->input('designation');
        $add_Reporter->district_id = $request->input('district_id');
        $add_Reporter->subdistrict_id = $request->input('subdistrict_id');
        $add_Reporter->gender = $request->input('gender');
        $add_Reporter->email = $request->input('email');
        $add_Reporter->password = Hash::make($request->input('password'));
        $add_Reporter->contact = $request->input('contact');
        $add_Reporter->fb = $request->input('fb');
        $add_Reporter->skype = $request->input('skype');
        $add_Reporter->instagram = $request->input('instagram');
        $add_Reporter->linkedin = $request->input('linkedin');
        $add_Reporter->address = $request->input('address');
        $add_Reporter->about = $request->input('about');
        $add_Reporter->achievement = $request->input('achievement');
       // $add_Reporter->image = $request->input( $imageName.'.'.$fileExtension);
        //$add_Reporter->image = 'images/reporters/'.$imageName;
        $add_Reporter->image = $imageName;
        $add_Reporter->status = $request->input('status');
        $add_Reporter->save();

       // Image::make($request->image)->resize(400, 200)->save(public_path('images/reporters/'). $img_gen);


//        if($add_Reporter){
//             Image::make($request->image)->resize(400, 200)->save(public_path('images/reporters/').$filename);
//         }

       // return response()->json(['add_Reporter' => $add_Reporter],200);

   }







    public function Index(){
        $Get_Reporter = Reporter::with('district','subdistrict','user')->orderByDesc('id')->get();
        return response()->json(['Get_Reporter' => $Get_Reporter],200);

    }
    public function ActiveDistrict(){

        $GetActiveDistrict =District::where('status',1)->get();
        return response()->json(['GetActiveDistrict' => $GetActiveDistrict],200);

    }
    public function ActiveSubdistrict(){

        $Get_ActiveSubdistrict =Subdistrict::where('status',1)->get();
        return response()->json(['Get_ActiveSubdistrict' => $Get_ActiveSubdistrict],200);

    }

    public function View($name){
        $showReporter = Reporter::where('name',$name)->first();
        return response()->json(['showReporter' => $showReporter],200);

    }
    public function update(Request $request){

        $this->validate($request, [
            'name' => 'required|string|min:2|max:50',
            'designation' => 'required|string|min:2|max:50',
            'district_id' => 'required',
            'subdistrict_id' => 'required',
            'gender' => 'required',
            'email' => 'required|email|max:255',
            'contact' => 'required|digits_between:0,15',
            'fb' => 'required',
//            'skype' => 'unique:reporters',
//            'instagram' => 'unique:reporters',
//            'linkedin' => 'unique:reporters',
            'image' => 'required',
            'status' => 'required',
        ]);

        $update_Reporter = Reporter::find($request->id);
        $update_Reporter->name = $request->input('name');
        $update_Reporter->designation = $request->input('designation');
        $update_Reporter->district_id = $request->input('district_id');
        $update_Reporter->subdistrict_id = $request->input('subdistrict_id');
        $update_Reporter->gender = $request->input('gender');
        $update_Reporter->email = $request->input('email');
        $update_Reporter->contact = $request->input('contact');
        $update_Reporter->fb = $request->input('fb');
        $update_Reporter->skype = $request->input('skype');
        $update_Reporter->instagram = $request->input('instagram');
        $update_Reporter->linkedin = $request->input('linkedin');
        $update_Reporter->address = $request->input('address');
        $update_Reporter->about = $request->input('about');
        $update_Reporter->achievement = $request->input('achievement');


        if($request->image != $update_Reporter->image){
            $fileimage =  explode(';' ,$request->image) ;  // find the image extension code 1nd way
            $file = explode('/',$fileimage[0]);
            $fileExtension =  end($file);
            $imageName = time().'.'.$fileExtension;
            $img = Image::make($request->image)->resize(400, 200)->save(public_path('images/reporters/').$imageName);

            if (file_exists(public_path('images/reporters/'.$update_Reporter->image))){
                unlink(public_path('images/reporters/'.$update_Reporter->image));
            }
            $update_Reporter->image = $imageName;
        }

        $update_Reporter->status = $request->input('status');

        if ($update_Reporter ->save()){
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
        foreach ($request->ReporterData as $id){
            $SelectedReporterData  = Reporter::find($id);
            $fileName = $SelectedReporterData->image;
            //$SelectedReporterData  ->delete();
            if($SelectedReporterData->delete()){
                if (file_exists(public_path('images/reporters/'.$fileName))){
                    unlink(public_path('images/reporters/'.$fileName));
                }
                $success = true;
            }else{
                $success = false;
            }

            $DeleteCount++;
        }
        //$DeleteCount > 0 ?  $success = true :  $success = false; //same
        $success = $DeleteCount > 0 ? true : false;

        return response()->json(['success' => $success,'TotalDelete'=> $DeleteCount],200);

    }

    public function ChangStatus(Request $request){
        $Count = 0;
        foreach ($request->ReporterData as $id){
            $ReporterData = Reporter::find($id);
            $ReporterData ->status = $request->status;
            $ReporterData ->update();
            $Count++;
        }
        $success = $Count > 0;
        return response()->json(['success' => $success,'TotalCount'=> $Count],200);

    }
    public function Delete($id){

        $Delete = Reporter::where('id',$id)->first();
        $fileName = $Delete->image;
        if($Delete->delete()){
               if (file_exists(public_path('images/reporters/'.$fileName))){
                   unlink(public_path('images/reporters/'.$fileName));
               }
               $success = true;
        }else{
            $success = false;
        }
        return response()->json(['success' => $success],200);

    }
}
