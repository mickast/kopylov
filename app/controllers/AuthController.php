<?php
require_once(ROOT . '/app/models/AuthModel.php');

class AuthController
{
    public $login;
    public $pass;
    private $request;
    public function set($login, $pass)
    {

        if ($login != '' && $pass != '') {
            $this->login = $login;
            $this->pass = $pass;
            return true;
        } else
            return false;
    }

    public function actionForm()
    {
        session_start();
        $userIP = "http://78.85.71.32:8082/vis/"; //mysql select
        if (!empty($_SESSION)) {
            //header("Location: ../pi/dashboard");
            header("Location: ".$userIP);
        }
        require_once(ROOT . '/app/views/auth.php');
        return true;
    }

    public function actionAuth()
    {
        session_start();
        $set = $this->set($_POST['login'], $_POST['pass']);
        $authModel = new AuthModel();
        $result = $authModel->authorization($this->login, $this->pass); //Возвращает логин пользователя

        if ($result != false) {

            $_SESSION['is_auth'] = true;
            $result = true;
        }
        $this->request = ["set_form_data" => $set, "auth" => $result];
        //$this->request = ["xcv" => "sdf"];
        echo json_encode($this->request);
        return true;
    }

    public function actionLogout()
    {
        session_start();
        unset($_SESSION['is_auth']);
        session_destroy();
        header("Location: ../pi/");
    }
}

?>