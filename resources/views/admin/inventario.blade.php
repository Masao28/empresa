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
  <h1 class="text-2xl text-center pt-1">Agregar nuevo  vehiculo</h1>

 <form action="/guardar" method="POST">
  @csrf
 <TABLE BORDER CELLPADDING=20 CELLSPACING=10>
  
	<TR>

    

    <div class="col-sm-10">
      <input name="id_vehiculo" type="text" class="form-control" id="inputid_vehiculo" placeholder="id_vehiculo">
    </div>
		<TD> <div class="form-group row">
      <label for="inputmarca" class="col-sm-2 col-form-label">marca:</label>
    </div></TD> 
    <TD> <div class="col-sm-10">
      <select name="marca" type="text" class="form-control" id="inputmarca">
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
        <input name="modelo" type="text" class="form-control" id="inputmodelo" placeholder="modelo">
      </div></TD>

         <TD> <div class="form-group row">
          <label for="inputserie" class="col-sm-2 col-form-label">serie:</label>
        </div></TD>
         <TD><div class="col-sm-10">
          <input name="serie" type="text" class="form-control" id="inputserie" placeholder="numero de serie ">
        </div></TD>
	</TR>

	<TR>
		<TD>
      <div class="form-group row">
        <label for="inputid_motor" class="col-sm-2 col-form-label">tipo de motor:</label>
      </div></TD>
    <TD>
      <select name="id_motor" class="form-control" id="inputid_motor">
        @foreach($tipomo as $itemM)
        <option value="{{ $itemM->id_motor}}"> {{ $itemM->nombre }} </option>
        @endforeach
      </select>
    </TD>

    <TD> <div class="form-group row">
      <label for="inputcapacidad" class="col-sm-2 col-form-label">capacidad:</label>
    </div></TD>
     <TD><div class="col-sm-10">
      <input name="capacidad" type="text" class="form-control" id="inputcapacidad" placeholder="numero de capacidad ">
    </div></TD>

    <TD> <div class="form-group row">
      <label for="inputmastil" class="col-sm-2 col-form-label">mastil:</label>
    </div></TD>
    <TD>  <div class="col-sm-10">
      <input name="mastil" type="text" class="form-control" id="inputmastil" placeholder="mastil">
    </div></TD>
	</TR>
  
  <TR>
		<TD> <div class="form-group row">
      <label for="inputid_tipoVehiculo " class="col-sm-2 col-form-label">Tipo de veiculo:</label>
    </div></TD>
     <TD>
      
      <select name="id_tipoVehiculo" type="text" class="form-control" id="inputid_tipoVehiculo ">
      @foreach($tipoVe as $itemTV)
      <option value="{{ $itemTV->id_tipoVehiculo }}"> {{ $itemTV->nombre }} </option>
     
      
      @endforeach
    </select>
  </TD> 
     <TD> <div class="form-group row">
      <label for="inputstatus" class="col-sm-2 col-form-label">status:</label>
    </div></TD>
     <TD><div class="col-sm-10">
      <input name="status" type="text" class="form-control" id="inputstatus" placeholder="numero de status ">
    </div>
  </TD>  
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
 </form>
 <h1 class="text-2x1 text-center pt-2">Lista de vehiculos</h1>

 <table class="table">
  <thead>
    <tr>
      <th scope="col">id vehiculo</th>
      <th scope="col">marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Serie</th>
      <th scope="col">Tipo de motor</th>
      <th scope="col">Capacidad</th>
      <th scope="col">Mastil</th>
      <th scope="col">Tipo de vehiculo</th>
      <th scope="col">status</th>
    
     <th>Mas</th>
     
   
    </tr>
  </thead>
  <tbody>
    
    @foreach ($vehiculo as $itemvehiculo)
    <tr>
    <th scope="row">{{ $itemvehiculo->id_vehiculo}}</th>
      <td>{{ $itemvehiculo->marca }}</td>
      <td>{{ $itemvehiculo->modelo }}</td>
      <td>{{ $itemvehiculo->serie}}</td>
      <td>{{ $itemvehiculo->id_motor}}</td>
      <td>{{ $itemvehiculo->capacidad }}</td>
      <td>{{ $itemvehiculo->mastil }}</td>
      <td>{{ $itemvehiculo->id_tipoVehiculo}}</td>
      <td>{{ $itemvehiculo->status }}</td>
     

      <td> <button type="submit" class="font-bold
        py-1 px-3 rounded-md bg-yellow-200 hover:bg-yellow-400">Editar</button></td>
        <td> <button type="submit" class="font-bold
          py-1 px-3 rounded-md bg-red-200 hover:bg-red-400">Eliminar</button></td>
       </tr>
    @endforeach
  </tbody>
</center>

</body>
</html>