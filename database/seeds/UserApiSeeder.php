<?php

use Illuminate\Database\Seeder;

class UserApiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarioapi = [
            'name' => 'api',
            'email' => 'api@api.com',
            'api_token' => base64_encode('api@api,com')
        ];

        DB::table('usuarios_api')->insert($usuarioapi);
    }
}
