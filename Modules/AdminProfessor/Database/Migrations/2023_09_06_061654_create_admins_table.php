<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('type')->default('admin');
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('gender',['male','female','other'])->default('male');
            $table->date('dob')->nullable();
            $table->text('aboutMe')->nullable();
            $table->bigInteger('country_id')->nullable();
            $table->bigInteger('state_id')->nullable();
            $table->bigInteger('city_id')->nullable();
            $table->text('address')->nullable();
            $table->string('postalCode')->nullable();
            $table->string('phone')->nullable();
            $table->enum('status',['active','inactive'])->default('inactive');
            $table->string('imageName')->nullable();
            $table->string('imagePath')->nullable();
            $table->dateTime('lastSeen')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('admins');
    }
};
