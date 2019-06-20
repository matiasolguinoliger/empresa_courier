@extends("../layouts.plantilla")

@section("contenido")
<div>
    <br>
    <h4>Listado de Clientes</h4> 
            
        <table border="1">
            <tr>
                <td>Rut</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Direccion</td>
                <td>Email</td>
                <td>Telefono</td>
                <td>Foto</td>
            </tr>
        @foreach($clientes as $cliente)

            <tr>   
                <td><a href="{{route('clientes.edit',$cliente->id)}}">{{$cliente->rut_cliente}}</a></td>
                <td>{{$cliente->nom_cliente}}</td>
                <td>{{$cliente->ape_cliente}}</td>
                <td>{{$cliente->dire_cliente}}</td>
                <td>{{$cliente->email_cliente}}</td>
                <td>{{$cliente->fonomovil_cliente}}</td>
                <td><img src="{{ asset('/images/'.$cliente->ruta)}}"width="20"/></td>
                <td><button onclick="window.location.href='{{ asset('/images/'.$cliente->ruta)}}'">ver</button></td>
                
            </tr>       
        @endforeach
           
        </table>
                <div class="12u$">
                        <ul class="actions">
                            <button value="Ingresar" onclick="window.location.href='{{route('clientes.create')}}'">+ Cliente</button><br/>
                            
                        </ul>
                </div>
        
</div>    
@endsection 

@section("pie")  

@endsection        
     


