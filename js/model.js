var timeout;
var $cards = $(".card");
var size = $cards.length - 1;

function highlight(count){
  timeout = setTimeout(function(){ 
    $cards.removeClass("orange");
    $cards[count].classList.add("orange");
    
    clearTimeout(timeout);
    if(size === count){
       highlight((count - size));
    }else{
      highlight(count + 1);
    }
    
  }, 1000); 
}

$cards.off("click").on( "click", function() {
  clearTimeout(timeout);
});

highlight(0)