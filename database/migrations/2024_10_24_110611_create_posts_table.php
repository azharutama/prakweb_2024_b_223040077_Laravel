<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->string('slug')->unique();
            $table->text('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};


App\Models\Post::create([
    'title' => 'Artikel Ilmiah Populer',
    'author' => 'fawas',
    'slug' => 'Artikel-Ilmiah-Popular',
    'body' => 'Belakangan ini, isu kesehatan mental sering diperbincangkan oleh banyak kalangan, salah satunya di dunia kerja. Di lingkungan kerja sendiri, kesehatan mental yang stabil dan terjaga akan membuat para karyawan lebih bahagia dan produktif dalam bekerja. Hal ini didorong oleh perusahaan serta para atasan yang suportif dan apresiatif, sehingga para karyawan menjadi lebih semangat dalam mencapai target perusahaan serta menimbun ilmu dari pekerjaan yang dilakukan. 

Menurut Celestinus Eigya Munthe selaku Direktur Kesehatan Jiwa dan NAPZA Kementerian Kesehatan, terjadi peningkatan gangguan kesehatan mental saat pandemi terjadi di tahun 2020, seperti 6,8% meningkatnya penderita gangguan kecemasan dan 8,5% mengalami depresi. Kemudian, Kementerian Kesehatan RI juga mencatat bahwa lebih dari 1.000 orang melakukan percobaan bunuh diri. Munculnya gangguan kesehatan jiwa ini berawal dari burnout yang berkepanjangan.

Dalam dunia kerja, hal ini dipicu oleh banyaknya tekanan dari perusahaan yang berimbas secara psikologis dan emosional pekerja. Kemudian, terjadilah gejala psikosomatis yang mempengaruhi kesehatan fisik tubuh. Misalnya, rasa sakit perut hingga mual dan muntah saat perjalanan kantor, sakit kepala menjelang tidur malam.'
]);
