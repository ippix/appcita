@extends('layouts.panel')

@section('title','Actualizar Examen')

@section('subtitle','Examenes')

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
                  <h3 class="mb-0">Editar Examenes</h3>
                   
                </div>
              </div>
            </div>
             <div class="panel-body formregistros" style="margin: 20px;">
            	
            <form action="{{ url('/exams/'.$exam->id) }}" method="post">
                
                @csrf
                @method('PUT')
                <div class="row">
                <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <label>Nombre Examenes:</label>
                            <input type="text" class="form-control" name="title"  required  value="{{ old('title',$exam->title) }}"/>
                              @if ($errors->has('title'))
                                      <span class="text-danger">{{ $errors->first('title') }}</span>
                                  @endif
                          </div>

                          <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <label>Descripcion:</label>
                            <input type="text" class="form-control" name="description" required  value="{{ old('description',$exam->description) }}"/>
                            @if ($errors->has('description'))
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                @endif
                            
                          </div>

                          <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <label>Precio:</label>
                            <input type="number"  step="0.01" class="form-control" name="precio" required  value="{{ old('precio',$exam->precio) }}"/>
                            @if ($errors->has('precio'))
                                    <span class="text-danger">{{ $errors->first('precio') }}</span>
                                @endif
                              </div>


                          </div>

                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <button class="btn  btn-primary" type="submit"><i class="fa fa-save"></i> Guardar </button>

                        <a class="btn btn-danger" href="{{ url('exams') }}" > Cancelar </a>
                        
                      </div>
              </form>
             				


            </div>
            

          </div>
        </div>


      </div>

      <!-- Footer -->
      @include('includes.footer')
    </div>


@endsection


