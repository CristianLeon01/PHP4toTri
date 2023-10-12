<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <form action="Calculadora.php" method='POST'>
        <label for="operador1">Operador 1:</label>
        <input type="number" name='operador1' value placeholder='Operador1'>

        <label for="operador2">Operador 2:</label>
        <input type="number" name='operador2' value placeholder='Operador2'>

        <label for="operaciones">Operación:</label>
        <select name="operaciones" id="operacion">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>

        <input type="submit" value='Enviar' name='Enviar'>
    </form>
</body>

</html>