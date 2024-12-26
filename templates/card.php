<?php
require_once 'functions.php';
require_once 'templates/player-stats-modal.php';
?>


<div class="card">
  <img src="<?= $img_url; ?>" alt="<?= htmlspecialchars($player_name, ENT_QUOTES, 'UTF-8'); ?>" />
  <h2 class="card-title"><?= htmlspecialchars($player_name, ENT_QUOTES, 'UTF-8'); ?></h2>
  <p class="card-stats">Position: <?= htmlspecialchars($position, ENT_QUOTES, 'UTF-8'); ?></p>
  <p class="card-stats">Age: <?= $age; ?></p>
  <button
    class="info-btn"
    data-player-name="<?= htmlspecialchars($player_name, ENT_QUOTES, 'UTF-8'); ?>"
    data-player-position="<?= htmlspecialchars($position, ENT_QUOTES, 'UTF-8'); ?>"
    data-player-age="<?= $age; ?>"
    data-player-games="<?= $games; ?>"
    data-player-minutes-played="<?= $minutes_played; ?>"
    data-player-per="<?= $per; ?>"
    data-player-ts-percent="<?= $ts_percent; ?>"
    data-player-usage-percent="<?= $usage_percent; ?>"
    data-player-win-shares="<?= $win_shares; ?>"
    data-player-box="<?= $box; ?>"
    data-player-vorp="<?= $vorp; ?>">More info
  </button>
</div>


<script>
  document.addEventListener("DOMContentLoaded", () => {
    const infoButtons = document.querySelectorAll(".info-btn");
    const modal = document.getElementById("playerModal");
    const closeModalBtn = document.getElementById("closeModal");

    // Elementos del modal
    const modalPlayerName = document.getElementById("modalPlayerName");
    const modalPlayerPosition = document.getElementById("modalPlayerPosition");
    const modalGames = document.getElementById("modalGames");
    const modalMinutes = document.getElementById("modalMinutes");
    const modalPer = document.getElementById("modalPer");
    const modalTsPercent = document.getElementById("modalTsPercent");
    const modalUsage = document.getElementById("modalUsage");
    const modalWinShares = document.getElementById("modalWinShares");
    const modalBox = document.getElementById("modalBox");
    const modalVorp = document.getElementById("modalVorp");

    // Asignar eventos a cada botón
    infoButtons.forEach((button) => {
      button.addEventListener("click", () => {
        // Extraer datos del jugador desde los atributos data-*
        const playerName = button.getAttribute("data-player-name");
        const playerPosition = button.getAttribute("data-player-position");
        const playerAge = button.getAttribute("data-player-age");
        const playerGames = button.getAttribute("data-player-games");
        const playerMinutes = button.getAttribute("data-player-minutes-played");
        const playerPer = button.getAttribute("data-player-per");
        const playerTsPercent = button.getAttribute("data-player-ts-percent");
        const playerUsage = button.getAttribute("data-player-usage-percent");
        const playerWinShares = button.getAttribute("data-player-win-shares");
        const playerBox = button.getAttribute("data-player-box");
        const playerVorp = button.getAttribute("data-player-vorp");

        // Actualizar contenido del modal
        modalPlayerName.textContent = playerName;
        modalPlayerPosition.textContent = playerPosition;

        // Datos adicionales (pueden ser calculados o cargados dinámicamente)
        modalGames.textContent = playerGames;
        modalMinutes.textContent = playerMinutes;
        modalPer.textContent = playerPer;
        modalTsPercent.textContent = (Math.floor(playerTsPercent * 100)).toFixed(0) + "%";
        modalUsage.textContent = playerUsage + "%";
        modalWinShares.textContent = playerWinShares;
        modalBox.textContent = playerBox;
        modalVorp.textContent = playerVorp;

        // Mostrar el modal
        modal.style.display = "flex";
      });
    });

    // Cerrar el modal
    closeModalBtn.addEventListener("click", () => {
      modal.style.display = "none";
    });

    window.addEventListener("click", (event) => {
      if (event.target === modal) {
        modal.style.display = "none";
      }
    });
  });
</script>