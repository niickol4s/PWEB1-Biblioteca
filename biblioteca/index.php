<?php
    require_once 'processa_livro.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Livros</title>
        <style>
            body {          
                display: flex;
                justify-content: center;
                background-color: #dee2e6;
                font-family: sans-serif;
            }
            
            .container {
                padding: 16px;
                border-radius: 5px;
                background-color: #F8F9FA;
                border: 1px solid rgba(52, 58, 64, 0.1);
                width: 400px;
                box-shadow: rgba(248, 249, 250, 0.1) 0px 2px 8px 0px;
            }

            h1 {
              font-size: 28px;
              color: #212529;
              margin-bottom: 2px;
            }
            
            p {
              font-size: 18px;
              color: #343A40;
            }
            
            label {
              font-size: 18px;
              color: #212529;
              font-weight: bold;
              margin-left: 16px;
              margin-top: 10px;
            }

            form {
                display: flex;
                flex-direction: column;
            }

            .btn {
              display: flex;
              flex-direction: row-reverse;
              justify-content: space-between;
              align-items: center;
              margin-top: 16px;
            }

            input {
                color: #343A40;
                font-size: 17px;
                font-weight: bold;
                padding: 15px;
                margin-top: 10px;
                border-radius: 5px;
                border: 1px solid rgba(52, 58, 64, 0.1);
                background-color: #dee2e6;
            }

            input:focus {
              outline: 1px solid #0353A4;
            }

            input[type="submit"] {
                height: 50px;
                width: 195px;
                font-size: 17px;
                cursor: pointer;
                color: #F8F9FA;
                font-weight: bold;
                border: none;
                background-color: #0353A4;
                transition: 0.3s;
            }

            input[type="submit"]:focus {
              outline: 0;
            }

            input[type="submit"]:active {
              background-color: #003559;
            }

            input[type="reset"] {
               height: 50px;
               width: 195px;
               font-size: 17px;
               cursor: pointer;
               color: #0353A4;
               font-weight: bold;
               border: none;
               background: none;
               transition: 0.3s;
            }

            input[type="reset"]:hover {
               background-color: #B9D6F2;
            }

            input[type="reset"]:focus {
              outline: 0;
            }
        </style>
    </head>
    <body>

        <div class="container">
            <h1>Cadastro de Livros</h1>

            <?php if(isset($mensagem)) : ?>
                <div class="mensagem"><?php echo $mensagem; ?></div>
            <?php endif; ?>

            <p>Cadastre de forma rápida livros, seus autores e anos de publicação.</p>
            <form method="POST" action="">
                <label for="titulo">Título:</label>
                <input placeholder="Título" type="text" id="titulo" name="titulo" requered></input>
                
                <label for="autor">Autor:</label>
                <input placeholder="Autor" type="text" id="autor" name="autor" requered></input>
                
                <label for="ano">Ano de Publicação:</label>
                <input placeholder="Ano de Publicação" type="date" id="ano" name="ano" requered></input>
                
                <div class="btn">
                  <input type="submit" value="Cadastrar"></input>
                  <input type="reset" value="Limpar"></input>
                </div>
            </form>

            <?php if($livro_recuperado) : ?>
                <div class="livro-detalhes">
                    <h2>Livros Cadastrados:</h2>
                    <p><strong>Título:<strong> <?php echo $livro_recuperado->getTitulo(); ?></p>
                    <p><strong>Autor:<strong> <?php echo $livro_recuperado->getAutor(); ?></p>
                    <p><strong>Ano de Publicação:<strong> <?php echo $livro_recuperado->getAno(); ?></p>
                </div>
            <?php endif; ?>
        </div>

    </body>
</html>