<?php



?>

<style>
  /* Modal styles */
  .modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1000;
    justify-content: center;
  }

  hr {
    border: 0;
    height: 1px;
    background: rgb(27, 87, 0);
    margin: 10px 0;
  }

  .modal-content {
    background-color: #fff;
    margin: 10% auto;
    padding: 20px;
    width: 50%;
    height: fit-content;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);

    background-color: #008348;
  }

  .modal-header {
    font-size: 1.2em;
    font-weight: bold;
    color: #ffffff;
  }

  .modal-body {
    font-size: .8rem;
  }

  .modal-footer {
    margin-top: 20px;
    text-align: right;
  }

  strong {
    color: rgb(255, 255, 255);
  }

  p {
    color: rgb(212, 212, 212);
  }

  .close-btn {
    cursor: pointer;
    background-color: rgb(0, 0, 0);
    color: white;
    border: none;
    padding: 6px 12px;
    border-radius: 5px;
    font-size: .7rem;
  }
</style>



<div id="playerModal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <span id="modalPlayerName"></span> (<span id="modalPlayerPosition"></span>)
    </div>
    <hr>
    <div class="modal-body">
      <p><strong>Games Played:</strong> <span id="modalGames"></span></p>
      <p><strong>Minutes Played:</strong> <span id="modalMinutes"></span></p>
      <p><strong>PER:</strong> <span id="modalPer"></span></p>
      <p><strong>True Shooting:</strong> <span id="modalTsPercent"></span></p>
      <p><strong>Usage:</strong> <span id="modalUsage"></span></p>
      <p><strong>Win Shares:</strong> <span id="modalWinShares"></span></p>
      <p><strong>Box +/-:</strong> <span id="modalBox"></span></p>
      <p><strong>VORP:</strong> <span id="modalVorp"></span></p>
    </div>
    <div class="modal-footer">
      <button class="close-btn" id="closeModal">Close</button>
    </div>
  </div>
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

    infoButtons.forEach((button) => {
      button.addEventListener("click", () => {
        // Extraer datos desde atributos data-*
        const playerName = button.getAttribute("data-player-name");
        const playerPosition = button.getAttribute("data-player-position");
        const games = button.getAttribute("data-games");
        const minutes = button.getAttribute("data-minutes-played");
        const per = button.getAttribute("data-per");
        const tsPercent = button.getAttribute("data-ts-percent");
        const usagePercent = button.getAttribute("data-usage-percent");
        const winShares = button.getAttribute("data-win-shares");
        const box = button.getAttribute("data-box");
        const vorp = button.getAttribute("data-vorp");

        // Actualizar contenido del modal
        modalPlayerName.textContent = playerName;
        modalPlayerPosition.textContent = playerPosition;
        modalGames.textContent = games;
        modalMinutes.textContent = minutes;
        modalPer.textContent = per;
        modalTsPercent.textContent = tsPercent;
        modalUsage.textContent = usagePercent;
        modalWinShares.textContent = winShares;
        modalBox.textContent = box;
        modalVorp.textContent = vorp;

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