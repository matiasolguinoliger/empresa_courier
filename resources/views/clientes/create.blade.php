@extends("../layouts.plantilla")
@section("cabecera")
@endsection
@section("contenido")
@endsection
<div class="container">
    <br>
<h3>Formulario Clientes.</h3>
<!--  oninvalid="alert('You must fill out the form!');" otra forma de validar con pop up-->
<form method="post" action="../clientes" enctype="multipart/form-data">
    {{csrf_field()}}
        <div class="row uniform">
                <div class="6u 12u$(xsmall)">
                    <input type="number" name="rut_cliente" id="rut_cliente" value="" placeholder="Rut" required='yes'  step='1' maxlength="9" min="10000000"
                                oninvalid="this.setCustomValidity('Ingrese un Rut')" oninput="this.setCustomValidity('')"/>
                </div>
                <div class="6u$ 12u$(xsmall)">
                    <input type="text" name="nom_cliente" id="nom_cliente" value="" placeholder="Nombre" required="yes" min='5' max='20'
                           oninvalid="this.setCustomValidity('Ingrese un Nombre')" oninput="this.setCustomValidity('')"/>
                </div>
                
                <div class="6u 12u$(xsmall)">
                        <input type="text" name="ape_cliente" id="ape_cliente" value="" placeholder="Apellido"  required="yes" min='5' max='20'
                               oninvalid="this.setCustomValidity('Ingrese un apellido')" oninput="this.setCustomValidity('')"/>
                </div>
                <div class="6u$ 12u$(xsmall)">
                        <input type="text" name="dire_cliente" id="dire_cliente" value="" placeholder="Direccion" required="yes" min='5' max='30'
                               oninvalid="this.setCustomValidity('Ingrese una direccion')" oninput="this.setCustomValidity('')" />
                </div>
                
                <div class="6u 12u$(xsmall)">
                        <input type="email" name="email_cliente" id="email_cliente" value="" placeholder="Email" required="yes" min='20' max='30'
                               oninvalid="this.setCustomValidity('Ingrese un email')" oninput="this.setCustomValidity('')"/>
                </div>
                <div class="6u$ 12u$(xsmall)">
                    <input type="number" name="fonomovil_cliente" id="fonomovil_cliente" value="" placeholder="Telefono" required="yes" maxlength="11" min="10000000"
                           oninvalid="this.setCustomValidity('Ingrese un Telefono')" oninput="this.setCustomValidity('')"/>
                </div>
                   
                </div>
                <div class="6u$ 12u$(xsmall)"><br/>
                    <h3>Foto Cliente:</h3> <input type="file" name="file" required="yes"
                    oninvalid="this.setCustomValidity('Ingrese un archivo')" oninput="this.setCustomValidity('')"/>
                
                </div>
    
                <div class="12u$">
                        <ul class="actions">
                                <li><input type="submit" value="Enviar" /></li>
                                <li><input type="reset" value="Borrar" class="alt" /></li>
                        </ul>
                </div>
    </form>
@if(count($errors)>0)

@foreach($errors->all() as $error)
{{$error}}
@endforeach

@endif
</div>



@section("pie")
@endsection