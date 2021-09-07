const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});

const buttonExit = document.querySelector(".button-exit");
buttonExit.addEventListener( "click", () => {
    document.querySelector(".modalIniciar").style.display="none";
} )

const login = document.querySelector(".login");
login.addEventListener( "click", () => {
    document.querySelector(".modalIniciar").style.display="block";
} )



const loginPuntos = document.querySelector(".login-puntos");
loginPuntos.addEventListener( "click", () => {
    document.querySelector(".modalIniciar").style.display="block";
} )

