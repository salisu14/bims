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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('note')->nullable();
            $table->date('sales_date');
            $table->foreignIdFor(\App\Models\Customer::class)->constrained()
                                            ->onUpdate('cascade')
                                            ->onDelete('cascade');
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
        Schema::dropIfExists('sales');
    }
};