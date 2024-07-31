<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Livros</title>
        <style>
            body {          
                background-color: #CF8F9FA;
                font-family: sans-serif;
            }
            .container {
                width: 300px;
            }

            form {
                display: flex;
                flex-direction: column;
            }

            input {
                padding: 15px;
                margin-top: 10px;
                border-radius: 5px;
                border: none;
                background-color: #CED4DA;
            }

            input[type="submit"] {
                cursor: pointer;
                color: white;
                font-weight: bold;
                border: none;
                background-color: #0353A4;
            }

            input[type="reset"] {
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
