<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pets</title>
        <link href="css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" rel="stylesheet"/>
        </script>
    </head>
    <body>
        <header>
          <?php include "header.php"; ?>
        </header>
        <section class="page-section">
          <div class="page-content">
            <!--category-->
            <div class="grid_12">
              <img src="images/adopcion.jpg" alt="banner"/>
              <h2 style="text-align:center; background-color: #ff99e6;padding:20px;">Alimentos</h2>
            </div>
            <div class="grid_3">
              <div class="widget woocommerce">
                <h2>Categorias</h2>
                <ul class="product-categories">
                  <!--<li class="cat-parent"><a href="#">Productos</a></li>-->
                  <ul class="children">
                    <li class="cat-item"><a href="#">Gatos</a></li>
                    <li class="cat-item"><a href="#">Perros</a></li>
                    <li class="cat-item"><a href="#">Roedores</a></li>
                    <li class="cat-item"><a href="#">Reptiles</a></li>
                    <li class="cat-item"><a href="#">Aves</a></li>
                    <li class="cat-item"><a href="#">Peces</a></li>
                  </ul>
                </ul>
              </div>
            </div>
            <!--end category-->
            <!-- products -->
            <div class="grid_9">
              <ul class="products">
                <?php
                //consultar datos de bd
                for($i=1; $i <= 6; $i++){
                ?>
                <li class="product">
                  <a href="#">
                    <img src="images/comidag<?php echo $i;?>.jpg" alt="comida para gato"/>
                    <h3>Purina ONE</h3>
                    <span class="price">
                      <span>$</span>
                      500.00
                    </span>
                  </a>
                  <a rel="nofollow" href="#" data-quantity="1" data-product_id="338" data-product_sku=""
                    class="button product_type_simple add_to_cart_button ajax_add_to_cart">
                    <img src="images/cart.png" alt="cart" style="width:25px;height:auto;"/>&nbsp; Añadir al carrito</a>
                </li>
                <?php }?>
              </ul>
            </div>
          </div>
        </section>
        <footer class="pet-footer">
          <?php include "footer.php"; ?>
        </footer>
    </body>
</html>
