<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fila de Atendimento</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"rel="stylesheet"integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"crossorigin="anonymous"></link href>

    <link rel="stylesheet" href=".style.css">


</head>

<body>

        <header class="cabeça"> 

            <p>.</p>
            <p>.</p>            

        </header>


    <div class="titulo">  

        <h1 class="textotitulo">Festival do Vinho - São Roque</h1>        
    </div>

    <div class="textoa">

        <p class="textob">RETIRE SUA TAÇA DE VINHO GRATIS</p>

    </div>



       
    

        <article class="artigo">

       


                <div class="formulario">

                <div class="textoformulario">
                    <p class="frase1"> <b>"O bom vinho é um camarada bondoso e de confiança, quando tomado com sabedoria." - William Shakespeare </b> 
                </p>
                    
                </div>

                
                            

                                <form action="adicionar_fila.php" method="POST" class="form1">

                                    <p>Nome</p>
                                    <label for="nome"> </label>
                                    <input type="text" id="nome" name="nome" required><br>

                                    <br>

                                    <p>Documento</p>
                                    <label for="documento"> </label>
                                    <input type="text" id="documento" name="documento" required><br>

                                    <br>

                                    <input type="submit" value="Enviar">
                                </form>
                </div>

                <div class="imgindex">

                    <img src="./taça.png" alt="">                 

                </div>

            

        </article>

        <footer class="pé">
            <p class="textepe"> BEBA COM MODERAÇÃO - SE BEBER NÃO DIRIJA - PROIBIDO O CONSUMO POR MENORES DE IDADE</p>
            
        </footer>
    





    
</body>
</html>