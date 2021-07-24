<?php
	include 'functions.php';
?>

<html>
	<head>
		<style>
			.footer-wrapper {
				bottom: 0px !important;
				top: auto !important;
			}
		</style>
		<link rel="stylesheet" href="stylesheet.css">
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://geraintluff.github.io/sha256/index.js"></script>
		<script src="fnc/jquery.tabledit.min.js"></script>
		<link rel="shortcut icon" href="img/logo.png">
	</head>
	<body>
		<div class="control">
			<label class="white" for="password">Password:</label>
			<input id="controlPassword" type="password" name="password"/>
			<div style="display:none;" id="masterWrapper" class="control-wrapper">
				<div class="control-section">
					<h1 style="color:white">Timer Controls</h1>
					<span style="color:yellow;" id="timerControl">00:00:00</span><br>
					<button style="background-color:green;" onclick="doTimer('start')" id="btnStartTimer">Start Timer</button>
					<button style="background-color:red;" onclick="doTimer('stop')" id="btnStopTimer" disabled>Stop Timer</button>
					<button style="background-color:orange;"  onclick="doTimer('resume')" id="btnResumeTimer" disabled>Resume Timer</button>
					<button style="background-color:orange;"  onclick="doTimer('reset')" id="btnResetTimer">Reset Timer</button>
				</div>
				<div class="control-section">
					<h1 style="color:white">Runner Controls</h1>
					<div style="display:grid">
						<div style="border: 2px solid red;grid-column-start: 1;grid-row-start:1;text-align:center;padding:5px;">
							<h3 style="color:red;">Red Team</h3>
							<button style="background-color:orange;" onclick="prevRunner('Red')"><</button>
							<span class="white" id="runnerSelectorRed"></span>
							<button style="background-color:orange;" onclick="nextRunner('Red')">></button>
							<br>
							<label class="white" for="runnerRed">Runner Name:</label><br>
							<input id="runnerRed" type="text" name="runnerRed" value="<?= qcd('runnerRed') ?>"/>
							<br>
							<label class="white" for="runnerRedDisplayTwitch">Display Twitch Channel:</label><br>
							<input id="runnerRedDisplayTwitch" type="text" name="runnerRedDisplayTwitch" value="<?= qcd('runnerRedDisplayTwitch') ?>"/>
							<br>
							<label class="white" for="runnerRedTwitch">Actual Twitch Channel:</label><br>
							<span class="white" style="font-size:12;"><i>(Channel they're streaming to)</i></span><br>
							<input id="runnerRedTwitch" type="text" name="runnerRedTwitch" value="<?= qcd('runnerRedTwitch') ?>"/>
							<br><br>
							<button style="background-color:green;" onclick="submitRunner('Red')">Submit</button>
							<button id="useAudioBtnRed" style="background-color:green;" onclick="useAudio('Red')">Use Audio</button>
							<button style="background-color:red;" onclick="doManualOverride()">Force Transition</button>
						</div>
						<div style="border: 2px solid blue;grid-column-start: 2;grid-row-start:1;text-align:center;padding:5px;">
							<h3 style="color:blue;">Blue Team</h3>
							<button style="background-color:orange;" onclick="prevRunner('Blue')"><</button>
							<span class="white" id="runnerSelectorBlue"></span>
							<button style="background-color:orange;" onclick="nextRunner('Blue')">></button>
							<br>
							<label class="white" for="runnerBlue">Runner Name:</label><br>
							<input id="runnerBlue" type="text" name="runnerBlue" value="<?= qcd('runnerBlue') ?>"/>
							<br>
							<label class="white" for="runnerBlueDisplayTwitch">Display Twitch Channel:</label><br>
							<input id="runnerBlueDisplayTwitch" type="text" name="runnerBlueDisplayTwitch" value="<?= qcd('runnerBlueDisplayTwitch') ?>"/>
							<br>
							<label class="white" for="runnerBlueTwitch">Actual Twitch Channel:</label><br>
							<span class="white" style="font-size:12;"><i>(Channel they're streaming to)</i></span><br>
							<input id="runnerBlueTwitch" type="text" name="runnerBlueTwitch" value="<?= qcd('runnerBlueTwitch') ?>"/>
							<br><br>
							<button style="background-color:green;" onclick="submitRunner('Blue')">Submit</button>
							<button id="useAudioBtnBlue" style="background-color:green;" onclick="useAudio('Blue')">Use Audio</button>
							<button style="background-color:red;" onclick="doManualOverride()">Force Transition</button>
						</div>
						<div style="border: 2px solid green;grid-column-start: 1;grid-row-start:2;text-align:center;padding:5px;">
							<h3 style="color:green;">Green Team</h3>
							<button style="background-color:orange;" onclick="prevRunner('Green')"><</button>
							<span class="white" id="runnerSelectorGreen"></span>
							<button style="background-color:orange;" onclick="nextRunner('Green')">></button>
							<br>
							<label class="white" for="runnerGreen">Runner Name:</label><br>
							<input id="runnerGreen" type="text" name="runnerGreen" value="<?= qcd('runnerGreen') ?>"/>
							<br>
							<label class="white" for="runnerGreenDisplayTwitch">Display Twitch Channel:</label><br>
							<input id="runnerGreenDisplayTwitch" type="text" name="runnerGreenDisplayTwitch" value="<?= qcd('runnerGreenDisplayTwitch') ?>"/>
							<br>
							<label class="white" for="runnerGreenTwitch">Actual Twitch Channel:</label><br>
							<span class="white" style="font-size:12;"><i>(Channel they're streaming to)</i></span><br>
							<input id="runnerGreenTwitch" type="text" name="runnerGreenTwitch" value="<?= qcd('runnerGreenTwitch') ?>"/>
							<br><br>
							<button style="background-color:green;" onclick="submitRunner('Green')">Submit</button>
							<button id="useAudioBtnGreen" style="background-color:green;" onclick="useAudio('Green')">Use Audio</button>
							<button style="background-color:red;" onclick="doManualOverride()">Force Transition</button>
						</div>
						<div style="border: 2px solid yellow;grid-column-start: 2;grid-row-start:2;text-align:center;padding:5px;">
							<h3 style="color:yellow;">Yellow Team</h3>
							<button style="background-color:orange;" onclick="prevRunner('Yellow')"><</button>
							<span class="white" id="runnerSelectorYellow"></span>
							<button style="background-color:orange;" onclick="nextRunner('Yellow')">></button>
							<br>
							<label class="white" for="runnerYellow">Runner Name:</label><br>
							<input id="runnerYellow" type="text" name="runnerYellow" value="<?= qcd('runnerYellow') ?>"/>
							<br>
							<label class="white" for="runnerYellowDisplayTwitch">Display Twitch Channel:</label><br>
							<input id="runnerYellowDisplayTwitch" type="text" name="runnerYellowDisplayTwitch" value="<?= qcd('runnerYellowDisplayTwitch') ?>"/>
							<br>
							<label class="white" for="runnerYellowTwitch">Actual Twitch Channel:</label><br>
							<span class="white" style="font-size:12;"><i>(Channel they're streaming to)</i></span><br>
							<input id="runnerYellowTwitch" type="text" name="runnerYellowTwitch" value="<?= qcd('runnerYellowTwitch') ?>"/>
							<br><br>
							<button style="background-color:green;" onclick="submitRunner('Yellow')">Submit</button>
							<button id="useAudioBtnYellow" style="background-color:green;" onclick="useAudio('Yellow')">Use Audio</button>
							<button style="background-color:red;" onclick="doManualOverride()">Force Transition</button>
						</div>
					</div>
				</div>
				<div class="control-section" style="width:50%;">
					<h1 style="color:white">Team Places</h1>
					<p class="white">1st Place - <select id="teamPlace1">
						<option value="Red">Red</option>
						<option value="Blue">Blue</option>
						<option value="Green">Green</option>
						<option value="Yellow">Yellow</option>
					</select> Team</p>
					<p class="white">2nd Place - <select id="teamPlace2">
						<option value="Red">Red</option>
						<option value="Blue">Blue</option>
						<option value="Green">Green</option>
						<option value="Yellow">Yellow</option>
					</select> Team</p>
					<p class="white">3rd Place - <select id="teamPlace3">
						<option value="Red">Red</option>
						<option value="Blue">Blue</option>
						<option value="Green">Green</option>
						<option value="Yellow">Yellow</option>
					</select> Team</p>
					<p class="white">4th Place - <select id="teamPlace4">
						<option value="Red">Red</option>
						<option value="Blue">Blue</option>
						<option value="Green">Green</option>
						<option value="Yellow">Yellow</option>
					</select> Team</p>
					<br>
					<button style="background-color:green;" onclick="setPlaces()">Submit</button>
					<br>
					<br>
					<h1 style="color:white">Team Times</h1>
					<div style="display:grid">
						<div style="border: 2px solid red;grid-column-start: 1;grid-row-start:1;text-align:center;padding:5px;">
							<h3 style="color:red;">Red Team</h3>
							<label class="white" for="timeRedCE">CE:</label><input id="timeRedCE" type="text" name="timeRedCE" value="<?= unserialize(qcd('timesRed'))[0] ?>"/><br>
							<label class="white" for="timeRedH2">H2:</label><input id="timeRedH2" type="text" name="timeRedH2" value="<?= unserialize(qcd('timesRed'))[1] ?>"/><br>
							<label class="white" for="timeRedH3">H3:</label><input id="timeRedH3" type="text" name="timeRedH3" value="<?= unserialize(qcd('timesRed'))[2] ?>"/><br>
							<label class="white" for="timeRedODST">ODST:</label><input id="timeRedODST" type="text" name="timeRedODST" value="<?= unserialize(qcd('timesRed'))[3] ?>"/><br>
							<label class="white" for="timeRedReach">Reach:</label><input id="timeRedReach" type="text" name="timeRedReach" value="<?= unserialize(qcd('timesRed'))[4] ?>"/><br>
							<label class="white" for="timeRedH4">H4:</label><input id="timeRedH4" type="text" name="timeRedH4" value="<?= unserialize(qcd('timesRed'))[5] ?>"/><br>
							<label class="white" for="timeRedH5">H5:</label><input id="timeRedH5" type="text" name="timeRedH5" value="<?= unserialize(qcd('timesRed'))[6] ?>"/><br>
							<button style="background-color:green;" onclick="submitTimes('Red')">Submit</button>
						</div>
						<div style="border: 2px solid blue;grid-column-start: 2;grid-row-start:1;text-align:center;padding:5px;">
							<h3 style="color:blue;">Blue Team</h3>
							<label class="white" for="timeBlueCE">CE:</label><input id="timeBlueCE" type="text" name="timeBlueCE" value="<?= unserialize(qcd('timesBlue'))[0] ?>"/><br>
							<label class="white" for="timeBlueH2">H2:</label><input id="timeBlueH2" type="text" name="timeBlueH2" value="<?= unserialize(qcd('timesBlue'))[1] ?>"/><br>
							<label class="white" for="timeBlueH3">H3:</label><input id="timeBlueH3" type="text" name="timeBlueH3" value="<?= unserialize(qcd('timesBlue'))[2] ?>"/><br>
							<label class="white" for="timeBlueODST">ODST:</label><input id="timeBlueODST" type="text" name="timeBlueODST" value="<?= unserialize(qcd('timesBlue'))[3] ?>"/><br>
							<label class="white" for="timeBlueReach">Reach:</label><input id="timeBlueReach" type="text" name="timeBlueReach" value="<?= unserialize(qcd('timesBlue'))[4] ?>"/><br>
							<label class="white" for="timeBlueH4">H4:</label><input id="timeBlueH4" type="text" name="timeBlueH4" value="<?= unserialize(qcd('timesBlue'))[5] ?>"/><br>
							<label class="white" for="timeBlueH5">H5:</label><input id="timeBlueH5" type="text" name="timeBlueH5" value="<?= unserialize(qcd('timesBlue'))[6] ?>"/><br>
							<button style="background-color:green;" onclick="submitTimes('Blue')">Submit</button>
						</div>
						<div style="border: 2px solid green;grid-column-start: 1;grid-row-start:2;text-align:center;padding:5px;">
							<h3 style="color:green;">Green Team</h3>
							<label class="white" for="timeGreenCE">CE:</label><input id="timeGreenCE" type="text" name="timeGreenCE" value="<?= unserialize(qcd('timesGreen'))[0] ?>"/><br>
							<label class="white" for="timeGreenH2">H2:</label><input id="timeGreenH2" type="text" name="timeGreenH2" value="<?= unserialize(qcd('timesGreen'))[1] ?>"/><br>
							<label class="white" for="timeGreenH3">H3:</label><input id="timeGreenH3" type="text" name="timeGreenH3" value="<?= unserialize(qcd('timesGreen'))[2] ?>"/><br>
							<label class="white" for="timeGreenODST">ODST:</label><input id="timeGreenODST" type="text" name="timeGreenODST" value="<?= unserialize(qcd('timesGreen'))[3] ?>"/><br>
							<label class="white" for="timeGreenReach">Reach:</label><input id="timeGreenReach" type="text" name="timeGreenReach" value="<?= unserialize(qcd('timesGreen'))[4] ?>"/><br>
							<label class="white" for="timeGreenH4">H4:</label><input id="timeGreenH4" type="text" name="timeGreenH4" value="<?= unserialize(qcd('timesGreen'))[5] ?>"/><br>
							<label class="white" for="timeGreenH5">H5:</label><input id="timeGreenH5" type="text" name="timeGreenH5" value="<?= unserialize(qcd('timesGreen'))[6] ?>"/><br>
							<button style="background-color:green;" onclick="submitTimes('Green')">Submit</button>
						</div>
						<div style="border: 2px solid yellow;grid-column-start: 2;grid-row-start:2;text-align:center;padding:5px;">
							<h3 style="color:yellow;">Yellow Team</h3>
							<label class="white" for="timeYellowCE">CE:</label><input id="timeYellowCE" type="text" name="timeYellowCE" value="<?= unserialize(qcd('timesYellow'))[0] ?>"/><br>
							<label class="white" for="timeYellowH2">H2:</label><input id="timeYellowH2" type="text" name="timeYellowH2" value="<?= unserialize(qcd('timesYellow'))[1] ?>"/><br>
							<label class="white" for="timeYellowH3">H3:</label><input id="timeYellowH3" type="text" name="timeYellowH3" value="<?= unserialize(qcd('timesYellow'))[2] ?>"/><br>
							<label class="white" for="timeYellowODST">ODST:</label><input id="timeYellowODST" type="text" name="timeYellowODST" value="<?= unserialize(qcd('timesYellow'))[3] ?>"/><br>
							<label class="white" for="timeYellowReach">Reach:</label><input id="timeYellowReach" type="text" name="timeYellowReach" value="<?= unserialize(qcd('timesYellow'))[4] ?>"/><br>
							<label class="white" for="timeYellowH4">H4:</label><input id="timeYellowH4" type="text" name="timeYellowH4" value="<?= unserialize(qcd('timesYellow'))[5] ?>"/><br>
							<label class="white" for="timeYellowH5">H5:</label><input id="timeYellowH5" type="text" name="timeYellowH5" value="<?= unserialize(qcd('timesYellow'))[6] ?>"/><br>
							<button style="background-color:green;" onclick="submitTimes('Yellow')">Submit</button>
						</div>
					</div>
				</div>
				<div class="control-section">
					<h1 style="color:white">Facts Override</h1>
					<p class="white">This control will show a fact at the next tranistion of the facts box<br>(ie. when a teams time or current fact is done displaying)</p>
					<label class="white" for="factOverrideFact">Fact:</label><br><input id="factOverrideFact" type="text" name="factOverrideFact" value="<?= unserialize(qcd('factOverride'))[0] ?>"/><br><br>
					<label class="white" for="factOverrideCat">Category (Header):</label><br><input id="factOverrideCat" type="text" name="factOverrideCat" value="<?= unserialize(qcd('factOverride'))[0] ?>"/><br>
					<button style="background-color:green;" onclick="submitFactOverride()">Override Fact</button>
				</div>
				<script>
					var ctrlPw;
					var lastUpdate;
					
					var runnersDefaultRaw = <?= getRunnersList() ?>;
					var groupBy = function(xs, key) {
					  return xs.reduce(function(rv, x) {
						(rv[x[key]] = rv[x[key]] || []).push(x);
						return rv;
					  }, {});
					};
					var runnersDefault = groupBy(runnersDefaultRaw, 'team');
					
					runnerRed = document.getElementById('runnerRed');
					runnerRedDisplayTwitch = document.getElementById('runnerRedDisplayTwitch');
					runnerRedTwitch = document.getElementById('runnerRedTwitch');
					runnerBlue = document.getElementById('runnerBlue');
					runnerBlueDisplayTwitch = document.getElementById('runnerBlueDisplayTwitch');
					runnerBlueTwitch = document.getElementById('runnerBlueTwitch');
					runnerGreen = document.getElementById('runnerGreen');
					runnerGreenDisplayTwitch = document.getElementById('runnerGreenDisplayTwitch');
					runnerGreenTwitch = document.getElementById('runnerGreenTwitch');
					runnerYellow = document.getElementById('runnerYellow');
					runnerYellowDisplayTwitch = document.getElementById('runnerYellowDisplayTwitch');
					runnerYellowTwitch = document.getElementById('runnerYellowTwitch');
					
					teamPlace1 = document.getElementById('teamPlace1');
					teamPlace2 = document.getElementById('teamPlace2');
					teamPlace3 = document.getElementById('teamPlace3');
					teamPlace4 = document.getElementById('teamPlace4');
					
					useAudioBtnRed = document.getElementById('useAudioBtnRed');
					useAudioBtnBlue = document.getElementById('useAudioBtnBlue');
					useAudioBtnGreen = document.getElementById('useAudioBtnGreen');
					useAudioBtnYellow = document.getElementById('useAudioBtnYellow');
					
					timeRedCE = document.getElementById('timeRedCE');
					timeRedH2 = document.getElementById('timeRedH2');
					timeRedH3 = document.getElementById('timeRedH3');
					timeRedODST = document.getElementById('timeRedODST');
					timeRedReach = document.getElementById('timeRedReach');
					timeRedH4 = document.getElementById('timeRedH4');
					timeRedH5 = document.getElementById('timeRedH5');
					
					timeBlueCE = document.getElementById('timeBlueCE');
					timeBlueH2 = document.getElementById('timeBlueH2');
					timeBlueH3 = document.getElementById('timeBlueH3');
					timeBlueODST = document.getElementById('timeBlueODST');
					timeBlueReach = document.getElementById('timeBlueReach');
					timeBlueH4 = document.getElementById('timeBlueH4');
					timeBlueH5 = document.getElementById('timeBlueH5');
					
					timeGreenCE = document.getElementById('timeGreenCE');
					timeGreenH2 = document.getElementById('timeGreenH2');
					timeGreenH3 = document.getElementById('timeGreenH3');
					timeGreenODST = document.getElementById('timeGreenODST');
					timeGreenReach = document.getElementById('timeGreenReach');
					timeGreenH4 = document.getElementById('timeGreenH4');
					timeGreenH5 = document.getElementById('timeGreenH5');
					
					timeYellowCE = document.getElementById('timeYellowCE');
					timeYellowH2 = document.getElementById('timeYellowH2');
					timeYellowH3 = document.getElementById('timeYellowH3');
					timeYellowODST = document.getElementById('timeYellowODST');
					timeYellowReach = document.getElementById('timeYellowReach');
					timeYellowH4 = document.getElementById('timeYellowH4');
					timeYellowH5 = document.getElementById('timeYellowH5');
					
					runnerSelectorRed = document.getElementById('runnerSelectorRed');
					runnerSelectorBlue = document.getElementById('runnerSelectorBlue');
					runnerSelectorGreen = document.getElementById('runnerSelectorGreen');
					runnerSelectorYellow = document.getElementById('runnerSelectorYellow');
					
					runnerSelectorRed.innerHTML = getCurrentRunner('Red').name;
					runnerSelectorBlue.innerHTML = getCurrentRunner('Blue').name;
					runnerSelectorGreen.innerHTML = getCurrentRunner('Green').name;
					runnerSelectorYellow.innerHTML = getCurrentRunner('Yellow').name;
					
					function getCurrentRunner(color) {
						var array = eval('runnersDefault.' + color);
						var runner;
						var x;
						
						for (x in array) {
							if (array[x]['name'] ==  eval('runner' + color).value) runner = array[x];
						}
						if (runner == null) return false;
						
						return runner;
					}
					
					function nextRunner(color) {
						var array = eval('runnersDefault.' + color);
						var oldrunner = getCurrentRunner(color);
						var newRunner;
						
						if (oldrunner == false) {
							newRunner = array[0];
						} else {
							for (var i = 0; i < array.length; i++) {
								var index = array.indexOf(oldrunner);
								if(index >= 0 && index < array.length - 1) {
									newRunner = array[index + 1];
								} else {
									newRunner = array[0];
								}
								break;
							}
						}
						
						eval('runnerSelector' + color).innerHTML = newRunner.name;
						eval('runner' + color).value = newRunner.name;
						eval('runner' + color + 'Twitch').value = newRunner.twitch;
						eval('runner' + color + 'DisplayTwitch').value = newRunner.displayTwitch;
					}
					
					function prevRunner(color) {
						var array = eval('runnersDefault.' + color);
						var oldrunner = getCurrentRunner(color);
						var newRunner;
						
						if (oldrunner == false) {
							newRunner = array[0];
						} else {
							for (var i = 0; i < array.length; i++) {
								var index = array.indexOf(oldrunner);
								if(index >= 0 && index < array.length) {
									newRunner = array[index - 1];
									if (index - 1 < 0) {
										newRunner = array[array.length - 1];
									}
								} else {
									newRunner = array[array.length - 1];
								}
								break;
							}
						}
						
						eval('runnerSelector' + color).innerHTML = newRunner.name;
						eval('runner' + color).value = newRunner.name;
						eval('runner' + color + 'Twitch').value = newRunner.twitch;
						eval('runner' + color + 'DisplayTwitch').value = newRunner.displayTwitch;
					}
					
					function submitRunner(color) {
						$.ajax({
							type: "POST",
							url: "fnc/updateRunner.php",
							data: {
								color: color,
								runner: eval('runner' + color).value,
								runnerTwitch: eval('runner' + color + 'Twitch').value,
								runnerDisplayTwitch: eval('runner' + color + 'DisplayTwitch').value
							},
							success: function(){
								// do nothing
							}
						});
					}
					
					function doManualOverride() {
						$.ajax({
							type: "POST",
							url: "fnc/manualOverride.php",
							data: {
								val: '1'
							},
							success: function(){
								// do nothing
							}
						});
					}
					
					function submitTimes(color) {
						$.ajax({
							type: "POST",
							url: "fnc/updateTimes.php",
							data: {
								color: color,
								timeCE: eval(document.getElementById('time' + color + 'CE')).value,
								timeH2: eval(document.getElementById('time' + color + 'H2')).value,
								timeH3: eval(document.getElementById('time' + color + 'H3')).value,
								timeODST: eval(document.getElementById('time' + color + 'ODST')).value,
								timeReach: eval(document.getElementById('time' + color + 'Reach')).value,
								timeH4: eval(document.getElementById('time' + color + 'H4')).value,
								timeH5: eval(document.getElementById('time' + color + 'H5')).value
							},
							success: function(){
								// do nothing
							}
						});
					}
					function submitFactOverride() {
						$.ajax({
							type: "POST",
							url: "fnc/factOverride.php",
							data: {
								fact: document.getElementById('factOverrideFact').value,
								cat: document.getElementById('factOverrideCat').value
							},
							success: function(){
								// do nothing
							}
						});
					}
					function useAudio(color) {
						$.ajax({
							type: "POST",
							url: "fnc/updateAudio.php",
							data: {
								color: color
							},
							success: function(){
								// do nothing
							}
						});
					}
					function setPlaces() {
						$.ajax({
							type: "POST",
							url: "fnc/updatePlaces.php",
							data: {
								teamPlace1: teamPlace1.value,
								teamPlace2: teamPlace2.value,
								teamPlace3: teamPlace3.value,
								teamPlace4: teamPlace4.value
							},
							success: function(){
								// do nothing
							}
						});
					}
					function doTimer(fnc) {
						if (sha256(password.value) == ctrlPw) {
							$.ajax({
								type: "POST",
								url: "fnc/doTimer.php",
								data: {fnc: fnc},
								success: function(){
									// do nothing
								}
							});
						}
					}
					
					var wrapper = document.getElementById('masterWrapper');
					var password = document.getElementById('controlPassword');
					function doChecks() {
						$.ajax({
							type: "GET",
							url: "fnc/getControlData.php",
							success: function(response){
								var data = JSON.parse(response);
								ctrlPw = data.password;
								if (sha256(password.value) == data.password) {
									wrapper.style.display = "flex";
								} else {
									wrapper.style.display = "none";
								}
							}
						});
						
						var timerText = document.getElementById('timerControl');
						var btnStartTimer = document.getElementById('btnStartTimer');
						var btnStopTimer = document.getElementById('btnStopTimer');
						var btnResumeTimer = document.getElementById('btnResumeTimer');
						var btnResetTimer = document.getElementById('btnResetTimer');
						
						var styleDisabled = "background-color:gray;pointer-events:none;opacity:0.5;";
						var styleEnabledGreen = "background-color:green;pointer-events:initial;opacity:1;";
						var styleEnabledRed = "background-color:red;pointer-events:initial;opacity:1;";
						var styleEnabledOrange = "background-color:orange;pointer-events:initial;opacity:1;";
						
						$.ajax({
							type: "GET",
							url: "fnc/getEventData.php",
							success: function(response){
								var data = JSON.parse(response);
								
								timerStatus = data.timerStatus;
								if (timerStatus == 0) { 
									timerText.innerHTML = "00:00:00";
									btnStartTimer.style = styleEnabledGreen;
									btnStartTimer.disabled = false;
									btnStopTimer.style = styleDisabled;
									btnStopTimer.disabled = true;
									btnResumeTimer.style = styleDisabled;
									btnResumeTimer.disabled = true;
									btnResetTimer.style = styleEnabledOrange;
									btnResetTimer.disabled = false;
								}
								
								if (timerStatus == 1) {
									timerText.innerHTML = new Date(Date.now() - (data.timerStarted * 1000)).toISOString().substr(11, 8);
									btnStartTimer.style = styleDisabled;
									btnStartTimer.disabled = true;
									btnStopTimer.style = styleEnabledRed;
									btnStopTimer.disabled = false;
									btnResumeTimer.style = styleDisabled;
									btnResumeTimer.disabled = true;
									btnResetTimer.style = styleDisabled;
									btnResetTimer.disabled = true;
								}
								if (timerStatus == 2) { 
									timerText.innerHTML = new Date((data.timerStopped * 1000) - (data.timerStarted * 1000)).toISOString().substr(11, 8);
									btnStartTimer.style = styleDisabled;
									btnStartTimer.disabled = true;
									btnStopTimer.style = styleDisabled;
									btnStopTimer.disabled = true;
									btnResumeTimer.style = styleEnabledOrange;
									btnResumeTimer.disabled = false;
									btnResetTimer.style = styleEnabledOrange;
									btnResetTimer.disabled = false;
								}
								
								if (lastUpdate != data.lastUpdate) {
									lastUpdate = data.lastUpdate;
									
									runnerRed.value = data.runnerRed;
									runnerRedTwitch.value = data.runnerRedTwitch;
									runnerRedDisplayTwitch.value = data.runnerRedDisplayTwitch;
									runnerBlue.value = data.runnerBlue;
									runnerBlueTwitch.value = data.runnerBlueTwitch;
									runnerBlueDisplayTwitch.value = data.runnerBlueDisplayTwitch;
									runnerGreen.value = data.runnerGreen;
									runnerGreenTwitch.value = data.runnerGreenTwitch;
									runnerGreenDisplayTwitch.value = data.runnerGreenDisplayTwitch;
									runnerYellow.value = data.runnerYellow;
									runnerYellowTwitch.value = data.runnerYellowTwitch;
									runnerYellowDisplayTwitch.value = data.runnerYellowDisplayTwitch;
									
									teamPlace1.value = data.teamPlace1;
									teamPlace2.value = data.teamPlace2;
									teamPlace3.value = data.teamPlace3;
									teamPlace4.value = data.teamPlace4;
									
									timeRedCE.value = data.timesRed[0];
									timeRedH2.value = data.timesRed[1];
									timeRedH3.value = data.timesRed[2];
									timeRedODST.value = data.timesRed[3];
									timeRedReach.value = data.timesRed[4];
									timeRedH4.value = data.timesRed[5];
									timeRedH5.value = data.timesRed[6];
									
									timeBlueCE.value = data.timesBlue[0];
									timeBlueH2.value = data.timesBlue[1];
									timeBlueH3.value = data.timesBlue[2];
									timeBlueODST.value = data.timesBlue[3];
									timeBlueReach.value = data.timesBlue[4];
									timeBlueH4.value = data.timesBlue[5];
									timeBlueH5.value = data.timesBlue[6];
									
									timeGreenCE.value = data.timesGreen[0];
									timeGreenH2.value = data.timesGreen[1];
									timeGreenH3.value = data.timesGreen[2];
									timeGreenODST.value = data.timesGreen[3];
									timeGreenReach.value = data.timesGreen[4];
									timeGreenH4.value = data.timesGreen[5];
									timeGreenH5.value = data.timesGreen[6];
									
									timeYellowCE.value = data.timesYellow[0];
									timeYellowH2.value = data.timesYellow[1];
									timeYellowH3.value = data.timesYellow[2];
									timeYellowODST.value = data.timesYellow[3];
									timeYellowReach.value = data.timesYellow[4];
									timeYellowH4.value = data.timesYellow[5];
									timeYellowH5.value = data.timesYellow[6];
								}
								
								useAudioBtnRed.disabled = false;
								useAudioBtnRed.style = styleEnabledGreen;
								useAudioBtnBlue.disabled = false;
								useAudioBtnBlue.style = styleEnabledGreen;
								useAudioBtnGreen.disabled = false;
								useAudioBtnGreen.style = styleEnabledGreen;
								useAudioBtnYellow.disabled = false;
								useAudioBtnYellow.style = styleEnabledGreen;
								
								switch (data.usingAudio) {
									case "Red":
										useAudioBtnRed.disabled = true;
										useAudioBtnRed.style = styleDisabled;
									break;
									case "Blue":
										useAudioBtnBlue.disabled = true;
										useAudioBtnBlue.style = styleDisabled;
									break;
									case "Green":
										useAudioBtnGreen.disabled = true;
										useAudioBtnGreen.style = styleDisabled;
									break;
									case "Yellow":
										useAudioBtnYellow.disabled = true;
										useAudioBtnYellow.style = styleDisabled;
									break;
								}
								
							}
						});
					}
					setInterval(doChecks, 500);
				</script>
			</div>
		</div>
	</body>
</html>