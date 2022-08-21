<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('titles', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 300)->nullable();
			$table->string('description', 1000)->nullable();
			$table->year('creation_year')->nullable();
			$table->integer('type_title')->nullable()->index('fk_titles_type');
			$table->string('url_image', 500)->nullable();
			$table->string('url_image2', 500)->nullable();
			$table->string('url_image3', 500)->nullable();
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
		Schema::drop('titles');
	}

}
