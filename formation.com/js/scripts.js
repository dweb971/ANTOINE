/*ecouteur*/
let valFrm = document.getElementById("valBtnFrm");
valFrm.addEventListener("click",function(e){
    console.log(e);


    
/*frm*/
let erreurFullname;
let erreurEmail;
let erreurCountry;
let erreurState;
let erreurPassword;
let fullName = document.getElementById('fullNameFrm');
let email = document.getElementById('emailFrm');
let country = document.getElementById('countryFrm');
let state = document.getElementById('stateFrm');
let password = document.getElementById('passwordFrm');




if (password.value==""){
        
    erreurPassword = "please enter your Password"
    password.classList.add("errorEmpty");
            

}else{
    password.classList.remove("errorEmpty");
    document.getElementById("erreurPassword").classList.add("off");

}

if (state.value==""){
        
    erreurState = "please enter your State"
    state.classList.add("errorEmpty");

}else{
    state.classList.remove("errorEmpty");
    document.getElementById("erreurState").classList.add("off");

}
if (country.value==""){
        
    erreurCountry = "please enter your Country"
    country.classList.add("errorEmpty");
   


}else{
    country.classList.remove("errorEmpty");
    document.getElementById("erreurCountry").classList.add("off");

    
}
if (email.value==""){
        
    erreurEmail = "please enter your Mail"
    email.classList.add("errorEmpty");

}else{
    email.classList.remove("errorEmpty");
    document.getElementById("erreurEmail").classList.add("off");



}

if (fullName.value==""){
        
    erreurFullname = "please enter your Fullname"
    fullName.classList.add("errorEmpty");


}else{
    fullName.classList.remove("errorEmpty");
    document.getElementById("erreurName").classList.add("off");

}




















if (erreurPassword) {
    document.getElementById("erreurPassword").innerHTML = erreurPassword;

}
    if (erreurState) {
        document.getElementById("erreurState").innerHTML = erreurState;
    
    
    }

    if (erreurCountry) {
        document.getElementById("erreurCountry").innerHTML = erreurCountry;
    
    
    }

    if (erreurEmail) {
        document.getElementById("erreurEmail").innerHTML = erreurEmail;
    
    
    }


    if (erreurFullname) {
        document.getElementById("erreurName").innerHTML = erreurFullname;
    
    
    }


    if(fullName.value!=""&email.value!=""&country.value!=""&state.value!=""&password.value!=""){
        alert("formulaire envoyé GG booooooooyyyyyyyyyyyy")
    }



   




    
    
});



let removeError = document.getElementById("inscription")
removeError.addEventListener("keydown",function(k){
    console.log(k);

    let erreurFullname;
let erreurEmail;
let erreurCountry;
let erreurState;
let erreurPassword;
let fullName = document.getElementById('fullNameFrm');
let email = document.getElementById('emailFrm');
let country = document.getElementById('countryFrm');
let state = document.getElementById('stateFrm');
let password = document.getElementById('passwordFrm');

if(fullName.value!=""){
    document.getElementById("erreurName").classList.add("off");
    fullName.classList.remove("errorEmpty");

}
if(email.value!=""){
    document.getElementById("erreurEmail").classList.add("off");
    email.classList.remove("errorEmpty");

}if(country.value!=""){
    document.getElementById("erreurCountry").classList.add("off");
    country.classList.remove("errorEmpty");

}
if(state.value!=""){
    document.getElementById("erreurState").classList.add("off");
    state.classList.remove("errorEmpty");

}
if(password.value!=""){
    document.getElementById("erreurPassword").classList.add("off");
    password.classList.remove("errorEmpty");

}























});
