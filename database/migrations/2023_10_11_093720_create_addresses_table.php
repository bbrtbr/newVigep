<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id('address_id');
            $table->string('address_uf', 2)->nullable();
            $table->string('address_municipality', 255)->nullable();
            $table->integer('address_ibge_code')->nullable();
            $table->string('address_district', 255)->nullable();
            $table->string('address_neighborhood', 255)->nullable();
            $table->string('address_address', 255)->nullable();
            $table->string('address_code', 45)->nullable();
            $table->integer('address_number')->nullable();
            $table->string('address_complement', 255)->nullable();
            $table->string('address_geofield1', 45)->nullable();
            $table->string('address_geofield2', 45)->nullable();
            $table->string('address_reference', 255)->nullable();
            $table->string('address_cep', 8)->nullable();
            $table->string('address_zone', 15)->nullable();
            $table->string('address_country', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
