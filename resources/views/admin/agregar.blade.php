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

  <center><table BORDER CELLPADDING=10 CELLSPACING=10>
    <caption>agregar nuevos</caption>
    
    <col span="2" class="fondo"><col>
    <tr>
      <td> Agregar nueva empresa  </td>
      <td><br><br></td>
      
      <td> Agregar un motor  </td>
      <td></td>
      <td>Agregar un tipo de vehiculo</td>
      
      
    </tr>
    <tr>
      <td><a href="{{ route('admin.empresa') }}" class="font-bold
        py-2 px-5 rounded-md bg-blue-200 hover:bg-blue-400">Agregar empresa </a></td>
    <td></td>
      <td><a href="{{ route('admin.vitasmotores') }}" class="font-bold
        py-2 px-5 rounded-md bg-blue-200 hover:bg-blue-400">Agregar motor </a></td>
    <td></td>
      <td><a href="{{ route('admin.vitatipovehiculo') }}" class="font-bold
        py-2 px-5 rounded-md bg-blue-200 hover:bg-blue-400">Agregar tipo de vehiculo </a></td>
    <td></td>
      
    </tr>
    <tr>
      <td><br></td>
    </tr>
    <tr>
        <td></td>
        <td><br></td>
        <td><a href="{{ route('admin.maquinaria') }}" class="font-bold

            py-2 px-5 rounded-md bg-blue-200 hover:bg-blue-400">Regresar</a></td>
        <td></td>
      </tr>
  </table></center>
   
  






</body>
</html>