<?php

use Illuminate\Support\Facades\DB;
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
        Schema::table('projects', function (Blueprint $table) {
            DB::statement("ALTER TABLE `posts` CHANGE COLUMN `author` `user_id` bigint unsigned NOT NULL");
            // $table->dropForeign("post_user_id_foreign");
        });
    }

    /**
     * Reverse the migrations.
     */
    // public function down(): void
    // {
    //     Schema::table('posts', function (Blueprint $table){
    //         $table->renameColumn('user_id',"author");
    //         $table->string('user_id')->change();
    //     });
    // }
};
