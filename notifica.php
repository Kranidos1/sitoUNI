<?php

include "navbarAMMINISTRATORE.php";
//inizio container
echo' <div class = "container ">';

//tutorial https://www.cloudways.com/blog/real-time-php-notification-system/
echo'<form method="post" id="comment_form" class = "mt-4">

    <div class="form-group">
        <label>Soggetto :</label>
        <input type="text" name="subject" id="subject" class="form-control">
    </div>

    <div class="form-group mt-2">
        <label>Commento : </label>
        <textarea name="comment" id="comment" class="form-control" rows="8"></textarea>
    </div>

    <div class = "d-flex justify-content-center mt-4">
        <button type="button" class="btn btn-outline-dark"> <i class="fa-solid fa-paper-plane"></i> | Invia</button>
    </div>

</form>';

//end container
echo'</div>';

include "coda.php";

?>