<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hotels', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('type');
            $table->string('typedesc');
            $table->string('name');
            $table->longText('shortdesc');
            $table->integer('rating');
			$table->string('status');
            $table->boolean('available');
			$table->string('url');
            $table->string('image1');
			$table->longText('Gallery');
            $table->integer('responsehours');
			$table->longText('destinations');
            $table->string('tradingcurrency');
			$table->float('minpps');
			$table->float('maxpps');
            $table->integer('minunit');
			$table->integer('maxunit');
            $table->string('longitude');
			$table->string('latitude');
            $table->integer('smileyRating');
			$table->string('minsingle');
			$table->boolean('booknow');
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
		Schema::drop('hotels');
	}

}
