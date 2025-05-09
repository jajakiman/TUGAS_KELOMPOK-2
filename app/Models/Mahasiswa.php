<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    public function up()
{
    Schema::create('mahasiswa', function (Blueprint $table) {
        $table->id();
        $table->string('nim');
        $table->string('nama');
        $table->string('no_hp');
        $table->timestamps();
    });
}

}
