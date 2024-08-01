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
                width: 400px;
            }

            h1 {
              font-size: 28px;
              color: #212529;
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

            input {
                color: #343A40;
                font-size: 17px;
                font-weight: bold;
                padding: 15px;
                margin-top: 10px;
                border-radius: 5px;
                border: none;
                background-color: #dee2e6;
            }

            input[type="submit"] {
                font-size: 17px;
                cursor: pointer;
                color: white;
                font-weight: bold;
                border: none;
                background-color: #0353A4;
            }

            input[type="reset"] {
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
        </style>
    </head>
    <body>

        <div class="container">
            <h1>Cadastro de Livros</h1>
            <p>Cadastre de forma rápida livros, seus autores e anos de publicação.</p>
            <form method="POST" action="">
                <label for="titulo">Título:</label>
                <input placeholder="Título" type="text" id="titulo" requered></input>
                
                <label for="autor">Autor:</label>
                <input placeholder="Autor" type="text" id="autor" requered></input>
                
                <label for="ano">Ano de Publicação:</label>
                <input placeholder="Ano de Publicação" type="date" id="ano" requered></input>
                
                <input type="submit" value="Cadastrar"></input>
                <input type="reset" value="Limpar"></input>
            </form>
        </div>

    </body>
</html>
