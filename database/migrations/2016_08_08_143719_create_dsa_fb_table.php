<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDsaFbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dsa_fb', function (Blueprint $table) {
            $table->increments('id');

            $table->string('commit', 40);
            $table->string('branch', 255);
            $table->string('author', 255);
            $table->string('job_url', 255);
            $table->integer('vstore_id');

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
        Schema::table('dsa_fb', function (Blueprint $table) {
            //
        });
    }
}
