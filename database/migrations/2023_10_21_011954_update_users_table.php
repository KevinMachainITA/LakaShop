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
        //Update in "users" table to add new two columns
        Schema::table('users', function (Blueprint $table) {
            $table->string('last_name');
            $table->string('shipping_address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Delete columns in case to ejection this function
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['last_name', 'shipping_address']);
        });
    }
};
