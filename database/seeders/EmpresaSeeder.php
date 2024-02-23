<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empresa;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $empresas = [
            ["id" => 1, "name" => "Boqueron Software", "country" => "Spain", "region" => "Andalucía", "city" => "Málaga"],
            ["id" => 2, "name" => "Enim Etiam Imperdiet PC", "country" => "Italy", "region" => "Marche", "city" => "Ostra Vetere"],
            ["id" => 3, "name" => "Curae Phasellus Limited", "country" => "Ireland", "region" => "Ulster", "city" => "Belfast"],
            ["id" => 4, "name" => "Ut Dolor Corp.", "country" => "Italy", "region" => "Campania", "city" => "Cetara"],
            ["id" => 5, "name" => "Nisi Mauris Nulla Limited", "country" => "Italy", "region" => "Puglia", "city" => "Scorrano"],
            ["id" => 6, "name" => "Varius PC", "country" => "Ireland", "region" => "Munster", "city" => "Cork"],
            ["id" => 7, "name" => "Sem Ltd", "country" => "Ireland", "region" => "Connacht", "city" => "Galway"],
            ["id" => 8, "name" => "Semper Industries", "country" => "Spain", "region" => "Principado de Asturias", "city" => "Oviedo"],
            ["id" => 9, "name" => "Eu Sem Pellentesque Corporation", "country" => "Italy", "region" => "Liguria", "city" => "Alassio"],
            ["id" => 10, "name" => "Chacho Industries", "country" => "Spain", "region" => "Canarias", "city" => "Santa Cruz de Tenerife"],
            ["id" => 11, "name" => "Ac Risus Morbi Company", "country" => "Ireland", "region" => "Leinster", "city" => "Dublin"],
            ["id" => 12, "name" => "Mi Tempor Foundation", "country" => "Spain", "region" => "Comunitat Valenciana", "city" => "Elx"],
            ["id" => 13, "name" => "Hendrerit Neque Consulting", "country" => "Spain", "region" => "Navarra", "city" => "Pamplona"],
            ["id" => 14, "name" => "Mauris Sociedad Limitada", "country" => "Spain", "region" => "Andalucía", "city" => "Almería"],
            ["id" => 15, "name" => "Metus Incorporated", "country" => "Spain", "region" => "Illes Balears", "city" => "Palma de Mallorca"],
        ];

        Empresa::insert($empresas);
    }
}
