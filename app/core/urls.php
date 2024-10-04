<?php
/* $routes = [
    ['path'=>'/sistema/','views'=>'ViewHome','name'=>'home'],
    ['path'=>'/sistema/cliente/','views'=>'ViewCliente','name'=>'cliente'],
    ['path'=>'/sistema/cliente/page/@int/','views'=>'ViewClienteList','name'=>'cliente_list'],
    ['path'=>'/sistema/proveedor/','views'=>'ViewProveedor','name'=>'proveedor'],
    ['path'=>'/sistema/login/','views'=>'ViewLogin','name'=>'login'],
    ['path'=>'/sistema/logout/','views'=>'ViewLoginLogout','name'=>'logout'],
    ['path'=>'/sistema/producto/','views'=>'ViewProducto','name'=>'producto'],
    //['path'=>'/crud_php/usuarios/@int/','views'=>'ViewUserDetail'],
   // ['path'=>'/project/cliente/editar/@str/','views'=>'UsuarioController','method'=>'detalle']
]; */



?>
<?php
	/*********************************************************************
     * Revisión y depuración realizadas por "Sathoru-Dev"                *
     * Revisado el dia: Sabado, 07 de Septiembre del 2024                *
     * Por favor abstenerse de editar algo sin permiso del programador   *
     * Copyright © Joiber (Uso educativo) - Proyecto universitario       *
    *********************************************************************/

    /** Urls del sistema Ejemplos de uso
     * $this->new_url("url_origen", "Clase de app", "Nombre de url")
     * $this->new_url("/crud_php/usuarios/", "views", "ViewUserDetail") USO NORMAL
     * $this->new_url("/crud_php/usuarios/@int/", "ViewUserDetail", "exampleName") USO CON PARAMETROS (INT -> NUMEROS)
     * $this->new_url("/crud_php/usuarios/@str/", "ViewUsuario", "exampleName") USO CON PARAMETROS (STR -> CADENAS DE TEXTO)
    */

    $this->new_url('/sistema/', 'ViewHome', 'home');
    $this->new_url('/sistema/cliente/', 'ViewCliente', 'cliente');
    $this->new_url('/sistema/cliente/page/@int/', 'ViewClienteList', 'cliente_list');
    $this->new_url('/sistema/proveedor/page/@int/', 'ViewProveedorList', 'proveedor_list');
    $this->new_url('/sistema/proveedor/detail/@int/', 'ViewProveedorDetail', 'proveedor_detail');
    $this->new_url('/sistema/proveedor/', 'ViewProveedor', 'proveedor');
    $this->new_url('/sistema/login/', 'ViewLogin', 'login');
    $this->new_url('/sistema/logout/', 'ViewLoginLogout', 'logout');
    $this->new_url('/sistema/producto/', 'ViewProducto', 'producto');
    $this->new_url('/sistema/producto/create/', 'ViewProductoCreate', 'producto_create');
    $this->new_url('/sistema/producto/page/@int/', 'ViewProductoList', 'producto_list');
    $this->new_url('/sistema/venta/', 'ViewVenta', 'venta');
    $this->new_url('/sistema/venta/create/', 'ViewVentaCreate', 'venta_create');
    $this->new_url('/sistema/venta/create/list/', 'ViewVentaCreateList', 'venta_create_list');
    $this->new_url('/sistema/venta/cliente/list/', 'ViewVentaClientList', 'venta_cliente_list');