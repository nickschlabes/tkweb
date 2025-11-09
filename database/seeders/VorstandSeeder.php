<?php

namespace Database\Seeders;

use App\Models\Vorstand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VorstandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vorstandMembers = [
            [
                'name' => '1. Vorsitzender',
                'position' => 'Vorsitzender',
                'description' => 'Leitung des Vereins',
                'order' => 1,
            ],
            [
                'name' => '2. Vorsitzender',
                'position' => 'Stellvertretender Vorsitzender',
                'description' => 'Unterstützung der Vereinsleitung',
                'order' => 2,
            ],
            [
                'name' => 'Kassenwart',
                'position' => 'Kassenwart',
                'description' => 'Verwaltung der Finanzen',
                'order' => 3,
            ],
            [
                'name' => 'Schriftführer',
                'position' => 'Schriftführer',
                'description' => 'Protokollführung und Korrespondenz',
                'order' => 4,
            ],
        ];

        foreach ($vorstandMembers as $member) {
            Vorstand::create($member);
        }
    }
}
