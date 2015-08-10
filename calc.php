<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="proc.php" method="POST" name="calc">
            <label>coloque los valores</label><br >
            <input type="text" name="c1"/><br><br>
            <input type="text" name="c2"/><br><br>
            <input type="text" name="c3"/><br><br>
            <label>selecciona la operacion: <select name="lista">
                    <option value="sumar">sumar</option> 
                    <option value="restar">restar</option> 
                    <option value="multiplicar">multiplicar</option> 
                    <option value="dividir">dividir</option> 
                    <input type="submit" value="ver resultado"/>
            </select>
            </label>
        </form>
    </body>
</html>
