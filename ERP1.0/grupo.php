<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        
        <meta charset="UTF-8">
        <title>Cadastro Grupo | SPPHP</title>
    </head>
    <body>
        <center><h1>Cadastro de Grupo</h1></center>
        <form action="Dao/GrupoDao.php" method="post">
            <fieldset>
                <legend>Cadastro de Grupo</legend>
                <label>Nome</label>
                <input type="text" name="nome" maxlength="40"/>
                <br/>
                <label>Descrição</label>
                <textarea maxlength="100" name="desc"></textarea>
                <br/>
                <input type="submit" value="Salvar"/>
                <input type="reset" value="Cancelar"/>
            </fieldset>
        </form>
         <a href="cadastro.php">Menu de Cadastro</a>
        
    </body>
</html>
