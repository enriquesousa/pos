@extends('admin_dashboard')
@section('admin')

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Perfil de Admin</a></li>
                        </ol>
                    </div>
                    <h4 class="page-title">Perfil</h4>
                </div>
            </div>
        </div>     
        <!-- end page title -->

        <div class="row">

            {{-- 1er Columna --}}
            <div class="col-lg-4 col-xl-4">

                {{-- Datos del Perfil --}}
                <div class="card text-center">
                    <div class="card-body">

                        {{-- Imagen de Admin --}}
                        <img src="{{ (!empty($adminData->photo) ? url('upload/admin_images/'.$adminData->photo) : url('upload/no_image.jpg')) }}" class="rounded-circle avatar-lg img-thumbnail"
                        alt="profile-image">

                        {{-- Nombre de Admin --}}
                        <h4 class="mb-0">{{ $adminData->name }}</h4>
                        <p class="text-muted">{{ $adminData->email }}</p>

                        <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Follow</button>
                        <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Message</button>

                        <div class="text-start mt-3">
                            
                            <p class="text-muted mb-2 font-13"><strong>Nombre:</strong> <span class="ms-2">{{ $adminData->name }}</span></p>
                        
                            <p class="text-muted mb-2 font-13"><strong>Telefono:</strong><span class="ms-2">{{ $adminData->phone }}</span></p>
                        
                            <p class="text-muted mb-2 font-13"><strong>Correo:</strong> <span class="ms-2">{{ $adminData->email }}</span></p>
                        
                            
                        </div>                                    

                        <ul class="social-list list-inline mt-3 mb-0">
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                            </li>
                        </ul>   
                    </div>                                 
                </div> <!-- end card -->


            </div> <!-- end col-->

            {{-- 2da Columna --}}
            <div class="col-lg-8 col-xl-8">
                <div class="card">

                    <div class="card-body">

                        {{-- Editar datos del Perfil --}}
                        <div class="tab-pane" id="settings">
                            <form>
                                <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Editar Info</h5>

                                <div class="row">

                                    {{-- Nombre --}}
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Nombre</label>
                                            <input type="text" name="name" class="form-control" value="{{ $adminData->name }}">
                                        </div>
                                    </div>

                                    {{-- Correo Electronico --}}
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Correo Electronico</label>
                                            <input type="email" name="email" class="form-control"  value="{{ $adminData->email }}">
                                        </div>
                                    </div> <!-- end col -->

                                    {{-- Telefono --}}
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Telefono</label>
                                            <input type="text" name="phone" class="form-control"  value="{{ $adminData->phone }}">
                                        </div>
                                    </div> <!-- end col -->

                                    {{-- Seleccionar Photo --}}
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="example-fileinput" class="form-label">Selecciona Imagen</label>
                                            <input type="file" id="example-fileinput" class="form-control">
                                        </div>
                                    </div> <!-- end col -->

                                    {{-- Display Image --}}
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="example-fileinput" class="form-label"></label>
                                            <img src="{{ (!empty($adminData->photo) ? url('upload/admin_images/'.$adminData->photo) : url('upload/no_image.jpg')) }}" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                                        </div>
                                    </div> <!-- end col -->

                                </div> <!-- end row -->
                                
                                
                                <div class="text-end">
                                    <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Guardar</button>
                                </div>
                            </form>
                        </div>
                        <!-- end Editar datos del Perfil-->

                    </div>
                </div> <!-- end card-->

            </div> <!-- end col -->

        </div>
        <!-- end row-->

    </div> <!-- container -->

</div> <!-- content -->



@endsection