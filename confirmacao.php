<!DOCTYPE html>
<html lang="br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmacao</title>
    <style>
        body{
            margin: 50px;
            width: 400px; 
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>

    <p class="nome">
        Nome:
        <?php
        echo $_POST['nome'];
        ?>
    </p>

    <p>
        Email:
        <?php
        echo $_POST['email'];
        ?>
    </p>

    <p>
        Sexo:
        <?php
        echo $_POST['sexo'];
        ?>
    </p>

    <p>
        Escolaridade:
        <?php
        echo $_POST['escolaridade'];
        ?>
    </p>

    <p>
        <input type="submit" name="confirmar" value="Confirmar" onclick="location.href='processar.php'" 
        <?php
            $file = fopen('meuarquivo.txt','w');
            $texto1 = $_POST['nome'];
            $texto2 = $_POST['email'];
            $texto3 = $_POST['sexo'];
            $texto4 = $_POST['escolaridade'];
            $texto5 = date('d/m/Y H:i');
            $espaco = "-";
            $vetor = array($texto1,$texto2,$texto3,$texto4);
            for($i = 0; $i < 4 ; $i++){
                fwrite($file,$vetor[$i]);
                fwrite($file,$espaco);
            }
            fwrite($file,$texto5);
            $quebra = "\n";
            fwrite($file,$quebra);
        ?>>
        <button onclick="location.href='index.html'">Voltar</button>
    </p>


</body>

</html>