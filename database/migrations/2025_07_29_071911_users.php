<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
        {
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('clas_id');
                $table->string('photo');
                $table->string('name');
                $table->bigInteger('nisn');
                $table->text('alamat');
                $table->string('email')->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->string('no_telepon');
                $table->rememberToken();
                $table->timestamps();
            });
        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
    };
