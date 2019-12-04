<?php

$servicos = [
    ["imagem"=>"images/criar-site.png", "titulo"=>"Criamos seu Site!", "descricao"=>"Iremos criar um site incrível pra você!"],
    ["imagem"=>"images/criar-loja-virtual.jpg","titulo"=>"Criamos sua Loja Virtual!","descricao"=>"Venda online sem dor de cabeça!"],
    ["imagem"=>"images/criar-blog.png","titulo"=>"Criamos seu Blog!","descricao"=>"Seja um blogueiro incrível!"],
    ["imagem"=>"images/criar-site.png", "titulo"=>"Criamos seu Site!", "descricao"=>"Iremos criar um site incrível pra você!"],
    ["imagem"=>"images/criar-loja-virtual.jpg","titulo"=>"Criamos sua Loja Virtual!","descricao"=>"Venda online sem dor de cabeça!"],
    ["imagem"=>"images/criar-blog.png","titulo"=>"Criamos seu Blog!","descricao"=>"Seja um blogueiro incrível!"],
    ["imagem"=>"images/criar-site.png", "titulo"=>"Criamos seu Site!", "descricao"=>"Iremos criar um site incrível pra você!"],
    ["imagem"=>"images/criar-loja-virtual.jpg","titulo"=>"Criamos sua Loja Virtual!","descricao"=>"Venda online sem dor de cabeça!"],
    ["imagem"=>"images/criar-blog.png","titulo"=>"Criamos seu Blog!","descricao"=>"Seja um blogueiro incrível!"]
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    
    <header>

        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" width="120" alt="">
            </a>

            <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Serviços</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Sobre nós</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contato</a>
                </li>
              </ul>

        </nav>
        
        
        
    </header>
    
    <section id="banner">
        <h2>Compre nossos produtos! =)</h2>
    </section>
    <section id="servico" class="container mt-5">
        <div class="row">

        <?php foreach($servicos as $servico){ ?>

            <div class="col-4">
                <div class="card">
                    <img src="<?php echo $servico["imagem"]; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">
                          <?php echo $servico["titulo"]; ?>
                      <p class="card-text">
                          <?php echo $servico["descricao"]; ?>
                      <a href="#" class="btn btn-primary">Contrate Agora!</a>
                    </div>
                  </div>
            </div>

        <?php } ?>


            <!-- <div class="col-4">
                <div class="card">
                    <img src="images/criar-loja-virtual.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Criamos sua Loja Virtual!</h5>
                      <p class="card-text">Venda online sem dor de cabeça!</p>
                      <a href="#" class="btn btn-primary">Contrate Agora!</a>
                    </div>
                  </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="images/criar-blog.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Criamos seu Blog!</h5>
                      <p class="card-text">Seja um blogueiro incrível!</p>
                      <a href="#" class="btn btn-primary">Contrate Agora!</a>
                    </div>
                  </div>
            </div> -->
        </div>
    </section>

    <section id="sobre" class="container mt-5">
        <div class="row">
            <div class="col-6">
                <img src="images/sobre-nos.svg" class="img-fluid"/>            
            </div>

            <div class="col-6 d-flex justify-content-center flex-column">
                <h1>Sobre nós</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quae tempora libero consequuntur autem id praesentium distinctio porro. Obcaecati pariatur voluptatum omnis praesentium cupiditate corporis odit, totam veniam corrupti vel!</p>
            </div>

        </div>
    </section>

    
    <!-- <section id="about" class="container mt-5">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <img src="images/about-us.svg" class="card-img-top" alt="...">
                  </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Sobre nós!</h5>
                      <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident impedit similique molestias dignissimos mollitia itaque quaerat, et cumque debitis! Architecto atque consequuntur id nesciunt voluptate quisquam animi asperiores! Quo, iste? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque voluptas qui porro. Quam eius maxime facere fugiat eligendi reprehenderit. Harum natus magnam quasi exercitationem voluptates laudantium facilis nisi quas tempora. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel, cum harum dolorem vitae ut sunt facilis voluptatum autem delectus? Voluptatum ipsa magni ullam eaque quae qui eveniet earum expedita quaerat. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas, accusantium odit voluptates rem voluptas quasi ducimus obcaecati corporis unde dolore saepe veritatis voluptatibus totam adipisci amet officia illum neque incidunt? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error minima eum molestias autem. Sint a dolorem, harum laborum repellendus voluptatum.</p>
                      <a href="#" class="btn btn-primary">Contrate Agora!</a>
                    </div>
                  </div>
            </div>
        </div>
    </section> -->




</body>
</html>