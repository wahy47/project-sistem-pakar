<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Gejala;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Gejala::create([
            'gejala' => 'Tidak mampu memahami situasi dan orang-orang'
        ]);

        Gejala::create([
            'gejala' => 'Tidak dapat melakukan aktivitas sehari-hari seperti merawat anak atau pergi ke sekolah atau tempat kerja'
        ]);

        Gejala::create([
            'gejala' => 'Rasa lelah yang signifikan, energi menurun, atau mengalami masalah tidur'
        ]);

        Gejala::create([
            'gejala' => 'Perubahan gairah seks'
        ]);

        Gejala::create([
            'gejala' => 'Perubahan drastis dalam kebiasaan makan, seperti makan terlalu banyak atau terlalu sedikit'
        ]);

        Gejala::create([
            'gejala' => 'Merokok, minum alkohol lebih dari biasanya, atau bahkan menggunakan narkoba'
        ]);

        Gejala::create([
            'gejala' => 'Merasa sedih, tidak berarti, tidak berdaya, putus asa, atau tanpa harapan'
        ]);

        Gejala::create([
            'gejala' => 'Merasa bingung, pelupa, marah, tersinggung, cemas, kesal, khawatir, dan takut yang tidak biasa'
        ]);

        Gejala::create([
            'gejala' => 'Mengalami perubahan suasana hati drastis yang menyebabkan masalah dalam hubungan dengan orang lain'
        ]);

        Gejala::create([
            'gejala' => 'Mengalami nyeri yang tidak dapat dijelaskan'
        ]);

        Gejala::create([
            'gejala' => 'Mendengar suara atau mempercayai sesuatu yang tidak benar'
        ]);

        Gejala::create([
            'gejala' => 'Menarik diri dari orang-orang dan kegiatan sehari-hari'
        ]);

        Gejala::create([
            'gejala' => 'Memiliki pikiran untuk menyakiti diri sendiri atau orang lain'
        ]);

        Gejala::create([
            'gejala' => 'Memiliki pengalaman dan kenangan buruk yang tidak dapat dilupakan'
        ]);

        Gejala::create([
            'gejala' => 'Marah berlebihan dan rentan melakukan kekerasan'
        ]);

        Gejala::create([
            'gejala' => 'Ketidakmampuan untuk mengatasi stres atau masalah sehari-hari'
        ]);

        Gejala::create([
            'gejala' => 'Ketakutan, kekhawatiran, atau perasaan bersalah yang selalu menghantui'
        ]);

        Gejala::create([
            'gejala' => 'Kehilangan kemampuan untuk berkonsentrasi'
        ]);

        Gejala::create([
            'gejala' => 'Delusi, paranoia, atau halusinasi'
        ]);

        Gejala::create([
            'gejala' => 'Berteriak atau berkelahi dengan keluarga dan teman-teman'
        ]);
    }
}
