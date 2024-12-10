<?php

namespace Database\Seeders;

use App\Enum\PermissionsEnum;
use App\Enum\RolesEnum;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $userRole=Role::create(['name'=>RolesEnum::User]);
        $adminRole=Role::create(['name'=>RolesEnum::Admin]);
        $commenterRole=Role::create(['name'=>RolesEnum::Commenter]);

        $manageCommentPermission=Role::create(['name'=>PermissionsEnum::ManageComment]);
        $manageUserPermission=Role::create(['name'=>PermissionsEnum::ManageUsers]);
        $manageFeaturePermission=Role::create(['name'=>PermissionsEnum::ManageFeature]);
         $upvoteDownvotePermission=Role::create(['name'=>PermissionsEnum::UpvoteDownvote]);


         $userRole->syncPermissions([$upvoteDownvotePermission]);
         $commenterRole->syncPermissions([$upvoteDownvotePermission,$manageCommentPermission]);
         $adminRole->syncPermissions([$upvoteDownvotePermission,$manageCommentPermission,$manageFeaturePermission,$$manageUserPermission]);

        User::factory()->create([
            'name' => 'User User',
            'email' => 'user@example.com',
        ])->assignRole($userRole);
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
        ])->assignRole($adminRole);
        User::factory()->create([
            'name' => 'Commenter User',
            'email' => 'commenter@example.com',
        ])->assignRole($commenterRole);
    }
}
