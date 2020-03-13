<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddConstraintToMedecins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('medecins', function (Blueprint $table) {
            $table->foreign('personne_id')
                  ->references('id')
                  ->on('personnes')
                  ->onDelete('cascade');;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('medecins', function (Blueprint $table) {
                $table->dropForeign('medecins_personne_id_foreign');
            
        });
    }
}
