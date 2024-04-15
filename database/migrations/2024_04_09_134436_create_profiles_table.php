<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('fullname');
            $table->string('photo')->nullable();
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->string('postal_code');
            $table->string('profession');
            $table->string('organization');
            $table->string('website');
            $table->longText('summary');
            $table->longText('education');
            $table->longText('work_history');
            $table->string('service_category');
            $table->string('service_description');
            $table->integer('hourly_rate');
            $table->integer('package_prices');
            $table->string('working_hours');
            $table->date('appointment_booking');
            $table->string('specializations');
            $table->string('languages');
            $table->string('certifications');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
