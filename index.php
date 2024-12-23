<?php

declare(strict_types=1);

require_once 'consts.php';
require_once 'functions.php';
require_once 'classes/Player.php';

$players = Player::fetch_and_create_players(API_URL);
?>

<?php require 'templates/head.php'; ?>

<main>
  <h1>Celtics Players for 2025</h1>
  <hr>
  <div class="cards-container">
    <?php foreach ($players as $player)
      render_template('card', $player->get_data());
    ?>
  </div>
  <?= render_template('styles'); ?>
</main>