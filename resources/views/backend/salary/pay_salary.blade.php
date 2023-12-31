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
                            <a href="{{ route('add.advance.salary') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Agregar Salario</a>
                        </ol>
                    </div>
                    <h4 class="page-title">Lista de Salarios Pagados</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        {{-- Desplegar este mes --}}
                        <h4 class="header-title">{{ date("F Y") }}</h4>

                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Serie</th>
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                    <th>Mes</th>
                                    <th>Salario</th>
                                    <th>Avance</th>
                                    <th>Se debe</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>

                                @foreach ($employee as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><img src="{{ asset($item->image) }}" style="width: 50px; height: 40px;"></td>
                                        <td>{{ $item->name }}</td>

                                        {{-- Mes anterior --}}
                                        <td><span class="badge bg-info"> {{ date("F", strtotime('-1 month')) }} </span> </td>


                                        {{-- Salario --}}
                                        @php
                                            $floatVar =  floatval($item->salary); 
                                        @endphp
                                        <td>$ @convert($floatVar)</td>

                                        {{-- Avance de Salario--}}
                                        {{-- @php
                                            $floatVar =  floatval($item->advance_salary); 
                                        @endphp
                                        <td>$ @convert($floatVar)</td> --}}
                                        <td></td>

                                        <td></td>


                                        <td>
                                            <a href="{{ route('edit.advance.salary', $item->id) }}" class="btn btn-blue rounded-pill waves-effect waves-light">Editar</a>
                                            <a href="{{ route('delete.advance.salary', $item->id) }}" id="delete" class="btn btn-danger rounded-pill waves-effect waves-light">Eliminar</a>
                                        </td>
                                    </tr>

                                @endforeach


                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->


        
    </div> <!-- container -->

</div> <!-- content -->


@endsection