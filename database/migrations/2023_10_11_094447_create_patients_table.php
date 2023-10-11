<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id('patient_id');
            $table->string('patient_name', 255)->nullable();
            $table->date('patient_birthday')->nullable();
            $table->integer('patient_age')->nullable();
            $table->string('patient_sex', 15)->nullable();
            $table->string('patient_pregnant', 30)->nullable();
            $table->string('patient_race', 15)->nullable();
            $table->string('patient_education', 30)->nullable();
            $table->integer('patient_cns')->nullable();
            $table->string('patient_mother_name', 255)->nullable();
            $table->bigInteger('patient_cpf')->nullable();
            $table->string('patient_phone', 255)->nullable(); // Corrigido para varchar
            $table->unsignedBigInteger('get_address_id')->nullable();

            $table->foreign('get_address_id')->references('address_id')->on('addresses')
                ->onUpdate('NO ACTION')
                ->onDelete('NO ACTION');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
