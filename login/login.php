<?php

include "../head.php";

echo'
<style>
body {
  background: url("ratatouille-sign.png") no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
}
.titolo1 { font-family: "Brush Script MT", cursive; font-size: 43px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 47.3px; }
</style>
</head>
  <body>
        <div class = "container fill" >
        <!--
          <div class = "p-2 mb-5">
              <div class = "d-flex align-items-center justify-content-center">
                  <h1 class = "titolo1"><i>Ratatouille 2.0</i></h1>
              </div>
          </div>
          -->

          <div class = "mb-5">
          </div>

          <div class="row align-items-center g-lg-5 py-5">
            <div class="col-md-10 mx-auto col-lg-5">
              <form class="p-4 p-md-5  ">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email</label>
                </div>
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                  </div>
                <button class="btn btn-lg btn-dark" type="submit">Sign up</button>
              
              </form>
            </div>
            <div class="col-lg-7 text-center text-lg-start">
            </div>
          </div>

        </div>
        <!--fine container-->';

include "../coda.php";
?>