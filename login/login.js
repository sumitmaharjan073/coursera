var sin=document.getElementsByClassName('sin');
var sup=document.getElementsByClassName('sup');
var create_acc=sin[3];
var aHavAcc=document.getElementById('aHavAcc');

for(var i=0;i<sup.length;i++){
    sup[i].classList.add('hide_block')
}

create_acc.addEventListener('click',()=>{
    for(var i=0;i<sin.length;i++){
        sin[i].classList.add('hide_block')
  }
  for (var i=0;i<sup.length;i++){
      sup[i].classList.remove('hide_block')
  }
})

aHavAcc.addEventListener('click',()=>{
    for(var i=0;i<sup.length;i++){
        sup[i].classList.add('hide_block')
    }
    for(var i=0;i<sin.length;i++){
        sin[i].classList.remove('hide_block')
  }
})