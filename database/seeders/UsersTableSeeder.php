<?php

namespace Database\Seeders;

use App\Models\Budget;
use App\Models\BudgetItem;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->count(20)
            ->create()->each(function($user) {
                $user->budget()->save(Budget::factory()->has(BudgetItem::factory()->count(5))->create());
            });
    }
}
