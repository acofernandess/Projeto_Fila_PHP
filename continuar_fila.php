<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continuar na fila</title>
</head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"rel="stylesheet"integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"crossorigin="anonymous"></link href>

    <link rel="stylesheet" href=".style.css">

<body>

        <header class="cabeça"> 
        <p>.</p>
        <p>.</p>

        </header>

        <div class="titulo">  

            <h1 class="textotitulo">Festival do Vinho - São Roque</h1>        
        </div>

            <div class="textoa">

                    <div class="textob">

                            <p class="textob">AGUARDE PARA RETIRAR SUA TAÇA DE VINHO GRATIS</p>

                    </div>
            </div>





        <article class="artigo">

        <br><br><br><br><br>

        <div class="divphpcon">

        
                <?php 

                session_start();

                if (isset($_SESSION['posicao']) && isset($_SESSION['tempo_estimado'])) {
                    $posicao = $_SESSION['posicao'];
                    $tempoEstimado = $_SESSION['tempo_estimado'];
                    echo "Você está na posição $posicao na fila. Tempo estimado de atendimento $tempoEstimado";
                    }              
                ?>  

                <div class="divlinkscon">

                <a href="index.php"> Clique aqui para voltar ao cadastro </a>
                 

                </div>


            </div>
        </article>

        <div class="imgcon">

        <img src="./cesta.png" alt="">

        </div>
  

        <footer class="pé">
            <p class="textepe"> BEBA COM MODERAÇÃO - SE BEBER NÃO DIRIJA - PROIBIDO O CONSUMO POR MENORES DE IDADE</p>
            
        </footer>
</body>
</html>

