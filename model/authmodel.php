<?php 
session_start();
class AuthModel extends Connection {

    public function CheckRegister($fullname, $username, $password)
    {
        $password = md5($password);
        $sql = "INSERT INTO admin values ('', '$fullname', '$username', '$password')";
        $this->connect()->query($sql);
        echo "<SCRIPT> 
        alert('Register succeeded please login!')
        window.location.replace('http://localhost/test/view/auth/login.php');
        </SCRIPT>";
    }
    public function CheckLogin($username, $password)
    {
        $password = md5($password);
        $sql = "SELECT * from admin WHERE username='$username' and password='$password'";
        $result = $this->connect()->query($sql);
        if ($result->num_rows > 0) {
            while ($data = mysqli_fetch_assoc($result)) {
                $_SESSION['fullname'] = $data['fullname'];
            }
            echo "<SCRIPT> 
            alert('Login succeeded')
            window.location.replace('http://localhost/test/');
            </SCRIPT>";
        } else {
            echo "<SCRIPT> 
            alert('Login failed')
            window.location.replace('http://localhost/test/view/auth/login.php');
            </SCRIPT>";
        }
    }
}
?>