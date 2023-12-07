<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;



class SigninController extends BaseController
{

    protected $helpers = ['form'];
     public function index()
    {
       return view('signin');
    }
    public function login(){
        $session = session();
       $userModel = new UserModel();
       $email = $this->request->getVar('email');
       $password = $this->request->getVar('password');
       $formpass = $this->request->getVar('password');

     // $formpass= password_hash($formpass, PASSWORD_DEFAULT);

       $data = $userModel->where('email',$email)->first();

       if($data){
       $dbpass = $data['password'];
       $varified = password_verify($formpass,$dbpass);
                if($varified){
                        $userData =[
                            "name" => $data['name'],
                            "email" => $data['email'],
                            'isLoggedIn' => TRUE
                        ];
                        $session->set($userData);
                         return redirect()->to("/");
                }else{
                    $session->setFlashdata('msg','Your Password is incorrect');
                    return view('/signin');
                }

    }else{
        $session->setFlashdata('msg','Your Email is incorrect');
        return view('/signin');
    }
  
    
  }

  public function logout(){
    session()->destroy();
    return redirect()->to('signin');

  }
}
