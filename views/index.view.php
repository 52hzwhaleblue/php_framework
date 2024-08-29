<!DOCTYPE html>
<html lang="en">
<?php require base_path('views/partials/head.php'); ?>

<body>
    <?php require base_path('views/partials/header.php'); ?>
    <?php require base_path('views/partials/nav.php'); ?>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <p> Hello <?= $_SESSION['user']['email'] ?? 'GUEST' ?> welcome to home page</p>
        </div>
    </main>
</body>

</html>