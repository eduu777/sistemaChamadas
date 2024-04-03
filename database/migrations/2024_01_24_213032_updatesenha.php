<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('senha')->change();
        });
        
        $users = DB::table('users')->get();

        foreach ($users as $user) {
            DB::table('users')
                ->where('id', $user->id)
                ->update(['senha' => bcrypt($user->senha)]);
        }
    }

    public function down()
    {
        // Reverter as alterações, se necessário
    }

    /**
     * Reverse the migrations.
     */
   
};
