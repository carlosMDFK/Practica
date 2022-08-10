<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrgasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orgas', function (Blueprint $table) {
            $table->id('id');
            $table->string('rut', 15);
            $table->text('nombre');
            $table->integer('regis');
            $table->string('fojas', 10);
            $table->string('tipo');
            $table->string('detalle');
            $table->text('direc');
            $table->string('fonosede');
            $table->text('uvecinal');
            $table->string('sector');
            $table->string('zona');
            $table->integer('nsocios');
            $table->dateTime('ffunda');
            $table->integer('ndecpj');
            $table->dateTime('fincrip');
            $table->dateTime('fdecpj');
            $table->dateTime('desde');
            $table->dateTime('hasta');
            $table->string('rutpresi', 15);
            $table->text('npresi');
            $table->text('direcpresi');
            $table->string('fonopresi');
            $table->string('rutsecre', 15);
            $table->text('nsecre');
            $table->text('direcsecre');
            $table->string('fonosecre');
            $table->string('rutteso', 15);
            $table->text('nteso');
            $table->text('directeso');
            $table->string('fonoteso');
            $table->string('rutdirec1', 15);
            $table->text('ndirec1');
            $table->text('direcdirec1');
            $table->string('fonodirec1');
            $table->string('rutdirec2', 15);
            $table->text('ndirec2');
            $table->text('direcdirec2');
            $table->string('fonodirec2');
            $table->text('obs');
            $table->dateTime('fecharcei');
            $table->dateTime('fecharecepm');
            $table->integer('nregrcei');
            $table->dateTime('fechareg1');
            $table->dateTime('fechareg2');
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
        Schema::dropIfExists('orgas');
    }
};
