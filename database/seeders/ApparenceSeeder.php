<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ApparenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('apparences')->insert([
            [
                'slide1_image' => "{{asset('images/slides/slider-mainbg-001.jpg')}}",
                'slide1_titre' => 'Un travail de qualité avec un tarif Compétitive',
                'slide1_description' => 'Nous offrons une gamme complète de services pour répondre à tous vos besoins <br /> Vous avez un projet de construction ?',
                'slide1_button_title' => 'DEMANDER UN DEVIS',
                'slide1_button_link' => 'https://example.com/slide1',
                'section1_title' => 'IP87',
                
                'slide2_image' => "{{asset('images/slides/slider-mainbg-002.jpg')}}",
                'slide2_titre' => "Vous souhaitez construire une maison ou une école ?",
                'slide2_description' => "Nous nettoyons vos chantiers, vos bureaux, immeuble et bien d'autres.<br />IVOIR PUISSANCE 87 est une entreprise spécialisée dans les domaines suivants : <br/>
                                        le BTP, le Lotissement, la Gestion immobilière, l'Imprimerie, la Construction métallique, l'Entretien et le Nettoyage, les Arts - aménagement et divers. <br/> ",
                'slide2_button_title' => 'Contactez-nous ',
                'slide2_button_link' => 'https://example.com/slide2',
                'section2_title' => 'Aménagement',

                'slide3_image' => 'slide3.jpg',
                'slide3_titre' => 'Contactez-Nous',
                'slide3_description' => 'Description pour la troisième slide.',
                'slide3_button_title' => 'Contact',
                'slide3_button_link' => 'https://example.com/slide3',
                'section3_title' => 'Section 3',

                'image_atout' => 'atout.jpg',
                'image_bg' => 'background.jpg',
                'video_image' => 'video.jpg',
                'video_link' => 'https://example.com/video',

                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
