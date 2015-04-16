<?php
/**
 * Created by PhpStorm.
 * User: oner
 * Date: 12.4.2015
 * Time: 17:51
 */

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PageRequest extends  Request{


    public function authorize()
    {
        return true;
    }


    public function rules () {

        return [

            "title"=>"required",
            "post"=>"required"
        ];

    }

}