<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('social_securities', function (Blueprint $table) {
            $table->id();
            $table->string('serial_number');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });

        DB::table('social_securities')->insert([
            ['serial_number' => str_replace('-', '', Str::uuid()), 'user_id' => 2],
            ['serial_number' => str_replace('-', '', Str::uuid()), 'user_id' => 3],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_securities');
    }
};
