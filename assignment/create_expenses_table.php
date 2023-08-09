<?php
public function up()
{
    Schema::create('expenses', function (Blueprint $table) {
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
