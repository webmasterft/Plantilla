<?php 
$nombreEspecial="PlanetaIdeasMarzo30";
$libsRoot = "../../../libs/";
$seccion = "ideas";
$texto = "Biología en forma de arte";?>


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
    <span>Biología </span> en forma de arte
    <p class="txt_peque">El biólogo Brandon Ballengée ha hecho de sus estudios científicos una herramienta para el deslumbramiento artístico. 
    </p>  
  </div>         
</div><!--contenedor slider -->



<div class="container">
  <div id="contenido" class="row" >
    <div class="col-lg-8 col-lg-offset-2">
        <?php include ('files/compartir.php') ?>
        <?php include ('files/fecha.php') ?>  

      <p><span class="capital">D</span>urante los últimos 13 años, el artista y biólogo estadounidense Brandon Ballengée se ha dedicado a colectar anfibios deformados preservándolos en un químico con enzimas para hacer sus tejidos transparentes. Luego inyectaba sus huesos y órganos con tinturas de colores.</p>
      <p>Si bien puede sonar al trabajo de un asesino en serie, realmente ha sido un trabajo clave para aprender sobre cómo está afectando el cambiante medio ambiente a los sapos y renacuajos.  Ballengée ha hecho su investigación en las zonas donde había mayor cantidad de estos anfibios con malformaciones y que tenían muy pocas posibilidades de sobrevivir. Descubrió que los contaminantes disparan el crecimiento de algas de donde se alimentan unos caracoles  que transportan una bacteria que afecta a los anfibios. </p>
      <p>También que estos contaminantes afectan las capacidades de los sapos a reaccionar frente a la amenaza de los depredadores. Actualmente, las fotografías de Ballengée se exponen en  el Museum Het Domein, en Holanda.<br/><br/></p>
      



        <p><img class="imgLeft" src="img/imagenes/internas/1.jpg"></p><span class="txtColor">Glaucus, el sapo de árbol del pacífico.</span><br/>Sapo de Árbol del Pacífico colectado en Aptos, California. Fotografía tomada en el 2013 y titulada Glaucus.</p>  
            <p class="clear"></p>


            <p><img class="imgLeft" src="img/imagenes/internas/2.jpg"></p><span class="txtColor">Transparencia con fondo en blanco.</span><br/>Impresión única en papel de agua en color. Sapo de Árbol del Pacífico transparentado y oxidado. Colectado en Aptos, California..</p>
            <p class="clear"></p>




            <p><img class="imgLeft" src="img/imagenes/internas/3.jpg"></p><span class="txtColor">Hueso expuesto en una de las patas.</span><br/>Este Sapo de Árbol del Pacífico colectado en Aptos, California, tiene un hueso expuesto en una de sus patas posteriores..</p>  
            <p class="clear"></p>


            <p><img class="imgLeft" src="img/imagenes/internas/4.jpg"></p><span class="txtColor">Patas con deformaciones.</span><br/>Patas con deformacionesPhaethon, foto tomada en el 2013. Otro de los Sapos de Árbol del Pacífico con deformidades en las extremidades posteriores.</p>
            <p class="clear"></p>


            
            <p><img class="imgLeft" src="img/imagenes/internas/5.jpg"></p><span class="txtColor">Con sus órganos tinturados.</span><br/> 
            La fotografía de este espécimen fue bautizada por el poeta KuyDelair como Orphéios y fue tomada en el 2003.</p>  
            <p class="clear"></p>


            <p><img class="imgLeft" src="img/imagenes/internas/6.jpg"></p><span class="txtColor">Sin la parte inferior de una de sus  patas.</span><br/>
            Este espécimen no tiene la parte inferior de una de sus patas. Todos estos sapos  son de los llamados Sapo de Árbol del Pacífico.</p>
            <p class="clear"></p>




        <p class="autor">Redacción IDEAS 
          <br>
          <!--<a href="mailto:mpallares@elcomercio.com">mpallares@elcomercio.com</a>-->

        </p>
      </div>
      
      <!--<div class="col-lg-2" id="destacado">


        <p>“El judío, por tradición, por temperamento y por constitución biológica, es reacio a las labores del campo...”<br>

          <strong>Julio Tobar Donoso<br>
            Canciller ecuatoriano 1938</strong>
          </p> 
        </div>        -->
  </div><!-- row contendio -->
<?php include ('files/footer'. $seccion. '.php') ?>

</body>
</html>
