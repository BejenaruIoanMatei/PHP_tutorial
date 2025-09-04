<?php require(BASE_PATH . 'laracasts/views/partials/head.php') ?>
<?php require(BASE_PATH . 'laracasts/views/partials/nav.php') ?>
<?php require(BASE_PATH . 'laracasts/views/partials/banner.php') ?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <p class="mb-6">
        <a href="notes" class="text-blue-500 underline">Go back...</a>
    </p>
    <p>
        <?= htmlspecialchars($note['body']) ?>
    </p>
  </div>
</main>


<?php require(BASE_PATH . 'laracasts/views/partials/footer.php') ?>
