function validation(){
    if(document.Formfill.username.value==0){
        document.getElementById("result").innerHTML="Enter username*";
        return false;
    }
    else if(document.Formfill.username.value.length<6){
        document.getElementById("result").innerHTML="AT Least Six letter";
        return false;
    }
    else if(document.Formfill.email.value==""){
    document.getElementById("result").innerHTML="Enter your Email*";
    return false;
    } 
   else if(document.Formfill.password.value==""){
    document.getElementById("result").innerHTML="Enter your Password";
    return false;
    }
    else if(document.Formfill.password.value.length<6){
    document.getElementById("result").innerHTML="Password must be 6-digit";
    return false;
    }
    else if(document.Formfill.cpassword.value==""){
    document.getElementById("result").innerHTML="Enter your Confirm Password";
    return false;
    }
    else if(document.Formfill.cpassword.value !== document.Formfill.password.value){
    document.getElementById("result").innerHTML="Password does'nt matched";
    return false;
    }
}
const wrapper = document.querySelector('.wrapper');
const registerLink = document.querySelector('.register-link');
const loginLink = document.querySelector('.login-link');

registerLink.onclick = () => {
    wrapper.classList.add('active');
}

loginLink.onclick = () => {
    wrapper.classList.remove('active');
}
