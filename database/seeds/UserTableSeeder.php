<?php
/*
    Nama File   :UserTableSeeder.php
    NIM         :11S17023
    Kelas       :14 IF 1
*/

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'id'=>1,
            'email'=>'ifs17023@itdel',
            'password'=>'gantengx123'
            
        ]);
        //
    }
}
