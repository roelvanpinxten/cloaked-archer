<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subscriptions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
            $table->string('handset_name');
            $table->string('provider_name');
            $table->string('subscription_name');
            $table->string('subscription_duration');
            $table->string('subscription_minutes');
            $table->string('subscription_data');
            $table->integer('connection_fee');
            $table->integer('month_price_total');
            $table->integer('month_price_action');
            $table->integer('month_price_handset');
            $table->integer('month_price_subscription');
            $table->integer('handset_price_without_subscription');
            $table->integer('handset_price_with_subscription');
            $table->timestamp('valid_until');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('subscriptions');
	}

}
