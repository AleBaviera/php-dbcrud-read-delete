function init(){
  getDataPagamenti();
  $(document).on('click', 'button', deletePayment);
}
function resetPage(){
   $('.container div').html('');
}
function getDataPagamenti(){
  resetPage();
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
function deletePayment(data){
  var btnP = $(this);
  var delP = btnP.parent();
  var idP = delP.data('id');
  console.log(idP);

  $.ajax({
    url: 'api-delete-payment.php',
    method: 'GET',
    data:{
      id: idP
    },
    success: function(data){
      getDataPagamenti();
    },
    error: function(){}
  });
}
$(document).ready(init);
