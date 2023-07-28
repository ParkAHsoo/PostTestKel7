<?PHP
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mahasiswa';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
die('connection failed' . mysqli_connect_eror());
}
//echo "connected succesfully";