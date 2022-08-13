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
        Schema::create('listscompanies', function (Blueprint $table) {
            $table->id();
            $table->string('email',100);
            $table->string('cc',100);
            $table->string('bcc',100);
            $table->string('subject',100);
            $table->string('body',250);


            $table->unsignedbiginteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies')
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
        Schema::dropIfExists('listscompanies');
    }
};
