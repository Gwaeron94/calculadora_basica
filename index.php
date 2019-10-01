<html>
    <head>
        <meta charset = "utf-8" />
        <title>Calculadora Básica</title>
    </head>
    <body>
        <form method = "GET" action = "calc.php">
            <input type = "number" name = "num_1" />
            <select name = "operacao">
                <option value = "+">+</option>
                <option value = "-">-</option>
                <option value = "*">*</option>
                <option value = "/">/</option>
            </select>
            <input type = "number" name = "num_2" />
            <input type = "submit" value = "Calcular" />
        </form>
    </body>
</html>