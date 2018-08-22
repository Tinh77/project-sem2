<?php

use App\User;
use jeremykenedy\LaravelRoles\Models\Role;
use jeremykenedy\LaravelRoles\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

	    /**
	     * Add Permissions
	     *
	     */
        if (Permission::where('name', '=', 'User Management')->first() === null) {
			Permission::create([
			    'name' => 'User Management',
			    'slug' => 'mgmt.users',
			    'description' => '[Super Administrator] Can do anything about managing users',
			    'model' => 'Permission',
			]);
        }

        if (Permission::where('name', '=', 'Log Management')->first() === null) {
            Permission::create([
                'name' => 'Log Management',
                'slug' => 'mgmt.logs',
                'description' => '[Super Administrator] Can view logs, routes that have been defined',
                'model' => 'Permission',
            ]);
        }

        if (Permission::where('name', '=', 'Transaction Management')->first() === null) {
			Permission::create([
			    'name' => 'Transaction Management',
			    'slug' => 'mgmt.transactions',
			    'description' => '[Seller/Moderator] Can do anything about managing sales-related',
			    'model' => 'Permission',
			]);
        }

        if (Permission::where('name', '=', 'Product Management')->first() === null) {
			Permission::create([
			    'name' => 'Product Management',
			    'slug' => 'mgmt.products',
			    'description' => '[Seller/Moderator] Can do anything about managing categories & gifts',
			    'model' => 'Permission',
			]);
        }

        if (Permission::where('name', '=', 'quanganh9x')->first() === null) {
			Permission::create([
			    'name' => 'quanganh9x',
			    'slug' => 'quanganh9x',
			    'description' => 'Ahihi, đồ ngốk!',
			    'model' => 'Permission',
			]);
        }

    }
}
