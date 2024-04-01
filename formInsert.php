<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Insert</title>
</head>
<body>
    <main>

        <header>Cadastrar dados dos clientes</header>
        <section>
            <form action="insert.php" method="post">
    
                <p>Nome: <input type="text" name="name"></p>
                <p>E-mail: <input type="email" name="email"></p>
                <p>Idade: <input type="number" name="idade"></p>
    
                <button type="submit">Inserir Dados</button>
    
            </form>
        </section>

    </main>
</body>
</html>