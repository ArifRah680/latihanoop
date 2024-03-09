<?php
    $mahasiswa = [
        'nim' => '2222105227',
        'nama' => 'yusril',
        'kelas' => '2TI04',
        'jurusan' => 'Teknik Informatika',
        'fakultas' => 'Teknik',
    ];

    //echo $mahasiswa['nim']. "<br>";
    //echo $mahasiswa['nama'];

    $mahasiswaBanyak = [
        [
            'nim' => '2222105227',
            'nama' => 'Anis',
            'kelas' => '2TI04',
            'jurusan' => 'Teknik Informatika',
            'fakultas' => 'Teknik',
        ],
        [
            'nim' => '2222105227',
            'nama' => 'Anis',
            'kelas' => '2TI04',
            'jurusan' => 'Teknik Informatika',
            'fakultas' => 'Teknik',
        ],
        [
            'nim' => '2222105227',
            'nama' => 'Anis',
            'kelas' => '2TI04',
            'jurusan' => 'Teknik Informatika',
            'fakultas' => 'Teknik',
        ],  
    ];
    foreach ($mahasiswaBanyak as $tampil11) {
        echo $tampil11['nim'],"<br>";
        echo $tampil11['nama'],"<br>";
        echo $tampil11['kelas'],"<br>";
        echo $tampil11['jurusan'],"<br>";
        echo $tampil11['fakultas'],"<br>";
    }