<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\PaySlip;
class PaySlipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaySlip::factory()->count(5)->create();
    }
}
