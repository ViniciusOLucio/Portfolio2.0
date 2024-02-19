window.addEventListener('load',function(){
  function typeWriter(elementos) {
    let ultimoIndex = 0;

    elementos.forEach(function (elemento){
      const textoArray = elemento.innerText.split("");
      elemento.innerText = "";
      textoArray.forEach(function(letra)  {
      setTimeout(function() {
        elemento.innerText = elemento.innerText + letra;
      }, 75 * ultimoIndex );
      ultimoIndex = ultimoIndex + 1;
    });
  });
   }
   const titulo = document.querySelector("#textoH1");
   titulo.classList.remove("hidden");
  const titulos = document.querySelectorAll("#textoH1 > * ");

  typeWriter(titulos);

  typeWriter(document.querySelectorAll("#trabalho-atual > a "))

  //







});



