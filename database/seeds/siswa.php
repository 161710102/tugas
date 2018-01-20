<?php

use Illuminate\Database\Seeder;

class siswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $a=[
            ['nis'=>'123456','nama_siswa'=>'Dheri','alamat'=>'Banjarsari','tempat_lahir'=>'Pangandaran','cita_cita'=>'M','tanggal_lahir'=>'1999-01-01','hobi'=>'Q','foto'=>'bojan.jpg' ],
            ['nis'=>'424422','nama_siswa'=>'Agung','alamat'=>'Kedungwuluh','tempat_lahir'=>'Jakarta','cita_cita'=>'N','tanggal_lahir'=>'1999-02-02','hobi'=>'R','foto'=>'inkyun.jpg'],
            ['nis'=>'534212','nama_siswa'=>'Rizal','alamat'=>'Padaherang','tempat_lahir'=>'Bandung','cita_cita'=>'O','tanggal_lahir'=>'1999-03-03','hobi'=>'S','foto'=>'igbonefo.jpg'],
            ['nis'=>'2312331','nama_siswa'=>'Sandika','alamat'=>'BuahBatu','tempat_lahir'=>'Bogor','cita_cita'=>'P','tanggal_lahir'=>'1999-04-04','hobi'=>'T','foto'=>'5.jpg'],
        ];
        DB::table('tugas')->insert($a);
    }
}
