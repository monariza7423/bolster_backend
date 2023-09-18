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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('first_name_kana');
            $table->string('last_name_kana');
            $table->string('company')->nullable();
            $table->string('email');
            $table->enum('contact_type', [
                '事業(WEB制作・開発)について',
                '事業(オハナスタイル)について',
                '事業(リモートスタイル)について',
                '採用について',
                'その他'
            ]);
            $table->text('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
};
