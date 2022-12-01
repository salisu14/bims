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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('notes');
            $table->integer('quantity');
            $table->decimal('cost', $precision = 16, $scale = 2);
            $table->date('manufactured_at');
            $table->boolean('is_finished');
            $table->foreignIdFor(\App\Models\Production::class)->constrained()
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
        Schema::dropIfExists('products');
    }
};
