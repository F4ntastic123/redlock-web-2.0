<?php 

$host = 'db';

$user = 'MYSQL_USER';

$pass = 'MYSQL_PASSWORD';

$mydatabase = 'Redlockdb';


$conn = new mysqli($host, $user, $pass, $mydatabase);

$sql = 'SELECT * FROM users';

if ($result = $conn->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

foreach ($users as $user) {
    echo $user->ID;
    echo "<br>";
    echo $user->Nama;
    echo "<br>";
    echo $user->Alamat;
    echo "<br>";
    echo $user->Jabatan;
    echo "<br>";
    echo "|||||||||||||||||||||||||||||||||||||||||||||||||||||||";
    echo "<br>";
}