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
  
<center>
  <h1 class="text-4xl text-center pt-1">Alquiler de vehiculo</h1>
  <form action="/guardar3" method="POST">
   @csrf
    <TABLE BORDER CELLPADDING=20 CELLSPACING=10>
      <TR>
        <TD> 
          <div class="form-group row">
            <label for="inputid_empresa" class="col-sm-2 col-form-label">Empresa:</label>
          </div>
        </TD> 
        <TD>
          <select name="id_empresa" class="form-control" id="inputid_motor">
           @foreach($empresa as $itemE)
           <option value="{{ $itemE->id_empresa}}"> {{ $itemE->nombre}} </option>
           @endforeach
          </select>
        </TD>
        <TD>
          <div class="form-group row">
            <label for="inputfecha" class="col-sm-2 col-form-label">Fecha:</label>
          </div>
        </TD>
        <TD>
          <div class="col-sm-10">
            <input type="date" name="fecha_pedido" id="inputfecha_pedido" class="form-control">
          </div>
        </TD>
        <TD> 
          <div class="form-group row">
             <label for="inputtipo_renta" class="col-sm-2 col-form-label">tipo_renta:</label>
          </div>
        </TD>
        <TD>
          <div class="col-sm-10">
             <input name="tipo_renta" type="text" class="form-control" id="inputtipo_renta" placeholder="renta">
           </div>
          </TD>
      </TR>
      <TR>
        <TD>
         <div class="form-group row">
           <label for="inputid_vechiculo" class="col-sm-2 col-form-label">Vehiculo:</label>
         </div>
        </TD>
        <TD>
          <select name="id_vehiculo" class="form-control" id="inputid_motor">
           @foreach($vehiculo as $itemV)
           <option value="{{ $itemV->id_vehiculo}}"> {{ $itemV->marca}} </option>
           @endforeach
          </select>
        </TD>
        <TD> 
          <div class="form-group row">
           <label for="inputrendatario" class="col-sm-2 col-form-label">Rendatario:</label>
          </div>
        </TD>
        <TD>
          <div class="col-sm-10">
            <input name="rendatario" type="text" class="form-control" id="inputrendatario" placeholder="Mario">
          </div>
          </TD>
       <TD></TD>
       <TD></TD>
      </TR>
    
     <TR>
        <TD></TD>
        <TD></TD> 
        <TD></TD>
        <TD></TD>  
        <TD></TD>  
        <TD></TD> 
     <TR>
      </TR>
      <tr>
        <td></td>
        <td></td>
        <td><div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="font-bold py-2 px-5 rounded-md bg-blue-200 hover:bg-blue-400">Guardar</button>
          </div>
        </td>
        <td><div class="w-1/1 px-0 mr-auto">
          <a href="{{ route('admin.maquinaria') }}" class="font-bold py-2 px-5 rounded-md bg-blue-200 hover:bg-blue-400">Regresar</a>
        </div></td>
        <td></td>
        <td></td>
      </tr>
    </TABLE>
  </form>
  <h1 class="text-2x1 text-center pt-2">Lista de Rentas</h1>
  <hr>
    <table class="table">
     <thead cclass="table-light">
       <tr>
         <th scope="col">#</th>
         <th scope="col">Empresa</th>
         <th scope="col">tipo renta</th>
         <th scope="col">marca vehiculo</th>
         <th scope="col">modelo vehiculo</th>
         <th scope="col">Rendatario</th>
         <th scope="col">Fecha</th>
<th></th>
        <th>Mas</th>


       </tr>
     </thead>
     <tbody>

       @foreach ($rentas as $itemrenta)
       <tr>
       <th scope="row">{{ $itemrenta->id_renta}}</th>
         <td >{{ $itemrenta->empresa }}</td>
         <td>{{ $itemrenta->tipo_renta }}</td>
         <td>{{ $itemrenta->marca}}</td>
         <td>{{ $itemrenta->modelo}}</td>
         <td>{{ $itemrenta->rendatario }}</td>
         <td>{{ $itemrenta->fecha_pedido }}</td>
         <td>
         </td>
           <td>
            
            
        </td>
          </tr>

       @endforeach
     </tbody>
</center>




</body>
</html>