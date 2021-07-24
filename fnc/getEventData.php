<?php
include '../functions.php';

$json = array(
'timerStarted' => intval(query('currentValue','currentData','currentData','timerStarted')),
'timerStopped' => intval(query('currentValue','currentData','currentData','timerStopped')),
'timerStatus' => intval(query('currentValue','currentData','currentData','timerStatus')),
'runnerRed' => query('currentValue','currentData','currentData','runnerRed'), 
'runnerRedTwitch' => query('currentValue','currentData','currentData','runnerRedTwitch'), 
'runnerRedDisplayTwitch' => query('currentValue','currentData','currentData','runnerRedDisplayTwitch'),
'runnerBlue' => query('currentValue','currentData','currentData','runnerBlue'), 
'runnerBlueTwitch' => query('currentValue','currentData','currentData','runnerBlueTwitch'), 
'runnerBlueDisplayTwitch' => query('currentValue','currentData','currentData','runnerBlueDisplayTwitch'),
'runnerGreen' => query('currentValue','currentData','currentData','runnerGreen'), 
'runnerGreenTwitch' => query('currentValue','currentData','currentData','runnerGreenTwitch'), 
'runnerGreenDisplayTwitch' => query('currentValue','currentData','currentData','runnerGreenDisplayTwitch'),
'runnerYellow' => query('currentValue','currentData','currentData','runnerYellow'), 
'runnerYellowTwitch' => query('currentValue','currentData','currentData','runnerYellowTwitch'), 
'runnerYellowDisplayTwitch' => query('currentValue','currentData','currentData','runnerYellowDisplayTwitch'), 
'teamPlace1' => query('currentValue','currentData','currentData','teamPlace1'), 
'teamPlace2' => query('currentValue','currentData','currentData','teamPlace2'), 
'teamPlace3' => query('currentValue','currentData','currentData','teamPlace3'), 
'teamPlace4' => query('currentValue','currentData','currentData','teamPlace4'),
'lastUpdate' => qcd('lastUpdate'),
'usingAudio' => qcd('usingAudio'),
'timesRed' => unserialize(qcd('timesRed')),
'timesBlue' => unserialize(qcd('timesBlue')),
'timesGreen' => unserialize(qcd('timesGreen')),
'timesYellow' => unserialize(qcd('timesYellow')),
'manualOverride' => boolval(qcd('manualOverride')),
'factOverride' => qcd('factOverride'),
'catOverride' => qcd('catOverride')
);

echo json_encode($json);

?>