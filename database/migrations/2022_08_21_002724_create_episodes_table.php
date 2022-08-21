<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('episodes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 300)->nullable();
			$table->string('duration', 100)->nullable();
			$table->string('description', 1000)->nullable();
			$table->integer('ep_number')->nullable();
			$table->integer('title_id')->nullable()->index('fk_episode_title_id');
			$table->string('url_image', 500)->nullable();
			$table->string('url_image2', 500)->nullable();
			$table->string('video_url', 500)->nullable();
			$table->dateTime('created_at')->nullable();
			$table->dateTime('update_at')->nullable();
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
		Schema::drop('episodes');
	}

}
