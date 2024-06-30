<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
  <header class="header">
    <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="#">Cart</a>
      <a href="Costumer_login.php">Login</a>
    </nav>
    <form action="#" class="search-bar">
      <input type="text" placeholder="Search...">
      <button type="submit"><ion-icon name="search-outline"></ion-icon></button>
    </form>
  </header>
  <div class="container">
    <div class="content">
        <h1><ion-icon name="hardware-chip-outline"></ion-icon>LPA eComms</h1>
    </div>
  </div>
  <section>
            <h2>Nossos Produtos</h2>
            <div class="produto">
                <h3>Teclado Mecânico</h3>
                <p>R$ 250,00</p>
                <button onclick="adicionarAoCarrinho('Teclado Mecânico', 250)">Adicionar ao Carrinho</button>
            </div>
            <div class="produto">
                <h3>Mouse Gamer</h3>
                <p>R$ 150,00</p>
                <button onclick="adicionarAoCarrinho('Mouse Gamer', 150)">Adicionar ao Carrinho</button>
            </div>
            <div class="produto">
                <h3>Headset</h3>
                <p>R$ 200,00</p>
                <button onclick="adicionarAoCarrinho('Headset', 200)">Adicionar ao Carrinho</button>
            </div>
        </section>
  <footer>
      <p>&copy; 2024 LPA eComms. All rights reserved.</p>
  </footer>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>