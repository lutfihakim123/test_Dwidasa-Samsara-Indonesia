<?php 

class AuthController extends AuthModel{

    public function Register($fullname, $username, $password)
    {
        return $this->CheckRegister($fullname, $username, $password);
    }

    public function Login($username, $password)
    {
        return $this->CheckLogin($username, $password);
    }
}
?>