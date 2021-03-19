<?php

namespace App\Http\Controllers;
use App\Models\userModel;
use App\Models\product;


use Illuminate\Http\Request;

class projectController extends Controller
{
    //
    public function signIn(Request $request){
        $data=$this->validate(request(),[
           'name'=>"required|min:3|max:30",
           'email'=>"required|min:3|max:30",
           'password'=>"required|min:5|max:30",
           'address'=>"required",
           'city'=>"required",
        ]);
        $op= userModel::create($data);
        if($op){
            echo "data inserted";
        }else{
            echo "data inserted error";
        }
    }

    public function display(){
        $data = userModel::get();
        return view('display',['data'=>$data]);
    }

    public function login(){
        return view("login");
    }
/////////////////Product Code////////////////////

public function addProduct(Request $request){
    $data=$this->validate(request(),[
        'product'=>"required|min:5|max:15",
        'details'=>"required|min:10"
    ]);
    $op= product::create($data);
    if($op){
        echo "data inserted";
    }else{
        echo "data inserted error";
    }
 }
    public function displayProduct(){
        $data = product::get();
        return view('displayProduct',['data'=>$data]);
    }

    public function deletItem($id){
        $op=product::where('id',$id)->delete();
        if($op){
           return back();
       }else{
           echo "error";
       }
    }

    public function showProduct($id){
        $data = product::find($id);
        return view('edit',['data'=>$data]);

    }


    public function editProduct(Request $request){
        $data =   $this->validate(request(),
        [
           'product' => 'required|min:5|max:50', 
           'details' => 'required'
        ]
     );
        $op = product::where('id',$request->id)->update(['product' => $request->product , 'details' => $request->details]);
       if($op){
        return  redirect(url('/displayProduct'));
       }else{
          echo 'error in delete';
       }
      }

}
