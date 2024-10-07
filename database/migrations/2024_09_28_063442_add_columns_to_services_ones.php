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
        Schema::table('services_ones', function (Blueprint $table) {
            $table->string('new_column1');
            $table->string('new_column2');
            $table->string('new_column3');
            $table->string('new_column4');
            $table->string('new_column5');
            $table->string('new_column6');
        });
        Schema::table('services_twos', function (Blueprint $table) {
            $table->string('new_column1');
            $table->string('new_column2');
            $table->string('new_column3');
            $table->string('new_column4');
            $table->string('new_column5');
            $table->string('new_column6');
        });
        Schema::table('services_threes', function (Blueprint $table) {
            $table->string('new_column1');
            $table->string('new_column2');
            $table->string('new_column3');
            $table->string('new_column4');
            $table->string('new_column5');
            $table->string('new_column6');
        });
        Schema::table('services_fours', function (Blueprint $table) {
            $table->string('new_column1');
            $table->string('new_column2');
            $table->string('new_column3');
            $table->string('new_column4');
            $table->string('new_column5');
            $table->string('new_column6');
        });
        Schema::table('services_fives', function (Blueprint $table) {
            $table->string('new_column1');
            $table->string('new_column2');
            $table->string('new_column3');
            $table->string('new_column4');
            $table->string('new_column5');
            $table->string('new_column6');
        });
        Schema::table('services_sixes', function (Blueprint $table) {
            $table->string('new_column1');
            $table->string('new_column2');
            $table->string('new_column3');
            $table->string('new_column4');
            $table->string('new_column5');
            $table->string('new_column6');
        });
        Schema::table('services_sevens', function (Blueprint $table) {
            $table->string('new_column1');
            $table->string('new_column2');
            $table->string('new_column3');
            $table->string('new_column4');
            $table->string('new_column5');
            $table->string('new_column6');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services_ones', function (Blueprint $table) {
            $table->dropColumn(['new_column1', 'new_column2', 'new_column3', 'new_column4', 'new_column5', 'new_column6']);
        });
        Schema::table('services_twos', function (Blueprint $table) {
            $table->dropColumn(['new_column1', 'new_column2', 'new_column3', 'new_column4', 'new_column5', 'new_column6']);
        });
        Schema::table('services_threes', function (Blueprint $table) {
            $table->dropColumn(['new_column1', 'new_column2', 'new_column3', 'new_column4', 'new_column5', 'new_column6']);
        });
        Schema::table('services_fours', function (Blueprint $table) {
            $table->dropColumn(['new_column1', 'new_column2', 'new_column3', 'new_column4', 'new_column5', 'new_column6']);
        });
        Schema::table('services_fives', function (Blueprint $table) {
            $table->dropColumn(['new_column1', 'new_column2', 'new_column3', 'new_column4', 'new_column5', 'new_column6']);
        });
        Schema::table('services_sixes', function (Blueprint $table) {
            $table->dropColumn(['new_column1', 'new_column2', 'new_column3', 'new_column4', 'new_column5', 'new_column6']);
        });
        Schema::table('services_sevens', function (Blueprint $table) {
            $table->dropColumn(['new_column1', 'new_column2', 'new_column3', 'new_column4', 'new_column5', 'new_column6']);
        });
    }
};
