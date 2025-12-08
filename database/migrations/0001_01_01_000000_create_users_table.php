<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('national_id')->unique();
            $table->integer('average_income')->nullable();
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            ['name' => 'نواف سالم محمد الجهني', 'national_id' => '1234567890', 'average_income' => '32435', 'phone_number' => '966511325662', 'email' => 'a@a.com', 'password' => Hash::make('123456789')],
            ['name' => 'سعود سليم احمد الحربي', 'national_id' => '3266713240', 'average_income' => '1435', 'phone_number' => '966531533321', 'email' => 's@s.com', 'password' => Hash::make('123456789')],
            ['name' => 'ريان مسلم مسعود المطيري', 'national_id' => '7136713341', 'average_income' => '854', 'phone_number' => '966328125121', 'email' => 'm@m.com', 'password' => Hash::make('123456789')],
            ['name' => 'سلمان سليم احمد المطيري', 'national_id' => '3226133431', 'average_income' => '32932', 'phone_number' => '966538010111', 'email' => 'mj@m.com', 'password' => Hash::make('123456789')],
            ['name' => 'سليمان عبدالله محمد الجهني', 'national_id' => '3367134010', 'average_income' => '4549', 'phone_number' => '966537121373', 'email' => 'ss@mail.com', 'password' => Hash::make('123456789')],
        ]);

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
