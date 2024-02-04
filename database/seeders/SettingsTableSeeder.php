<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->delete();

        $data = [
            ['type' => 'current_session', 'description' => '2018-2019'],
            ['type' => 'system_title', 'description' => 'Devlupsoft L&D'],
            ['type' => 'system_name', 'description' => 'Devlupsoft L&D'],
            ['type' => 'term_ends', 'description' => date('d/m/Y')],
            ['type' => 'term_begins', 'description' => date('d/m/Y')],
            ['type' => 'phone', 'description' => '+919693087691'],
            ['type' => 'address', 'description' => 'Sector 5, Rohini Delhi 110085, IN'],
            ['type' => 'system_email', 'description' => 'connect.devlupsoft@gmail.com'],
            ['type' => 'alt_email', 'description' => 'info@devlupsoft.com'],
            ['type' => 'email_host', 'description' => ''],
            ['type' => 'email_pass', 'description' => ''],
            ['type' => 'lock_exam', 'description' => 0],
            ['type' => 'logo', 'description' => ''],
            ['type' => 'next_term_fees_j', 'description' => '20000'],
            ['type' => 'next_term_fees_pn', 'description' => '25000'],
            ['type' => 'next_term_fees_p', 'description' => '25000'],
            ['type' => 'next_term_fees_n', 'description' => '25600'],
            ['type' => 'next_term_fees_s', 'description' => '15600'],
            ['type' => 'next_term_fees_c', 'description' => '1600'],
            ['type' => 'next_term_fees_ug', 'description' => '10000'],
        ];

        DB::table('settings')->insert($data);

    }
}
