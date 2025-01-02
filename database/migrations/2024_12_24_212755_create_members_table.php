<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // Creating Forieng key fuction
    public function up(): void
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id("member_id");
            $table->string("Name", 50);
            $table->string("Email", 50);
            $table->string("contact", 11);
            // foreign key fuction
            // foreign key fuction
            $table->unsignedBigInteger("group_id");
            $table->foreign('group_id')->references('group_id')->on('groups');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
