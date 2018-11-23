<header>
    <h1 style="text-align: center">Créer un compte</h1>
</header>
<?php if(!empty($_SESSION['error'])): ?>
<p><?php echo $_SESSION['error'] ?></p>
<?php unset($_SESSION['error']) ?>
<?php endif; ?>