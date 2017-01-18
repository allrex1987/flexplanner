<?php

use App\User;
use App\Role;
use App\Team;
use App\Membership;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Model::unguard();

        $this->call('UserTableSeeder');

        Model::reguard();
		
    }
}

class UserTableSeeder extends Seeder {
	public function run() {

		DB::table('users')->delete();

		$testUser = User::create(array(
            'name'		=> str_random(10),
            'email'		=> 'test@test.com',
            'password'	=> bcrypt('test'),
            'activated'  => true,
        ));
		
		$alexUser = User::create(array(
            'name'		=> 'Alexandra Johansson',
            'email'		=> 'alexandra.johansson122@gmail.com',
            'password'	=> bcrypt('test'),
            'activated'  => true,
        ));

        //ROLES
        DB::table('roles')->delete();
        
        $role_admin = Role::create(array(
            'role_name' => 'admin',
        ));
        $role_member = Role::create(array(
            'role_name' => 'member',
        ));
        $role_sadmin = Role::create(array(
            'role_name' => 'sadmin',
        ));

        //TEAMS
        DB::table('teams')->delete();
        
        $team_1 = Team::create(array(
            'team_name' => 'Stena Line Inhouse',
            'email' => 'alexandra.johansson@stenaline.com',
            'phone' => rand(1111111111,9999999999),
            'adress' => 'En bra adress 3',
        ));
        $team_2 = Team::create(array(
            'team_name' => 'Tinypickle',
            'email' => 'info@tinypickle.com',
            'phone' => rand(1111111111,9999999999),
            'adress' => 'En bra adress 3',
        ));


        //MEMBERSHIPS
        DB::table('memberships')->delete();

        $membership_1 = New Membership([
            'role_id' => $role_admin->id,
            'team_id' => $team_1->id,
        ]);

        $membership_2 = New Membership([
            'role_id' => $role_admin->id,
            'team_id' => $team_2->id,
        ]);

        $membership_3 = New Membership([
            'role_id' => $role_member->id,
            'team_id' => $team_2->id,
        ]);

        $testUser->memberships()->save($membership_1);
        $testUser->memberships()->save($membership_2);
        $alexUser->memberships()->save($membership_3);

	}
}
