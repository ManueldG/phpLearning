<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CopyUsersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*

        Schema::dropIfExists('tmp'); // elimina tabella tmp se esiste

        Schema::create('tmp', function (Blueprint $table) { // crea tabella tmp
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
           $table->text("two_factor_secret")->nullable();
            $table->text("two_factor_recovery_codes")->nullable();
            $table->timestamp("two_factor_confirmed_at")->nullable();
            $table->timestamps();
        });
        */


        // dump (DB::connection()->getPdo( 0)->query('SELECT * FROM users limit 5')->getColumnMeta(1)); //recupera struttura del campo

        // elenca colonna dettagli
        /*
        $users = (DB::table('users')->get());

        $tmp = [];


        foreach ($users as $k=>$user) {

            $count = 0;

            foreach ($user as $key=>$u) {

                dump(DB::connection()->getPdo( 0)->query('SELECT * FROM users limit 5')->getColumnMeta($count++)['sqlite:decl_type'],$key);
                $tmp[$k][$key] = $u;

            }

        }*/
        // ----


        // recupera i valori della tabella
       /*
       $users = (DB::table('users')->get());

        $tmp = [];

        foreach ($users as $k=>$user) {

            foreach ($user as $key=>$u) {

                $tmp[$k][$key] = $u;

            }

        } */

        /*
        foreach ($tmp as $val) {

            DB::table('tmp')->insert($val);

        }
            */
            // inserisci i dati nell'array

            $file_path = resource_path('../database/export.sql');

            DB::unprepared(
                file_get_contents($file_path)
            );
            //usa l'export sql come seeder

     }
}
