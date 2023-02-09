@extends('layouts.structure')
@section('content')
<div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombre</th>
                                        <th>Estado</th>
                                        <th>Nivel de formacion</th>                                        
                                        <th>Duracion</th>
                                        <th>Version</th>                                        
                                        <th>Codigo centro</th> 
                                        <th colspan="2"><center>Acción</center></th>                                    
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse($programas as $programa)
                                    <tr>
                                        <th>{{$programa->codigo_prog}}</th>
                                        <th>{{$programa->nombre}}</th>
                                        <th>{{$programa->estado}}</th>                           
                                        <th>{{$programa->nivel_formacion}}</th>                           
                                        <th>{{$programa->duracion}}</th>
                                        <th>{{$programa->version}}</th>
                                        <th>{{$programa->codigo_cen}}</th>
                                        <th><a href="{{route('viewprogram', $programa->codigo_prog)}}" class="btn btn-info">Editar</a></th>
                                        <th><form action="{{route('programs.destroy', $programa->codigo_prog )}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>     
                                        </form>                                        
                                    </th>
                                    </tr>
                                    @empty
                                        <tr>
                                            <th><h3>No hay programas</h3></th>
                                        </tr>
                                    @endforelse
                                </tbody>                            
                            </table>
                        </div>                   
@endsection