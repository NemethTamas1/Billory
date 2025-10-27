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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->foreignId("offer_id")->constrained("offers")->cascadeOnDelete();

            $table->string("name", 100);
            $table->text("description")->nullable();
            $table->integer("quantity")->default(1);
            $table->string("quantity_type", 15);
            $table->integer("unit_price_net");
            $table->integer("tax_percent")->default(27);
            $table->integer("total_net");
            $table->integer("total_gross");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
