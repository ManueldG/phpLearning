<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PersonalAccessTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('personal_access_tokens')->delete();
        
        \DB::table('personal_access_tokens')->insert(array (
            0 => 
            array (
                'id' => 2,
                'tokenable_type' => 'App\\Models\\User',
                'tokenable_id' => 1,
                'name' => 'aut',
                'token' => 'bcf1377fbe2f4fe9c55d21eb7610035e785cef8e7f2653ec63907106daac232d',
                'abilities' => '["read"]',
                'last_used_at' => '2025-04-19 12:34:03',
                'expires_at' => NULL,
                'created_at' => '2025-04-04 20:43:02',
                'updated_at' => '2025-04-19 12:34:03',
            ),
            1 => 
            array (
                'id' => 3,
                'tokenable_type' => 'App\\Models\\User',
                'tokenable_id' => 3,
                'name' => 'api',
                'token' => 'bb6d772e735200ded38f3675cbb9cb490936ed4b35bfe04bb586bce65eacb5ca',
                'abilities' => '["read"]',
                'last_used_at' => '2025-04-08 11:40:01',
                'expires_at' => NULL,
                'created_at' => '2025-04-08 10:18:45',
                'updated_at' => '2025-04-08 11:40:01',
            ),
        ));
        
        
    }
}