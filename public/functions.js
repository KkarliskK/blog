

function startTime() {
    const today = new Date();
    let h = today.getHours();
    let m = today.getMinutes();
    let s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML = h + ":" + m + ":" + s;
    setTimeout(startTime, 1000);
}

function checkTime(i) {
    if (i < 10) { i = "0" + i }; // add zero in front of numbers < 10
    return i;
} 

//this is for dark mode

const toggle = document.getElementById('toggleDark');
const body = document.querySelector('body');

toggle.addEventListener('click', function(){
    this.classList.toggle('bi-brightness-high-fill');
    if(this.classList.toggle('bi-moon-fill')){
        body.style.background = 'white';
        body.style.color = 'black';
        body.style.transition = '2s';
    }else{
        body.style.background = '#121212';
        body.style.color = 'white';
        body.style.transition = '2s';

    }
})

// This is for toggling blur on edit profile page

function edit(){
    let editContainer = $('#edit-profile-container').toggleClass('hidden');
    let blur = $('#profile-main-container').toggleClass('blur');
} 

function close(){
    let editContainer = $('#edit-profile-container').toggleClass('hidden');
    let blur = $('#profile-main-container').toggleClass('blur');
} 
 
//this is to switch between login and register views

function register(){
    let register = $('#background-img').toggleClass('hidden');  
    let login = $('#register-img').toggleClass('hidden');  
}



// ajax for register


function submitt(forma){
    event.preventDefault();
    $.ajax({
        url: "../controller/user_ctr.php",
        type: "POST",
        dataType: "json",
        data: $("#"+forma).serialize(),
        success: function(result){
            console.log(result);
            if(result.msg == '' || result.msgLogin == '' || result.msgUpdate == '' || result.msgComment == '' || result.msgBlog == ''){
                $('#errRegister').text(result.errRegister);
                $('#errUsername').text(result.errUsername);
                $('#errPassword').text(result.errPassword);
                $('#errComment').text(result.errComment);
                $('#errRegName').text(result.errRegName);
                $('#errRegUsername').text(result.errRegUsername);
                $('#errRepeat').text(result.errRepeat);
                $('#errRegPassword').text(result.errRegPassword);
                $('#errRegPass').text(result.errRegPass);
                $('#errSession').text(result.errSession);
                $('#errUpdatePfp').text(result.errUpdatePfp);
                $('#errTitle').text(result.errTitle);
                $('#errDescription').text(result.errDescription);
                $('#errImage').text(result.errImage);
                $('#msg').text('');
                $('#msgLogin').text('');
                $('#msgUpdate').text('');
                $('#msgBlog').text('');
                $('#msgComment').text('');
            }else{
                $('#msg').text(result.msg);
                $('#msgLogin').text(result.msgLogin);
                $('#msgUpdate').text(result.msgUpdate);
                $('#msgBlog').text(result.msgBlog);
                $('#msgComment').text(result.msgComment);
                $('#errRegister').text('');
                $('#errRegName').text('');
                $('#errRegUsername').text('');
                $('#errRepeat').text('');
                $('#errRegPassword').text('');
                $('#errRegPass').text('');
                $('#errPassword').text('');
                $('#errUsername').text('');
                $('#errUpdatePfp').text('');
                $('#errTitle').text('');
                $('#errDescription').text('');
                $('#errImage').text('');
                $('#errComment').text('');
                $('#errSession').text('');
                if(result.errSession == '1'){
                    window.location.href = "http://into.id.lv/ipb21/karlis/school/blogs/view/index.php";
                }
            }
        },
        error: function(error){
            console.log(error);
        }
    });
}


function logOut(){
    event.preventDefault();
    $.ajax({
        url: "../controller/header_ctr.php",
        type: "POST",
        dataType: "json",
        data: {logout : true},
        success: function(result){
            console.log(result);
            window.location.href = "http://into.id.lv/ipb21/karlis/school/blogs/view/login.php";
        },
        error: function(error){
            console.log(error);
        }
    });
}
