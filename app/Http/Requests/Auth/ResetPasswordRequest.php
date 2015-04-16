<?php
/**
 * Created by PhpStorm.
 * User: oner
 * Date: 12.4.2015
 * Time: 17:55
 */

namespace App\Http\Requests\Auth;

use App\Http\Requests\Request;

class ResetPasswordRequest extends Request {

    public function authorize()
    {
        return true;
    }



    public function rules () {

        return [

            'email'=>'required',
            'token'=>'required',
            'password'=>'required'

        ];
    }

}