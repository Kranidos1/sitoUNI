<?php

include "navbarAMMINISTRATORE.php";
//inizio container
echo' <div class = "container ">';

echo'

    <!--dropdown titolo-->
    <div class="d-sm-flex mt-5">
      
      <div class = "d-sm-flex flex-grow-1">
        <div class="col-md-3 me-5">
          <label for="floatingInput">Titolo Menu :</label>
          <input type="email" class="form-control" id="floatingInput" value = "TEMPORANEA">
        </div>
      </div>
      
    <div class = "mt-4">
      <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#myModal"><i class="fa-solid fa-plus"></i> | Aggiungi categoria</button>
    </div>
    
    </div> 
';

//pannello modale
echo'    <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Nuova Categoria</h4>
      </div>
      <!--in modifica-->
      <div class="modal-body">
            <div class = "d-sm-flex flex-column justify-content-center mt-3 text-center">

            <div class="col-md ">
                <label for="larghezzaInput" >Categoria</label>
                <input  class="form-control" id="categoriaInput" placeholder="Categoria...">
            </div>

          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-dark" id = "salvaButton" >Salva</button>
        <button type="button"  class="btn btn-outline-dark" id = "chiudiButton"data-dismiss="modal">Annulla</button>
      </div>

    </div>
    
  </div>
</div>';

//tabella
echo'<div class = "mt-2">
        <table
            id="table"
            data-toggle="table"
            data-height="400"
            data-url="" class = "table-sm"
            data-use-row-attr-func="true"
            data-reorderable-rows="true">
            <thead>
            <tr>
            <th data-field="categoria">Categoria</th>
            <th data-field="operate" data-formatter="operateFormatter" data-events="operateEvents"></th>
            </tr>
            </thead>
        <tbody>
        </tbody>
        </table>
</div>';

//bottone salvataggio

echo'<div class = "d-flex justify-content-center mt-3">
  <button type="button" class="btn btn-outline-dark"><i class="fa-solid fa-upload"></i> | Salva</button>
</div>';

//end container
echo'</div>';

echo"
<script>

var \$table = $('#table');
var \$buttonSalva = $('#salvaButton');
var \$buttonChiudi = $('#chiudiButton');

$(function(){

    $('#myModal').on('hidden.bs.modal', function () {

      $(this).find('input,textarea,select').val('').end();

    });
    
    \$buttonSalva.click(function(){

        var categoria = document.getElementById('categoriaInput').value;   
    
        var inputs = [{
    
          categoria : categoria
    
        }];
        
        \$table.bootstrapTable('append', inputs)
    
        $('#myModal').find('input,textarea,select').val('').end();
        <!--come cliccare bottone di chiusura-->
        \$buttonChiudi.click();
    
      });

    alert('E\' possibile modificare la posizione delle categorie in menu trascinandole.');

    })

    function operateFormatter(value, row, index) {
      return '<a class=\"remove\" href=\"javascript:void(0)\" title=\"Remove\"><i class=\"fa fa-trash\"></i></a>'
    }

    window.operateEvents = {
      'click .remove': function (e, value, row, index) {
        alert(row.categoria);
        \$table.bootstrapTable('remove', {
          field: 'categoria',
          values: [row.categoria]
        })
      }

  
    }

  </script>";
  
include "coda.php";

?>