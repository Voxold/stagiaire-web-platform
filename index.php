<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Campus Connect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="/user/style.css" rel="stylesheet">
</head>
<body>
    <?php include 'includes/nav.php'; ?>

    <div class="container mt-5">
        <?php if (isset($_SESSION['user_id'])): ?>
            <!-- logged-in users -->
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h2 class="card-title text-center mb-4">Bienvenue, <?php echo htmlspecialchars($_SESSION['username']); ?> !</h2>
                            <p class="lead text-center">Que souhaitez-vous faire aujourd'hui ?</p>
                            <div class="d-flex justify-content-center mt-4">
                                <a href="dashboard.php" class="btn btn-primary me-3">Accéder au tableau de bord</a>
                                <a href="#" class="btn btn-outline-primary">Voir mes cours</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-tasks me-2"></i>Tâches récentes</h5>
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
                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-calendar-alt me-2"></i>Événements à venir</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h6 class="mb-0">Réunion de groupe</h6>
                                    <small class="text-muted">Aujourd'hui, 10:00 - 11:30</small>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="mb-0">Examen de programmation</h6>
                                    <small class="text-muted">Demain, 14:00 - 16:00</small>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="mb-0">Atelier de design</h6>
                                    <small class="text-muted">Dans 3 jours, 09:30 - 12:30</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-bullhorn me-2"></i>Annonces récentes</h5>
                            <div class="announcement">
                                <h6 class="mb-1">Nouvelle ressource disponible</h6>
                                <p class="mb-1">Un nouveau cours en ligne sur le machine learning est maintenant disponible.</p>
                                <small class="text-muted">Il y a 3 jours</small>
                            </div>
                            <hr>
                            <div class="announcement">
                                <h6 class="mb-1">Rappel : Inscription aux examens</h6>
                                <p class="mb-1">N'oubliez pas de vous inscrire aux examens avant la date limite.</p>
                                <small class="text-muted">Il y a 1 semaine</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <!-- nonlogged-in users -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="display-4 mb-4 fade-in">Bienvenue sur Campus Connect</h1>
                    <p class="lead mb-5 fade-in">Découvrez une expérience utilisateur améliorée et des fonctionnalités innovantes pour transformer votre façon de travailler.</p>
                    <a href="register.php" class="btn btn-primary btn-lg me-3 fade-in">S'inscrire</a>
                    <a href="login.php" class="btn btn-outline-primary btn-lg fade-in">Se connecter</a>
                </div>
                <div class="col-md-6">
                    <img src="assets/images/hero.png" alt="Campus Connect" class="img-fluid rounded shadow-lg fade-in">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card shadow-sm h-100 fade-in">
                        <div class="card-body text-center">
                            <i class="fas fa-graduation-cap fa-3x mb-3 text-primary"></i>
                            <h3 class="card-title">Apprentissage personnalisé</h3>
                            <p class="card-text">Accédez à des cours adaptés à votre niveau et à vos objectifs d'apprentissage.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm h-100 fade-in">
                        <div class="card-body text-center">
                            <i class="fas fa-users fa-3x mb-3 text-primary"></i>
                            <h3 class="card-title">Communauté active</h3>
                            <p class="card-text">Rejoignez une communauté d'étudiants et d'enseignants passionnés et collaboratifs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm h-100 fade-in">
                        <div class="card-body text-center">
                            <i class="fas fa-chart-line fa-3x mb-3 text-primary"></i>
                            <h3 class="card-title">Suivi des progrès</h3>
                            <p class="card-text">Visualisez vos progrès et recevez des recommandations personnalisées pour vous améliorer.</p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <?php include 'includes/footer.php'; ?>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/user/script.js"></script>
</body>
</html>

