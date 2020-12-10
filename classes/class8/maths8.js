// list
var list=document.querySelectorAll('.topics>li');

var topicToShow=document.querySelectorAll('.topic-detail>div');

for(var i=0;i<list.length;i++){
    // click event added to list
    list[i].firstElementChild.addEventListener('click',expand);
}

function shrink(){
    // shrink list
    var sublist,listTitle;
    for(var i=0;i<list.length;i++){
    // green color removed
    listTitle=list[i].firstElementChild;
    listTitle.classList.remove('green');

    // sublist selected and red color removed
    sublist=list[i].lastElementChild;
    sublist.classList.remove('incHeight');
        for(var j=0;j<sublist.children.length;j++){
            sublist.children[j].classList.remove('red');
        }
    }
}

// for click function
function expand(){
    var ul=this.nextElementSibling;
    
    // shrinks other list when one list clicked
    shrink(this);

    // subtopic ul
    ul.classList.add('incHeight');
    this.classList.add('green');

    // sublist selected  and first subtopic choosen
    var sublist=this.nextElementSibling.children;
    sublist[0].classList.add('red')

    // again sublist click event added
    for(var i=0;i<sublist.length;i++){
        sublist[i].addEventListener('click',showContent);
    }
}
function showContent(){
    var sublist,listTitle,x;
    sublist=this.parentElement;
    // color removed to sublist
    for(var i=0;i<sublist.children.length;i++){
        if(sublist.children[i].classList.contains('red')){
            sublist.children[i].classList.remove('red');
        }
    }
    this.classList.add('red');
    listTitle=sublist.previousElementSibling.firstElementChild;
    x=listTitle.innerText;
    x=x+"-"+this.innerText;

    // remove other items
    for(var i=0;i<topicToShow.length;i++){
        if(topicToShow[i].classList.contains('show')){
            topicToShow[i].classList.remove('show');
        }
    }
    // show specific matching items
    for(var i=0;i<topicToShow.length;i++){
        if(topicToShow[i].classList.contains(x)){
            topicToShow[i].classList.add('show');
        }
    }
    
}
