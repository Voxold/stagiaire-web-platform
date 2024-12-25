<?php
session_start();
require_once 'functions.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord - Campus Connect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="style.css" rel="stylesheet">
</head>
<body class="bg-light">
    <?php include 'includes/nav.php'; ?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-3">
                <div class="card shadow-sm mb-4">
                    <div class="card-body text-center">
                        <img src="https://via.placeholder.com/150" alt="Profile Picture" class="rounded-circle mb-3">
                        <h4 class="mb-0"><?php echo htmlspecialchars($username); ?></h4>
                        <p class="text-muted">Étudiant</p>
                        <button class="btn btn-primary btn-sm mt-2">Modifier le profil</button>
                    </div>
                </div>
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Menu rapide</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item"><a href="#" class="nav-link">Mes cours</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Mes notes</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Calendrier</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Messages</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Bienvenue, <?php echo htmlspecialchars($username); ?> !</h2>
                        <p class="lead">Voici un aperçu de votre activité récente et de vos prochaines tâches.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-body">
                                <h5 class="card-title mb-4">Vos tâches</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Projet de mathématiques
                                        <span class="badge bg-primary rounded-pill">En cours</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Rapport de stage
                                        <span class="badge bg-success rounded-pill">Terminé</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Présentation d'anglais
                                        <span class="badge bg-warning rounded-pill">À venir</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-body">
                                <h5 class="card-title mb-4">Prochains événements</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="mb-0">Réunion de groupe</h6>
                                            <small class="text-muted">10:00 - 11:30</small>
                                        </div>
                                        <span class="badge bg-info rounded-pill">Aujourd'hui</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="mb-0">Examen de programmation</h6>
                                            <small class="text-muted">14:00 - 16:00</small>
                                        </div>
                                        <span class="badge bg-warning rounded-pill">Demain</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="mb-0">Atelier de design</h6>
                                            <small class="text-muted">09:30 - 12:30</small>
                                        </div>
                                        <span class="badge bg-primary rounded-pill">3 jours</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-body">
                                <h5 class="card-title mb-4">Progression des cours</h5>
                                <div class="mb-3">
                                    <h6 class="mb-1">Mathématiques</h6>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h6 class="mb-1">Informatique</h6>
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="mb-1">Anglais</h6>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-body">
                                <h5 class="card-title mb-4">Annonces récentes</h5>
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1">Nouvelle ressource disponible</h6>
                                            <small class="text-muted">3 jours</small>
                                        </div>
                                        <p class="mb-1">Un nouveau cours en ligne sur le machine learning est maintenant disponible.</p>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h6 class="mb-1">Rappel : Inscription aux examens</h6>
                                            <small class="text-muted">1 semaine</small>
                                        </div>
                                        <p class="mb-1">N'oubliez pas de vous inscrire aux examens avant la date limite.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="script.js"></script>
</body>
</html>