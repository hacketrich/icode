<html>
    <?php
$SchoolName = $_POST['SchoolName'];
$FirstName = $_POST['FirstName'];
$LastName = $_POST['lastName'];
$ClassBelongs = $_POST['ClassBelongs'];
$Gender = $_POST['Gender'];
$DateOfBirth = $_POST['DateOfBirth'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
//database connection
$conn = new mysqli ('localhost','Joseph',' ','RegistrationThunderExam');
if($conn->connect_error){
    die('connection Failed : '.$conn->connect_error);

}else{
    $stmt = $conn->prepare("insert into registration(SchoolName, FirstName, LastName, ClassBelongs, Gender, DateOfBirth, Email, Password)
     values(?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssi",$SchoolName, $FirstName, $LastName, $ClassBelongs, $Gender, $DateOfBirth, $Email, $Password);
$stmt->execute();
echo ("Welcome to ThunderExam");
$stmt->close();
$stmt->close();
}
$_POST ('FirstName'.'Email');
?>
</html>