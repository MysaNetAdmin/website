<?php
require 'inc/header.php';
if(!empty($_POST))
{
    $errors = array();
    require_once 'inc/db.php';
    require_once 'inc/functions.php';

    if(empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9]+$/', $_POST['username']))
    {
        $errors['username'] = "Le pseudo n'est pas valide !";
    }
    else
    {
        $req = $pdo -> prepare('SELECT id FROM users WHERE username = ?');
        $req -> execute([$_POST['username']]);
        $user = $req->fetch();
        if ($user)
        {
            $errors['username'] = "Ce pseudo est déjà pris !";
        }
    }

    if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm'])
    {
        $errors['password'] = "Le mot de passe n'est pas valide !";
    }

    if(empty($errors))
    {
        $req = $pdo->prepare("INSERT INTO users SET username = ?, password = ?");
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $token = str_random(60);
        $req->execute([$_POST['username'], $password]);
        $user_id = $pdo->lastInsertId();
        $user = $_POST['username'];
       $_SESSION['flash']['success'] = "Welcome !";
        header('Location: login.php');
        exit();
    }
}
?>

<h1>S'inscire</h1>

<?php if (!empty($errors)): ?>
<div class="alert alert-danger">
    <p>Vous n'avez pas correctement rempli le formulaire d'inscription</p>
    <ul>
        <?php foreach($errors as $error): ?>
            <li><?= $error; ?></li>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>

<form action="" method="POST">

    <div class="form-group">
        <label for="">Choisissez un pseudo</label>
        <input type="text" name="username" class="form-control"/>
    </div>

    <div class="form-group">
        <label for="">Choisissze un mot de Passe</label>
        <input type="password" name="password" class="form-control"/>
    </div>

    <div class="form-group">
        <label for="">Confirmez votre mot de passe</label>
        <input type="password" name="password_confirm" class="form-control"/>
    </div>

    <button type="submit" class="btn btn-primary">S'inscrire</button>

</form>

<?php require 'inc/footer.php'; ?>