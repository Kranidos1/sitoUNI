<?php
//timepicker tutorial https://gijgo.com/timepicker/configuration
include "navbarAMMINISTRATORE.php";
echo'<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>';
echo' <div class = "container">';

echo'<script>

$(document).ready(function() {

    $(".js-example-basic-multiple").select2({

        width: "resolve",
        maximumSelectionLength: 7,

    });
    

});

</script>';

echo"<script>
$('.select2-input').on('click',function()
{
  // remove select2-disabled class from all li under the dropdown
  $('.select2-drop .select2-results li').removeClass('select2-disabled');
   // add select2-result-selectable class to all li which are missing the respective class
  $('.select2-drop .select2-results li').each(function()
  {
    if(!$(this).hasClass('select2-result-selectable'))
      $(this).addClass('select2-result-selectable');
  });   
});

  // had to include the following code as a hack since the click event required double click on 'select2-input' to invoke the event
$('.select2-container-multi').on('mouseover',function()
{
  $('.select2-input').click();
});
</script>";
//nomesito
echo'
<div class = "d-flex justify-content-center mt-3">
    <h1>NomeSito</h1>
</div>';
//dropdown selezione + 

echo'
<div class="d-flex flex-column mt-5" id = "select2_container">
   
    <label for="id_label_multiple">Seleziona alimenti :</label>

    <select class="js-example-basic-multiple js-states form-control"  id="id_label_multiple" multiple = "multiple" tabindex = "-1" style = "125%">

        <optgroup label="Alaskan/Hawaiian Time Zone" data-select2-id="select2-data-92-38av">
            <option value="AK" data-select2-id="select2-data-93-zl5d">Alaska</option>
            <option value="HI" data-select2-id="select2-data-94-tp9h">Hawaii</option>
        </optgroup>

        <optgroup label="Pacific Time Zone" data-select2-id="select2-data-95-p1fx">
            <option value="CA" data-select2-id="select2-data-96-mym7">California</option>
            <option value="NV" data-select2-id="select2-data-97-yktn">Nevada</option>
            <option value="OR" data-select2-id="select2-data-98-5xn8">Oregon</option>
            <option value="WA" data-select2-id="select2-data-99-xtk9">Washington</option>
        </optgroup>

    </select>
    

</div>';

//selezione fascia oraria + bottone
echo'
<div class="d-md-flex flex-row mt-5 justify-content-start">

    
    <div class = "col-md-3 mt-4">
        <label for="labelPrimaFascia">Inizio :</label>
        <input id="primaFascia" />
    </div>

    <div class = "me-3 ms-5">
    </div>
    
    <div class = "col-md-3 mt-4 ">
        <label for = "labelSecondaFascia">Fine :</label>
        <input id = "secondaFascia" />
    </div>

    <div class = "d-sm-flex flex-grow-1 justify-content-end mt-4">
        <div class = "mt-4">
            <button type="button" class="btn btn-outline-dark"> <i class="fa-solid fa-refresh"></i> | Refresh Grafico</button>
        </div>
    </div>
    
</div>';

//grafico

echo"<div class = 'd-sm-flex justify-content-center mt-5'>
    
    <div class='chart-container' style='position: relative; height:40vh; width:90vw'>
    <canvas id='chartContainer'></canvas>
    </div>

</div>";



echo'</div>';

echo"<script>
function reset_select2_size(obj)
{
    if (typeof(obj)!='undefined') {
        obj.find('.select2-container').parent().each(function() {
            $(this).find('.select2-container').css({'width':'10px'});
        });

        obj.find('.select2-container').parent().each(function() {
            var width = ($(this).width()-5)+'px';
            $(this).find('.select2-container').css({'width':width});
        });
        return;
    }

    $('.select2-container').filter(':visible').parent().each(function() {
        $(this).find('.select2-container').css({'width':'10px'});
    });
    $('.select2-container').filter(':visible').parent().each(function() {
        var width = ($(this).width()-5)+'px';
        $(this).find('.select2-container').css({'width':width});
    });
}

function onWindowResized( event )
{
    reset_select2_size();
}

window.addEventListener('resize', onWindowResized );
</script>
";


echo'<script>

    $(\'#primaFascia\').timepicker({
        uiLibrary: \'bootstrap\'
    });

    $(\'#secondaFascia\').timepicker({
        uiLibrary: \'bootstrap\'
    });

</script>';

echo"<script>
const labels = ['test','test','test','test','test','test','test'];
const data = {
  labels: labels,
  datasets: [{
    label: 'My First Dataset',
    data: [65, 59, 80, 81, 56, 55, 40],
    backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(255, 205, 86, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 102, 255, 0.2)',
      'rgba(201, 203, 207, 0.2)'
    ],
    borderColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)',
      'rgb(153, 102, 255)',
      'rgb(201, 203, 207)'
    ],
    borderWidth: 1
  }]
};

const config = {
    type: 'bar',
    data: data,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    },
  };

var canvasElement = document.getElementById('chartContainer');
var chart = new Chart(canvasElement,config)
</script>";


include "coda.php";
?>