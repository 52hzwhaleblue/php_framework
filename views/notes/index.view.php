<!DOCTYPE html>
<html lang="en">
<?php require base_path('views/partials/head.php'); ?>

<body>
    <?php require base_path('views/partials/header.php'); ?>
    <?php require base_path('views/partials/nav.php'); ?>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <ul>
                <?php foreach ($notes as $k => $v) { ?>
                    <li>
                        <a href="note?id=<?= $v['id'] ?>" class="text-blue-500 hover:underline text-[20px]"> <?= $v['name'] ?> </a>
                    </li>
                <?php } ?>
            </ul>

            <p class="mt-5">
                <a href="/notes/create" class="text-blue-800 underline"> Create note </a>
            </p>
        </div>
    </main>
</body>

</html>