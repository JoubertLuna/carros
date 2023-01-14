<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    User::create([
      'nome_completo' => 'Administrador - Carros',
      'email' => Str::random(3) . '@carros.com',
      'password' => Hash::make('@admin123'),
      'cep' => '00000-000',
    ]);
  }
}
