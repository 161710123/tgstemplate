<?php

use Illuminate\Database\Seeder;

class dikaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
       {
        $adit=[
        	['nis'=>'1617110085','nama_siswa'=>'Dika','alamat'=>'cibaduyut','tempat_lahir'=>'bandung','cita_cita'=>'programmer','tanggal_lahir'=>'2001-06-07','hobi'=>'main gitar','foto'=>'a.jpg'	]
        ];
        DB::table('siswas')->insert($adit);
    }
}

