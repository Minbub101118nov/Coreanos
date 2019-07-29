<?php
  if(!function_exists('navegacion_portal($PAGINA_ACTUAL)')){
    function navegacion_portal($PAGINA_ACTUAL){
      $CI =& get_instance();
      
      $menu='
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="'.base_url('index.php/principal/'.$CI->proy->PAGINA_INICIO).'">Inicio</a></li>
              <li class="nav-item"><a class="nav-link" href="'.base_url('index.php/principal/'.$CI->proy->PAGINA_ARTISTAS).'">Artistas</a></li>
              <li class="nav-item"><a class="nav-link" href="'.base_url('index.php/principal/'.$CI->proy->PAGINA_DORAMAS).'">Doramas</a></li>
              <li class="nav-item"><a class="nav-link" href="'.base_url('index.php/principal/'.$CI->proy->PAGINA_ALBUMES).'">Albumes</a></li>
              <li class="nav-item"><a class="nav-link" href="'.base_url('index.php/principal/'.$CI->proy->PAGINA_GALERIA).'">Galeria</a></li>
            
              <li class="nav-item"><a class="nav-link" href="'.base_url('index.php/principal/'.$CI->proy->PAGINA_CONTACT).'">Contact</a></li>
              <li class="nav-item"><a class="nav-link" href="'.base_url('index.php/principal/'.$CI->proy->PAGINA_LOGIN).'">Login</a></li>
          </ul>
      </div>
          ';

          return $menu;
    }

  }
 ?>
