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
        <option value="TOYOTA">TOYOTA</option>
        <option value="HYSTER">HYSTER</option>
        <option value="CATERPILLAR">CATERPILLAR</option>
        <option value="YALE">YALE</option>
        <option value="MITSUBISHI">MITSUBISHI</option>
        <option value="NISSAN">NISSAN</option>
      </select></div></TD> 
      
      <TD><div class="form-group row">
        <label for="inputmodelo" class="col-sm-2 col-form-label">Modelo:</label>
        
      </div>
    </TD>
      <TD><div class="col-sm-10">
        <input name="modelo" type="text" class="form-control" id="inputModelo" placeholder="modelo">
      </div></TD>
         <TD> <div class="form-group row">
          <label for="inputSerie" class="col-sm-2 col-form-label">Serie:</label>
        </div></TD>
         <TD><div class="col-sm-10">
          <input name="serie" type="text" class="form-control" id="inputSerie" placeholder="numero de serie ">
        </div></TD>
     
	</TR>
	<TR>
		<TD>
      <div class="form-group row">
        <label for="inputTipo" class="col-sm-2 col-form-label">Tipo de motor:</label>
      </div></TD>
    <TD><div class="col-sm-10">
      <input name="tipo" type="text" class="form-control" id="inputTipo" placeholder="tipo de motor">
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
      <input name="mastil" type="text" class="form-control" id="inputMastil" placeholder="mastil">
    </div></TD>
	</TR>
  <TR>
		<TD> <div class="form-group row">
      <label for="inputTipove" class="col-sm-2 col-form-label">Tipo de veiculo:</label>
    </div></TD>
     <TD> <div class="col-sm-10">
      <select name="tipove" type="text" class="form-control" id="inputTipove">
        <option value="Montacargas">Montacargas</option>
        <option value="saab">Saab</option>
        <option value="mercedes">Mercedes</option>
        <option value="audi">Audi</option>
      </select>
    </div></TD> 

     <TD> <div class="form-group row">
      <label for="inputEstatus" class="col-sm-2 col-form-label">Estatus:</label>
    </div></TD>
     <TD> <div class="col-sm-10">
      <select name="estatus" type="text" class="form-control" id="inputEstatus">
        <option value="veiculo en renta ">veiculo en renta </option>
        <option value="veiculo vendido">veiculo vendido</option>
        <option value="veiculo en reparacion">veiculo en reparacion</option>
      
      </select>
    </div></TD>  
     <TD><div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="font-bold
        py-2 px-5 rounded-md bg-blue-200 hover:bg-blue-400">Guardar</button>
      </div>
    </div></TD>  
     <TD> <div class="w-1/1 px-0 mr-auto">
        <a href="{{ route('admin.maquinaria') }}" class="font-bold

        py-2 px-5 rounded-md bg-blue-200 hover:bg-blue-400">Regresar</a>

      </div></TD>  
  
  <TR>
	</TR>
</TABLE>
<center><h1>Maquinaria </h1></center>





</form>
</div>
</div>

</body>
</html>