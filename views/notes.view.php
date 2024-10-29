<?php require "partials/head.php"; ?>
  <?php require "partials/nav.php"; ?>
  <?php require "partials/banner.php"; ?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
         <p>Hello, welcome to notes page</p>
        <?php foreach ($notes as $note) : ?>
            <a href="/note?id=<?= $note['id'] ?>" class="hover:underline text-blue-500">
                <li><?= $note['body'] ;?></li>
            </a> 
        <?php endforeach; ?>
    </div>
  </main>
  
<?php require "partials/foot.php"; ?>