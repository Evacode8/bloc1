// function setMode(oEvent){
//     document.body.classList.replace(aModes[Number(!this.checked)],aModes[Number(this.checked)]);
//     localStorage.setItem('mode',aModes[Number(this.checked)]);
//     this.parentNode.nextElementSibling.innerHTML = (this.checked)? "Dark mode":"White mode"
//   }
  
//   function loadMode(){
//     let sMode = localStorage.getItem('mode');
//     document.forms["mytheme"]["theme-mode"].checked = sMode == aModes[1];
//     setMode.call(document.forms["mytheme"]["theme-mode"])
//   }
//   let aModes = ["mode-white", "mode-dark"];
//   document.addEventListener('DOMContentLoaded',function(){
//     document.body.classList.add(aModes[0]);
//     document.forms["mytheme"]["theme-mode"].addEventListener('click', setMode);
//     loadMode()
//   });


  // requete ajax 

// Création de la requête
var xhr = new XMLHttpRequest();

// Configuration de la requête
xhr.open('GET', 'mentions-legales-2.html', true);

// Gestion de la réponse
xhr.onload = function() {
  if (xhr.status === 200) {
    // Insérer le contenu dans #main-container
    document.getElementById('main-container').innerHTML = xhr.responseText;
  } else {
    console.error('Erreur : ' + xhr.status);
  }
};

// Envoi de la requête
xhr.send();
function setMode(oEvent){
    document.body.classList.replace(aModes[Number(!this.checked)],aModes[Number(this.checked)]);
    localStorage.setItem('mode',aModes[Number(this.checked)]);
    this.parentNode.nextElementSibling.innerHTML = (this.checked)? "Dark mode":"White mode"
  }
  
  function loadMode(){
    let sMode = localStorage.getItem('mode');
    document.forms["mytheme"]["theme-mode"].checked = sMode == aModes[1];
    setMode.call(document.forms["mytheme"]["theme-mode"])
  }
  let aModes = ["mode-white", "mode-dark"];
  document.addEventListener('DOMContentLoaded',function(){
    document.body.classList.add(aModes[0]);
    document.forms["mytheme"]["theme-mode"].addEventListener('click', setMode);
    loadMode()
  });


  
