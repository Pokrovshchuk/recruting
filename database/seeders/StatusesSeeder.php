<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $insertData = [
            [
                'id' => 1,
                'name' => 'rotation', // Ротация
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'in_review', // На проверке
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'name' => 'interview_scheduled', // Назначена дата собеседования
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'name' => 'interview_confirmed', // Подтверждение собеседования
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 5,
                'name' => 'meet_scheduled', // Запланирован Meet
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 6,
                'name' => 'thinking', // Думаю
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 7,
                'name' => 'accepted', // Принят
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 8,
                'name' => 'rejected', // Отказан
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 9,
                'name' => 'archived', // Архив
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        Status::upsert($insertData, ['name']);
    }
}
