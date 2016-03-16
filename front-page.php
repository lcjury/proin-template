<?php
/**
 * Front page 
 *
 * Front page for proin website
 *
 * @package Proin
 * @subpackage Proin
 * @since Proin 1.0
 *
 * TODO: Able data to be edited on wordpress admin panel
 */

get_header(); ?>

<div class="container">
  <div class="row">
  <div class="spacer"></div>
    <div class="col-md-7">
      <h2>Programadores e Informaticos Chile</h2>
      <p class="lead">
        Somos una comunidad amante de la tecnología; nos gusta compartir, aprender, enseñar y disfrutar.
      </p>
      <p class="lead">
        Participamos en multiples eventos y meetUps de tecnologias o simplemente nos reunimos a tener un asado y compartir.
      </p>
      <p class="lead">
        Queremos realizar contenido propio para los demas miembros de la comunidad o cualquier persona que quiere verlos, motivar a la gente a participar y ayudar a los demas miembros, hacemos esto porque queremos, porque nos gusta, porque ayudar y enseñar participativamente es entretenido.
      </p>
    </div>
    <div class="col-md-5">
    <img class="img-responsive center-block" src="<?= get_template_directory_uri();?>/img/logo.png">
    </div>
  </div>
</div>
<br/>

<div class="spacer"></div>
  <div class="parallax-window white-back"  data-parallax="scroll" data-image-src="https://scontent-lax3-1.xx.fbcdn.net/hphotos-xlt1/t31.0-8/12615487_10205435002336812_2708854201665486228_o.jpg">
    <div class="container">
      <h2> Nuestros partners </h2>
      <div id="owl-demo">
        <div class="item"><img src="<?= get_template_directory_uri();?>/img/noders.png" alt="Noders"></div>
        <div class="item"><img src="<?= get_template_directory_uri();?>/img/appmovil.jpg" alt="Aplicaciones moviles chile"></div>
        <div class="item"><img src="<?= get_template_directory_uri();?>/img/capa8tv.jpg" alt="Capa 8 TV"></div>
        <div class="item"><img src="<?= get_template_directory_uri();?>/img/hackingcl.png" alt="hacking chile"></div>
        <div class="item"><img src="<?= get_template_directory_uri();?>/img/betabeer.jpg" alt="beta beers"></div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <h2>Nuestro Equipo</h2>
  <br/>
  <div class="row text-center">
    <div class="col-lg-4">
    <img class="img-circle" src="<?= get_template_directory_uri();?>/img/ricardo_castillo.jpg" alt="ricardo castillo" width="140" height="140">
      <h3>Ricardo Castillo</h3>
      <p>Backend Developer y CoFounder AppFactory Ltda. Backend Developer principalmente en JS y PHP.</p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
    <img class="img-circle" src="<?= get_template_directory_uri();?>/img/kevin_zelada.jpg" alt="kevin zelada" width="140" height="140">
      <h2>Kevin Zelada Ruff</h2>
      <p>Backend Developer principalmente en Python y Django. Emprendedor tecnológico siempre en búsqueda de nuevos desafíos y proyectos interesantes.</p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
    <img class="img-circle" src="<?= get_template_directory_uri();?>/img/mauricio_lineros.jpg" alt="mauricio lineros" width="140" height="140">
      <h2>Mauricio Lineros</h2>
      <p>Soy un apasionado de la tecnología, la educación y el crecimiento personal. Soy padre de dos bellos pequeños y ademas un amante de la lectura.</p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
    <img class="img-circle" src="<?= get_template_directory_uri();?>/img/elvis_romero.jpg" alt="elvis romero" width="140" height="140">
      <h2>Elvis Romero</h2>
      <p>Analista IT en FOLLOW UP COMUNICACION. Estudiante de Tercer año de la carrera de Ingeniería en Informática, amante de la computacion y la informatica.</p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
    <img class="img-circle" src="<?= get_template_directory_uri();?>/img/gustavo_inzunza.png" alt="gustavo inzunza" width="140" height="140">
      <h2>Gustavo Inzunza</h2>
      <p>I'm a Software Engineer. I'm interested in Data Structures, Optimization and Ruby On Rails.</p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
    <img class="img-circle" src="<?= get_template_directory_uri();?>/img/unknown.jpg" alt="siguiente miembro" width="140" height="140">
      <h2>¡Este podrias ser tu!. </h2>
      <p>Escribenos por nuestras redes sociales. Siempre necesitamos apoyo y blabla lorem ipsum</p>
    </div><!-- /.col-lg-4 -->
  </div> <!-- /.row -->
  <div class="spacer"></div>
  <div class="spacer"></div>

  <div class="row">
    <div class="col-md-6">
      <br/>
      <canvas id="myChart" class="img-responsive center-block"></canvas> 
    </div>
    <div class="col-md-6">
      <h2>Nuestros Miembros </h2>
      <p class="lead">Somos una comunidad en constante crecimiento.</p>
      <p class="lead">En Proin Chile crecemos constantemente en todas nuestras redes, donde nuestra comunidad comparte desde conocimiento hasta gratas platicas. Acá se puede ver el crecimiento mes a mes.</p>
    </div>
  </div>
</div>


<?php
get_footer();
