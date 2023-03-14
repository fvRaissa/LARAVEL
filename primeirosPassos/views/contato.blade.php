<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css ">
    <link rel="stylesheet" type="text/css" href="css/style-msg.css ">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{url('/inicio')}}"><img class="img_menu" src="assets/casa2.png"></a></li>
            <li><a href="{{url('/contato')}}"><img class="img_menu" src="assets/mensagem2.png"></a></li>
            
        </ul>
    </nav>
    
    <div class="container">
        <div class="titulo">
            
            <h1>FALE CONOSCO</h1>
        </div>
        <form method="get" action="Models/Contato.php">
            <input type="text" class="caixa_txt" placeholder="Nome">
            <br>
            <input type="email" class="caixa_txt" placeholder="Email">
            <br>
            <input type="text" class="caixa_txt" placeholder="Assunto">
            <br>
            <textarea type="text" class="caixa_msg" placeholder="Mensagem"></textarea>
            <br>
            <button id="enviar">Enviar</button>
    
        </form>
    </div>
</body>
</html>l