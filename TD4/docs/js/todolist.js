


const champDeSaisie = document.getElementById('todoInput');
const boutonAjouter = document.getElementById('addBtn');
const boutonRecherche = document.getElementById('search-button');
const champRecherche = document.getElementById('search-input');
const listeDeTaches = document.querySelector('.todo-list');

function ajouterTache(event) {
  event.preventDefault();

  const texteNouvelleTache = champDeSaisie.value.trim();

  if (texteNouvelleTache !== '') {
    const nouvelleTache = document.createElement('li');
    nouvelleTache.innerText = texteNouvelleTache;

    const checkbox = document.createElement('input');
    checkbox.type = 'checkbox';
    checkbox.addEventListener('change', function() {
      nouvelleTache.classList.toggle('done');
    });

    const deleteIcon = document.createElement('img');
    deleteIcon.src = '../../assets/images/souriant.png';
    deleteIcon.width = 35;
    deleteIcon.height = 35;
    deleteIcon.addEventListener('click', function() {
      nouvelleTache.remove();
    });
    

    nouvelleTache.appendChild(checkbox);
    nouvelleTache.appendChild(deleteIcon);
    listeDeTaches.appendChild(nouvelleTache);
    champDeSaisie.value = '';
  } else {
    alert('Veuillez entrer une tâche.');
  }
}

boutonAjouter.addEventListener('click', ajouterTache);



