let productos = []

function abrirModalProducto() {
    $(".modal").modal("show");
}

function increment() {
    let input = $("#cantidad").val();

    $("#cantidad").val(parseInt(input) + 1)
}

function decrement() {
    let input = $("#cantidad").val();

    $("#cantidad").val(parseInt(input) - 1)

}
function cargarProducto(nombre, precio) {

    $("#producto_nombre").val(nombre)
    $("#monto_producto").val(`$${precio}`)
    $(".modal").modal("hide");

}

function agregarListaProducto(){
    const producto = {
        nombre: $("#producto_nombre").val(),
        monto: $("#monto_producto").val(),
        cantidad: $("#cantidad").val(),
        
    }
    productos.push(producto);
    console.log(productos);
}