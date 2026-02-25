<script>
let currentYear = 'all';
let currentSpecialisation = 'all';

function filterCard() {
    const cards = document.querySelectorAll('.card-cours');

    cards.forEach(card => {
        const cardYear = card.getAttribute('data-year');
        const cardSpecialisation = card.getAttribute('data-specialisation');

        // Vérifie l’année
        const yearMatch = (currentYear === 'all' || cardYear === currentYear);

        // Vérifie la spécialisation
        let specialisationMatch = true;
        if (cardSpecialisation) {
            specialisationMatch = (currentSpecialisation === 'all' || cardSpecialisation === currentSpecialisation);
        }

        if (yearMatch && specialisationMatch) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

// Ajoute les événements de clic
document.querySelectorAll('[data-filter]').forEach(button => {
    button.addEventListener('click', (e) => {
        e.preventDefault();

        const filterType = e.target.getAttribute('data-filter');
        const filterValue = e.target.getAttribute('data-value');

        if (filterType === 'year') {
            currentYear = filterValue;
        } else if (filterType === 'specialisation') {
            currentSpecialisation = filterValue;
        }
        filterCard();
    });
});

</script>



<section class="filters-toolbar">
    <div class="year-group">
        <label>
            <input type="radio" name="annee" class="filter-checkbox" data-filter="all" checked>
            Tous
        </label>
        <label>
            <input type="radio" name="annee" class="filter-checkbox" data-filter="year1">
            Année 1
        </label>
        <label>
            <input type="radio" name="annee" class="filter-checkbox" data-filter="year2">
            Année 2
        </label>
    </div>

    <div class="specialisation-group">
        <label>
            <input type="radio" name="specialite" class="filter-checkbox" data-filter="all" checked> Tous
        </label>
        <label>
            <input type="radio" name="specialite" class="filter-checkbox" data-filter="slam">
            SISR
        </label>
        <label>
            <input type="radio" name="specialite" class="filter-checkbox" data-filter="sisr">
            SLAM
        </label>
    </div>
</section>
        
    <section class="cours">
        <article data-year="year1">
            <h1>Année 1</h1>

        <div class="matiere" data-matiere="dev">
            <h2>Développement</h2>
            <div class="card-container">
                <a href=""><div class="card-cours" data-chapitre="chap1" data-year="year1">
                    <h3>Chapitre 1</h3>
                    <p><em>Année 1</em></p>
                    <p>Les chemins relatifs</p>
                </div></a>

                <a href=""><div class="card-cours" data-chapitre="chap2" data-year="year1">
                    <h3>Chapitre 2</h3>
                    <p><em>Année 1</em></p>
                    <p>Les bases du HTML & CSS</p>
                </div></a>

                <a href=""><div class="card-cours" data-chapitre="chap3" data-year="year1">
                    <h3>Chapitre 3</h3>
                    <p><em>Année 1</em></p>
                    <p>Les tableaux HTML</p>
                </div></a>

                <a href=""><div class="card-cours" data-chapitre="chap4" data-year="year1">
                    <h3>Chapitre 4</h3>
                    <p><em>Année 1</em></p>
                    <p>Les formulaires HTML</p>
                </div></a>

                <a href=""><div class="card-cours" data-chapitre="chap5" data-specialisation="slam" data-year="year1">
                    <h3>Chapitre 5</h3>
                    <p><em>Année 1 / SLAM</em></p>
                    <p>Les Bases du PHP</p>
                </div></a>
                <a href=""><div class="card-cours" data-chapitre="chap6" data-specialisation="slam" data-year="year1">
                    <h3>Chapitre 6</h3>
                    <p><em>Année 1 / SLAM</em></p>
                    <p>Connexion à une BDD</p>
                </div></a>
                <a href=""><div class="card-cours" data-chapitre="chap7" data-specialisation="slam" data-year="year1">
                    <h3>Chapitre 7</h3>
                    <p><em>Année 1 / SLAM</em></p>
                    <p>Administration du site</p>
                </div></a>
            </div>
        </div>


            <div class="matiere" data-matiere="bdd">
                <h2>Base de Données</h2>
                <div class="card-container">
                    <div class="card-cours" data-chapitre="chap1">
                        <h3>Chapitre 1</h3>
                    </div>
                    <div class="card-cours" data-chapitre="chap2">
                        <h3>Chapitre 2</h3>
                    </div>
                    <div class="card-cours" data-chapitre="chap3">
                        <h3>Chapitre 4</h3>
                    </div>
                </div>
            </div>

            <div class="matiere" data-matiere="sys" data-specialisation="sisr">
                <h2>Système</h2>
                <div class="card-container">
                    <div class="card-cours" data-chapitre="chap1">
                        <h3>Chapitre 1</h3>
                    </div>
                    <div class="card-cours" data-chapitre="chap2">
                        <h3>Chapitre 2</h3>
                    </div>
                    <div class="card-cours" data-chapitre="chap3">
                        <h3>Chapitre 3</h3>
                    </div>
                </div>
            </div>

            <div class="matiere" data-matiere="reseau" data-specialisation="sisr">
                <h2>Réseaux</h2>
                <div class="card-container">
                    <div class="card-cours" data-chapitre="chap1">
                        <h3>Chapitre 1</h3>
                    </div>
                    <div class="card-cours" data-chapitre="chap2">
                        <h3>Chapitre 2</h3>
                    </div>
                    <div class="card-cours" data-chapitre="chap3">
                        <h3>Chapitre 3</h3>
                    </div>
                </div>
            </div>

            <div class="matiere" data-matiere="algo">
                <h2>Algorithmie</h2>
                <div class="card-container">
                    <div class="card-cours" data-chapitre="chap1">
                        <h3>Chapitre 1</h3>
                    </div>
                    <div class="card-cours" data-chapitre="chap2">
                        <h3>Chapitre 2</h3>
                    </div>
                    <div class="card-cours" data-chapitre="chap3">
                        <h3>Chapitre 3</h3>
                    </div>
                </div>
            </div>

            <div class="matiere" data-matiere="cejm">
                <h2>Culture économique, juridique et managériale</h2>
                <div class="card-container">
                    <div class="card-cours" data-chapitre="chap1">
                        <h3>Chapitre 1</h3>
                    </div>
                    <div class="card-cours" data-chapitre="chap2">
                        <h3>Chapitre 2</h3>
                    </div>
                    <div class="card-cours" data-chapitre="chap3">
                        <h3>Chapitre 3</h3>
                    </div>
                </div>
            </div>

            <div class="matiere" data-matiere="maths">
                <h2>Mathématique</h2>
                <div class="card-container">
                    <div class="card-cours" data-chapitre="chap1">
                        <h3>Chapitre 1</h3>
                    </div>
                    <div class="card-cours" data-chapitre="chap2">
                        <h3>Chapitre 2</h3>
                    </div>
                    <div class="card-cours" data-chapitre="chap3">
                        <h3>Chapitre 3</h3>
                    </div>
                </div>
            </div>
        </article>

        <!-- Année 2 -->
        <article data-year="year2">
            <h1>Année 2</h1>

            <div class="matiere" data-matiere="dev">
                <h2>Développement</h2>
                <div class="card-container">
                    <div class="card-cours" data-chapitre="chap1">
                        <h3>Chapitre 1</h3>
                    </div>
                    <div class="card-cours" data-chapitre="chap2">
                        <h3>Chapitre 2</h3>
                    </div>
                    <div class="card-cours" data-chapitre="chap3">
                        <h3>Chapitre 3</h3>
                    </div>
                </div>
            </div>

            <div class="matiere" data-matiere="cybersec">
                <h2>Cybersécurité</h2>
                <div class="card-container">
                    <div class="card-cours" data-chapitre="chap1">
                        <h3>Chapitre 1</h3>
                    </div>
                    <div class="card-cours" data-chapitre="chap2">
                        <h3>Chapitre 2</h3>
                    </div>
                    <div class="card-cours" data-chapitre="chap3">
                        <h3>Chapitre 3</h3>
                    </div>
                </div>
            </div>

            <div class="matiere" data-matiere="sys" data-specialisation="sisr">
                <h2>Système</h2>
                <div class="card-container">
                    <div class="card-cours" data-chapitre="chap1">
                        <h3>Chapitre 1</h3>
                    </div>
                    <div class="card-cours" data-chapitre="chap2">
                        <h3>Chapitre 2</h3>
                    </div>
                    <div class="card-cours" data-chapitre="chap3">
                        <h3>Chapitre 3</h3>
                    </div>
                </div>
            </div>

            <div class="matiere" data-matiere="reseau" data-specialisation="sisr">
                <h2>Réseaux</h2>
                <div class="card-container">
                    <div class="card-cours" data-chapitre="chap1">
                        <h3>Chapitre 1</h3>
                    </div>
                    <div class="card-cours" data-chapitre="chap2">
                        <h3>Chapitre 2</h3>
                    </div>
                    <div class="card-cours" data-chapitre="chap3">
                        <h3>Chapitre 3</h3>
                    </div>
                </div>
            </div>

            <div class="matiere" data-matiere="cejm">
                <h2>Culture économique, juridique et managériale</h2>
                <div class="card-container">
                    <div class="card-cours" data-chapitre="chap1">
                        <h3>Chapitre 1</h3>
                    </div>
                    <div class="card-cours" data-chapitre="chap2">
                        <h3>Chapitre 2</h3>
                    </div>
                    <div class="card-cours" data-chapitre="chap3">
                        <h3>Chapitre 3</h3>
                    </div>
                </div>
            </div>

            <div class="matiere" data-matiere="maths">
                <h2>Mathématique</h2>
                <div class="card-container">
                    <div class="card-cours" data-chapitre="chap1">
                        <h3>Chapitre 1</h3>
                    </div>
                    <div class="card-cours" data-chapitre="chap2">
                        <h3>Chapitre 2</h3>
                    </div>
                    <div class="card-cours" data-chapitre="chap3">
                        <h3>Chapitre 3</h3>
                    </div>
                </div>
            </div>
        </article>
    </section>

        
        
        
        
        
        
        
        
        
        
        <a href="index.php?section=CEJM-y1ch01">CEJM chapitre 1</a>