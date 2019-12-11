<?php

    include_once('funcoes.php');
    include_once('head.php');

?>

    <section id="banner">
        <h2>Compre nossos produtos! =)</h2>
    </section>
    <section id="servico" class="container mt-5">
        <div class="row">
            <?php echo listarServicos(); ?>
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


<?php
    include_once('footer.php');
?>
