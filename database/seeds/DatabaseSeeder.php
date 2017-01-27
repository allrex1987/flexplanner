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
            'phone'     => rand(1111111111,9999999999),
            'title'     => 'Tester',
            'password'	=> bcrypt('test'),
            'activated' => true,
        ));
		
		$alexUser = User::create(array(
            'name'		=> 'Alexandra Johansson',
            'email'		=> 'alexandra.johansson122@gmail.com',
            'phone' => rand(1111111111,9999999999),
            'title'     => 'Webmaster, Digital strateg',
            'password'	=> bcrypt('test'),
            'activated' => true,
        ));

        $johanUser = User::create(array(
            'name'      => 'Johan Veeborn',
            'email'     => 'johan.veeborn@gmail.com',
            'phone'     => rand(1111111111,9999999999),
            'title'     => 'Supervisor, Special forces',
            'password'  => bcrypt('test'),
            'activated' => true,
        ));

        $randomUser = User::create(array(
            'name'      => 'Random Dude',
            'email'     => 'Random.Dude@gmail.com',
            'phone'     => rand(1111111111,9999999999),
            'title'     => 'Specialis, Random jobs',
            'password'  => bcrypt('test'),
            'activated' => true,
        ));


        //TEAMS
        DB::table('teams')->delete();
        
        $team_1 = Team::create(array(
            'team_name' => 'Stena Line Inhouse',
            'email'     => 'alexandra.johansson@stenaline.com',
            'phone'     => rand(1111111111,9999999999),
            'adress'    => 'En bra adress 3',
        ));
        $team_2 = Team::create(array(
            'team_name' => 'Tinypickle',
            'email'     => 'info@tinypickle.com',
            'phone'     => rand(1111111111,9999999999),
            'adress'    => 'En bra adress 3',
        ));


        $team_3 = Team::create(array(
            'team_name' => 'Everyones Team',
            'email'     => 'info@team.com',
            'phone'     => rand(1111111111,9999999999),
            'adress'    => 'Storgatan 1',
        ));

        //MEMBERSHIPS
        DB::table('memberships')->delete();


        // $membership_admin_team_1 = New Membership([
        //     'role_id' => Role::ADMIN,
        //     'team_id' => $team_1->id,
        // ]);

        // $membership_member_team_1 = New Membership([
        //     'role_id' => Role::MEMBER,
        //     'team_id' => $team_1->id,
        // ]);

        // $membership_admin_team_2 = New Membership([
        //     'role_id' => Role::ADMIN,
        //     'team_id' => $team_2->id,
        // ]);

        // $membership_member_team_2 = New Membership([
        //     'role_id' => Role::MEMBER,
        //     'team_id' => $team_2->id,
        // ]);

        // $membership_admin_team_3 = New Membership([
        //     'role_id' => Role::ADMIN,
        //     'team_id' => $team_3->id,
        // ]);

        // $membership_member_team_3 = New Membership([
        //     'role_id' => Role::MEMBER,
        //     'team_id' => $team_3->id,
        // ]);


        //Team 1 relations
        $alexUser->memberships()->save(New Membership([
            'role_id' => Role::ADMIN,
            'team_id' => $team_1->id,
        ]));
        $testUser->memberships()->save(New Membership([
            'role_id' => Role::MEMBER,
            'team_id' => $team_1->id,
        ]));
        $johanUser->memberships()->save(New Membership([
            'role_id' => Role::MEMBER,
            'team_id' => $team_1->id,
        ]));
        $randomUser->memberships()->save(New Membership([
            'role_id' => Role::MEMBER,
            'team_id' => $team_1->id,
        ]));

        //Team 2 relations
        $testUser->memberships()->save(New Membership([
            'role_id' => Role::ADMIN,
            'team_id' => $team_2->id,
        ]));
        $johanUser->memberships()->save(New Membership([
            'role_id' => Role::ADMIN,
            'team_id' => $team_2->id,
        ]));
        $randomUser->memberships()->save(New Membership([
            'role_id' => Role::ADMIN,
            'team_id' => $team_2->id,
        ]));
        $alexUser->memberships()->save(New Membership([
            'role_id' => Role::MEMBER,
            'team_id' => $team_2->id,
        ]));


        //Team 3 relations
        $testUser->memberships()->save($membership_member_team_3 = New Membership([
            'role_id' => Role::MEMBER,
            'team_id' => $team_3->id,
        ]));
        $alexUser->memberships()->save($membership_member_team_3 = New Membership([
            'role_id' => Role::MEMBER,
            'team_id' => $team_3->id,
        ]));
        $johanUser->memberships()->save($membership_member_team_3 = New Membership([
            'role_id' => Role::MEMBER,
            'team_id' => $team_3->id,
        ]));
        $randomUser->memberships()->save($membership_member_team_3 = New Membership([
            'role_id' => Role::MEMBER,
            'team_id' => $team_3->id,
        ]));
	}
}
