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

 <center>
  <h1 class="text-3xl text-center pt-1">Agregar Motor</h1>

 <form action="/saveTipoVehiculo" method="POST">
  @csrf
 <TABLE BORDER CELLPADDING=20 CELLSPACING=10>
  
	<TR>
		<TD> <div class="form-group row">
      <label for="inputEmpresa" class="col-sm-2 col-form-label">Nombre del tipo de Vehiculo:</label>
    </div></TD> 
    <TD> <div class="col-sm-10">
        <input name="nombre" type="text" class="form-control" id="inputMotor" placeholder="Nombre del motor">
      </div>
    </TD> 


     <TD><div class="form-group row">
      <div class="col-sm-10">
        
        <button type="submit" class="font-bold
        py-2 px-5 rounded-md bg-green-300 hover:bg-green-500">Guardar</button>

      </div>
    </div></TD>  
     <TD> <div class="w-1/1 px-0 mr-auto">
        <a href="{{ route('admin.regresaragregar') }}" class="font-bold

        py-2 px-5 rounded-md bg-blue-200 hover:bg-blue-400">Regresar</a>

      </div></TD>  
  
  <TR>
	</TR>
 </TABLE>
 </form></center>
<center>  
<h1 class="text-3xl text-center pt-1">lista  de Tipos de Motores</h1>


<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      
      <th scope="col">Nombre</th>
     <th>Mas</th>

   
    </tr>
  </thead>
  <tbody>
    
    @foreach ($tipoV as $item)
    <tr>
      <th scope="row">{{ $item->id_tipoVehiculo }}</th>
     
      <td>{{ $item->nombre }}</td>
      <td> <button type="submit" class="font-bold
        py-1 px-3 rounded-md bg-yellow-200 hover:bg-yellow-400">Editar</button></td>
        <td> <button type="submit" class="font-bold
          py-1 px-3 rounded-md bg-red-200 hover:bg-red-400">Eliminar</button></td>
       </tr>
    @endforeach
  </tbody>
</table></center>




</body>
</html>