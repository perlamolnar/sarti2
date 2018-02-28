$(document).ready(function() { 
    $('#slider div:gt(0)').hide(); 
    //:gt() selector selects elements with an index number higher than a specified number.
    setInterval(function(){
      $('#slider div:first-child').fadeOut(0)
            .next('div').fadeIn(1000) //Return the next sibling element
            .end().appendTo('#slider');
    }, 4000);
});