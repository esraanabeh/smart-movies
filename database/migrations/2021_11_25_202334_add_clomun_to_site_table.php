<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClomunToSiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('site', function (Blueprint $table) {
            //
            $table->text('phone1');
            $table->text('phone2');
            $table->text('phone3');
            $table->text('phone4');
            $table->text('hotline');
            $table->text('image');
            $table->text('twitter_image');
            $table->text('ar_touch');
            $table->text('en_touch');
            $table->text('ar_cons');
            $table->text('en_cons');
            $table->text('ar_help');
            $table->text('en_help');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('site', function (Blueprint $table) {
            //
        });
    }
}
