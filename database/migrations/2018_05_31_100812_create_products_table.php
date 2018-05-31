<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            /*$table->timestamps();*/

            /*$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));*/

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->string('name');
            $table->integer('category_id');
            $table->integer('code');
            $table->integer('price');
            $table->integer('availability');
            $table->string('brand');
            $table->longText('description');
            $table->integer('is_new');
            $table->integer('is_recommended');
            $table->integer('status');

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
}
