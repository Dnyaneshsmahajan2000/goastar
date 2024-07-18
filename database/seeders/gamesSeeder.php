<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class gamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $games = [
            [
                'id' => 1,
                'photo' => 'images/aries.png',
                'game_name_en' => 'Aries',
                'game_name_mr' => 'मेष',
                'open_time' => '10:00:00',
                'close_time' => '10:30:00',
                'disable' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'photo' => 'images/taurus.png',
                'game_name_en' => 'Taurus',
                'game_name_mr' => 'वृषभ',
                'open_time' => '11:00:00',
                'close_time' => '11:30:00',
                'disable' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'photo' => 'images/gemini.png',
                'game_name_en' => 'Gemini',
                'game_name_mr' => 'मिथुन',
                'open_time' => '12:00:00',
                'close_time' => '12:30:00',
                'disable' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 4,
                'photo' => 'images/cancer.png',
                'game_name_en' => 'Cancer',
                'game_name_mr' => 'कर्क',
                'open_time' => '01:00:00',
                'close_time' => '01:30:00',
                'disable' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 5,
                'photo' => 'images/leo.png',
                'game_name_en' => 'Leo',
                'game_name_mr' => 'सिंह',
                'open_time' => '02:00:00',
                'close_time' => '02:30:00',
                'disable' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 6,
                'photo' => 'images/virgo.png',
                'game_name_en' => 'Virgo',
                'game_name_mr' => 'कन्या',
                'open_time' => '03:00:00',
                'close_time' => '03:30:00',
                'disable' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 7,
                'photo' => 'images/libra.png',
                'game_name_en' => 'Libra',
                'game_name_mr' => 'तूळ',
                'open_time' => '04:00:00',
                'close_time' => '04:30:00',
                'disable' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 8,
                'photo' => 'images/scorpio..png',
                'game_name_en' => 'Scorpio',
                'game_name_mr' => 'वृश्चिक',
                'open_time' => '05:00:00',
                'close_time' => '05:30:00',
                'disable' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 9,
                'photo' => 'images/sagittarius.png',
                'game_name_en' => 'Sagittarius',
                'game_name_mr' => 'धनु',
                'open_time' => '06:00:00',
                'close_time' => '06:30:00',
                'disable' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 10,
                'photo' => 'images/capricorn.png',
                'game_name_en' => 'Capricorn',
                'game_name_mr' => 'मकर',
                'open_time' => '07:00:00',
                'close_time' => '07:30:00',
                'disable' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 11,
                'photo' => 'images/aquarius.png',
                'game_name_en' => 'Aquarius',
                'game_name_mr' => 'कुंभ',
                'open_time' => '08:00:00',
                'close_time' => '08:30:00',
                'disable' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 12,
                'photo' => 'images/pisces.png',
                'game_name_en' => 'Pisces',
                'game_name_mr' => 'मीन',
                'open_time' => '09:00:00',
                'close_time' => '09:30:00',
                'disable' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        // Insert data into the games table
        DB::table('games')->insert($games);
    }

}
