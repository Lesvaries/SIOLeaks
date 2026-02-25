<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIOLeaks</title>

    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Bootstrap CSS CDN link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


    <!-- Favicon links -->
    <link rel="icon" type="image/x-icon" href="./public/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="./public/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./public/assets/img/favicon/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./public/assets/img/favicon/apple-touch-icon.png">
    <link rel="manifest" href="./public/site.webmanifest">
    <link rel="icon" type="image/png" sizes="192x192" href="./public/assets/img/favicon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="./public/assets/img/favicon/android-chrome-512x512.png">

    <!-- Stylesheet link -->
    <link rel="stylesheet" href="./public/assets/css/main.css">

    <script>
        // Vérifie le thème dans localStorage et applique immédiatement
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme === 'dark') {
            document.documentElement.classList.add('dark-theme');
        }
    </script>

    <script src="./public/assets/js/theme.js"></script>
    <script src="./public/assets/js/progrom.js"></script>

</head>
<body>
