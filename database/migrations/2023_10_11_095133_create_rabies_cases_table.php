<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRabiesCasesTable extends Migration
{
    public function up()
    {
        Schema::create('rabies_cases', function (Blueprint $table) {
            $table->id('rabies_case_id');
            $table->string('rabies_case_occupation', 255)->nullable();
            $table->enum('rabies_case_exposition_type', ['1 - Sim', '2 - Não', '9 - Ignorado', 'Arranhadura', 'Lambedura', 'Mordedura', 'Outro'])->nullable();
            $table->enum('rabies_case_localization', ['1 - Sim', '2 - Não', '3 - Desconhecida', 'Mucosa', 'Cabeça/Pescoço', 'Mãos/Pés', 'Tronco', 'Membros Superiores', 'Membros Inferiores'])->nullable();
            $table->enum('rabies_case_injury', ['1 - Único', '2 - Múltiplo', '3 - Sem ferimento', '9 - Ignorado'])->nullable();
            $table->varchar('rabies_case_injury_type',20)->nullable();
            $table->date('rabies_case_exposition_date')->nullable();
            $table->enum('rabies_case_history', ['1 - Sim', '2 - Não', '9 - Ignorado', 'Pré-Exposição', 'Pós-Exposição'])->nullable();
            $table->enum('rabies_case_history_when', ['1 - Até 90 dias', '2 - Após 90 dias'])->nullable();
            $table->integer('rabies_case_dose_num')->nullable();
            $table->string('rabies_case_animal_species', 100)->nullable();
            $table->enum('rabies_case_animal_condition', ['1 - Sadio', '2 - Suspeito', '3 - Raivoso', '4 - Morto/ Desaparecido'])->nullable();
            $table->enum('rabies_case_animal_observation', ['1 - Sim', '2 - Não'])->nullable();
            $table->enum('rabies_case_treatment', ['1 - Pré Exposição', '2 - Dispensa de Tratamento', '3 - Observação do animal (se cão ou gato)', '4 - Observação + Vacina', '5 - Vacina', '6 - Soro + Vacina', '7 - Esquema de Reexposição'])->nullable();
            $table->string('rabies_case_vaccine_lab', 100)->nullable();
            $table->integer('rabies_case_vaccine_lot_num')->nullable();
            $table->date('rabies_case_vaccine_expiration_date')->nullable();
            $table->date('rabies_case_vaccine_date_1')->nullable();
            $table->date('rabies_case_vaccine_date_2')->nullable();
            $table->date('rabies_case_vaccine_date_3')->nullable();
            $table->date('rabies_case_vaccine_date_4')->nullable();
            $table->date('rabies_case_vaccine_date_5')->nullable();
            $table->enum('rabies_case_animal_final_condition', ['1 - Negativo para Raiva (Clínica)', '2 - Negativo para Raiva (Laboratório)', '3 - Positivo para Raiva (Clínica)', '4 - Positivo para Raiva (Laboratório)', '5 - Morto/Sacrificado/Sem Diagnóstico', '9 - Ignorado'])->nullable();
            $table->enum('rabies_case_treatment_interruption', ['1 - Sim', '2 - Não'])->nullable();
            $table->enum('rabies_case_treatment_interruption_reason', ['1 - Indicação da Unidade de Saúde', '2 - Abandono', '3 - Transferência'])->nullable();
            $table->enum('rabies_case_treatment_interruption_unit', ['1 - Sim', '2 - Não'])->nullable();
            $table->enum('rabies_case_vaccine_adverse_event', ['1 - Sim', '2 - Não', '9 - Ignorado'])->nullable();
            $table->enum('rabies_case_serum', ['1 - Sim', '2 - Não', '9 - Ignorado'])->nullable();
            $table->float('rabies_case_patient_weight')->nullable();
            $table->float('rabies_case_serum_quantity')->nullable();
            $table->enum('rabies_case_serum_application', ['1 - Heterólogo', '2 - Homólogo'])->nullable();
            $table->enum('rabies_case_serum_on_injury', ['1 - Sim', '2 - Não', 'Total', 'Parcial'])->nullable();
            $table->string('rabies_case_serum_lab', 100)->nullable();
            $table->integer('rabies_case_serum_num')->nullable();
            $table->enum('rabies_case_serum_adverse_event', ['1 - Sim', '2 - Não', '9 - Ignorado'])->nullable();
            $table->date('rabies_case_closing_date')->nullable();
            $table->mediumText('rabies_case_obs')->nullable();
            $table->unsignedBigInteger('get_case_id')->nullable();

            $table->foreign('get_case_id')->references('case_id')->on('cases')
                ->onUpdate('NO ACTION')
                ->onDelete('NO ACTION');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rabies_cases');
    }
}
