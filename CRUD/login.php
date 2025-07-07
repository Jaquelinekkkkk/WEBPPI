<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: white;
            font-family: Arial, sans-serif;
        }

        form {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px black;
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 300px;
        }

       
        input[type="email"]{
            
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        input[type="senha"]{
            
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        input[type="submit"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: blue;
            color: white;
        }

      
    </style>
</head>
<body>

    <form action="rota.php?rota=autenticacao" method="post">
        <label for="email">Login</label>
        <input type="email" id="email" name="email" required>
        
        <label for="senha">Senha</label>
        <input type="senha" id="senha" name="senha" required>

        <input type="submit" value="autenticar">
    </form>
    
</body>
</html>