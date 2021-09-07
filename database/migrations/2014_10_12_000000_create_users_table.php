<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // ตั้ง table name -> plural
        Schema::create('users', function (Blueprint $table) {
            $table->id();   //primary key -> no compound key -> 'id' ไม่ต้องแบบ user_id ไรงี้ มันมี object ที่ชี้บอกอยู่แล้ว
            $table->string('name');   // varchar(255)
            $table->string('email')->unique();   // unique key
            $table->timestamp('email_verified_at')->nullable();   //datetime
            $table->string('password');   // varchar(60)
            $table->rememberToken();  
            $table->timestamps();   // สร้าง created_at, updated_at
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
