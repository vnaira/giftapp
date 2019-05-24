
$(document).ready(function () {
  $('#datetimepicker').datepicker({
    format: 'mm-dd-yyyy'
  });
});

$('.typebtn').click(function(  ) {
  var val = $(this).data('value');
  $('#listType').val(val);
  $('#newList').modal('hide');
  $('.modal-backdrop').remove();
  $('#createNew').modal('show');
});