<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('phone');
            $table->enum('status', ['الانتظار', 'الرئيسية'])->after('email');
            $table->unsignedFloat('weight');
            $table->unsignedFloat('height');
            $table->unsignedFloat('sugar_level');
            $table->date('DOB');
            $table->string('country');
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
        Schema::dropIfExists('patients');
    }
}
