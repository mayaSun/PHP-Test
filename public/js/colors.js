$(document).ready(function () {
  $(document).on("click",".get-votes", function () {
    event.preventDefault();
    setColorVotes($(this).data("color-id"));
  });

  $(document).on("click",".get-total-votes", function () {
    event.preventDefault();
    setTotalVotes();
  });
});

function setColorVotes(color_id){
  $.ajax({
    type: "GET",
    url: "color/",   
    dataType:'text',
    data: {'id': color_id},
    success : function(data){
      $('#votes_color_' + color_id).html(data);
    }
  });
}

function setTotalVotes(){
  sum = 0;
  $('[id^="votes_color_"]').each(function(index, value) {
    if($(value).text().length > 0) {
      sum += parseInt($(value).text(), 10); 
    }
  });
  $('#total-votes').html(sum);
}
