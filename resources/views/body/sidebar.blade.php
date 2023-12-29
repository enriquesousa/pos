<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="h-100" data-simplebar>


        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                {{-- * Navegacion --}}
                <li class="menu-title">Navegacion</li>
                
                {{-- Panel --}}
                <li>
                    {{-- Tambien podemos acceder como href="{{ url('/dashboard') }}" --}}
                    <a href="{{ route('dashboard') }}"> 
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Panel </span>
                    </a>
                </li>

               
                {{-- * Apps --}}
                <li class="menu-title mt-2">Control</li>

                {{-- Control de Empleados --}}
                <li>
                    <a href="#sidebarEmpleados" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-multiple-outline"></i>
                        <span>Empleados</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEmpleados">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.employee') }}">Lista Empleados</a>
                            </li>
                            <li>
                                <a href="{{ route('employee.add') }}">Agregar Empleado</a>
                            </li>
                        </ul>
                    </div>
                </li>


                {{-- Control de Clientes --}}
                <li>
                    <a href="#sidebarClientes" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-multiple-outline"></i>
                        <span>Clientes</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarClientes">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.customer') }}">Lista Clientes</a>
                            </li>
                            <li>
                                <a href="{{ route('customer.add') }}">Agregar Cliente</a>
                            </li>
                        </ul>
                    </div>
                </li>


                {{-- Control de Proveedores --}}
                <li>
                    <a href="#sidebarProveedores" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-multiple-outline"></i>
                        <span>Proveedores</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarProveedores">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.supplier') }}">Lista de Proveedores</a>
                            </li>
                            <li>
                                <a href="{{ route('supplier.add') }}">Agregar Proveedor</a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- Avances de Salario --}}
                <li>
                    <a href="#sidebarSalario" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-multiple-outline"></i>
                        <span>Avances de Salario</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarSalario">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.advance.salary') }}">Lista Salarios</a>
                            </li>
                            <li>
                                <a href="{{ route('add.advance.salary') }}">Agregar Salario</a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- Email --}}
                <li>
                    <a href="#sidebarEmail" data-bs-toggle="collapse">
                        <i class="mdi mdi-email-multiple-outline"></i>
                        <span> Email </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEmail">
                        <ul class="nav-second-level">
                            <li>
                                <a href="email-inbox.html">Inbox</a>
                            </li>
                            <li>
                                <a href="email-read.html">Read Email</a>
                            </li>
                            <li>
                                <a href="email-compose.html">Compose Email</a>
                            </li>
                            <li>
                                <a href="email-templates.html">Email Templates</a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li class="menu-title mt-2">Custom</li>

                {{-- Auth Pages --}}
                <li>
                    <a href="#sidebarAuth" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-circle-outline"></i>
                        <span> Auth Pages </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAuth">
                        <ul class="nav-second-level">
                            <li>
                                <a href="auth-login.html">Log In</a>
                            </li>
                            <li>
                                <a href="auth-login-2.html">Log In 2</a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- Extra Pages --}}
                <li>
                    <a href="#sidebarExpages" data-bs-toggle="collapse">
                        <i class="mdi mdi-text-box-multiple-outline"></i>
                        <span> Extra Pages </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarExpages">
                        <ul class="nav-second-level">
                            <li>
                                <a href="pages-starter.html">Starter</a>
                            </li>
                            <li>
                                <a href="pages-timeline.html">Timeline</a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->