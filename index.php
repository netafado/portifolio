<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stylish Portfolio - Start Bootstrap Theme</title>

    <link href='https://fonts.googleapis.com/css?family=Raleway:300,500' rel='stylesheet' type='text/css'>
    

   <?php wp_head(); ?>

</head>

<body>

<header>
    <nav id="nav" class="fluid-container header-site">
        <div class="row">
            <div class="col-md-12">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logotipo" class="img-responsive center-block">
                  <div id="main-menu" class="main-menu">
                <p>
                    <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                </p>
                </div>
            </div>
        </div>
     </nav>
</header>

<section id="menu-icons" class="fluid-container menu-icons">
    <div class="col-xs-6 col-md-3">
            <h6>WEB</h6>
            <img src="<?php echo get_template_directory_uri(); ?>/img/w.png" alt="Logotipo" class="img-responsive center-block">
            
    </div>

    <div class="col-xs-6 col-md-3">
            <h6>Design Gráfico</h6>
            <img src="<?php echo get_template_directory_uri(); ?>/img/g.png" alt="Logotipo" class="img-responsive center-block">
            
    </div>

    <div class="col-xs-6 col-md-3">
            <h6>Design Digital</h6>
            <img src="<?php echo get_template_directory_uri(); ?>/img/d.png" alt="Logotipo" class="img-responsive center-block">
            
    </div>

    <div class="col-xs-6 col-md-3">
            <h6>3D /  jogos</h6>
            <img src="<?php echo get_template_directory_uri(); ?>/img/3d.png" alt="Logotipo" class="img-responsive center-block">
            
    </div>
  
</section>
  <div class="get-down">
        <p class="text-center">
            <span class="glyphicon glyphicon-menu-down text-center" aria-hidden="true"></span>
        </p>
    </div>
 

 <section id="last-posts" class="container-fluid">
     <h1>Last Post</h1>
     <div class="row">
         <div class="col-sm-3 col-xs-6">
            <img src="<?php echo get_template_directory_uri(); ?>/img/img.jpg" alt="Logotipo" class="img-responsive center-block">
            <p>description</p>
         </div>

         <div class="col-sm-3 col-xs-6">
            <img src="<?php echo get_template_directory_uri(); ?>/img/img.jpg" alt="Logotipo" class="img-responsive center-block">
            <p>description</p>
         </div> 

         <div class="col-sm-3 col-xs-6">
            <img src="<?php echo get_template_directory_uri(); ?>/img/img.jpg" alt="Logotipo" class="img-responsive center-block">
            <p>description</p>
         </div>

         <div class="col-sm-3 col-xs-6">
            <img src="<?php echo get_template_directory_uri(); ?>/img/img.jpg" alt="Logotipo" class="img-responsive center-block">
            <p>description</p>
         </div>      
     </div>
 </section>

<!--menu -->
<div id="menuPopUp" class="text-center menuPopUp">
    <nav class="menu-suspenso">
        <ul>
            <li>Contato</li>
            <li>Portifolio
            <ul>
                <li>1 fsdfas</li>
                 <li>1 fsdfas</li>
            </ul>
            </li>
            <li>O que faço</li>
            <li id="close"><p>x</p></li>
        </ul>
    </nav>
</div>



<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title">Modal title</h4>
            </div>          <!-- /modal-header -->
            <div class="modal-body">
            <p>Excitavit hic ardor milites per municipia plurima, quae isdem conterminant, dispositos et castella, sed quisque serpentes latius pro viribus repellere moliens, nunc globis confertos, aliquotiens et dispersos multitudine superabatur ingenti.</p>
            </div>          <!-- /modal-body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>          <!-- /modal-footer -->



<footer>
     <?php wp_footer(); ?>
</footer>

</body>
</html>
