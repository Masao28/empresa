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
    <br><br>

<center><table class="default">

    <tr>
  
      <td><h1>Inventario de maquinaria</h1></td>
      <td><a href="{{ route('admin.inventario') }}" class="font-bold
        py-3 px-20 rounded-md bg-blue-200 hover:bg-blue-400">Agregar</a></td>
  
    </tr> 
    <tr>
        <td><br><br></td>
        
      </tr>
    <tr>
  
      <td>Montacargas de entrada</td>
  
      <td><a href="{{ route('admin.Montacargasdeentrada') }}" class="font-bold
          py-3 px-20 rounded-md bg-blue-200 hover:bg-blue-400">Ver</a></td>
    </tr>
    <tr>
        <td><br><br></td>
      
      </tr>
    <tr>
        <td>Montacargas de salida</td>
    
        <td><a href="{{ route('admin.Montacargasdesalida') }}" class="font-bold
              py-3 px-20 rounded-md bg-blue-200 hover:bg-blue-400">Ver</a></td>
      </tr>
      <td><br><br></td>
      <tr>
        <td>Montacargas de salida</td>
    
        <td><a href="{{ route('admin.empresa') }}" class="font-bold
              py-3 px-20 rounded-md bg-blue-200 hover:bg-blue-400">Agregar enpresa</a></td>
      </tr>
      
  </table> </center>
  </body>
</html>