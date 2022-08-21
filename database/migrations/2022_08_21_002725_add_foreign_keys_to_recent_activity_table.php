<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRecentActivityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('recent_activity', function(Blueprint $table)
		{
			$table->foreign('title_id', 'fk_recent_title_id')->references('id')->on('titles')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('recent_activity', function(Blueprint $table)
		{
			$table->dropForeign('fk_recent_title_id');
		});
	}

}
