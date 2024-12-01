<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mata_kuliah', function (Blueprint $table) {
            $table->id();
            $table->string('kodemk')->unique();
            $table->string('nama');     
            $table->string('program_studi');
            $table->string('plotsemester');    
            $table->integer('sks');         
            $table->string('sifat');            
            $table->integer('jumlah_kelas');    
            $table->timestamps();      
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
{
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    Schema::dropIfExists('mata_kuliah');
    Schema::dropIfExists('dosen_penampu');
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');
}

};