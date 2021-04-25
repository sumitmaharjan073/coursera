// nav explore subjects

//for login test
//document.getElementById('login-page').style.display ="none";
//document.getElementById('login-approval').style.display ="block";
loginSuccess = () => {
    console.log("login sucess ful");
    document.getElementById('login-page').style.display ="none";
    document.getElementById('login-approval').style.display ="block";
}
//var usernameforshow = localStorage.getItem("someVarusernameforshow")
//console.log(usernameforshow);
//document.getElementById('usernamereturn').innerHTML = usernameforshow;
let userNameForShow = localStorage.getItem('userNameForStore');
localStorage.removeItem('userNameForStore');
//console.log(userNameForShow);