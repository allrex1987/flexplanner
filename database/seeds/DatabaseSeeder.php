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

        // $this->call('UserTableSeeder');
        $this->call('UserTableSeeder');
		$this->call('RolesTableSeeder');
		$this->call('TeamsTableSeeder');
		$this->call('MembershipsTableSeeder');

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
        ));
		
		$alexUser = User::create(array(
            'name'		=> 'Alexandra Johansson',
            'email'		=> 'alexandra.johansson122@gmail.com',
            'password'	=> bcrypt('test'),
        ));

	}
}

class RolesTableSeeder extends Seeder {
    public function run() {
		
		DB::table('roles')->delete();
		
		$admin = Role::create(array(
            'role_name' => 'admin',
        ));
		$member = Role::create(array(
            'role_name' => 'member',
        ));
		$sadmin = Role::create(array(
            'role_name' => 'sadmin',
        ));
    }
}

class TeamsTableSeeder extends Seeder {
    public function run() {
		
		DB::table('teams')->delete();
		
		$stenaline = Team::create(array(
            'team_name' => 'Stena Line Inhouse',
            'email' => 'alexandra.johansson@stenaline.com',
			'phone' => rand(1111111111,9999999999),
			'adress' => 'En bra adress 3',
        ));
		$tinypickle = Team::create(array(
            'team_name' => 'Tinypickle',
            'email' => 'info@tinypickle.com',
			'phone' => rand(1111111111,9999999999),
			'adress' => 'En bra adress 3',
        ));
    }
}

class MembershipsTableSeeder extends Seeder {
    public function run() {
		
		DB::table('memberships')->delete();
		
		$stenaline_admin = Membership::create(array(
            'user_id' => 1,
            'role_id' => 1,
			'team_id' => 1,
        ));
		$stenaline_member = Membership::create(array(
            'user_id' => 2,
            'role_id' => 2,
			'team_id' => 1,
        ));
		$tinypickle_admin = Membership::create(array(
            'user_id' => 2,
            'role_id' => 1,
			'team_id' => 2,
        ));
    }
}
