<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Projet f1</title>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="../f1.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css ">
    <script src="//cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js"></script>
    <script src="//guy.verghote.free.fr/composant/std.js"></script>

    <script src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="index.js"></script>
</head>
<body>
<header>
    <!-- Menu -->
    <div class="sidenav">
        <a href="../index.php">Accueil</a>
        <a href="../pilotes/index.php">Pilotes</a>
        <a href="index.php">Ecuries</a>
        <a href="../grandprix/index.php">Grand Prix</a>
        <a href="../resultat/index.php">Résultats</a>
    </div>
</header>
<div class='table-responsive container'>
    <table class='table table-sm table-borderless'>
        <thead>
        <tr>
            <th class="masquer"></th>
            <th class="masquer">Numéro</th>
            <th>Nom</th>
            <th>Nombre de titre</th>
            <th class="masquer text-center">Point</th>
        </tr>
        </thead>
        <tbody id="lesLignes"></tbody>
    </table>
    <footer>
        <div style="position: fixed; bottom: 0; left: 50%">
            © 2021 Dreamers
        </div>
    </footer>
</div>
</body>
</html>

