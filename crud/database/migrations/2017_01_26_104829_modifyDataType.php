<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyDataType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            //$table->increments('id');
            $table->string('name', 40)->change();
            $table->string('Gender', 6)->change();
            $table->string('Department', 20)->change();
            $table->string('Sports', 40)->change();
            $table->string('Colors', 40)->change();
            $table->integer('Physics', 3)->change();
            $table->integer('Chemistry', 3)->change();
            $table->integer('Maths', 3)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       // $table->increments('id');
        $table->string('name')->change();
        $table->string('Gender')->change();
        $table->string('Department')->change();
        $table->string('Sports')->change();
        $table->string('Colors')->change();
        $table->integer('Physics')->change();
        $table->integer('Chemistry')->change();
        $table->integer('Maths')->change();
    }
}
