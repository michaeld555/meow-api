<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetricsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('metrics', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('type_action')->nullable()->index('fk_metrics_action_id');
			$table->integer('user_id')->nullable()->index('fk_user_id');
			$table->integer('title_id')->nullable()->index('fk_title_id');
			$table->integer('episode_id')->nullable()->index('fk_episode_id');
			$table->dateTime('created_at')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('metrics');
	}

}
