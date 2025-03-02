<?php

namespace Database\Seeders;

use App\Models\AgendaCategory;
use App\Models\ArticleCategory;
use App\Models\Category;
use App\Models\CategoryLink;
use App\Models\Images;
use App\Models\Member;
use App\Models\News;
use App\Models\Opd;
use App\Models\Party;
use App\Models\Pengumuman;
use App\Models\PengumumanCategory;
use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use GuzzleHttp\Promise\Create;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $data = [
        //     'data' => [
        //         'nama' => [
        //             'Badan Kepegawaian dan Pengembangan Sumber Daya Manusia',
        //             'Badan Kesatuan Bangsa dan Politik',
        //             'Badan Penanggulangan Bencana Daerah',
        //             'Badan Pengelolaan Keuangan Daerah',
        //             'Badan Pengelolaan Pendapatan Daerah',
        //             'Badan Perencanaan Pembangunan Daerah, Penelitian Dan Pengembangan',
        //             'Dinas Kependudukan Dan Pencatatan Sipil',
        //             'Dinas Kesehatan',
        //             'Dinas Komunikasi Dan Informatika',
        //             'Dinas Koperasi UKM dan Perdagangan',
        //             'Dinas Pangan dan Perikanan',
        //             'Dinas Pariwisata, Pemuda Dan Olahraga',
        //             'Dinas Pekerjaan Umum, Penataan Ruang dan Pertanahan',
        //             'Dinas Pemberdayaan Masyarakat Desa, Pengendalian Penduduk Dan Keluarga Berencana',
        //             'Dinas Penanaman Modal, Pelayanan Terpadu Satu Pintu',
        //             'Dinas Pendidikan Dan Kebudayaan',
        //             'Dinas Perhubungan',
        //             'Dinas Perpustakaan Dan Kearsipan',
        //             'Dinas Pertanian',
        //             'Dinas Perumahan Rakyat, Kawasan Pemukiman Dan Lingkungan Hidup',
        //             'Dinas Sosial, Pemberdayaan Perempuan Dan Perlindungan Anak',
        //             'Dinas Tenaga Kerja dan Perindustrian',
        //             'Inspektorat',
        //             'Kantor Camat Batipuh',
        //             'Kantor Camat Batipuh Selatan',
        //             'Kantor Camat Lima Kaum',
        //             'Kantor Camat Lintau Buo',
        //             'Kantor Camat Lintau Buo Utara',
        //             'Kantor Camat Padang Ganting',
        //             'Kantor Camat Pariangan',
        //             'Kantor Camat Rambatan',
        //             'Kantor Camat Salimpaung',
        //             'Kantor Camat Sungai Tarab',
        //             'Kantor Camat Sungayang',
        //             'Kantor Camat Tanjung Baru',
        //             'Kantor Camat Tanjung Emas',
        //             'Kantor Camat X Koto',
        //             'RSUD M.A Hanafiah SM Batusangkar',
        //             'Satuan Polisi Pamong Praja Dan Pemadam Kebakaran',
        //             'Sekretariat Daerah',
        //             'Sekretariat DPRD',
        //         ],
        //         'kode' => ['01.01.', '37.01.', '05.01.', '04.01.', '48.01.', '06.01.', '07.01.', '08.01.', '09.01.', '10.01.', '11.01.', '12.01.', '13.01.', '14.01.', '15.01.', '16.01.', '17.01.', '18.01.', '19.01.', '20.01.', '21.01.', '49.01.', '22.01.', '23.01.', '24.01.', '25.01.', '26.01.', '27.01.', '28.01.', '29.01.', '30.01.', '31.01.', '32.01.', '33.01.', '34.01.', '35.01.', '36.01.', '38.01.', '39.01.', '02.01.', '03.01.'],
        //     ],
        // ];
        // for ($i = 0; $i < count($data['data']['nama']); $i++) {
        //     Opd::create([
        //         'nama_opd' => $data['data']['nama'][$i],
        //         'kode_opd' => $data['data']['kode'][$i],
        //     ]);
        // }
        // User::factory(30)->create();
        Role::create([
            'name' => 'admin',
        ]);
        Role::create([
            'name' => 'member',
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'username' => 'test',
            'password' => 'rahasia',


        ]);
        User::factory()->create([
            'name' => 'Test User2',
            'email' => 'test2@example.com',
            'username' => 'test2',
            'password' => 'rahasia',

        ]);

        $user  = User::find(1);
        $user->roles()->attach(1);

        $user  = User::find(2);
        $user->roles()->attach(2);

        // for ($i = 1; $i <= 30; $i++) {
        //     Category::create([
        //         'nama' => 'KategoriBerita' . $i,
        //     ]);
        // }

        // for ($i = 1; $i <= 30; $i++) {
        //     ArticleCategory::create([
        //         'nama' => 'KategoriArticle' . $i,
        //     ]);
        // }

        // for ($i = 1; $i <= 30; $i++) {
        //     PengumumanCategory::create([
        //         'nama' => 'KategoriPengumuman' . $i,
        //     ]);
        // }

        // for ($i = 1; $i <= 30; $i++) {
        //     AgendaCategory::create([
        //         'nama' => 'KategoriAgenda' . $i,
        //     ]);
        // }

        // Post::create([
        //     'judul' => 'test',
        //     'article' => 'test',
        //     'user_id' => 1,
        //     'cat_id' => 1
        // ]);

        Category::create([
            'nama' => 'Kegiatan'
        ]);
        Category::create([
            'nama' => 'Rapat & Acara'
        ]);
        Category::create([
            'nama' => 'Artikel'
        ]);

        for ($i = 1; $i <= 5; $i++) {
            $party = Party::create([
                 'name' => 'PartaiSatu' . $i,
                 'initial' => 'PS' . $i,
             ]);
             if($party){
                 Images::create(
                  [
                     'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Partai_Gerindra_logo.jpg/870px-Partai_Gerindra_logo.jpg',
                     'party_id' => $party->id
                  ]);
             }
          }



        //  for ($i = 1; $i <= 5; $i++) {
        //    $party = Party::create([
        //         'name' => 'PartaiSatu' . $i,
        //         'initial' => 'PS' . $i,
        //     ]);
        //     if($party){
        //         $imageParty = 'https://dprd.padang.go.id/uploads/images/image_big_671725456e3c1.jpg';
        //         $fileNameParty = 'party' . $party->id . '_' . Str::random(10) . '.jpg';
        //         $partiImageContent = file_get_contents($imageParty);
        //         Storage::disk('public')->put('images/' . $fileNameParty, $partiImageContent);
        //         Images::create(
        //          [
        //             'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Partai_Gerindra_logo.jpg/870px-Partai_Gerindra_logo.jpg',
        //             'party_id' => $party->id
        //          ]);
        //     }
        //  }


        //  for ($i = 1; $i <= 10; $i++) {
        //     $anggota = Member::create([
        //         'nama' => 'Anggota' . $i,
        //         'lahir' => 'Padang, 30 Mai 1996',
        //         'agama' => 'Islam',
        //         'dapil' => 'Dapil Sekian',
        //         'status' => 'anggota',
        //         'party_id' => 1
        //     ]);

        //     if ($anggota) {
        //         $imageUrl = 'https://dprd.padang.go.id/uploads/images/image_big_671725456e3c1.jpg';
        //         $filename = 'member_' . $anggota->id . '_' . Str::random(10) . '.jpg';
        //         $imageContent = file_get_contents($imageUrl);
        //         Storage::disk('public')->put('images/' . $filename, $imageContent);
        //         Images::create([
        //             'image' => 'images/' . $filename,
        //             'member_id' => $anggota->id
        //         ]);
        //     }
        //   }

        //   for ($i = 1; $i <= 2; $i++) {
        //     $anggota = Member::create([
        //         'nama' => 'Anggota' . $i,
        //         'lahir' => 'Padang, 30 Mai 1996',
        //         'agama' => 'Islam',
        //         'dapil' => 'Dapil Sekian',
        //         'status' => 'ketua',
        //         'party_id' => 1

        //     ]);

        //     if ($anggota) {
        //         $imageUrl = 'https://dprd.padang.go.id/uploads/images/image_big_671725456e3c1.jpg';
        //         $filename = 'member_' . $anggota->id . '_' . Str::random(10) . '.jpg';
        //         $imageContent = file_get_contents($imageUrl);
        //         Storage::disk('public')->put('images/' . $filename, $imageContent);
        //         Images::create([
        //             'image' => 'images/' . $filename,
        //             'member_id' => $anggota->id
        //         ]);
        //     }
        //   }

        //   for ($i = 1; $i <= 2; $i++) {
        //     $anggota = Member::create([
        //         'nama' => 'Anggota' . $i,
        //         'lahir' => 'Padang, 30 Mai 1996',
        //         'agama' => 'Islam',
        //         'dapil' => 'Dapil Sekian',
        //         'status' => 'wakil ketua',
        //         'party_id' => 1,
        //     ]);

        //     if ($anggota) {
        //         $imageUrl = 'https://dprd.padang.go.id/uploads/images/image_big_671725456e3c1.jpg';
        //         $filename = 'member_' . $anggota->id . '_' . Str::random(10) . '.jpg';
        //         $imageContent = file_get_contents($imageUrl);
        //         Storage::disk('public')->put('images/' . $filename, $imageContent);
        //         Images::create([
        //             'image' => 'images/' . $filename,
        //             'member_id' => $anggota->id
        //         ]);
        //     }
        //   }



        //   for ($i = 1; $i <= 10; $i++) {
        //     $blog = News::create([
        //         'title' => 'What is Lorem Ipsum?' . $i,
        //         'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
        //         'description' => 'test',
        //         'keyword' => 'test',
        //         'status' => 1,
        //         'headline' => 1,
        //         'cat_id' => 1,
        //         'user_id' => 1
        //     ]);

        //     if ($blog) {
        //         $thumbsUrl = 'https://dprd.padang.go.id/uploads/images/image_default_6597c64b61728.jpg';
        //         $blogImgUrl = 'https://dprd.padang.go.id/uploads/images/image_big_6597c64b28362.jpg';
        //         $blogImgName = 'blog' . $blog->id . '_' . Str::random(10) . '.jpg';
        //         $thumbname = 'thumbs' . $blog->id . '_' . Str::random(10) . '.jpg';
        //         $blogContent = file_get_contents($thumbsUrl);
        //         $thumbContent = file_get_contents($blogImgUrl);
        //         Storage::disk('public')->put('images/' . $blogImgName, $blogContent);
        //         Storage::disk('public')->put('images/thumbs/' . $thumbname, $thumbContent);
        //         Images::create([
        //             'image' => 'images/' . $filename,
        //             'thumbnail' => 'thumbs/' . $blogImgName,
        //             'news_id' => $blog->id
        //         ]);
        //     }
        //   }
    }
}
