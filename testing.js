
function getAllergeni(){

            //qui va la funzione ajax che richiede dati
            let risposta;
            let url = './allergens.json';
            let request = new XMLHttpRequest();
        
        
            request.open('GET' ,url ,true);
            request.responseType = 'json';
         
            var inputs = [];
            request.onreadystatechange = function() {
        
                if(this.readyState == 4 && this.status == 200){
        
                    risposta = request.response;
                    callbackAllergeni(risposta)
        
                }
            }
        
            request.send();

}


function callbackAllergeni(risposta){
          

    var array = $(risposta.tags).filter(function(i,n){
      
      return n.id.includes('it:');

    });
    
    var i = 0;
    for(var i = 0;i < array.length;i++){

      var allergene = array[i].id.substr(3,array[i].id.lenght)
      var option = new Option(allergene ,i ,false ,false)
      //id della select
      $('#select2').append(option).trigger('change');

    }

  }