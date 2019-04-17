<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title' => "This is Title Number 1",
            'content' => '
            <p>Bosstan v1.3.1 telah dirilis. Rilis ini merupakan rilis dengan penambahan fitur penambahan laporan untuk menyesuaikan aplikasi dengan <a href="https://bosstan.id/forum/thread/4/7/9/juknis-bos-kemendagri-2018-dan-dampaknya-terhadap-pelaporan-bos-di-pemda-dan-pada-aplikasi-bosstan" target="_blank" rel="noreferrer noopener">SE Kemendagri 971-7791 Tahun 2018 tentang Juknis Bos Kemendagri</a>.</p><p><span style="color:rgb(68,68,68);">Tambahan Fitur:</span></p><ol><li>Refactoring Laporan menjadi satu model dan view laporan</li><li>Refactoring view laporan dengan fpdfextended</li><li>Tambahan menu laporan administratif (Bukti Penerimaan, Bukti Pengeluaran, SPJ)</li><li>Cetak Bukti Penerimaan dan SPTMH pada menu laporan administratif</li><li>Cetak bukti pengeluaran dan invoice pada menu laporan administratif</li><li>Cetak bukti SPJ pada dan SPTJ pada menu laporan administratif</li><li>Tambahan Laporan berdasarkan SE 971-7791 Tahun 2018 tentang Juknis Bos Kemendagri SPTMH</li><li>Tambahan Laporan berdasarkan SE 971-7791 Tahun 2018 tentang Juknis Bos Kemendagri SPTJ</li><li>Tambahan Laporan berdasarkan SE 971-7791 Tahun 2018 tentang Juknis Bos Kemendagri SP2B</li><li>Tambahan Laporan berdasarkan SE 971-7791 Tahun 2018 tentang Juknis Bos Kemendagri SPB</li><li>Tampilan login baru dengan bootstrap 4</li></ol><p><br /></p><p><span style="color:rgb(68,68,68);">Fix Bug</span></p><ol><li>Perbaikan pengambilan data potongan pada menu setoran</li><li>Perbaikan tampilan login</li></ol><p><br /></p><p><br /></p>
            ',
            'published' => 1,
            'archived' => 0,
        ]);
    }
}
