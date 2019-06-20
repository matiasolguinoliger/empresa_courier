@extends("../layouts.plantilla")

@section("cabecera")

@endsection

@section("contenido")

<div class="container">
    <br>
    <h4>Editar</h4>
<form method ="post" action="../{{$cliente->id}}" enctype="multipart/form-data">
    <table>
    <tr>
        <td>Rut:</td>    
        <td>        
        <input type="number" name="rut_cliente" value="{{$cliente->rut_cliente}}" required='yes'  step='1' maxlength="9" min="10000000"
                                oninvalid="this.setCustomValidity('Ingrese un Rut')" oninput="this.setCustomValidity('')"/>
        
        {{csrf_field()}}
        
        <input type="hidden" name="_method" value="PUT">
        </td>
    </tr>     
    <tr>   
        <td>Nombre:</td>    
        <td>        
        <input type="text" name="nom_cliente" value="{{$cliente->nom_cliente}}" required="yes" min='5' max='20'
                           oninvalid="this.setCustomValidity('Ingrese un Nombre')" oninput="this.setCustomValidity('')"/>
        </td>
    </tr>    
    <tr>   
        <td>Apellido:</td>    
        <td>        
        <input type="text" name="ape_cliente" value="{{$cliente->ape_cliente}}" required="yes" min='5' max='20'
                               oninvalid="this.setCustomValidity('Ingrese un apellido')" oninput="this.setCustomValidity('')"/>
        </td>
    </tr>     
    <tr>    
        <td>Direccion:</td>    
        <td>        
        <input type="text" name="dire_cliente" value="{{$cliente->dire_cliente}}" required="yes" min='5' max='30'
                               oninvalid="this.setCustomValidity('Ingrese una direccion')" oninput="this.setCustomValidity('')"/>
        </td>
    </tr>     
    <tr>   
        <td>Email:</td>    
        <td>        
        <input type="text" name="email_cliente" value="{{$cliente->email_cliente}}" required="yes" min='20' max='30'
                               oninvalid="this.setCustomValidity('Ingrese un email')" oninput="this.setCustomValidity('')"/>
        </td>
    </tr>    
    <tr>
        <td>Telefono:</td>    
        <td>        
        <input type="number" name="fonomovil_cliente" value="{{$cliente->fonomovil_cliente}}" required="yes" maxlength="11" min="10000000"
                           oninvalid="this.setCustomValidity('Ingrese un Telefono')" oninput="this.setCustomValidity('')"/>
        </td>
    </tr>
    
    
    
    
    <tr>
        <td  align="center" >
        <input type="submit" name="enviar" value="enviar">
        </td> 
        <td  align="center" >
            <input type="reset" name="borrar" value="borrar campos">
        </td> 
    </tr>
    
    
    </table>
</form>
</div>
<div class="container">
<form method ="post" action="../{{$cliente->id}}">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="DELETE">

    <input type="submit" value="eliminar registro">
</form>
</div>
{{csrf_field()}}  

@endsection


@section("pie")
@endsection
