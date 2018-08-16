<?php
class AuthController extends ControladorBase{
    public $conectar;
	public $adapter;

    public function __construct() {
        parent::__construct();

        $this->conectar=new Conectar();
        $this->adapter=$this->conectar->conexion();
    }

    public function login()
    {
        if (isset($_POST['usuario']) && isset($_POST['password'])) {
            $usuario = $_POST['usuario'];
            $password = $_POST['password'];
            $auth = new Auth($this->adapter);
            $auth->getBy('usuario',$usuario,'password',$password);
            if (count($auth) > 0) {
                session_start();
                $this->redirect("Auth","dashboard");
            }else {
                $msg_error = "Las credenciales no son correctas";
                return $msg_error;
                $this->redirect("Auth",array(
                    'error'=>$msg_error
                ));
            }
        }
    }
    public function index()
    {

    }
    public function dashboard()
    {
    $this->redirect("Auth","dashboard");    
    }

}
?>
