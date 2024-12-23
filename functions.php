<?php

declare(strict_types=1);

function render_template(string $template, array $data = [])
{
  extract($data); // Convierte las claves de un array asociativo en variables
  require "templates/$template.php";
}
