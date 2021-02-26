<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;

class OrangSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'          => 'Kacung Haryanto',
                'alamat'        => 'Jr. PHH. Mustofa No. 896, Lubuklinggau 31987, Gorontalo',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'nama'          => 'Titi Usamah',
                'alamat'        => 'Gg. Karel S. Tubun No. 949, Bau-Bau 23886, NTB',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'nama'          => 'Samsul Saputra M.Ak',
                'alamat'        => 'Ds. Jend. A. Yani No. 186, Palangka Raya 26663, JaTim',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'nama'          => 'Harto Halim',
                'alamat'        => 'Ds. Babadan No. 203, Bau-Bau 27370, Jambi',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'nama'          => 'Wardi Nababan',
                'alamat'        => 'Gg. Cikapayang No. 47, Kediri 72238, Jambi',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'nama'          => 'Septi Safina Melani M.M.',
                'alamat'        => 'Kpg. Nakula No. 743, Bogor 98146, BaBel',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'nama'          => 'Daliono Utama',
                'alamat'        => 'Psr. Nanas No. 139, Administrasi Jakarta Utara 33231, SulBar',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'nama'          => 'Suci Widiastuti',
                'alamat'        => 'Gg. Gedebage Selatan No. 838, Batu 89825, Bengkulu',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'nama'          => 'Nadine Safitri',
                'alamat'        => 'Psr. B.Agam Dlm No. 32, Kendari 53466, SulUt',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'nama'          => 'Jarwi Budiyanto S.I.Kom',
                'alamat'        => 'Jln. Kartini No. 930, Langsa 12468, SumBar',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'nama'          => 'Violet Suryatmi S.Psi',
                'alamat'        => 'Dk. Bawal No. 717, Banda Aceh 12085, SulTra',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'nama'          => 'Fathonah Permata',
                'alamat'        => 'Ds. Reksoninten No. 78, Tual 89562, Bali',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'nama'          => 'Galuh Nashiruddin S.Pt',
                'alamat'        => 'Kpg. Gardujati No. 983, Sungai Penuh 51351, NTB',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'nama'          => 'Cengkal Waskita',
                'alamat'        => 'Jr. Baranang No. 778, Palopo 33845, MalUt',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'nama'          => 'Rahmi Farida S.Psi',
                'alamat'        => 'Dk. Untung Suropati No. 324, Banjarbaru 43791, SulTeng',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'nama'          => 'Cemeti Kasim Pradipta',
                'alamat'        => 'Kpg. Gedebage Selatan No. 774, Bau-Bau 79597, BaBel',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'nama'          => 'Elvin Gilang Mahendra',
                'alamat'        => 'Ds. Achmad Yani No. 655, Bau-Bau 61705, Bengkulu',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ],
            [
                'nama'          => 'Maras Siregar',
                'alamat'        => 'Jln. Madrasah No. 534, Balikpapan 35030, SulUt',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now()
            ]
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)", $data);

        // Using Query Builder
        // $this->db->table('orang')->insert($data);
        $this->db->table('orang')->insertBatch($data);
    }
}
