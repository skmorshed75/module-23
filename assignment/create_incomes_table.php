<?php
/**
 * Open the generated migration files located in the database/migrations directory and define the columns for each table:
 */

 public function up()
{
    Schema::create('incomes', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->decimal('amount', 10, 2);
        $table->string('description');
        $table->date('date');
        $table->string('category');
        $table->timestamps();

        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
}


