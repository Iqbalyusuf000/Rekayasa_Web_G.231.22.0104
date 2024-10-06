<?php
$jsonobj = '{"Nama" : "Iqbal Yusuf", "NIM" : "G.231.22.0104", 
    "Kelas" : "Teknik Informatika Sore B",
    "Hobi" : "Olahraga, Makan dan Tidur"}';

// variabel to obj
$obj = json_decode($jsonobj);

// menampilkan seluruh object
foreach($obj as $key => $value) {
    echo $key . ":" . " " . $value . " ";
}

"<br>"

?>