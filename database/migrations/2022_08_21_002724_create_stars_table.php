<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stars', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('star_number')->nullable();
			$table->integer('user_id')->nullable()->index('fk_stars_user_id');
			$table->integer('title_id')->nullable()->index('title_id');
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('stars');
	}

}
