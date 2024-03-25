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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('birthdate')->nullable();
            $table->string('mobilenumber')->nullable();
            $table->string('gender')->nullable();
            $table->string('occupation')->nullable();
            $table->string('identitydocument')->nullable();
            $table->string('IDnumber')->nullable();
            $table->string('issueplace')->nullable();
            $table->string('expirydate')->nullable();
            $table->string('countryissued')->nullable();
            $table->string('issueauthority')->nullable();
            $table->string('county')->nullable();
            $table->string('ward')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('address')->nullable();
            $table->string('town')->nullable();
            $table->string('propertyID')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
