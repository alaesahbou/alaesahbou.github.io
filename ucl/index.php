<?php
// Define the team names and countries for each chapeau
$chapeau1 = array(
    array('Real Madrid', 'Spain'),
    array('Frankfurt', 'Germany'),
    array('Man City', 'England'),
    array('Milan', 'Italy'),
    array('Bayern', 'Germany'),
    array('Paris', 'France'),
    array('Porto', 'Portugal'),
    array('Ajax', 'Netherlands')
);

$chapeau2 = array(
    array('Liverpool', 'England'),
    array('Chelsea', 'England'),
    array('Barcelona', 'Spain'),
    array('Juventus', 'Italy'),
    array('Atlético', 'Spain'),
    array('Sevilla', 'Spain'),
    array('Leipzig', 'Germany'),
    array('Tottenham', 'England')
);

$chapeau3 = array(
    array('Dortmund', 'Germany'),
    array('Salzburg', 'Austria'),
    array('Shakhtar Donetsk', 'Ukraine'),
    array('Inter', 'Italy'),
    array('Napoli', 'Italy'),
    array('Benfica', 'Portugal'),
    array('Sporting CP', 'Portugal'),
    array('Leverkusen', 'Germany')
);

$chapeau4 = array(
    array('Rangers', 'Scotland'),
    array('Dinamo Zagreb', 'Croatia'),
    array('Marseille', 'France'),
    array('Copenhagen', 'Denmark'),
    array('Club Brugge', 'Belgium'),
    array('Celtic', 'Scotland'),
    array('Plzeň', 'Czech Republic'),
    array('M. Haifa', 'Israel')
);

// Perform the draw
$groups = array();
foreach ($chapeau1 as $team1) {
    foreach ($chapeau2 as $team2) {
        if ($team1[1] != $team2[1]) {
            foreach ($chapeau3 as $team3) {
                if ($team1[1] != $team3[1] && $team2[1] != $team3[1]) {
                    foreach ($chapeau4 as $team4) {
                        if ($team1[1] != $team4[1] && $team2[1] != $team4[1] && $team3[1] != $team4[1]) {
                            $groups[] = array($team1[0], $team2[0], $team3[0], $team4[0]);
                        }
                    }
                }
            }
        }
    }
}

// Display the results
echo '<h1>Champions League Draw</h1>';
foreach ($groups as $key => $group) {
    echo '<h2>Group '.($key+1).'</h2>';
    foreach ($group as $team) {
        echo '<p>'.$team.'</p>';
    }
}
?>
