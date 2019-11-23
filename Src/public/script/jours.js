$(document).ready(function (e) {


 $("#jours").on('click',(function(e) {
   console.log("jours");
  var code = 0;
  var msg = 'No response';
  var connection = {};
  
 
  event.preventDefault();  // Empêcher le rechargement de la page.
  $.ajax({ dataType: "JSON",
  type: "POST",url:"../../Src/ajax/jours.php",
    success: function (response) {
      code = response.code;
      msg = response.message;
      connection = response.value;
  },
  error: function (response) {
      code = response.code;
      msg = response.message;
  },
  complete: function () {
    $('#err').html(msg);
          if (code>0)
          {
            //ok
          }
          else
          {
              
          }
  }
});
  // stop the form from submitting the normal way and refreshing the page
  event.preventDefault();

}));

});