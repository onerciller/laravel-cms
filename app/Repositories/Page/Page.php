<?php namespace App\Repositories\Page;

use Illuminate\Database\Eloquent\Model;


class Page extends Model  {



	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'page';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['title','id', 'post', 'user_id','category_id','meta_keywords','meta_descriptions'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

   public function user () {

	   return $this->belongsTo('App\Repositories\User\User');

   }



}
