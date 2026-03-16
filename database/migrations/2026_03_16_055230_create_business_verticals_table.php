<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     * Stores all content for the Business Verticals listing page.
     */
    public function up(): void
    {
        Schema::create('business_verticals', function (Blueprint $table) {
            $table->id();

            // ── Banner Section ──────────────────────────────────────────
            $table->string('banner');               // banner background image filename
            $table->string('banner_heading');       // e.g. "Our Services"
            $table->string('banner_sub_heading');   // breadcrumb active label e.g. "Services"

            // ── Top About Section ───────────────────────────────────────
            $table->string('about_image_1');        // left thumb image 1 filename
            $table->string('about_image_2');        // left thumb image 2 filename
            $table->string('about_heading');        // e.g. "We Combine Technology with Business Ideas"

            // Feature item 1
            $table->string('feature_1_class');       // icon class e.g. "ti-bookmark-alt"
            $table->string('feature_1_title');      // e.g. "Certified Company"
            $table->text('feature_1_text');         // short description

            // Feature item 2
            $table->string('feature_2_class');       // icon class e.g. "ti-id-badge"
            $table->string('feature_2_title');      // e.g. "Experience Employee"
            $table->text('feature_2_text');         // short description

            // ── Services Carousel Section ───────────────────────────────
            $table->string('business_verticals_heading');     // e.g. "Our Services"
            $table->string('business_verticals_sub_heading'); // e.g. "What We Bring To You"
            $table->text('business_verticals_text'); // e.g. "What We Bring To You"

            // ── Bottom About / Video Section ────────────────────────────
            $table->string('video_image');          // thumbnail image filename
            $table->string('video_url');            // YouTube or video URL
            $table->string('video_label');          // e.g. "Our History"
            $table->string('bottom_tag');           // small tag e.g. "Easy Business Solutions"
            $table->string('bottom_heading');       // e.g. "We Combine Technology with Business Ideas"
            $table->text('bottom_description');     // longer paragraph
            $table->json('bottom_bullets')->nullable();         // JSON array of bullet point strings

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_verticals');
    }
};
