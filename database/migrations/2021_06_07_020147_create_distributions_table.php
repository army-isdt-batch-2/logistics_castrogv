<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distributions', function (Blueprint $table) {
            $table->id();
            $table->string('requestor_name');
            $table->integer('requestor_contact');
            $table->longText('purpose');
            $table->unsignedBigInteger('assets_id')->index();
            $table->integer('quantity');
            $table->enum('status', [
                'processing', 'declined', 'destributed'
            ]);
            $table->timestamps();

            $table->foreign('assets_id')->references('id')->on('assets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('distributions');
    }
}
