<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTitlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('titles', function(Blueprint $table)
		{
			$table->foreign('type_title', 'fk_titles_type')->references('id')->on('type_title')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('titles', function(Blueprint $table)
		{
			$table->dropForeign('fk_titles_type');
		});
	}

}
