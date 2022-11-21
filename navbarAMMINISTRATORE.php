<?php

include "head.php";

echo'
</head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand px-2" href="homepage.php">NOME SITO </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item ">
          <a class="nav-link active" href="homepage.php">Homepage</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link active dropdown-toggle" type = "button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Modifica Menù</a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="gestioneCategorie.php">Gestione Categorie</a>
          <a class="dropdown-item" href="gestioneElementi.php">Gestione Elementi</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
        </li>
        <li class="nav-item ">
          <a class="nav-link active" href="notifica.php">Crea Avviso</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link active" href="registra.php">Registra</a>
        </li>
      </ul>

      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
        <li class="nav-item px-2"><a class="nav-link active ">
        <i class="fa-sharp fa-solid fa-user"></i>User: tia</a></li>

        <li class="nav-item  px-2"><a class="nav-link active"  href="#">
        <i class="fa-solid fa-bell"></i>
          <ul class="dropdown-menu"></ul>
          </a>
       </li>

        <li class="nav-item  px-2"><a class="nav-link active"  href="#">
        <i class="fa-sharp fa-solid fa-right-from-bracket"></i>  LOGOUT</a>
        </li>
      </ul>
    </div>
  </div>
  </nav>';

  //.$_SESSION["nome"]
?>