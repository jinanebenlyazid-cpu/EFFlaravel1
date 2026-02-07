<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Expert;
use App\Models\Evenement;
use App\Models\Atelier;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1️⃣ Experts
        $experts = [
            ['nomexp' => 'Ali', 'prenomexp' => 'Ahmed', 'telexp' => 123456789, 'specialitexp' => 'Nutrition', 'emailexp' => 'ali@example.com'],
            ['nomexp' => 'Sara', 'prenomexp' => 'Khalid', 'telexp' => 987654321, 'specialitexp' => 'Fitness', 'emailexp' => 'sara@example.com'],
        ];

        foreach ($experts as $exp) {
            Expert::create($exp);
        }

        // 2️⃣ Evenements
        $evenements = [
            ['theme' => 'Santé et Bien-être', 'date_debut' => '2026-03-01', 'date_fin' => '2026-03-03', 'description' => 'Événement sur la santé', 'cout_journalier' => '50', 'expert_id' => 1],
            ['theme' => 'Nutrition avancée', 'date_debut' => '2026-04-10', 'date_fin' => '2026-04-12', 'description' => 'Nutrition et diététique', 'cout_journalier' => '75', 'expert_id' => 2],
        ];

        foreach ($evenements as $even) {
            Evenement::create($even);
        }

        // 3️⃣ Ateliers
        $ateliers = [
            ['nomatelier' => 'Atelier Yoga', 'description' => 'Yoga pour débutants', 'evenement_id' => 1],
            ['nomatelier' => 'Atelier Nutrition', 'description' => 'Atelier pratique sur la nutrition', 'evenement_id' => 2],
        ];

        foreach ($ateliers as $at) {
            Atelier::create($at);
        }
    }
}
