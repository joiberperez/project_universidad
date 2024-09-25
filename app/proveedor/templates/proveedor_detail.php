<button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Launch Demo Modal</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detalles del Proveedor</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
          <li class="nav-item text-center" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Principal</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Contactos</button>
          </li>
      
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
            <h1 class="text-center">Detalles principales</h1>
            <div class="row mt-5 mb-4">
              <div class="col-5 ms-5">
                <p><strong>Nombre de Empresa:</strong></p>
                <p  class="mb-5"><?= $this->data["nombre_empresa"]; ?></p>
              </div>
              <div class="col-5  ms-5">
                <p><strong>Codigo de Registro:</strong></p>
                <p class="mb-5"><?= $this->data["id"]; ?></p>
              </div>
              <div class="col-5  ms-5">
                <p><strong>Rif:</strong></p>
                <p class="mb-5"><?= $this->data["rif"]; ?></p>
              </div>
              <div class="col-5 ms-5">
                <p ><strong>Direccion:</strong></p>
                <p class="mb-5"><?= $this->data["direccion"]; ?></p>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
          <h1 class="text-center">Contactos y Cargos</h1>
          
            <div class="row mt-5 mb-4">
              <div class="col-5 ms-5 ">
                <p><strong>Correo Electronico:</strong></p>
                <p class="mb-5"><?= $this->data["correo_electronico"]; ?></p>
              </div>
              <div class="col-5 ms-5">
                <p><strong>Telefono Principal:</strong></p>
                <p class="mb-5"><?= $this->data["telefono_principal"]; ?></p>
              </div>
              <div class="col-5 ms-5">
                <p><strong>Telefono Secundario:</strong></p>
                <p class="mb-5"><?= $this->data["telefono_secundario"]; ?></p>
              </div>
              
              <div class="col-5 ms-5">
                <p><strong>Contacto Secundario:</strong></p>
                <p class="mb-5"><?= $this->data["contacto_secundario"]; ?></p>
              </div>
              <div class="col-5 ms-5">
                <p><strong>Cargo Secundario:</strong></p>
                <p class="mb-5"><?= $this->data["cargo_secundario"]; ?></p>
              </div>
            

          </div>
          </div>

        </div>
      </div>
      <div class="modal-footer"><button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cerrar</button></div>
    </div>
  </div>
</div>