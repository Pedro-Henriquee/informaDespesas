<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action='despesas.php' method='POST'>
            <label>Informe seu nome:</label>
            <input type="name" name="nome">
            <label>Informe seu ano de nascimento:</label>
            <input type="number" name="data"> 
            <label>Informe seu salário por hora:</label>
            <input type="number" name="salarioHora">
            <label>Informe seu gasto com aluguel:</label>
            <input type="number" name="aluguel"> 
            <input type="submit" value="Clique" name="enviar">
        </form>      
    </body>
</html>
