const buttonTerm = document.getElementById('pdf');
const buttonTerm2 = document.getElementById('pdf2');
const buttonTerm3 = document.getElementById('pdf3');


const buttonTermExit = document.getElementById('termExit');

buttonTerm.addEventListener("click", ()=> {

    document.querySelector(".terminos").style.display ="block";

})
buttonTerm2.addEventListener("click", ()=> {

    document.querySelector(".terminos").style.display ="block";

})
buttonTerm3.addEventListener("click", ()=> {

    document.querySelector(".terminos").style.display ="block";

})
buttonTermExit.addEventListener("click", ()=> {

    document.querySelector(".terminos").style.display ="none";

})