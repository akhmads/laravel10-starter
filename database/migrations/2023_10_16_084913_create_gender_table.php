<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gender', function (Blueprint $table) {
            $table->id();
            $table->string('gender',50);
            $table->timestamps();
        });

        DB::table('gender')->insert([
            'gender' => 'male',
            'created_at' => Carbon::now('UTC'),
            'updated_at' => Carbon::now('UTC')
        ]);
        DB::table('gender')->insert([
            'gender' => 'female',
            'created_at' => Carbon::now('UTC'),
            'updated_at' => Carbon::now('UTC')
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gender');
    }
};
