# SIOLeaks

## Description
**SIOLeaks** est un site web destiné aux étudiants du BTS SIO (SLAM et SISR), permettant d’accéder gratuitement à des cours d’informatique. Les cours sont présentés de manière simple et claire, afin que chacun puisse revoir des notions déjà étudiées ou prendre de l’avance sur le programme.

Le site vise à rendre l’apprentissage accessible et organisé, en évitant la complexité et les explications peu claires que l’on peut trouver ailleurs.

---

## Fonctionnalités
- Pages principales :  
  - **Accueil** : présentation du site et des objectifs  
  - **Cours** : liste et accès aux cours  
  - **About Us** : informations sur le projet  
  - **Contact** : formulaire pour contacter l’équipe  
- **Login** pour les utilisateurs
- Responsive design et animations prévues pour les prochaines versions
- Organisation du site en architecture **PHP MVC**

---

## Technologies utilisées
- **Frontend** : HTML, CSS, JavaScript  
- **Backend** : PHP  
- **Base de données** : MySQL (via phpMyAdmin)  
- Architecture : MVC (Modèle-Vue-Contrôleur)  
- Projet développé **sans framework**, en pur PHP et JS

---

## Arborescence du projet

SIOLeaks/
├── .gitignore<br>
├── arborescence.txt<br>
├── index.php<br>
├── README.md<br>
├── <br>
├── app/<br>
│   ├── controllers/<br>
│   │   ├── about.php<br>
│   │   ├── contact.php<br>
│   │   ├── host.php<br>
│   │   ├── login.php<br>
│   │   ├── programs.php<br>
│   │   ├── sign-up.php<br>
│   │   ├── <br>
│   ├── models/<br>
│   │   ├── connection-bdd.php<br>
│   │   ├── credentials.php<br>
│   │   ├── <br>
│   └── views/<br>
│       ├── v_about.php<br>
│       ├── v_contact.php<br>
│       ├── v_host.php<br>
│       ├── v_login.php<br>
│       ├── v_programs.php<br>
│       ├── v_sign-up.php<br>
│       ├── <br>
│       ├── component/<br>
│       └── layouts/<br>
│               ├── head.php<br>
│               └── header.php<br>
│               <br>
├── database/<br>
│   ├── backups/<br>
│   │   ├── sioleaks-bdd.sql<br>
│   │   ├── sioleaks-user.sql<br>
│   │   ├── <br>
│   └── migrations/<br>
│           └── 20251004_sioleaks-structure.sql<br>
│           <br>
└── public/<br>
    ├── favicon.ico<br>
    ├── site.webmanifest<br>
    ├── <br>
    └── assets/<br>
        ├── css/<br>
        │   ├── main.css<br>
        │   ├── <br>
        │   ├── base/<br>
        │   │   ├── fonts.css<br>
        │   │   ├── reset.css<br>
        │   │   ├── <br>
        │   ├── components/<br>
        │   │   └── header.css<br>
        │   │   ├── <br>
        │   ├── layout/<br>
        │   ├── pages/<br>
        │   │   └── home.css<br>
        │   │   ├── <br>
        │   └── utilities/<br>
        │           ├── color.css<br>
        │           └── transitions.css<br>
        │           <br>
        ├── font/<br>
        │   ├── Inter/<br>
        │   │   ├── demo.html<br>
        │   │   ├── Inter-Italic.woff2<br>
        │   │   ├── Inter-Regular.woff2<br>
        │   │   └── stylesheet.css<br>
        │   │   <br>
        │   ├── Montserrat/<br>
        │   ├── OpenSans/<br>
        │   │   ├── OpenSans-Italic-VariableFont_wdth,wght.woff2<br>
        │   │   └── OpenSans-VariableFont_wdth,wght.woff2<br>
        │   │   <br>
        │   └── Roboto/<br>
        │       ├── demo.html<br>
        │       ├── Roboto-Italic.woff2<br>
        │       ├── Roboto-Regular.woff2<br>
        │       └── stylesheet.css<br>
        │       <br>
        ├── img/<br>
        │   ├── hero_bg.jpg<br>
        │   ├── hero_bg2.png<br>
        │   ├── <br>
        │   ├── favicon/<br>
        │   │   ├── android-chrome-192x192.png<br>
        │   │   ├── android-chrome-512x512.png<br>
        │   │   ├── apple-touch-icon.png<br>
        │   │   ├── favicon-16x16.png<br>
        │   │   ├── favicon-32x32.png<br>
        │   │   ├── <br>
        │   └── icon/<br>
        │       ├── icon_favicon.png<br>
        │       ├── icon_header.png<br>
        │       └── icon_header2.png<br>
        │       <br>
        ├── js/<br>
        │   └── header.js<br>
        │   <br>
        └── medias/<br>
        └── uploads/<br>

## Installation et utilisation
1. Cloner le dépôt GitHub :  
   ```bash
   git clone https://github.com/Lesvaries/SIOLeaks.git

2. Importer la base de données via phpMyAdmin (structure et utilisateurs à créer)

3. Placer le projet sur un serveur local (XAMPP, WAMP, MAMP, etc.)

4. Configurer le fichier de connexion à la base de données (ex. config.php)

5. Accéder au site via http://localhost/SIOLeaks

## Contribution

Le projet est en développement et les contributions sont ouvertes à des amis proches pour l’instant.

**Pour contribuer :**

1. Contacter l’auteur avant toute modification

2. Respecter la structure MVC et les conventions de code existantes

## Liens utiles

Dépôt GitHub : https://github.com/Lesvaries/SIOLeaks
