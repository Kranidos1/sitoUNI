<?php

include "navbarAMMINISTRATORE.php";
//inizio container
echo' <div class = "container ">';

//nome + cognome
echo'  

<div class = "d-sm-flex flex-column justify-content-center mt-5">

    <div class = "d-sm-flex justify-content-center">

        <div class="col-md-3 me-5">
            <label for="floatingInput">Nome</label>
            <input type="email" class="form-control" id="floatingInput">
        </div>

        <div class="col-md-3 me-5">
            <label for="floatingInput">Cognome</label>
            <input type="email" class="form-control" id="floatingInput">
        </div>

    </div>

    <div class = "d-sm-flex justify-content-center mt-4">

        <div class="col-md-3 me-5">
            <label for="floatingInput">Email</label>
            <input type="email" class="form-control" id="floatingInput">
        </div>

        <div class="col-md-3 me-5">
            <label for="floatingInput">TmpPassword</label>
            <input type="email" class="form-control" id="floatingInput">
        </div>

    </div>

    <div class = "d-sm-flex justify-content-center mt-4">

        <div class = "col-md-3 me-5">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Tipo Utente</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Amministratore</option>
                        <option>Supervisore</option>
                        <option>Addetto Cucina</option>
                        <option>Addetto Sala</option>
                    </select>
            </div>
        </div>

    </div>

        <div class = "d-sm-flex justify-content-center mt-4">

            <button type="button" class="btn btn-outline-dark">Registra</button>

        </div>



</div>

    
';

//end container
echo'</div>';

include "coda.php";

?>