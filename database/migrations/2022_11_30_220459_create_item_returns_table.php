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
        Schema::create('item_returns', function (Blueprint $table) {
            $table->id();
            $table->date('returned_at');
             $table->decimal('refund', $precision = 8, $scale = 2);
            $table->foreignIdFor(\App\Models\Sale::class)->constrained()
                                            ->onUpdate('cascade')
                                            ->onDelete('cascade');
            $table->foreignIdFor(\App\Models\Condition::class)->constrained();
            $table->foreignIdFor(\App\Models\User::class)->constrained()
                                            ->onUpdate('cascade')
                                            ->onDelete('cascade');
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
        Schema::dropIfExists('item_returns');
    }
};
