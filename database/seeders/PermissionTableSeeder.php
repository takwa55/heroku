<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'permission-list',
            'permission-create',
            'permission-edit',
            'permission-delete', 


            'Les Enquetes_Traitées',
            'Liste des enquetes/locale',
            'Liste des enquetes/Wilayas',

            'Service_Revision',
            'Demande Revision /338',
            'Instance Revision',
            'Modifier_instance_Revision',
            'Suprimer_instance_Revision',


            'Service_Liquidation',
            'Demande 1-ier_paiement',
            'Instance 1-ier_paiement',
            'Modifier_instance_Premier_Paiement',
            'Suprimer_instance_Premier_Paiement',



            'Statistique',
            'Statistique_Constantine',
            'Statistique_Wilaya',


            'Les Utilisateurs',
            'List des Utilisateurs',
            'Pouvoir de controle',

            'Ajouter_locale',
            'Modifier_locale',
            'Suprimer_locale',

            'Ajouter_wilaya',
            'Modifier_wilaya',
            'Suprimer_wilaya',
        ];

        foreach ($data as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}