<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{

    public function up()
{
    Schema::create('payments', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('sale_id');
        $table->decimal('amount', 15, 2);
        $table->timestamps();

        $table->foreign('sale_id')->references('id')->on('sales');
    });
}

    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
