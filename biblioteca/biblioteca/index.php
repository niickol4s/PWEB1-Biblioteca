<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Livros</title>
        <style>
            body {
                font-family: sans-serif;
            }
            .container {
                width: 300px;
            }

            form {
                /* background-color: blue; */
                display: flex;
                flex-direction: column;
            }

            input {
                padding: 10px;
                margin-top: 10px;
                border-radius: 5px;
            }

            input[type="submit"] {
                
                border: none;
                background-color: #007bff;
            }

            input[type="reset"] {
                border: none;
                background: none;
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