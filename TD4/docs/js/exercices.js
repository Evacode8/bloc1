
// exercice 1 : Changer la couleur de fond avec évènement clic 
    button.addEventListener("click", function() {
        document.body.style.backgroundColor = "white";
        console.log("click");
    
      });



// exercice addition 


// document.addEventListener('DOMContentLoaded', function () {
//     const sectionCalcul = document.querySelector('#calcul');

//     const input1 = sectionCalcul.querySelector('#valeur1');
//     const input2 = sectionCalcul.querySelector('#valeur2');
//     const button = sectionCalcul.querySelector('button');

//     button.addEventListener('click', function () {
//         // Récupère les valeurs des deux input type number
//         const valeur1 = parseInt(input1.value);
//         const valeur2 = parseInt(input2.value);

//         // Additionne les deux valeurs
//         const somme = valeur1 + valeur2;

//         // Affiche la somme dans une boîte d'alerte
//         alert(somme);
//     });
// });


// choix d'images 


// const img = document.querySelector('#image');
// const select = document.querySelector('#select');

// select.addEventListener('change', function () {
//     const selectedOption = select.options[select.selectedIndex];
//     const textContent = selectedOption.textContent; // Get the text content of the selected option

//     // Assuming your images are named consistently with the textContent values
//     const imageName = textContent.toLowerCase() + '.jpg';
//     const imagePath = `../../assets/Images${imageName}`;

//     img.src = imagePath;
// });


// const img = document.querySelector('#image');

// const select = document.querySelector('#select');

// select.addEventListener('change', function() {
//   const selectedOption = select.options[select.selectedIndex];
//   const textContent = selectedOption.textContent; // Get the text content of the selected option

//   // Assuming your images are named consistently with the textContent values
//   const imageName = textContent.toLowerCase() + '.jpg';
//   const imagePath = `../../assets/images/${imageName}`;

//   img.src = imagePath;
// });




// const select = document.querySelector('#select');
// select.addEventListener('change', function() {
//     const Ville = select.options[select.selectedIndex].value;
//     // const selectedOption = select.options[select.selectedIndex];
//     const url_img = ""
//     if (Ville == "Budapest") {
//         document.querySelector('#image').src = "../../assets/images/budapest.jpg"
//         url_img = "../../assets/images/budapest.jpg"
//     }
//     else if (Ville == "Caen") {
//         document.querySelector('#image').src = "../../assets/images/caen.jpg"
//         url_img = "../../assets/images/caen.jpg"
//     }
//     else if (Ville == "Paris") {
//         document.querySelector('#image').src = "../../assets/images/paris.jpg"
//         url_img = "../../assets/images/paris.jpg"
//     }
//     else if (Ville == "Espagne") {
//         document.querySelector('#image').src = "../../assets/images/espagne.jpg" 
//         url_img = "../../assets/images/espagne.jpg" 
//     }
//     else if (Ville == "Vermont") {
//         document.querySelector('#image').src = "../../assets/images/vermont.jpg"
//         url_img = "../../assets/images/vermont.jpg"
//     }
//     else if (Ville == "Montreal") {
//         document.querySelector('#image').src = "../../assets/images/montreal.jpg"
//         url_img = "../../assets/images/montreal.jpg"
//     }
//     document.querySelector('#image').src = url_img
// });

// méthode switch case à voir


// Over element et alerte 

// const p = document.querySelector('#card');
// hoverAlert(p);

// function hoverAlert(p) {
//     p.addEventListener('mouseover', function() {
//       alert('Le survol fonctionne' + ' !');
//     });
//   }



// log des infos dans un formulaire de contact 

// const form = document.querySelector("form");

// form.addEventListener("submit", function(event) {
//   event.preventDefault();

//   const nom = document.querySelector("#nom").value;
//   const email = document.querySelector("#email").value;
//   const message = document.querySelector("#message").value;

//   console.log("Nom :", nom);
//   console.log("Adresse e-mail :", email);
//   console.log("Message :", message);
// });



