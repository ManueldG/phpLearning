<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(10)->withPersonalTeam()->create();


        $this->call(CacheTableSeeder::class);
        $this->call(CacheLocksTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(JobBatchesTableSeeder::class);
        $this->call(JobsTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(PageLearnsTableSeeder::class);
        $this->call(PasswordResetTokensTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);
        $this->call(SessionsTableSeeder::class);
        $this->call(TeamInvitationsTableSeeder::class);
        $this->call(TeamUserTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        $this->call(TmpTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
