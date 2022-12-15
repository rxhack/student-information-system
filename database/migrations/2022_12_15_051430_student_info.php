<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentInfo', function (Blueprint $table) {
            $table->id();
            $table->string('studentFName',100);
            $table->string('studentLName',100);
            $table->string('studentEmailId',100)->nullable()->unique();
            $table->string('studentContactNo',100)->unique();
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
        Schema::dropIfExists('studentInfo');
    }
};
