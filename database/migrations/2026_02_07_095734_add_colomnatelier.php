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
        Schema::table("ateliers",function(Blueprint $table){
            $table->string("nomatelier");
            $table->string("description");
            $table->unsignedBigInteger("evenement_id");
            $table->foreign("evenement_id")->references("id")->on("evenements")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ateliers', function (Blueprint $table) {
            $table->dropForeign(['evenement_id']);
            $table->dropColumn(['evenement_id', 'nomatelier', 'description']);
        });
    }
};
