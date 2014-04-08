<?php 
$nombreEspecial="PlanetaIdeasMarzo30";
$libsRoot = "../../../libs/";
$seccion = "planeta";
$texto = "Vida y aventuras de un científico ecuatoriano
";?>


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
      Vida y aventuras de un 
        <span>científico ecuatoriano</span>
          
          <p class="txt_peque">El legado que dejó el ornitólogo Fernando Ortiz a favor de la naturaleza 
          se plasmó en una publicación </p>
        </div>                              
</div><!--contenedor slider -->



<div class="container">
  <div id="contenido" class="row" >
    <div class="col-lg-8 col-lg-offset-2">
        <?php include ('files/compartir.php') ?>
        <?php include ('files/fecha.php') ?>  

            <p><span class="capital">F</span>ernando Ortiz Crespo (1942-2001) abrió camino en algo que no tenía antecedentes en el Ecuador: la defensa de sus recursos naturales. Convencido él mismo de la riqueza de su biodiversidad, emprendió en los esfuerzos de movilizar a la sociedad para no permitir que se siguiera destruyendo la naturaleza ecuatoriana.
            </p> 
            
            <p>Como se acaba de decir del político español Adolfo Suárez, Fernando Ortiz fue su propio antecedente. Antes que él hubo estudiosos de la naturaleza, desde un Pedro Vicente Maldonado, un Eugenio Espejo, un Francisco Campos, hasta un Misael Acosta y un Gustavo Orcés, pero nadie unió activismo con ciencia, investigación con la capacidad de incidir en la vida pública, de buscar aliados y generar políticas. 
            Fue el primer becario de la Fundación Charles Darwin, el primer guía naturalista en Galápagos, el que inició la carrera de Biología en el país, el que impulsó la Sociedad Francisco Campos de Amigos de la Naturaleza, y los dos hijos de esta: el Museo Ecuatoriano de Ciencias Naturales y la Fundación Natura.</p>
            
            <p><img class="imgLeft" src="img/conservacion/internas/1.jpg">Fue quien, con una tenacidad y una audacia sin límites, salvó no una vez sino varias el bosque protector del Pasochoa.Estuvo detrás, con la red de voluntades que había movilizado, de la creación de la reserva geo-botánica del Pululahua y de la declaratoria de varias reservas y parques nacionales. 
            Escribió miles de artículos, dirigió el Instituto Nacional Galápagos y manejó el Primer Programa Nacional de Ciencia y Tecnología, que financió becas e investigaciones.</p>
            
            <p>Tras su muerte, tan intempestiva y absurda, y una vez calmada la rabia y el despecho inicial, quien esto escribe se dedicó a rescatar lo que Fernando había dejado inédito: primero que nada, su discurso de incorporación a la Academia Nacional de Historia, sobre la verdadera historia de la Cinchona, y que sirvió para que esa institución, por primera y única vez, incorporara como Miembro Correspondiente a una persona fallecida. </p>
            
            <p>Luego fue el libro de los colibríes, del que se han hecho ya dos ediciones. Pero deseaba escribir una biografía de Fernando enfocada a los jóvenes para compartir con ellos las aventuras de infancia y juventud vividas con Fernando y explicarles cómo se hace un científico. Me costó escribirla, pues me era doloroso evocarlo, hasta que se me ocurrió proyectarme en un personaje que contara, en tercera persona, con tono ligero y dosis de humor, su vida.</p>
            
            <p>Eso me aclaró la garganta o la pluma o la computadora, lo que fuera, y pude convocar a la memoria, escarbar en mis apuntes y escribir su biografía. Y se dio el milagro: Mario García, uno de los alumnos de Fernando que conservan un recuerdo cariñoso de su desaparecido profesor, ideó un libro ilustrado, con unos recuadros científicos y un formato especial. 
            Fue también él quien consiguió los fondos para la ilustración, la diagramación y la impresión. El Ecofondo, en el que está otro exalumno de Fernando, Danilo Silva, proveyó los recursos. Soledad Zurita hizo las ilustraciones.</p> 
            
            <p>Mario y dos de sus compañeros escribieron los recuadros. María Isabel Molina hizo la diagramación espectacular y la Imprenta Mariscal puso su calidad, para lograr el maravilloso libro que la semana pasada entró en circulación.
            La Fundación Nahuel, fiel a sus principios de educación y protección de la naturaleza, aunó esfuerzos para la distribución del libro, cuya mayoría de ejemplares los va a regalar a estudiantes de bachillerato.</p>
            
            <p>Así, este canto a la memoria de Fernando Ortiz no se quedará en el pasado, sino que se proyectará al futuro. Esta fue la imposición vital, ética y hasta política que tuve de contar esa vida divertida, apasionada y ejemplar de Fernando Ortiz.</p>


           <!-- <iframe src="http://fast.player.liquidplatform.com/pApiv2/embed/6ccb636e141295292ea82e951fbaea1b/8ccfd3d42d9dade4f81b1d87b02988e4?autoStart=false&wideScreen=true" width="100%" height="400" frameborder="0"></iframe>-->

            
            <p class="autor">Gonzalo Ortiz Crespo</p>
        </div>
        
       <!--<div class="col-lg-2" id="destacado">
          <p><strong>Los casos más graves</strong><br> Etiopía está en el primer lugar con más zonas deforestadas de bosques nublados, en el mundo. En América Latina los casos más preocupantes son México, Brasil, Perú, Colombia, Bolivia y Guatemala, que están entre los 10 primeros con más deforestación. “Estos hábitats deben ser conservados en su conjunto”, recomiendan unánimemente los científicos. </p>
          
        </div>-->
            </div><!-- row contendio -->
<?php include ('files/footer'. $seccion. '.php') ?>

</body>
</html>
