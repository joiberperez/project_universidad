<?php
   
   


    
    class ViewLogin extends View{
        public $template = 'login';
        private $usuario = null;
        private $password = null;
        public function login(){
            //echo($_GET);
            //verifica si los campos no estan vacios
            if(isset($_POST['usuario']) && isset($_POST['password'])){
                $this->usuario = $_POST['usuario'];
                $this->password = $_POST['password'];
                $_SESSION["nombre"] = $this->usuario;
                
                //se instancia con el modelo
                $conexion = new Login();
                //llamo al metodo para optener usuario
                $datosUsuario = $conexion->selectUser($this->usuario);
                //verifica si existe un usuario con ese nombre
                if($datosUsuario->rowCount() == 1){
                    //se convierte en una array asociativo
                    $datosUsuario = $datosUsuario->fetch();
                    $passwordModel = $datosUsuario['password'];
                    //verifica que la contraseña sea la misma que en la base de datos
                    if($this->password === $passwordModel){
                        if(isset($_SESSION['error'])){
                            //si existe la variable error la borra
                           unset($_SESSION['error']);

                        }
                        //se crean las variables para los datos del usuario
                        $_SESSION['usuario'] = $datosUsuario['usuario'];

                        //redirige al home
                        header('Location: ./index3.php');
                    }else{
                        
                        $_SESSION['error'] = 'contraseña incorrecta';
                        header('Location: ./login.php');
                    }
                }else{
                    $_SESSION['error'] = 'usuario incorrecto';
                    header('Location: ./login.php');
                }
                

                
                
            }

        }
    }

?>