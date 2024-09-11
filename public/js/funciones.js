function abrirModal(id){
    console.log(id);
    $.get(`/sistema/proveedor/detail/${id}/`).done(function(data){
        $("#modal").html(data);
        $(".modal").modal("show");
        
    })
}

const alertar = ()=>{
    alert("hola");
}