<?php
  include '../controllers/busquedaSocios.php';
  include '../views/tablaSocios.php';

  function verSocio($socio){
    

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
<form>
  <fieldset>
    <legend>nombre del usuario</legend>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Id usuario :</label>
      <div class="col-sm-4">
      </div>
    </div>
    <div class="col-md-4">
      

    <div class="form-group">
      <label for="exampleSelect1" class="form-label mt-4">selecionar tipo de prestamo <button type="button" class="btn btn-outline-primary">Entrar</button>
      </label>
      <select class="form-select" id="exampleSelect1">
        <option>Regular</option>
        <option>Auxilio</option>
        <option>Consumo</option>
        <option>Emergencia</option>
        <option>Educacional</option>
        <option>interes CAI</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleTextarea" class="form-label mt-4">Monto</label>
      <textarea class="form-control" id="exampleTextarea" rows="1"></textarea>
    </div>
    <div class="form-group">
      <label for="exampleTextarea" class="form-label mt-4">plazo</label>
      <textarea class="form-control" id="exampleTextarea" rows="1"></textarea>
    </div>
    <!-- //los radio buttons -->
    <fieldset class="form-group">
      <legend class="mt-4">Eliga si se realizara la refinaciacion</legend>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
        <label class="form-check-label" for="optionsRadios1">
          Si
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
        <label class="form-check-label" for="optionsRadios2">
          No
        </label>a
      </div>
      
    </fieldset>
      </form> 
   <a href="../controllers/refinan.php?">verificar refinanciamiento</a>;

    </body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>
