<?php
/**
 * Created by PhpStorm.
 * User: oner
 * Date: 12.4.2015
 * Time: 17:51
 */

namespace App\Http\Requests\Auth;

use App\Http\Requests\Request;

class LoginRequest extends  Request{


    public function authorize()
    {
        return true;
    }


    public function rules () {

        return [

             "username"=>"required",
             "password"=>"required"
        ];

    }

}