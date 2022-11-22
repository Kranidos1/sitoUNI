<?php

echo'<style>
select.form-control {
  display: inline-block;
  width: auto;
}
</style>';

include "navbarAMMINISTRATORE.php";
//inizio container id="toolbar"
echo' <div class = "container mt-2">';

echo'<div  class = "d-sm-flex">

    <div class = "flex-grow-1">
        <div  class="select mt-3">
            <span>Categoria :</span>
            <select id="categoria" class="form-control">
                <option value="primo">Primo Piatto</option>
                <option value="secondo">Secondo Piatto</option>
                <option value="contorno">Contorno</option>
            </select>
        </div>
    </div>

    <div class = "d-flex  mt-3">
        <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#myModal"><i class="fa-solid fa-plus"></i> | Aggiungi elemento</button>
    </div>

</div>';

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
            <th data-field="categoria">Elemento</th>
            <th data-field="operate" data-formatter="operateFormatter" data-events="operateEvents"></th>
            </tr>
            </thead>
        <tbody>
        </tbody>
        </table>
</div>';

echo'<div class = "d-flex justify-content-center mt-3">
  <button type="button" class="btn btn-outline-dark"><i class="fa-solid fa-upload"></i> | Salva</button>
</div>
';


echo'</div>';

echo"<script>

    alert('E\' possibile modificare la posizione degli elementi in menu ,rispetto una categoria ,trascinandoli.');

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

    $(document).ready(function() {

      $('.js-example-basic-multiple').select2();
  
    });

    var \$table = \$('#table');

    $(function() {

        $('#categoria').change(function () {
            
            <!--a ogni cambiamento verrà chiamata una funzione che ricrea la tabella con degli elementi specifici-->

            \$table.bootstrapTable('destroy').bootstrapTable();

        })

      })

</script>";

include "coda.php";

?>