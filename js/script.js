/* Botao de subir a pagina */

let mybutton = document.getElementById("btntopo");


window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0; 
}

const toTop = document.querySelector("#btntopo");

window.addEventListener("scroll", () => {
  if (window.pageYOffset > 100) {
    toTop.classList.add("active");
  } else {
    toTop.classList.remove("active");
  }
})

/* fim do botao de subir a pagina */

/* Login e cadastro */ 
const wrapper = document.querySelector('.wrapper');
const logar = document.querySelector('.linklogin');
const cad = document.querySelector('.linkcad');

cad.addEventListener('click', ()=> {
  wrapper.classList.add('active');
});

logar.addEventListener('click', ()=> {
  wrapper.classList.remove('active');
});

const show_pw_btn = document.querySelector('#show-passwd')
const pw_input = document.querySelector('#password')

show_pw_btn.addEventListener('click', () => {
	pw_input.type = pw_input.type === 'password' 
		? 'text' 
		: 'password'
})

/* sobre cards script */




    






