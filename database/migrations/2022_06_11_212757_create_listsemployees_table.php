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
        Schema::create('listsemployees', function (Blueprint $table) {
            $table->id();
            $table->string('email',100);
            $table->string('cc',100);
            $table->string('bcc',100);
            $table->string('subject',100);
            $table->string('body',250);
            $table->string('empname',250);
            // $table->string('empid',250);


            $table->unsignedbiginteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employees')
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
        Schema::dropIfExists('listsemployees');
    }
};
