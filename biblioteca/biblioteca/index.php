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
                border: 1px solid rgba(52, 58, 64, 0.1);
                background-color: #F8F9FA;
                width: 400px;
            }

            h1 {
                font-size: 28px;
                color: #212529;
                margin-bottom: 5px;
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
                
                <div class="btn">
                  <input type="submit" value="Cadastrar"></input>
                  <input type="reset" value="Limpar"></input>
                </div>
            </form>
        </div>

    </body>
</html>
