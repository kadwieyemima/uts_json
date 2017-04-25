<?php
  $json_string1 = file_get_contents("http://api.wunderground.com/api/f3578e3acf3429db/conditions/q/IA/Medan.json");
  $json_string2 = file_get_contents("http://api.wunderground.com/api/f3578e3acf3429db/forecast/q/IA/Medan.json");
  $json_string3 = file_get_contents("http://api.wunderground.com/api/0215dd2f84808f33/planner_07010731/q/IA/Medan.json");
  
  $parsed_json1 = json_decode($json_string1);
  $parsed_json2 = json_decode($json_string2);
  $parsed_json3 = json_decode($json_string3);
  $location = $parsed_json1->{'current_observation'}->{'display_location'}->{'full'};
  $date = $parsed_json1->{'current_observation'}->{'local_time_rfc822'};
  $suhu = $parsed_json1->{'current_observation'}->{'temp_c'};
  
  $icon = $parsed_json2->{'forecast'}->{'txt_forecast'}->forecastday[0]->{'icon'};
  
  $min = $parsed_json3->{'trip'}->{'temp_high'}->{'min'}->{'C'};
  $max = $parsed_json3->{'trip'}->{'temp_high'}->{'max'}->{'C'};
  $avg = $parsed_json3->{'trip'}->{'temp_high'}->{'avg'}->{'C'};
  
  echo"<img src='http://icons.wxug.com/i/c/k/".$icon.".gif'> <br/>";
  
  
  echo "Suhu di ${location} adalah: ${suhu}<sup> o </sup>C<br>${date}";
  echo "<br>";
  echo "<br>";
  echo "Minimal : ${min}<sup> o </sup>C";
  echo "<br>";
  echo "Maximal : ${max}<sup> o </sup>C";
  echo "<br>";
  echo "Rata-rata : ${avg}<sup> o </sup>C";
?>