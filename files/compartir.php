       <?php 
        $logo = 'http://especiales.elcomercio.com/libs/planetaIdeas/'. $seccion .'.gif';
        $seccionTexto = strtoupper($seccion). ' :: EL COMERCIO. '. $texto;
        $url = 'http://especiales.elcomercio.com/' . trim($_SERVER['REQUEST_URI'], '/');
        
      ?> 

            <!--compartir-->
              <div id="compartir">
              <a href='https://www.facebook.com/dialog/feed?app_id=342384769118289&link=<?php echo $url;?>&picture=<?php echo $logo;?>&name=<?php echo urlencode($texto);?>&redirect_uri=<?php echo $url;?>' TARGET="_self">
                  <img src="img/face.png">
                </a>                


                <a href="https://twitter.com/share?url=<?php echo $url;?>&amp;via=elcomerciocom&amp;lang=es&amp;text=<?php echo $seccionTexto; ?>&amp;status=<?php echo $seccion;?>" target="_blank">
                  <img src="img/twitter.png">
                </a>
              </div>
              <!--fin compartir-->   

