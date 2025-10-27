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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string("offer_number", 100)->unique();
            $table->foreignId("customer_id")->constrained("users")->cascadeOnDelete();
            $table->string("status", 8);
            $table->date("valid_until");
            $table->string("currency", 10);
            $table->decimal("net_total_amount",12, 2);
            $table->decimal("gross_total_amount", 12, 2);
            $table->integer("tax_percent")->default(27);
            $table->text("notes")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
