<html>
 <body>
    <?php
$SchoolName = $_POST['SchoolName'];
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Email = $_POST['Email'];
$DateOfBirth = $_POST['DateOfBirth'];
$DateOfBirth = $_POST['Phone'];
$Gender = $_POST['Gender'];
$Password = $_POST['Password'];
//database connection
$conn = new mysqli('127.0.0.1','root','8(0xz7_)-c/61(aI','teacher');
if($conn->connect_error){
    echo('connection Failed:'.$conn->connect_error);

}else{
    $stmt = $conn->prepare("insert into teacher($SchoolName, $FirstName, $LastName, $Email, $DateOfBirth, $Phone, $Gender, $Password) values(?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->execute();
echo "Welcome to ThunderExam";
$stmt->close();
$conn->close();
}
?>
</body>
</html>