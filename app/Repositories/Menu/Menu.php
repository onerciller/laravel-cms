<?php
namespace App\Repositories\Menu;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model {



	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'menu';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['title','url'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */




}
