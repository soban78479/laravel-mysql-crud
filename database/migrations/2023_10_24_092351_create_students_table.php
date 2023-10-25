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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 100);
            $table->integer('roll_no');
            $table->enum('gender', ['Male', 'Female', 'Others']);
            $table->date('dob');
            $table->string('email', 100);
            $table->string('phone_no', 100); // Changed to string
            $table->enum('country', ['UK', 'USA', 'Australia', 'Canada', 'Others']); // Corrected "Australia" spelling
            $table->enum('subject', ['Math', 'Science', 'History']); // Changed to string
            $table->text('comment'); // Removed the length constraint
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
