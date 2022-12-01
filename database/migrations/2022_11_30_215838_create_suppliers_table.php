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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable()->unique();
            $table->string('note')->nullable();
            $table->string('website')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('postal_code')->nullable();
            $table->foreignIdFor(\App\Models\City::class)->constrained()->cascadeOnDelete;
            $table->foreignIdFor(\App\Models\State::class)->constrained()->cascadeOnDelete;
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
        Schema::dropIfExists('suppliers');
    }
};
