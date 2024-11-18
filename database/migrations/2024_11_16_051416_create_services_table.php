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
        Schema::create('services', function (Blueprint $table) {

            $table->id();
            $table->string('name'); // The service name
            $table->string('slug')->unique(); // SEO-friendly URL
            $table->longText('description'); // Detailed description
            $table->text('meta_title')->nullable(); // SEO title
            $table->text('meta_description')->nullable(); // SEO description
            $table->text('meta_keywords')->nullable(); // SEO keywords
            $table->decimal('price', 10, 2); // Service price
            $table->integer('category_id')->nullable(); // Category relationship
            $table->boolean('is_available')->default(true); // Availability
            $table->string('image')->nullable(); // Service image URL
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
        Schema::dropIfExists('services');
    }
};
