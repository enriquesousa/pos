@extends('admin_dashboard')
@section('admin')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Agregar Empleado</a></li>

                            </ol>
                        </div>
                        <h4 class="page-title">Agregar Empleado</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">


                <div class="col-lg-8 col-xl-12">
                    <div class="card">
                        <div class="card-body">





                            <!-- end timeline content-->

                            <div class="tab-pane" id="settings">

                                <form method="post" action="{{ route('employee.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Agregar Empleado
                                    </h5>

                                    <div class="row">

                                        {{-- Nombre Empleado 'name' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Nombre Empleado</label>
                                                <input type="text" name="name"
                                                    class="form-control @error('name') is-invalid @enderror">
                                                @error('name')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Correo Electrónico Empleado 'email' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Correo Electrónico Empleado</label>
                                                <input type="email" name="email"
                                                    class="form-control @error('email') is-invalid @enderror">
                                                @error('email')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Teléfono Empleado 'phone' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Teléfono Empleado</label>
                                                <input type="text" name="phone"
                                                    class="form-control @error('phone') is-invalid @enderror">
                                                @error('phone')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Dirección Empleado 'address' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Dirección Empleado</label>
                                                <input type="text" name="address"
                                                    class="form-control @error('address') is-invalid @enderror">
                                                @error('address')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>


                                        {{-- Experiencia de empleado 'experience' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Experiencia de empleado</label>
                                                <select name="experience" class="form-select" id="example-select">
                                                    <option selected="">Seleccionar Experiencia</option>
                                                    <option value="1 Año">1 Año</option>
                                                    <option value="2 Años">2 Años</option>
                                                    <option value="3 Años">3 Años</option>
                                                    <option value="4 Años">4 Años</option>
                                                    <option value="5 Años">5 Años</option>
                                                </select>

                                            </div>
                                        </div>


                                        {{-- Sueldo Empleado 'salary' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Sueldo Empleado</label>
                                                <input type="text" name="salary"
                                                    class="form-control @error('salary') is-invalid @enderror">
                                                @error('salary')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>


                                        {{-- Vacaciones Empleado 'vacation' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Vacaciones Empleado</label>
                                                <input type="text" name="vacation"
                                                    class="form-control @error('vacation') is-invalid @enderror">
                                                @error('vacation')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>


                                        {{-- Ciudad Empleado 'city' --}}
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Ciudad Empleado</label>
                                                <input type="text" name="city"
                                                    class="form-control @error('city') is-invalid @enderror">
                                                @error('city')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>


                                        {{-- Foto de Empleado 'image' --}}
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="example-fileinput" class="form-label">Foto de Empleado</label>
                                                <input type="file" name="image" id="image" class="form-control">
                                            </div>
                                        </div> <!-- end col -->


                                        {{-- Desplegar Foto de Empleado --}}
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="example-fileinput" class="form-label"> </label>
                                                <img id="showImage" src="{{ url('upload/no_image.jpg') }}"
                                                    class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                                            </div>
                                        </div> <!-- end col -->


                                    </div> <!-- end row -->



                                    <div class="text-end">
                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i
                                                class="mdi mdi-content-save"></i> Guardar</button>
                                    </div>
                                </form>

                            </div>
                            <!-- end settings content-->


                        </div>
                    </div> <!-- end card-->

                </div> <!-- end col -->
            </div>
            <!-- end row-->

        </div> <!-- container -->

    </div> <!-- content -->



    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    
@endsection
