<!doctype>
<html>

    <head>    <!--yo ujujujajajaa
      =============================================== -->
       <meta name="author" content=" Rodrigo Herrera">
       <meta name="author" content=" Entidad">
       <!-- especificaciones móviles Metas
       ================================================= -->
 	     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
       <!--Idioma español
        ================================================== -->
       <meta charset="utf-8">
        <!--css  bootsptrap
       ================================================== -->
 	      <link href="css/bootstrap.css" rel="stylesheet">
 	     <!--javascript
        ================================================== -->
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.js"></script>
        <title>Slider llenado con PHP</title>
    </head>
  <body>  
       <div class ="container">
             <div class="col-lg-7 row ">
               
               <section id="miSlide" class="carousel slide">
                    <ol class="carousel-indicators">
                    <li data-target="#miSlide" data-slide-to="0" class="active"></li>
                   <?php 
                           include("conn.php");
                           $resultx = $mysqli->query("SELECT * FROM slider");
                           $row_cnt = mysqli_num_rows($resultx);
                              for ($i = 1; $i<$row_cnt; $i++)
                              {
                    ?>
                           <li data-target="#miSlide" data-slide-to="<?PHP echo $i;?>"></li>
                                <?PHP }?>               
                         </ol>
                          <div class="carousel-inner">
                  <?php
                        $cam=0;
                        while ($row = $resultx->fetch_array() )
                        {
                             $ruta = "img/". $row['nomsl'];
                           if($cam<1)
                            {
                  ?>
                               <div class="item active">
                                   <img src="<?php echo $ruta; $cam=1 ?>" class="adaptar">
                               </div>
                            <?PHP
                             }
                              else
                              {
                            ?>
                                <div class="item">
                                    <img src="<?php echo $ruta; ?>" class="adaptar">
                                </div>
                    <?php
                        }}
                    ?>
                </div>
                <a href="#miSlide" class="left carousel-control" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a href="#miSlide" class="right carousel-control" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </section>
             </div> 
       </div>
  </body>
