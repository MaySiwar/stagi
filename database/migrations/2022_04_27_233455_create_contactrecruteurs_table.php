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
        Schema::create('contactrecruteurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom_stagiaire');
            $table->string('email_stagiaire')->unique();
            $table->timestamp('email_verified_at')->nullable();       
            $table->string('subject');
            $table->string('messages');
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
        Schema::dropIfExists('contactrecruteurs');
    }
};
