<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('articles', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('provider_name');
            $table->string('article_name');
            $table->string('subscription');
            $table->string('subscription_type');
            $table->integer('binding');
            $table->decimal('commission',8,2);
            $table->decimal('month_price',8,2);
            $table->decimal('month_price_action',8,2)->nullable();
            $table->integer('BAS_item_number');
            $table->timestamp('valid_until');
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
        Schema::drop('articles');
    }
}