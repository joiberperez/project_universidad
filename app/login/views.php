<?php
   
   

    class ViewLoginLogout extends View{
        public function get(){
            unset($_SESSION["usuario"]);
            header("Location: /sistema/login/");
        }
    }
    
    class ViewLogin extends View{
        public $template = 'login';
        private $usuario = null;
        private $password = null;
        public function post(){
            
            
            if(isset($_POST['usuario']) && isset($_POST['password'])){
                
                $this->usuario = $_POST['usuario'];
                $this->password = $_POST['password'];
                //echo $this->usuario . " ";
                $_SESSION["nombre"] = $this->usuario;
                
                //se instancia con el modelo
                $conexion = new ModelLogin();
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
                        $_SESSION['usuario_id'] = $datosUsuario['id'];
                        $_SESSION['usuario_privilegio'] = $datosUsuario['privilegios'];

                        //redirige al home
                        header('Location: /sistema/');
                    }else{
                        
                        $_SESSION['error'] = 'contraseña incorrecta';
                        header('Location: /sistema/login/');
                        
                        
                    }
                }else{
                    $_SESSION['error'] = 'usuario incorrecto';
                    header('Location: /sistema/login/');
                    
                } 
                

                
                
            } 

      
    }
 
    }

?>