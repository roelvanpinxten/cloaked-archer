<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeSubscriptionsIntToDecimal extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
    {
        DB::statement('ALTER TABLE subscriptions MODIFY COLUMN connection_fee DECIMAL(5,2)');
        DB::statement('ALTER TABLE subscriptions MODIFY COLUMN month_price_total DECIMAL(5,2)');
        DB::statement('ALTER TABLE subscriptions MODIFY COLUMN month_price_action DECIMAL(5,2)');
        DB::statement('ALTER TABLE subscriptions MODIFY COLUMN month_price_handset DECIMAL(5,2)');
        DB::statement('ALTER TABLE subscriptions MODIFY COLUMN month_price_subscription DECIMAL(5,2)');
        DB::statement('ALTER TABLE subscriptions MODIFY COLUMN handset_price_without_subscription DECIMAL(5,2)');
        DB::statement('ALTER TABLE subscriptions MODIFY COLUMN handset_price_with_subscription DECIMAL(5,2)');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        DB::statement('ALTER TABLE subscriptions MODIFY COLUMN connection_fee INTEGER (11)');
        DB::statement('ALTER TABLE subscriptions MODIFY COLUMN connection_fee INTEGER (11)');
        DB::statement('ALTER TABLE subscriptions MODIFY COLUMN month_price_total INTEGER (11)');
        DB::statement('ALTER TABLE subscriptions MODIFY COLUMN month_price_action INTEGER (11)');
        DB::statement('ALTER TABLE subscriptions MODIFY COLUMN month_price_handset INTEGER (11)');
        DB::statement('ALTER TABLE subscriptions MODIFY COLUMN month_price_subscription INTEGER (11)');
        DB::statement('ALTER TABLE subscriptions MODIFY COLUMN handset_price_without_subscription INTEGER (11)');
        DB::statement('ALTER TABLE subscriptions MODIFY COLUMN handset_price_with_subscription INTEGER (11)');
	}

}
