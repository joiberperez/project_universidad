
<div id="layoutSidenav_nav" class="">
                <nav class="sidenav shadow-right sidenav-dark ">
                    <div class="sidenav-menu" >
                        <div class="nav accordion" id="accordionSidenav">
                            <!-- Sidenav Menu Heading (Account)-->
                            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                            <div class="sidenav-menu-heading d-sm-none">Account</div>
                            <!-- Sidenav Link (Alerts)-->
                            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                            <a class="nav-link d-sm-none" href="#!">
                                <div class="nav-link-icon"><i data-feather="bell"></i></div>
                                Alerts
                                <span class="badge bg-warning-soft text-warning ms-auto">4 New!</span>
                            </a>
                            <!-- Sidenav Link (Messages)-->
                            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                            <a class="nav-link d-sm-none" href="#!">
                                <div class="nav-link-icon"><i data-feather="mail"></i></div>
                                Messages
                                <span class="badge bg-success-soft text-success ms-auto">2 New!</span>
                            </a>
                            <!-- Sidenav Menu Heading (Core)-->
                            <div class="sidenav-menu-heading"></div>
                            <!-- Sidenav Accordion (Dashboard)-->
                            <a class="nav-link " href="<?= get_path("home") ?>" >
                                <div class="nav-link-icon"><i class="fa-solid fa-house"></i></div>
                                Inicio
                            </a>
                           
                            <!-- Sidenav Heading (Custom)-->
                            
                            <!-- Sidenav Accordion (Pages)-->
                            <a class="nav-link collapsed" href="<?= get_path("cliente") ?>" >
                                <div class="nav-link-icon"><i class="fa-solid fa-users"></i></div>
                                Clientes
                              
                            <!-- Sidenav Accordion (Applications)-->
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseApps" aria-expanded="false" aria-controls="collapseApps">
                                <div class="nav-link-icon"><i class="fa-solid fa-cart-arrow-down"></i></div>
                                Ventas
                               
                            <!-- Sidenav Accordion (Flows)-->
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseFlows" aria-expanded="false" aria-controls="collapseFlows">
                                <div class="nav-link-icon"><i class="fa-solid fa-truck"></i></div>
                                Proveedores
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseFlows" data-bs-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav">
                                    <a class="nav-link" href="multi-tenant-select.html">Compra</a>
                                </nav>
                            </div>
                            <!-- Sidenav Heading (UI Toolkit)-->
                            
                            <!-- Sidenav Accordion (Layout)-->
                            <a class="nav-link collapsed" href="<?= get_path("producto") ?>">
                                <div class="nav-link-icon"><i class="fa-brands fa-shopify"></i></div>
                                Productos
                               
                            <!-- Sidenav Accordion (Components)-->
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseComponents" aria-expanded="false" aria-controls="collapseComponents">
                                <div class="nav-link-icon"><i class="fa-solid fa-file-invoice"></i></div>
                                Reportes
                               
                            <!-- Sidenav Accordion (Utilities)-->
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseUtilities" aria-expanded="false" aria-controls="collapseUtilities">
                                <div class="nav-link-icon"><i data-feather="tool"></i></div>
                                Respaldo
                              
                     
                            <!-- Sidenav Heading (Addons)-->
                            
                            <!-- Sidenav Link (Charts)-->
                            <a class="nav-link" href="charts.html">
                                <div class="nav-link-icon"><i class="fa-solid fa-gear"></i></div>
                                Configuración
                            </a>
                            <!-- Sidenav Link (Tables)-->
                            
                        </div>
                    </div>
                    <!-- Sidenav Footer-->
                    <div class="sidenav-footer">
                        <div class="sidenav-footer-content">
                            <div class="sidenav-footer-subtitle">Bienvenido(a):</div>
                            <div class="sidenav-footer-title">Gladis Rondón</div>
                        </div>
                    </div>
                </nav>
            </div>