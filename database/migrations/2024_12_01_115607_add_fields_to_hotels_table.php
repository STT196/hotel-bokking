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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->Integer('user_id')->nullable();
            $table->boolean('security')->default(0)->nullable();
            $table->string('deluxe_telephone')->nullable();
            $table->boolean('public_computer')->default(0)->nullable();
            $table->boolean('status')->default(0)->nullable();
            $table->decimal('luxury_room_price', 10, 2)->nullable();
            $table->string('deluxe_room_name')->nullable();
            $table->string('twitter')->nullable();
            $table->string('comfort_telephone')->nullable();
            $table->boolean('meeting_facilities')->default(0)->nullable();
            $table->boolean('comfort_ac_room')->default(0)->nullable();
            $table->boolean('luxury_outside_windows')->default(0)->nullable();
            $table->boolean('luxury_ac_room')->default(0)->nullable();
            $table->decimal('crn_price', 10, 2)->nullable();
            $table->decimal('price_from', 10, 2)->nullable();
            $table->boolean('sunset_boat_trip')->default(0)->nullable();
            $table->string('crn_photo')->nullable();
            $table->string('thumbnail')->nullable();
            $table->boolean('comfort_non_ac_room')->default(0)->nullable();
            $table->boolean('deluxe_outside_windows')->default(0)->nullable();
            $table->string('pinterest')->nullable();
            $table->boolean('gift_shop')->default(0)->nullable();
            $table->boolean('deluxe_ac_room')->default(0)->nullable();
            $table->string('crn')->nullable();
            $table->boolean('transport')->default(0)->nullable();
            $table->string('email')->nullable();
            $table->string('linkedin')->nullable();
            $table->decimal('deluxe_room_price', 10, 2)->nullable();
            $table->boolean('internet_access')->default(0)->nullable();
            $table->string('facebook')->nullable();
            $table->boolean('deluxe_tv_cable')->default(0)->nullable();
            $table->boolean('room_service')->default(0)->nullable();
            $table->string('luxury_room_image')->nullable();
            $table->string('luxury_room_name')->nullable();
            $table->string('room_type')->nullable();
            $table->string('address')->nullable();
            $table->decimal('longitude', 10, 8)->nullable();
            $table->boolean('good_interior')->default(0)->nullable();
            $table->boolean('comfort_tv_cable')->default(0)->nullable();
            $table->boolean('deluxe_reception_facility')->default(0)->nullable();
            $table->string('zip_code')->nullable();
            $table->string('district')->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->string('luxury_telephone')->nullable();
            $table->boolean('luxury_tv_cable')->default(0)->nullable();
            $table->string('deluxe_room_image')->nullable();
            $table->boolean('good_drinks')->default(0)->nullable();
            $table->string('youtube_link')->nullable();
            $table->boolean('comfort_reception_facility')->default(0)->nullable();
            $table->string('instagram')->nullable();
            $table->boolean('luxury_non_ac_room')->default(0)->nullable();
            $table->boolean('luxury_reception_facility')->default(0)->nullable();
            $table->boolean('deluxe_non_ac_room')->default(0)->nullable();
            $table->boolean('swimming_pool')->default(0)->nullable();
            $table->boolean('comfort_outside_windows')->default(0)->nullable();
            $table->string('title')->nullable();
            $table->string('name')->nullable();
            $table->Integer('type')->nullable();
            $table->Integer('telephone')->nullable();
            $table->boolean('breakfast')->default(0)->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hotels', function (Blueprint $table) {
            //
        });
    }
};
