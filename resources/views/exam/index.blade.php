@extends('layouts.panel')

@section('title','Examen')

@section('subtitle','Examen')

@section('content')

<div class="header bg-gradient-primary pb-6 pt-3 pt-md-6">
     
    </div>
    
    <div class="container-fluid mt--7">
      
      <div class="row mt-5">
        <div class="col-xl-12 mb-12 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0 btnagregar">Examen <a href="{{ url('exams/create')}}" class="btn btn-sm btn-success"><i class="fas fa-plus-circle " ></i> Agregar</a></h3>
                   
                </div>
              </div>
            </div>

            @if(Session::has('notification'))
                        <div class="alert alert-success">
                            {{ Session::get('notification') }}
                            @php
                                Session::forget('notification');
                            @endphp
                        </div>
            @endif
            <br>

            <div class="table-responsive listaregistros">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Opciones</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($exam as $examen)
               <tr>
                    <th scope="row">
                      {{ $examen->title }}
                    </th>
                    <td>
                     {{ $examen->descripcion }}
                    </td>

                     <td>
                      {{ $examen->precio }}
                    </td>
                    
                    <td>                   
                        <form action="{{ url('/exams/'.$examen->id) }}" method="post">
                          @csrf
                          @method('DELETE')
                          <a href="{{ url('/exams/'.$examen->id.'/edit') }}" class="btn btn-sm btn-primary">Editar</a>
                          <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                     
                    </td>
                  </tr> 
                  @endforeach              
                </tbody>
              </table>

              
              <!-- PAGINACION -->
   {{ $exam->links() }}



            </div>
            

          </div>
        </div>


      </div>

      <!-- Footer -->
      @include('includes.footer')
    </div>


@endsection


