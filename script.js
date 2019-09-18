function init(){
  getDataPagamenti();
}

function getDataPagamenti(){
  $.ajax({
    url: 'api.php',
    method: 'GET',
    success: function(data){
      printPayments(data);
    },
    error: function(){}
  });
}
function printPayments(data){


  var source = $('#item-template').html();
  var template = Handlebars.compile(source);


  for (var i = 0; i < data.length; i++) {
    var d = data[i];


    if (d.status == 'accepted') {
      var context = d;
      var html = template(context);

      $('.container .accepted').append(html);
    }
    else if (d.status == 'pending') {
      var context = d;
      var html = template(context);
      $('.container .pending').append(html);
    }
    else if (d.status == 'rejected') {
      var context = d;
      var html = template(context);
      $('.container .rejected').append(html);
    }
  }

}

$(document).ready(init);
