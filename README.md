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

SIOLeaks/<br>
├── .gitignore<br>
├── arbo.txt<br>
├── index.php<br>
├── README.md<br>
├── app<br>
│   ├── controllers<br>
│   │   ├── About.php<br>
│   │   ├── AuthController.php<br>
│   │   ├── Contact.php<br>
│   │   ├── Host.php<br>
│   │   ├── Login.php<br>
│   │   ├── Programs.php<br>
│   │   ├── RegisterController.php<br>
│   │   └── SignUp.php<br>
│   ├── models<br>
│   │   ├── AddUserModel.php<br>
│   │   ├── AuthModel.php<br>
│   │   ├── config.php<br>
│   │   └── Database.php<br>
│   └── views<br>
│       ├── about.view.php<br>
│       ├── contact.view.php<br>
│       ├── host.view.php<br>
│       ├── login.view.php<br>
│       ├── programs.view.php<br>
│       ├── sign-up.view.php<br>
│       ├── components<br>
│       └── layouts<br>
│           ├── head.php<br>
│           └── header.php<br>
├── database<br>
│   ├── backups<br>
│   │   ├── sioleaks-bdd.sql<br>
│   │   └── sioleaks-user.sql<br>
│   └── migrations<br>
│       └── 20251004_sioleaks-structure.sql<br>
└── public<br>
    ├── favicon.ico<br>
    ├── site.webmanifest<br>
    ├── assets<br>
    │   ├── css<br>
    │   │   ├── main.css<br>
    │   │   ├── base<br>
    │   │   │   ├── color.css<br>
    │   │   │   ├── fonts.css<br>
    │   │   │   └── reset.css<br>
    │   │   ├── components<br>
    │   │   │   └── header.css<br>
    │   │   ├── layout<br>
    │   │   ├── pages<br>
    │   │   │   └── home.css<br>
    │   │   ├── theme<br>
    │   │   │   └── theme.css<br>
    │   │   └── utilities<br>
    │   │       └── transitions.css<br>
    │   ├── fonts<br>
    │   │   ├── Inter<br>
    │   │   │   ├── demo.html<br>
    │   │   │   ├── Inter-Italic.woff2<br>
    │   │   │   ├── Inter-Regular.woff2<br>
    │   │   │   └── stylesheet.css<br>
    │   │   ├── OpenSans<br>
    │   │   │   ├── OpenSans-Italic-VariableFont_wdth,wght.woff2<br>
    │   │   │   └── OpenSans-VariableFont_wdth,wght.woff2<br>
    │   │   ├── Overpass<br>
    │   │   │   ├── Overpass-Italic-VariableFont_wght.woff2<br>
    │   │   │   └── Overpass-VariableFont_wght.woff2<br>
    │   │   └── Roboto<br>
    │   │       ├── demo.html<br>
    │   │       ├── Roboto-Italic.woff2<br>
    │   │       ├── Roboto-Regular.woff2<br>
    │   │       └── stylesheet.css<br>
    │   ├── img<br>
    │   │   ├── hero_bg.jpg<br>
    │   │   ├── hero_bg2.png<br>
    │   │   ├── favicon<br>
    │   │   │   ├── android-chrome-192x192.png<br>
    │   │   │   ├── android-chrome-512x512.png<br>
    │   │   │   ├── apple-touch-icon.png<br>
    │   │   │   ├── favicon-16x16.png<br>
    │   │   │   └── favicon-32x32.png<br>
    │   │   └── icon<br>
    │   │       ├── icon_favicon.png<br>
    │   │       └── icon_header.png<br>
    │   ├── js<br>
    │   │   └── header.js<br>
    │   └── medias<br>
    └── uploads<br>


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
