<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "students";

$conn = new mysqli('localhost', 'root', '', 'students');  //database bağlamak için

if ($conn->connect_error) {
    die("CONNECTION FAILED:" . $conn->connect_error);
}

//tablo oluşturma kısmı
$sql_create_table = "CREATE TABLE IF NOT EXISTS STUDENTS (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    gender ENUM('Male','Female') NOT NULL
)";

if ($conn->query($sql_create_table) === FALSE) {
    echo "ERROR, TABLE NOT CREATED" . $$conn->error;
    $conn->close();
    exit;
}

//verileri registrationform dan çekme
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];

//users tablosuna verileri ekleme
$sql_insert_data = "INSERT INTO STUDENTS (full_name,email,gender)
                  VALUES ('$full_name','$email','$gender')";
if ($conn->query($sql_insert_data) === TRUE) {
    echo "STUDENTS REGISTRATED SUCCESSFULLY ";
} else {
    echo "ERROR" . $sql_insert_data . "<br>" . $conn->error;
}

//verileri görüntüleme
$sql_select_data = "SELECT * FROM STUDENTS";
$result = $conn->query($sql_select_data);

if ($result->num_rows > 0) {
    echo "<h2>Registered student : </h2>";
    echo "<table border = '1'>
            <tr>
            <th>ID</th>
            <th>Full_Name</th>
            <th>Email</th>
            <th>Gender</th>
</tr>";

    while ($row = $result->fetch_assoc()) {  //fetch_assoc -> bir sonuç satırını ilişkisel dizi olarak getirir.
        echo "<tr>
              <td>" . $row['id'] . "</td>
              <td>" . $row['full_name'] . "</td>
              <td>" . $row['email'] . "</td>
              <td>" . $row['gender'] . "</td>
</tr>";
    }
    echo "</table>";
} else {
    echo "THERE IS NOT REGISTERED STUDENT DATA";
}

$conn->close();

