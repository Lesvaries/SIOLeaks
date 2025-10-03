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
├─ index.php
├─ README.md
├─ app/
│  ├─ controllers/
│  ├─ models/
│  └─ views/
│     ├─ component/
│     └─ layouts/
│        └─ header.php
├─ public/
│  ├─ favicon.ico
│  ├─ site.webmanifest
│  └─ assets/
│     ├─ css/
│     ├─ font/
│     ├─ img/
│     │  └─ favicon/
│     │     ├─ android-chrome-192x192.png
│     │     ├─ android-chrome-512x512.png
│     │     ├─ apple-touch-icon.png
│     │     ├─ favicon-16x16.png
│     │     └─ favicon-32x32.png
│     └─ js/
└─ uploads/

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
