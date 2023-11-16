const texte = document.querySelector(".texte");
const couleur = document.querySelector("#couleur");
const taille = document.querySelector("#taille");
const police = document.querySelector("#police");
const gras = document.querySelector("#gras");
const italique = document.querySelector("#italique")
const bouton = document.querySelector("#appliquer");

bouton.addEventListener("click", function() {
  const couleurChoisie = couleur.value;
  const tailleChoisie = taille.value;
  const policeChoisie = police.value;
  const grasChoisi = gras.checked;
  const italiqueChoisi = italique.checked;
// styles 
  texte.style.color = couleurChoisie;
  texte.style.fontSize = tailleChoisie + "px";
  texte.style.fontFamily = policeChoisie;
  texte.style.fontWeight = grasChoisi ? "bold" : "normal";
//  cesymbole: ? est la condition ternaire 
//    texte.style.fontStyle = italiqueChoisi ? "italic" : "noraml";
});