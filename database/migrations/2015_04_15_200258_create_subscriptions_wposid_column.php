<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionsWposidColumn extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('subscriptions', function(Blueprint $table)
        {
            $table->integer('wposid');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('subscriptions', function(Blueprint $table)
        {
            $table->dropColumn('wposid');
        });
	}

}
