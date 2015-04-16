<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gallery', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('file_name', 255);
			$table->string('title', 255);
			$table->text('description');
			$table->string('path', 255);
			$table->integer('file_size');
			$table->string('type', 20);
			$table->integer('relationship_id')->unsigned();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gallery');
	}

}
