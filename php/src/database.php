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

 // Hitung jumlah user
 $total_users = count($users);
    
 // Tampilkan jumlah user
 echo "Total users: " . $total_users;