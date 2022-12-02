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
        Schema::create('item_sales', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->decimal('unit_price', $precision = 16, $scale = 2);
            $table->decimal('discount', $precision = 16, $scale = 2)->default(0.00);
            $table->foreignId('item_id')->index()->constrained()->cascadeOnDelete();
            $table->foreignId('sale_id')->index()->constrained()->cascadeOnDelete();
            $table->foreignId('payment_id')->index()->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->index()->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('item_sales');
    }
};
