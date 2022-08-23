<?php
$mahasiswa = [
          'nama' => 'saifur',
          'alamat' => 'kalinyamatan',
          'tanggal_lahir' => '5 Maret 1997',
          'umur' => 22
];

foreach($mahasiswa as $data){
          echo $data.' ';
          
}

echo "<br/>";

foreach($mahasiswa as $k => $v){
          echo $k.' : '.$v .'<br/>';
}
?>