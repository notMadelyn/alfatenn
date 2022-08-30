<?php
 
namespace Database\Seeders;
 
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
 
class FirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=> 'buleskuts',
            'email' => 'buleskuts@gmail.com',
            'password'=> bcrypt('password'),
            'username'=> 'buleskuts'
        ]);
 
        User::create([
            'name'=> 'madelyn',
            'email' => 'madelyn@gmail.com',
            'password'=> bcrypt('password'),
            'username'=> 'madelyn'
        ]);
 
        User::create([
            'name'=> 'robben',
            'email' => 'robben@gmail.com',
            'password'=> bcrypt('password'),
            'username'=> 'robben'
        ]);
    }
}