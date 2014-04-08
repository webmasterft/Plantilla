<?php 
$nombreEspecial="PlanetaIdeasMarzo30";
$libsRoot = "../../../libs/";
$seccion = "planeta";
$texto = "La leche de camella es el milagro del desierto";?>


<!DOCTYPE html>
<?php include('files/head.php'); ?>

<body id="<?php $seccion = trim(strtolower($seccion)); echo $seccion; ?>">
<?php 
  include($libsRoot.'comScore.php'); 
  include('files/errorIE.php');
  include('files/menu'. $seccion . '.php');
?>  

<div id="auxTop"></div>
<div id="lineas"></div> 

<div id="contSlider">
  <div id="slider">
    <?php include('files/slider.php'); ?>
  </div><!-- SLIDER -->

        <div id="titulo" class="nombre">
          La leche de camella 
          <span>es el milagro del desierto </span> 
          <p class="txt_peque">Por las sequías y altas temperaturas, la leche de vaca escasea en las zonas áridas de parte de África.</p>
        </div>                              
</div><!--contenedor slider -->



<div class="container">
  <div id="contenido" class="row" >
    <div class="col-lg-8 col-lg-offset-2">
        <?php include ('files/compartir.php') ?>
        <?php include ('files/fecha.php') ?>  

            <p><span class="capital">L</span>a vaca es el animal más usado en la actividad agropecuaria en gran parte de África, pero las sequías y las altas temperaturas merman su producción de leche.  Para adaptarse a las nuevas circunstancias derivadas de los cambios del clima, los campesinos e industriales apuestan por leche de camella.</p> 
            
            <p>A diferencia de las vacas, son ordeñadas todo el año, incluso en los largos períodos de sequía; pero pueden ser muy tercas cuando no quieren ser ordeñadas. Mientras las vacas almacenan su leche en las ubres, las camellas la conservan más adentro del cuerpo.</p>  
            
            <p>Estos mamíferos han sido utilizados  históricamente como medio de transporte, pero su riqueza láctea se está convirtiendo en alimento para habitantes de zonas áridas y semiáridas.  También representan un ingreso para pastores nómadas. </p>
            
            <p>No hay una cifra exacta de cuántos camellos existen en el mundo, se estima que bordean los  20 millones. La mayoría son de  pueblos nómadas, que se desplazan en busca de pastizales, según la estación. Incluso en un mes en el desierto sobreviven solo con este lácteo. 
            Cada camella lactante produce entre 1 000 y 12 000 litros de leche, entre 8 y 18 meses. Somalia es el mayor productor, seguido de Arabia Saudita.  Las técnicas actuales en la cría de camellas aún son rudimentarias y una gran parte de los 5,4 millones de toneladas de leche producidas al año es consumida por sus propias crías. 
            Esta leche puede tener hasta tres veces más vitamina C que la de vaca; es rica en hierro, ácidos grasos insaturados y vitamina B (ver cuadro). </p>
            
            <p>La compañía Camel Dairy Milk, de Nanyuki (Kenya), prevé, en asociación con el Instituto de Investigación Médica de Kenya, investigar sus propiedades para combatir la diabetes y la cardiopatía isquémica.
            Esas características explican el interés de esta leche, no solo para las crías y sus propietarios, sino para unos 200 millones de posibles consumidores en el mundo árabe (y otros millones de África, Europa y América).
            Es esencial en zonas con escasez de agua, forraje y las sequías, que debido al cambio  climático se presentan cada año y ya no cada cinco como antes solía ocurrir.  Para los argelinos, el agua es el alma y la leche es la vida, aplaca el hambre.</p>
            
            <p>Cada día la demanda mundial de esta leche y sus derivados crece, por lo que ha implicado superar limitaciones en la producción, recolección, elaboración y venta. A esto se suma la violencia entre tribus; por ejemplo, en Kenia, atacan a los pastores por los terrenos de pastizales que escasean por el clima y se llevan los camellos. 
            Quienes no tienen estos animales requieren de forraje para vacas y, por tanto, cultivos. </p>

            
            <p><img class="big" src="img/clima/internas/1.jpg"></p>

            <p class="autor">Redacción Sociedad
            <!-- <br>
              <a href="mailto:lcastillo@elcomercio.com">lcastillo@elcomercio.com</a>-->
            </p>
        </div>
        
       <!-- <div class="col-lg-2" id="destacado">
          
          <p>
          <strong>Pijao también se une</strong><br>
          Unas 183 ciudades se han adherido al movimiento en 28 países (Australia, España, Turquía, etc). La primera ciudad de América Latina que formará parte será Pijao, en Colombia, que recibirá la certificación a fines de este año. ‘Cittaslow’ significa combinar lo mejor del pasado con lo mejor de la modernidad, por ejemplo usar alta tecnología para ofrecer mejores servicios para todos”, sostiene Pier Giorgio Oliveti, director del movimiento. Aunque la definición de bienestar es compleja y cada ciudad tiene su propia receta hay que valorizar lo que uno es, lo que se tiene, evitar la autodestrucción, pensar a las nuevas generaciones”, añade. Este movimiento busca extender el buen vivir a ciudades grandes, como Barcelona, en España.
          
          </p>
  
          
        </div><!-- destacado -->
            </div><!-- row contendio -->
<?php include ('files/footer'. $seccion. '.php') ?>

</body>
</html>
