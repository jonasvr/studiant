<?php

use Illuminate\Database\Seeder;

class Subjects extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            'subject' => 'Intervieuws van cafébazen'
        ]);
        DB::table('subjects')->insert([
            'subject' => 'Koken op kot'
        ]);
        DB::table('subjects')->insert([
            'subject' => 'Koten eten'
        ]);
        DB::table('subjects')->insert([
            'subject' => 'Het kot leven'
        ]);
        DB::table('subjects')->insert([
            'subject' => "Holebi's uitgaansleven antwerpen"
        ]);
        DB::table('subjects')->insert([
            'subject' => "Revieuws TD's en cantussen"
        ]);
        DB::table('subjects')->insert([
            'subject' => 'Goedkope restaurants'
        ]);
        DB::table('subjects')->insert([
            'subject' => 'Datingstips'
        ]);
        DB::table('subjects')->insert([
            'subject' => 'Bezigheden in antwerpen'
        ]);
        DB::table('subjects')->insert([
            'subject' => 'Examentips'
        ]);
    }
}
