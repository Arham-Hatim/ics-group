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
        Schema::create('contact_pages', function (Blueprint $table) {
           $table->string('banner');
            $table->string('banner_heading');
            $table->string('banner_sub_heading');
            $table->string('support_heading');
            $table->text('support_text');
            $table->string('support_image');
            $table->string('contact_page_heading');
            $table->text('contact_page_message');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_pages');
    }
};
