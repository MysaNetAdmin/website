<?php
require 'inc/header.php';
if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password']))
{
    require_once 'inc/db.php';
    require_once 'inc/functions.php';
    $req = $pdo->prepare('SELECT * FROM users WHERE username = :username');
    $req->execute(['username' => $_POST['username']]);
    $user = $req->fetch();
    if (password_verify($_POST['password'], $user->password))
    {
        $_SESSION['auth'] = $user;
        header('Location: ../index.php');
        exit();
    }
    else
    {
        $_SESSION['flash']['danger'] = "Identifiant ou mot de passe incorrect";
        header('Location: login.php');
        exit();
    }
    debug($_SESSION['auth']);
}
?>

    <h1>Se connecter</h1>
        <form action="" method="POST">

            <div class="form-group">
                <label for="">Identifiant</label>
                <input type="text" name="username" class="form-control" required/>
            </div>

            <div class="form-group">
                <label for="">Mot de Passe</label>
                <input type="password" name="password" class="form-control" required/>
            </div>

            <button type="submit" class="btn btn-primary">Connexion</button>

        </form>

<?php if(isset($_SESSION['flash'])): ?>
    <?php foreach($_SESSION['flash'] as $type => $message): ?>
        <div class="alert alert-<?= $type; ?>">
            <?= $message; ?>
        </div>
    <?php endforeach; ?>
    <?php unset($_SESSION['flash']); ?>
<?php endif; ?>

<?php require 'inc/footer.php'; ?>