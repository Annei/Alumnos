<?php

use App\CrmStatus;
use Illuminate\Database\Seeder;

class CrmStatusTableSeeder extends Seeder
{
    public function run()
    {
        $crmStatuses = [[
            'id'         => '1',
            'name'       => 'Lead',
            'created_at' => '2019-06-24 05:28:30',
            'updated_at' => '2019-06-24 05:28:30',
        ],
            [
                'id'         => '2',
                'name'       => 'Customer',
                'created_at' => '2019-06-24 05:28:30',
                'updated_at' => '2019-06-24 05:28:30',
            ],
            [
                'id'         => '3',
                'name'       => 'Partner',
                'created_at' => '2019-06-24 05:28:30',
                'updated_at' => '2019-06-24 05:28:30',
            ]];

        CrmStatus::insert($crmStatuses);
    }
}
