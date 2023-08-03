<?php 

require __DIR__ . '/vendor/autoload.php'; 

$client = new GoogleSearch("fe0618e6bcaf537c7804995735c80a2c1d1cd57a7ec65295927a9ca1198cffcf"); 

$query = [ 
  "q" => "2. Bundesliga",
  "location" => "austin, texas, united states", 
];

$response = $client->get_json($query);


//...código previo para consultar API 

// $sports_results = $response['sports_results'];
$sports_results = $response->sports_results;

print_r($sports_results);


// foreach ($sports_results->games as $game) {

//     foreach ($game->teams as $team) {
  
//       if (isset($team->name)) {
      
//         foreach ($team->name as $names) {
//           echo $player->name . PHP_EOL;
//         }
      
//       }
  
//     }
  
// }



// print_r($response);


?>

