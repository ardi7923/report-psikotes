<?php

namespace App\Http\Requests;

use Validator;
use Illuminate\Validation\Rule;

class UserSchoolRequest
{

// Validation ========================================

    public static function validation($request,$method,$id_old = ""){

    	if($method == "store")
    	{
            $username        = ['required','unique:users'];
            $password        = ['required','min:6'];
            $repeat_password = ['required','same:password'];
    	}else{
            $username        =  ['required', Rule::unique('users')->ignore($id_old,'username')];
            $password        = ($request->password) ? ['required','min:6'] : '';
            $repeat_password = ($request->password) ?['required','same:password'] : '';
    	}

        $validator = Validator::make($request->all(), [
            
            'username'        => $username,
            'name'            => ['required'],
            'password'        => $password, 
            'repeat_password' => $repeat_password,
            'school_id'       => ['required']


        ]);

        return $validator;

    }

//===========================================
}