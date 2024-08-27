<?php
$routes = [
    ['path'=>'/sistema/','views'=>'ViewHome'],
    ['path'=>'/sistema/cliente/','views'=>'ViewCliente'],
    ['path'=>'/sistema/proveedor/','views'=>'ViewProveedor'],
    ['path'=>'/sistema/login/','views'=>'ViewLogin'],
    ['path'=>'/sistema/logout/','views'=>'ViewLoginLogout'],
    ['path'=>'/sistema/producto/','views'=>'ViewProducto'],
    ['path'=>'/crud_php/usuarios/@int/','views'=>'ViewUserDetail'],
    ['path'=>'/project/cliente/editar/@str/','views'=>'UsuarioController','method'=>'detalle']
];


?>