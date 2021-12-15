<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title> Formulário para envio de artes - ARTSHARE </title>
   <style>
      p{
         position: relative;
         text-align: center;
      }
      h2{
         text-align: center;
      }
      body{
         background-color: #4b5c8c;
      }
   </style>
</head>
<body>
   <form action="upload.php" enctype="multipart/form-data" method="post">

    <h2> <i>FORMULÁRIO PARA PROJETO DA ARTSHARE</i> </h2>
   
    <p> <i>Digite seu nome: <input type="text" name="nome"></i></p>
    <p><i> Cidade onde mora: <input type="text" name="cidade"></i></p>
    <p> <input type="file" name="arquivo"></p>
    <p> <button type="submit"> Enviar arquivo </button> </p>
   
   </form>
</body>
</html>