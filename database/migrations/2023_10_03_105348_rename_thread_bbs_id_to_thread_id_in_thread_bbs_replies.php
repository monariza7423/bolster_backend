<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('thread_bbs_replies', function (Blueprint $table) {
            $table->renameColumn('thread_bbs_id', 'thread_id');
            $table->foreign('thread_id')->references('id')->on('thread_bbs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('thread_bbs_replies', function (Blueprint $table) {
            $table->dropForeign('thread_bbs_replies_thread_id_foreign');
            $table->renameColumn('thread_id', 'thread_bbs_id');
        });
    }
};
