<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->text('description');
            $table->enum('movement', ['fixed', 'movable'])->default('fixed');
            $table->string('picture_path');
            $table->date('purchase_date');
            $table->dateTime('start_use_date');
            $table->decimal('purchase_price', $precision=8, $scale=2);
            $table->date('warranty_expiry_date');
            $table->year('degredation_year');
            $table->decimal('current_value_naira');
            $table->char('location');
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
        Schema::dropIfExists('assets');
    }
}
