<?php require(BASE_PATH . 'laracasts/views/partials/head.php') ?>
<?php require(BASE_PATH . 'laracasts/views/partials/nav.php') ?>
<?php require(BASE_PATH . 'laracasts/views/partials/banner.php') ?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <p>
      <?php foreach ($notes as $note) : ?>
        <li>
          <a href="note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
            <?= $note['body'] ?>
          </a>
        </li>
      <?php endforeach; ?>
    </p>
  </div>
</main>


<?php require(BASE_PATH . 'laracasts/views/partials/footer.php') ?>
