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
        Schema::create('example', function (Blueprint $table) {
            $table->id();
            $table->string('code',50);
            $table->string('name',100);
            $table->string('gender',20);
            $table->date('birth_date');
            $table->string('address',255);
            $table->string('email',100);
            $table->tinyInteger('active')->index()->default('0');
            $table->string('avatar',255)->default('');
            $table->foreignId('contact_id')->index()->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('example');
    }
};
