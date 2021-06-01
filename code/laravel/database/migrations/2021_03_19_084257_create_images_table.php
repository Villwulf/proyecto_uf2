<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments("id");
            $table->string("title");
            $table->string("status");
            $table->string("access");
            $table->string("ticket1")->default(null);
            $table->string("ticket2")->default(null);
            $table->string("ticket3")->default(null);
            $table->string("autor");
            $table->string("email");
            $table->string("img");
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
        Schema::dropIfExists('images');
    }
}
