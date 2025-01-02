<?php

namespace App\Http\Controllers;
use App\Models\Register;
use App\Models\Studentsresult;
use Illuminate\Http\Request;

class Reg_Controller extends Controller
{
  public function Registerdata(Request $request){
    $search = $request['search'] ??  "";
    if($search != "")
     {
        $Reg_data = Register::where("fname", "LIKE", "%$search%")->orwhere("Email", "LIKE", "%$search%") ->get();
    } else {
        // using pagination method
        $Reg_data = Register::paginate(5);

    }

    return view('Registerdata',compact('Reg_data' , 'search'));
  }
             public  function Studentsdata(){
                       $stu_data = Studentsresult::all();
                       return view ('Stu_table' , compact('stu_data'));
             }

             public  function Stu_trash(){
                $stu_data = Studentsresult::onlyTrashed()->get();
                return view ('Stu_trash' , compact('stu_data'));
                }
                // add data in trash folder
                public  function Trash($id){
                    $stu_data = Studentsresult::withTrashed()->find($id);
                    if(!is_null($stu_data)) {
                        $stu_data->restore();
                    }
                    return redirect('/Student');
                   }
            //   permenite delete fuction when data in trash folder
                   function forcedelete($id){
                      $stu_data= Studentsresult::withTrashed()->find($id);
                      if(!is_null($stu_data))
                      {
                        $stu_data->forceDelete();
                      }
                      return redirect('/Student');
                   }
            //   permenite delete fuction
               function Delete($id){
                Studentsresult::destroy($id);
                 return back();
         }
        //  data insert Fuction
     public function Insert(Request $request)  {
           $Register = new Register();
           $Register->fname = $request['fname'];
           $Register->lname = $request['lname'];
           $Register->Email = $request['Email'];
           $Register->City = $request['City'];
           $Register->password = $request['password'];
           $Register->Conf_pass = $request['Conf_pass'];
           $Register->save();
           return redirect('/')->withInput();
     }

     public function login(Request $request){
         $User = $request->validate([
            'Email' => 'ruquired|Email',
            'password'=>'ruquired',
         ]);

     }
    //   Uploading Image Fuction
           public function file(Request   $request){
            $filename = $request->file('file')->getClientOriginalName();
            $request->file('file')->storeAs('public/uploads', $filename);
            return view('image');
            }
           }


