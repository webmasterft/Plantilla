




  <?php 
  $urlSlider = trim($_SERVER['REQUEST_URI'], '/');
  $urlSlider = explode('.', end(explode('/',$urlSlider)));
  $dir = 'img/'. $urlSlider[0] . '/slider/';
  $filecount = count(glob($dir . "*.jpg"));
  
  
  if ($filecount === 0) {
    echo '<div id="space"></div>';
  }elseif ($filecount === 1) {
    echo '<img src="img/' . $urlSlider[0] .'/slider/1.jpg"/>';
  }else{
    carrusel($filecount, $dir);
  }
  




  function carrusel($filecount , $dir){
    $esconder = ($filecount==1) ? $esconder = "hide" : $esconder="";
    echo '<!-- Carruosel -->
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">';
          for($contador=0; $contador<$filecount; $contador++ ) {
            if($contador==0){
              $clase = "active";
            }else{
              $clase = "";
            }
            echo '<li data-target="#carousel" class="'. $clase .'" data-slide-to="'. $contador .'"></li>';
          }
          
        echo '</ol>
        <div class="carousel-inner">';
          $contador = 1;
          foreach(glob($dir.'*.jpg') as $file ) { 
            if($contador==1){
              $clase = "active";
            }else{
              $clase = "";
            }
            echo '<div class="item ' . $clase .'">';
             print '<img src="'.$file.'"/></div>';
             $contador++;
          }

        echo '</div><!-- carousel-inner -->
        
        <a class="left carousel-control '.$esconder .'" href="#carousel" data-slide="prev">
          <span class="arrow"></span>
        </a>
        <a class="right carousel-control '.$esconder .'" href="#carousel" data-slide="next">
          <span class="arrow"></span>
        </a>';
     echo '</div>
     <!-- Carruosel -->';
  };