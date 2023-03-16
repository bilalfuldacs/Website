<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homeadvertisements', function (Blueprint $table) {
            $table->id();
            $table->string('above_search_at');
            $table->string('above_search_url')->nullable();
            $table->string('above_search_ad_status');
            $table->string('above_footer_at');
            $table->string('above_footer_url')->nullable();
            $table->string('above_footer_ad_status');
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
        Schema::dropIfExists('homeadvertisements');
    }
};