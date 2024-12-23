<?php

declare(strict_types=1);

class Player
{
  public function __construct(
    readonly public string $player_name,
    readonly public string $position,
    readonly public int $age,
    readonly public string $img_url
  ) {}

  public static function fetch_and_create_players(string $api_url): array
  {
    $result = file_get_contents($api_url);
    $data = json_decode($result, true);

    if ($data === null) {
      throw new Exception("Failed to decode JSON from API");
    }

    $players = [];
    foreach ($data as $player_data) {
      // Verificar que los datos no sean nulos y tengan los campos esperados
      if (isset($player_data['playerName'], $player_data['position'], $player_data['age'])) {
        $players[] = new self(
          $player_data['playerName'],
          $player_data['position'],
          (int)$player_data['age'],
          $player_data['imgUrl'] = match ($player_data['playerName']) {
            'Jayson Tatum'       => 'https://cdn.nba.com/headshots/nba/latest/1040x760/1628369.png',
            'Jaylen Brown'       => 'https://cdn.nba.com/headshots/nba/latest/1040x760/1627759.png',
            'Baylor Scheierman'  => 'https://a.espncdn.com/combiner/i?img=/i/headshots/nba/players/full/4593841.png&w=350&h=254',
            'Derrick White'      => 'https://a.espncdn.com/combiner/i?img=/i/headshots/nba/players/full/3078576.png&w=350&h=254',
            'Al Horford'         => 'https://cdn.nba.com/headshots/nba/latest/1040x760/201143.png',
            'Drew Peterson'      => 'https://a.espncdn.com/combiner/i?img=/i/headshots/nba/players/full/4397689.png&w=350&h=254',
            'JD Davison'         => 'https://a.espncdn.com/combiner/i?img=/i/headshots/nba/players/full/4576085.png&w=350&h=254',
            'Jaden Springer'     => 'https://a.espncdn.com/combiner/i?img=/i/headshots/nba/players/full/4432164.png&w=350&h=254',
            'Jordan Walsh'       => 'https://a.espncdn.com/combiner/i?img=/i/headshots/nba/players/full/4683689.png&w=350&h=254',
            'Jrue Holiday'       => 'https://a.espncdn.com/combiner/i?img=/i/headshots/nba/players/full/3995.png&w=350&h=254',
            'Kristaps Porziņģis' => 'https://a.espncdn.com/combiner/i?img=/i/headshots/nba/players/full/3102531.png&w=350&h=254',
            'Luke Kornet'        => 'https://a.espncdn.com/combiner/i?img=/i/headshots/nba/players/full/3064560.png&w=350&h=254',
            'Neemias Queta'      => 'https://a.espncdn.com/combiner/i?img=/i/headshots/nba/players/full/4397424.png&w=350&h=254',
            'Payton Pritchard'   => 'https://a.espncdn.com/combiner/i?img=/i/headshots/nba/players/full/4066354.png&w=350&h=254',
            'Sam Hauser'         => 'https://a.espncdn.com/combiner/i?img=/i/headshots/nba/players/full/4065804.png&w=350&h=254',
            'Xavier Tillman Sr.' => 'https://a.espncdn.com/combiner/i?img=/i/headshots/nba/players/full/4277964.png&w=350&h=254',



            default             => 'https://a.espncdn.com/combiner/i?img=/i/teamlogos/nba/500/bos.png&h=200&w=200',
          }
        );
      }
    }

    return $players;
  }

  public function get_data(): array
  {
    return get_object_vars($this);
  }
}
