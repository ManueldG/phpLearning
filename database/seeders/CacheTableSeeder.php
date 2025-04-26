<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CacheTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cache')->delete();
        
        \DB::table('cache')->insert(array (
            0 => 
            array (
                'key' => 'interprete_php_cache_48a5bc8e1dec344b77bf150b1097f675:timer',
                'value' => 'i:1745486468;',
                'expiration' => 1745486468,
            ),
            1 => 
            array (
                'key' => 'interprete_php_cache_48a5bc8e1dec344b77bf150b1097f675',
                'value' => 'i:1;',
                'expiration' => 1745486468,
            ),
            2 => 
            array (
                'key' => 'interprete_php_cache_65ac153431d5d88c822623338464b611:timer',
                'value' => 'i:1745659526;',
                'expiration' => 1745659526,
            ),
            3 => 
            array (
                'key' => 'interprete_php_cache_65ac153431d5d88c822623338464b611',
                'value' => 'i:1;',
                'expiration' => 1745659526,
            ),
        ));
        
        
    }
}