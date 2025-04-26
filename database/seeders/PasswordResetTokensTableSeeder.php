<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PasswordResetTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('password_reset_tokens')->delete();
        
        \DB::table('password_reset_tokens')->insert(array (
            0 => 
            array (
                'email' => 'manuel.dellagala@gmail.com',
                'token' => '$2y$12$RLax2S0lgk.4/8X4u5kOQ.0CEx27PudR8dDn0NIwlUDf.jkDEZ0Dm',
                'created_at' => '2025-04-19 20:36:16',
            ),
            1 => 
            array (
                'email' => 'manuel@manueldellagala.it',
                'token' => '$2y$12$iVt3w9g32JwT5j6MEfPN4uWeVWQRsEMUwkN.lKosw0cxfvuf1zuMq',
                'created_at' => '2025-04-21 09:44:40',
            ),
        ));
        
        
    }
}