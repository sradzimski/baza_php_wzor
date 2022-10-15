<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
<?php

       echo '<li class="nav-item">
          <a class="nav-link active" aria-current="page"
           href="index.php?url=glowna">ZAWARTOŚĆ BAZY</a>
        </li>';
      echo   '<li class="nav-item">
          <a class="nav-link" href="index.php?url=dodaj">DODAJ REKORD</a>
        </li>';
        echo   '<li class="nav-item">
        <a class="nav-link" href="index.php?url=usun1">USUŃ WYBRANY REKORD</a>
      </li>';
      echo   '<li class="nav-item">
      <a class="nav-link" href="index.php?url=usun2">USUŃ KILKA REKORDÓW</a>
    </li>';
    echo   '<li class="nav-item">
    <a class="nav-link" href="index.php?url=modyfikuj">MODYFIKUJ REKORD</a>
  </li>';
 ?>       
        
      </ul>
    </div>
  </div>
</nav>