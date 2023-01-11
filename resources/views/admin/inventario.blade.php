<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') Administrador</title>
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
  </head>
  <body class="bg-gray-100 text-gray-800">

    <nav class="flex py-5 bg-indigo-500 text-white">
      <div class="w-1/2 px-12 mr-auto">
        <p class="text-2xl font-bold">Montacargas Gutierrez</p>
      </div>

      <div class="w-1/1 px-0 mr-auto">
        <a href="{{ route('admin.maquinaria') }}" class="font-bold
      py-3 px-20 rounded-md bg-blue-200 hover:bg-blue-400">Regresar</a>
      </div>
     

      <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
      @if(auth()->check())
        <li class="mx-8">
          <p class="text-xl">BIENVENIDO: <b>{{ auth()->user()->name }}</b></p>
        </li>
        <li>
          <a href="{{ route('login.destroy') }}" class="font-bold
          py-3 px-4 rounded-md bg-red-500 hover:bg-red-600">Salir</a>
        </li>
      @else
      @endif
      </ul>

    </nav>
    @yield('content')
<div class="container">
<div class="col-sm-8">
  <br>
<center><h1>Ingresar nuevo veiculo</h1></center>
<form action="/guardar" method="POST">
  @csrf
<TABLE BORDER CELLPADDING=40 CELLSPACING=10>
	<TR>
		<TD> <div class="form-group row">
      <label for="inputMarca" class="col-sm-2 col-form-label">Marca:</label>
    </div></TD> 
    <TD> <div class="col-sm-10">
      <select name="marca" type="text" class="form-control" id="inputMarca">
        <option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
        <option value="mercedes">Mercedes</option>
        <option value="audi">Audi</option>
      </select></div></TD> 
      <TD><div class="form-group row">
        <label for="inputmodelo" class="col-sm-2 col-form-label">Modelo:</label>
        
      </div>
    </TD>
      <TD><div class="col-sm-10">
        <select name="modelo" type="text" class="form-control" id="inputmodelo">
           <option value="volvo">Volvo</option>
           <option value="saab">Saab</option>
           <option value="mercedes">Mercedes</option>
           <option value="audi">Audi</option>
         </select></div></TD>
         <TD> <div class="form-group row">
          <label for="inputSerie" class="col-sm-2 col-form-label">Serie:</label>
        </div></TD>
         <TD><div class="col-sm-10">
          <input name="serie" type="text" class="form-control" id="inputSerie" placeholder="numero de">
        </div></TD>
     
	</TR>
	<TR>
		<TD>
      <div class="form-group row">
        <label for="inputTipo" class="col-sm-2 col-form-label">Tipo de motor:</label>
      </div></TD>
    <TD> <div class="col-sm-10">
      <select name="tipo" type="text" class="form-control" id="inputTipo">
        <option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
        <option value="mercedes">Mercedes</option>
        <option value="audi">Audi</option>
      </select>
    </div></TD>
    <TD><div class="form-group row">
      <label for="inputCapasidad" class="col-sm-2 col-form-label">Capasidad:</label>
    </div></TD>
    <TD><div class="col-sm-10">
      <input name="capasidad" type="text" class="form-control" id="inputCapasidad" placeholder="capasidad">
    </div></TD>
    <TD> <div class="form-group row">
      <label for="inputMastil" class="col-sm-2 col-form-label">Mastil:</label>
    </div></TD>
    <TD>  <div class="col-sm-10">
      <input name="mastil" type="text" class="form-control" id="inputMastil" placeholder="Mastil">
    </div></TD>
	</TR>
  <TR>
		<TD> <div class="form-group row">
      <label for="inputTipove" class="col-sm-2 col-form-label">Tipo de veiculo:</label>
    </div></TD>
     <TD> <div class="col-sm-10">
      <select name="tipove" type="text" class="form-control" id="inputTipove">
        <option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
        <option value="mercedes">Mercedes</option>
        <option value="audi">Audi</option>
      </select>
    </div></TD> 
     <TD>Estatus:</TD>
     <TD>  
      <div class="form-group row">
        <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" name="direccion_asistida" type="checkbox" id="lbl_da">
            <label class="col-sm-2 form-check-label" for="lbl_da">
              Veiculo en renta
            </label>
          </div>
        </div>
      </div></TD>
     <TD> <div class="form-group row">
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" name="abs" type="checkbox" id="lbl_abs">
          <label class="col-sm-2 form-check-label" for="lbl_abs">
            Veiculo vendido
          </label>
        </div>
      </div>
    </div>
  </TD>
     <TD> <div class="form-group row">
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" name="airbags" type="checkbox" id="lbl_airbags">
          <label class="col-sm-2 form-check-label" for="lbl_airbags">
            veiculo en reparacion
          </label>
        </div>
      </div>
    </div></TD>
	</TR>
  <TR>
	</TR>
</TABLE>
<center><div class="form-group row">
  <div class="col-sm-10">
    <button type="submit" class="font-bold
    py-3 px-20 rounded-md bg-blue-200 hover:bg-blue-400">Guardar</button>
  </div>
</div></center>
</form>
</div>
</div>

</body>
</html>