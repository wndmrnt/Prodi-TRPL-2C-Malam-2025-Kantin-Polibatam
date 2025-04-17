<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $nim = '4342' . str_pad($i + 1, 5, '0', STR_PAD_LEFT);
            $nama = ['Jhon', 'Kharlos', 'Fadhal', 'Hadasa', 'Winda'];
            $nama_acak = $nama[array_rand($nama)];
            $email = "$nama_acak.$nim@students.polibatam.ac.id";
        
            Student::create([
                'nim' => $nim,
                'nama' => $nama_acak,
                'email' => $email,
                'prodi' => "D4 Teknologi Rekayasa Perangkat Lunak",
            ]);
        }
    }
}