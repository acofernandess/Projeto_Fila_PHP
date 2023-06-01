<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    

    <title>Adicionar Fila</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"rel="stylesheet"integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"crossorigin="anonymous"></link href>

    <link rel="stylesheet" href=".style.css">

</head>
<body >

      
                <header class="cabeça"> 

                        <p>.</p>
                        <p>.</p>
                    

                </header>

                <div class="titulo">  

                        <h1 class="textotitulo">Festival do Vinho - São Roque</h1>        
                </div>

        <div class="textoa">

                

        <p class="textob">AGUARDE PARA RETIRAR SUA TAÇA DE VINHO GRATIS</p>

                </div>
        </div>


        <article class="artigo">  
            
        
        <br><br><br><br><br>

                    <div class="divphpad"> 


                  

                            <?php 
                                        session_start();
                                        
                                        
                                    if (isset($_POST['nome']) && isset($_POST['documento'])) {
                                        $nome = $_POST['nome']; 
                                        $documento = $_POST['documento']; 
                                        }

                                        if ($_SESSION['posicao'] >=100) {
                                            echo "Desculpe, a fila está cheia no momento. Tente novamente mais tarde.";
                                            exit; 
                                        }

                                        $_SESSION['posicao'] = $_SESSION['posicao'] + 1;
                                        
                                        $posicao = $_SESSION['posicao'];

                                        $tempoEstimado = ($posicao - 1) * 5 . " minutos";

                                        $_SESSION['nome'] = $nome; 

                                        $_SESSION['documento'] = $documento; 

                                        $_SESSION['tempo_estimado'] = $tempoEstimado; 

                                    if (isset($_SESSION['posicao']) && isset($_SESSION['tempo_estimado'])) {
                                        $posicao = $_SESSION['posicao'];
                                        $tempoEstimado = $_SESSION['tempo_estimado']; 
                                        echo "Você está na posição $posicao da fila. <br> Tempo estimado de atendimento: $tempoEstimado";
                                        
                                    
                                    }
                                        ?>

                           </div>   

                           
                                <div class="divlinksad"> 
                                <br><br><br><br><br>
                                            <a href="continuar_fila.php">Continuar na fila</a> 
                                            | 
                                            <a href="sair_fila.php">Sair da fila</a>

                                </div>

                               
                            
                                <?
                                exit;  
                    ?>

                    


        </article>

                    <div class="imgad">

                    <img src="./cacho.png" alt="">

                    </div>
                 
        <footer class="pé">
            <p class="textepe"> BEBA COM MODERAÇÃO - SE BEBER NÃO DIRIJA - PROIBIDO O CONSUMO POR MENORES DE IDADE</p>
            
        </footer>
    
    
</body>
</html>