@extends('layouts.app')

@section('title', 'Home')

@section('content')
    
  <h1 class="text-5xl text-center pt-24">Salida de maquinaria</h1>
  <br> 
  

<center>
  <table class="default">

    <tr>
  
      <td>Marca</td>
      <td></td>
      <td> <select name="marca">
        <option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
        <option value="mercedes">Mercedes</option>
        <option value="audi">Audi</option>
      </select></td>

  
    </tr>
  
    <tr>
  
      <td>Tiempo:</td>
      <td></td>
      <td> 
        <label for="talla">Dias</label>
        <input type="email" name="dias" id="dias">

        <label for="talla">Meses:</label>
        <input type="number" name="meses" id="meses">
        <label for="terms">Tiempo indefinido</label>
       <input type="checkbox" name="terms" id="terms" value="1">
       </td>
    </tr>
    <tr>
      <td>numero de serie:</td>
      <td>
        <input id="ticketNum" type="number" name="ticketNum" list="defaultNumbers" />
<span class="validity"></span>

<datalist id="defaultNumbers">
  <option value="10045678"></option>
  <option value="103421"></option>
  <option value="11111111"></option>
  <option value="12345678"></option>
  <option value="12999922"></option>
</datalist>
      </td>
    </tr>
  
  </table>
  <br>
  <button type="button">Enviar</button>
  
</center>
  
  
  
 



@endsection