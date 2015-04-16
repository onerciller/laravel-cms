<?php
/**
 * Created by PhpStorm.
 * User: oner
 * Date: 12.4.2015
 * Time: 17:23
 */

namespace App\Repositories;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository {

  protected $model;



    public function destroy ($id) {

      $this->find($id)->delete();
    }

    
    public function find($id) {

        return $this->model->findOrFail($id);
    
    }



}