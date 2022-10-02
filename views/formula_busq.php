<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<div class="input-group mb-3">
    <form action="actions/busquedaSociosAction.php" method="post">
        <input type="text" placeholder="apellido" name="dato">
        <select name="busqueda">
            <option value="apellido">apellido</option>
            <option value="ci"> carnet</option>
            <option value="papeleta">papeleta</option>
        </select> 
        <button>buscar</button>
    </form>
</div>
