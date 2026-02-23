<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Work;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Work::create([
            'name' => 'SouqAlFellah',
            'label' => "en=Fresh and Organic Products Market|fr=Marché de produits frais et bio",
            'preview' => 'souqalfellah.png',
            'slug' => 'souqalfellah',
            'category' => "en=Online Marketplace|fr=Marketplace en ligne",
            'client' => 'Upwork',
            'year' => '2025',
            'description' => "en=Online marketplace connecting local farmers with customers looking for fresh and organic products.\nBuilt a full Laravel application with Tailwind CSS and Alpine.js, including product management, vendor listings, order flow and form validation.\nDesigned the data structure and user flows to keep the buying process simple while ensuring reliable product and seller management.|fr=Marketplace en ligne reliant des agriculteurs locaux à des clients à la recherche de produits frais et biologiques.\nDéveloppement d’une application complète en Laravel avec Tailwind CSS et Alpine.js, incluant la gestion des produits, des vendeurs, du processus de commande et des formulaires.\nConception de la structure des données et des parcours utilisateurs afin de simplifier l'achat tout en assurant une gestion fiable des produits et des vendeurs."
        ]);
        Work::create([
            'name' => 'Sam',
            'label' => "en=Portfolio|fr=Portfolio",
            'preview' => 'sam.png',
            'slug' => 'sam',
            'category' => "en=Portfolio Website|fr=Site portfolio personnel",
            'client' => null,
            'year' => '2023',
            'description' => "en=Personal web portfolio to present my profile and projects as a web developer.\nBuilt a dynamic Laravel application using pure CSS and jQuery, including project management, dynamic content sections and reusable layouts.\nFocused on performance, clean structure and smooth interactions without relying on heavy frontend frameworks.|fr=Portfolio personnel destiné à présenter mon profil et mes projets en tant que développeur web.\nDéveloppement d’une application dynamique en Laravel avec CSS pur et jQuery, incluant la gestion des projets, des sections dynamiques et des mises en page réutilisables.\nAccent mis sur la performance, la structure propre et des interactions fluides sans utiliser de framework frontend lourd."
        ]);
        Work::create([
            'name' => 'Lenergia',
            'label' => 'en=solar panels services|fr=services de panneaux solaires',
            'preview' => 'lenergia.png',
            'slug' => 'lenergia',
            'category' => 'en=Corporate Service Website|fr=Application web de gestion de services',
            'client' => 'Urban Call Center',
            'year' => '2023',
            'description' => "en=Service platform for solar panel installation and renewable energy solutions.\nBuilt a full Laravel application using Inertia.js and Tailwind CSS with dynamic service selection, quotation requests and administration features.\nImplemented budget estimation logic to match client needs with suitable services and improve decision making for users.|fr=Plateforme de services dédiée à l’installation de panneaux solaires et aux solutions d’énergie renouvelable.\nDéveloppement d’une application complète en Laravel avec Inertia.js et Tailwind CSS, incluant la sélection dynamique des services, les demandes de devis et la gestion administrative.\nMise en place d’une logique d’estimation de budget afin d’adapter les offres aux besoins réels des clients."
        ]);
        Work::create([
            'name' => 'Prixa',
            'label' => 'en=Annonce Website|fr=Site Web d\'annonce',
            'preview' => 'prixa.png',
            'slug' => 'prixa',
            'category' => 'en=Classified Ads Platform|fr=Plateforme d\'annonces',
            'client' => 'Alt Code',
            'year' => '2022',
            'description' => "en=Classified ads platform allowing users to publish and browse products for sale.\nDeveloped a full Laravel application with Inertia.js, Vue 3 and Tailwind CSS, including listings management, image uploads, categories, user accounts and contact features.\nSolved dynamic filtering and navigation challenges to provide fast browsing and a smooth user experience.|fr=Plateforme de petites annonces permettant aux utilisateurs de publier et consulter des produits à vendre.\nDéveloppement d’une application complète en Laravel avec Inertia.js, Vue 3 et Tailwind CSS, incluant la gestion des annonces, des images, des catégories, des comptes utilisateurs et des moyens de contact.\nRésolution des problématiques de filtrage dynamique et de navigation afin d’offrir une consultation rapide et fluide."
        ]);
        Work::create([
            'name' => 'Pharmagarde',
            'label' => 'en=find nearest pharmacy|fr=trouver la pharmacie la plus proche',
            'preview' => 'pharmagarde.png',
            'slug' => 'pharmagarde',
            'category' => 'en=Location-Based Web Application|fr=Application web géolocalisée',
            'client' => 'Alt Code',
            'year' => '2022',
            'description' => "en=Public service application to find pharmacies that are open at a specific time and nearby.\nDeveloped a dynamic WordPress application with custom features for pharmacy listings, schedules management and real-time availability display.\nImplemented time-based logic and distance prioritization to ensure users always see the closest open pharmacy first.|fr=Application de service public permettant de trouver les pharmacies ouvertes à une heure donnée et à proximité.\nDéveloppement d’une application WordPress dynamique avec des fonctionnalités personnalisées pour la gestion des pharmacies, des horaires et de la disponibilité.\nMise en place d’une logique basée sur l’heure et la proximité afin d’afficher en priorité la pharmacie ouverte la plus proche."
        ]);
    }
}
