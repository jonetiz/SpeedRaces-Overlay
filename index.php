<?php
	include 'functions.php';
?>
<html>
	<head>
		<link rel="stylesheet" href="stylesheet.css">
		<script src="//code.jquery.com/jquery-1.12.4.js"></script>
		<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<link rel="shortcut icon" href="img/logo.png">
	</head>
	<body>
		<div class="4runners">
			<img src="img/overlay.png" style="z-index:100;position:absolute;top:0;left:0;pointer-events: none;" />
			<div class="places-wrapper">
				<img src="img/places.png" />
				<div class="places">
					<div class="place">
						<img style="position:absolute;top:7px;left:5px;height:26px;" src="img/1st.png" />
						<p><span id="teamPlace1"><?= qcd('teamPlace1') ?></span> Team</p>
					</div>
					<div class="place" style="transform:translateY(0px);">
						<img style="position:absolute;top:7px;left:5px;height:26px;" src="img/2nd.png" />
						<p><span id="teamPlace2"><?= qcd('teamPlace2') ?></span> Team</p>
					</div>
					<div class="place" style="transform:translateY(0px);">
						<img style="position:absolute;top:7px;left:5px;height:26px;" src="img/3rd.png" />
						<p><span id="teamPlace3"><?= qcd('teamPlace3') ?></span> Team</p>
					</div>
					<div class="place" style="transform:translateY(0px);">
						<img style="position:absolute;top:7px;left:5px;height:26px;" src="img/4th.png" />
						<p><span id="teamPlace4"><?= qcd('teamPlace4') ?></span> Team</p>
					</div>
				</div>
			</div>
			<div class="discord-wrapper">
				<img src="img/discord.png" />
			</div>
			<div class="times-wrapper">
				<img src="img/times.png" />
				<div id="timesthingy">
					<p id="factTitle">Title</p>
					<hr id="factRule" color="#BF9D44">
					<p id="factSubtitle">Subtitle</p>
					<p id="factBody">Body</p>
				</div>
			</div>
			<div id="timer">
				<p style="text-align:center;margin:0;">
					<p class="timerText" id="timerText1" style="display:none;">0</p>
					<p class="timerText" id="timerText2" style="display:none;">0</p>
					<p class="timerText" id="timerSpacer" style="width:2px;display:none;">:</p>
					<p class="timerText" id="timerText3">0</p>
					<p class="timerText" id="timerText4">0</p>
					<p class="timerText" style="width:2px">:</p>
					<p class="timerText" id="timerText5">0</p>
					<p class="timerText" id="timerText6">0</p>
				</p>
			</div>
				<script src= "https://player.twitch.tv/js/embed/v1.js"></script>
				<div style="position:absolute;top:13px;left:269px;">
					<video style="position:absolute" id="coverRed" class="cover" width="812" height="457"></video>
					<video style="position:absolute" id="cover2Red" class="cover" width="812" height="457"></video>
					<div id="twitch-frame1"></div>
				</div>
				<div style="position:absolute;top:13px;left:1097px;">
					<video style="position:absolute" id="coverBlue" class="cover" width="812" height="457"></video>
					<video style="position:absolute" id="cover2Blue" class="cover" width="812" height="457"></video>
					<div id="twitch-frame2"></div>
				</div>
				<div style="position:absolute;top:548px;left:271px;">
					<video style="position:absolute" id="coverGreen" class="cover" width="812" height="457"></video>
					<video style="position:absolute" id="cover2Green" class="cover" width="812" height="457"></video>
					<div id="twitch-frame3"></div>
				</div>
				<div style="position:absolute;top:548px;left:1097px;">
					<video style="position:absolute" id="coverYellow" class="cover" width="812" height="457"></video>
					<video style="position:absolute" id="cover2Yellow" class="cover" width="812" height="457"></video>
					<div id="twitch-frame4"></div>
				</div>
			<div class="nameplates">
				<div class="nameplate" style="top:486px;left:532px;">
					<p class="nameplateText"><span id="runner1Name" style="height:41px;"></span></p>
				</div>
				<div class="nameplate"  style="top:486;left:1358px;">
					<p class="nameplateText"><span id="runner2Name"></span></p>
				</div>
				<div class="nameplate" style="top:1021px;left:532px;">
					<p class="nameplateText"><span id="runner3Name"></span></p>
				</div>
				<div class="nameplate"  style="top:1021px;left:1358px;">
					<p class="nameplateText"><span id="runner4Name"></span></p>
				</div>
				<div class="nameplateTwitch" style="top:486px;left:532px;">
					<p style="position: absolute;left:5px;color:white;align-items: center;vertical-align: middle;font-size:36;font-weight:bold;"><img src="img/twitch.png" style="height:36px;position:relative;top:2px;filter:invert(100%);" /></p>
					<p class="nameplateTextTwitch">/<span id="runner1NameTwitch"></span></p>
				</div>
				<div class="nameplateTwitch" style="top:486px;left:1358px;">
					<p style="position: absolute;left:5px;color:white;align-items: center;vertical-align: middle;font-size:36;font-weight:bold;"><img src="img/twitch.png" style="height:36px;position:relative;top:2px;filter:invert(100%);" /></p>
					<p class="nameplateTextTwitch">/<span id="runner2NameTwitch"></span></p>
				</div>
				<div class="nameplateTwitch" style="top:1021px;left:532px;">
					<p style="position: absolute;left:5px;color:white;align-items: center;vertical-align: middle;font-size:36;font-weight:bold;"><img src="img/twitch.png" style="height:36px;position:relative;top:2px;filter:invert(100%);" /></p>
					<p class="nameplateTextTwitch">/<span id="runner3NameTwitch"></span></p>
				</div>
				<div class="nameplateTwitch" style="top:1021px;left:1358px;">
					<p style="position: absolute;left:5px;color:white;align-items: center;vertical-align: middle;font-size:36;font-weight:bold;"><img src="img/twitch.png" style="height:36px;position:relative;top:2px;filter:invert(100%);" /></p>
					<p class="nameplateTextTwitch">/<span id="runner4NameTwitch"></span></p>
				</div>
			</div>
			<script type="text/javascript">
				
				var options1 = {
					width: 812,
					height: 457,
					channel: "<?php echo query('currentValue','currentData','currentData','runnerRedTwitch'); ?>",
					controls: true,
					muted: false
				};
				var options2 = {
					width: 812,
					height: 457,
					channel: "<?php echo query('currentValue','currentData','currentData','runnerBlueTwitch'); ?>",
					controls: true,
					muted: false
				};
				var options3 = {
					width: 812,
					height: 457,
					channel: "<?php echo query('currentValue','currentData','currentData','runnerGreenTwitch'); ?>",
					controls: true,
					muted: false
				};
				var options4 = {
					width: 812,
					height: 457,
					channel: "<?php echo query('currentValue','currentData','currentData','runnerYellowTwitch'); ?>",
					controls: true,
					muted: false
				};
				var playerRed = new Twitch.Player("twitch-frame1", options1);
				var playerBlue = new Twitch.Player("twitch-frame2", options2);
				var playerGreen = new Twitch.Player("twitch-frame3", options3);
				var playerYellow = new Twitch.Player("twitch-frame4", options4);
				playerRed.addEventListener(Twitch.Embed.VIDEO_READY, function() {
					playerRed.setMuted(false);
					playerRed.setVolume(0.0);
				});
				playerBlue.addEventListener(Twitch.Embed.VIDEO_READY, function() {
					playerBlue.setMuted(false);
					playerBlue.setVolume(0.0);
				});
				playerGreen.addEventListener(Twitch.Embed.VIDEO_READY, function() {
					playerGreen.setMuted(false);
					playerGreen.setVolume(0.0);
				});
				playerYellow.addEventListener(Twitch.Embed.VIDEO_READY, function() {
					playerYellow.setMuted(false);
					playerYellow.setVolume(0.0);
				});
				
				function sleep(time) {
					return new Promise(resolve => setTimeout(resolve,time));
				}
				
				var runnerRed = document.getElementById('runner1Name');
				var runnerRedDisplayTwitch = document.getElementById('runner1NameTwitch');
				var runnerBlue = document.getElementById('runner2Name');
				var runnerBlueDisplayTwitch = document.getElementById('runner2NameTwitch');
				var runnerGreen = document.getElementById('runner3Name');
				var runnerGreenDisplayTwitch = document.getElementById('runner3NameTwitch');
				var runnerYellow = document.getElementById('runner4Name');
				var runnerYellowDisplayTwitch = document.getElementById('runner4NameTwitch');
				
				var teamPlaceText1 = document.getElementById('teamPlace1');
				var teamPlaceText2 = document.getElementById('teamPlace2');
				var teamPlaceText3 = document.getElementById('teamPlace3');
				var teamPlaceText4 = document.getElementById('teamPlace4');
				
				var timerText1 = document.getElementById('timerText1');
				var timerText2 = document.getElementById('timerText2');
				var timerText3 = document.getElementById('timerText3');
				var timerText4 = document.getElementById('timerText4');
				var timerText5 = document.getElementById('timerText5');
				var timerText6 = document.getElementById('timerText6');
				var timerSpacer = document.getElementById('timerSpacer');
				
				var timerRunning = false;
				
				var coverRed = document.getElementById('coverRed');
				var coverBlue = document.getElementById('coverBlue');
				var coverGreen = document.getElementById('coverGreen');
				var coverYellow = document.getElementById('coverYellow');
				
				var cover2Red = document.getElementById('cover2Red');
				var cover2Blue = document.getElementById('cover2Blue');
				var cover2Green = document.getElementById('cover2Green');
				var cover2Yellow = document.getElementById('cover2Yellow');
				
				$(cover2Red).hide();
				$(cover2Blue).hide();
				$(cover2Green).hide();
				$(cover2Yellow).hide();
				
				var RedCovered = false;
				var BlueCovered = false;
				var GreenCovered = false;
				var YellowCovered = false;
				
				var RedTimes;
				var BlueTimes;
				var GreenTimes;
				var YellowTimes;
				
				var factOverride;
				
				var overrideFact = false;
				var manualOverride = false;
				
				function cover(color, nameStr, displayTwitchStr, twitchStr) {
					var name = eval('runner' + color);
					var displayTwitch = eval('runner' + color + 'DisplayTwitch');
					var player = eval('player' + color);
					
					var cover = eval('cover' + color);
					var cover2 = eval('cover2' + color);
					var varName = color+"Covered";
					
					$(name).hide("slide", {direction: "up" }, 500);
					$(displayTwitch).hide("slide", {direction: "up" }, 500);
					
					cover.src = "img/slantIn.webm";
					cover2.src = "img/slantLoop.webm";
					$(cover).show();
					cover.play();
					sleep(1933).then(() => {
						$(cover).hide();
						$(cover2).show();
						cover2.loop = true;
						cover2.play();
						
						name.innerHTML = nameStr;
						displayTwitch.innerHTML = displayTwitchStr;
						player.setChannel(twitchStr);
						
						var interval = setInterval(function() { show(this) }, 1000);
					});
					function show(interval) {
						if (manualOverride) {
							clearInterval(interval);
							$(cover).hide();
							$(cover2).hide();
							cover2.loop = false;
							
							$(name).show("slide", {direction: "up" }, 500);
							$(displayTwitch).show("slide", {direction: "up" }, 500);
							
							eval(varName + " = " + false);
							manualOverride = false;
							manualOverrideReset();
						}					
						if (player.getPlaybackStats()['playbackRate'] > 1) {
							clearInterval(interval);
							
							const onEnded = (() => {
								$(name).show("slide", {direction: "up" }, 500);
								$(displayTwitch).show("slide", {direction: "up" }, 500);
								cover2.removeEventListener("ended", onEnded);
								cover.src = "img/slantOut.webm";
								$(cover).show();
								$(cover2).hide();
								cover.play();
								eval(varName + " = " + false);
							});
							
							sleep(2500).then(() => {
								cover2.loop = false;
								cover2.addEventListener("ended", onEnded);
							});
						}
					}
					
					
				}
				
				function manualOverrideReset() {
					$.ajax({
						type: "POST",
						url: "fnc/manualOverride.php",
						data: {
							val: '0'
						},
						success: function(){
							// do nothing
						}
					});
				}
				
				function updateEventInfo() {
					$.ajax({
						type: "GET",
						url: "fnc/getEventData.php",
						success: function(response){
							var data = JSON.parse(response);
							
							if (data.manualOverride) manualOverride = true;
							
							if (runnerRed.innerHTML != data.runnerRed && RedCovered != true) {
								RedCovered = true;
								cover('Red', data.runnerRed, data.runnerRedDisplayTwitch, data.runnerRedTwitch);
							}
							if (runnerBlue.innerHTML != data.runnerBlue && BlueCovered != true) {
								BlueCovered = true;
								cover('Blue', data.runnerBlue, data.runnerBlueDisplayTwitch, data.runnerBlueTwitch);
							}
							if (runnerGreen.innerHTML != data.runnerGreen && GreenCovered != true) {
								GreenCovered = true;
								cover('Green', data.runnerGreen, data.runnerGreenDisplayTwitch, data.runnerGreenTwitch);
							}
							if (runnerYellow.innerHTML != data.runnerYellow && YellowCovered != true) {
								YellowCovered = true;
								cover('Yellow', data.runnerYellow, data.runnerYellowDisplayTwitch, data.runnerYellowTwitch);
							}
							
							teamPlaceText1.innerHTML = data.teamPlace1;
							teamPlaceText2.innerHTML = data.teamPlace2;
							teamPlaceText3.innerHTML = data.teamPlace3;
							teamPlaceText4.innerHTML = data.teamPlace4;
							
							RedTimes = data.timesRed;
							BlueTimes = data.timesBlue;
							GreenTimes = data.timesGreen;
							YellowTimes = data.timesYellow;
							
							factOverride = data.factOverride;
							catOverride = data.catOverride;
							if (factOverride != "") { overrideFact = true; } else { overrideFact = false; }
							
							timerStatus = data.timerStatus;
							if (timerStatus == 0) { timerText1.innerHTML = "0"; timerText2.innerHTML = "0"; timerText3.innerHTML = "0"; timerText4.innerHTML = "0"; timerText5.innerHTML = "0"; timerText6.innerHTML = "0"; timerText1.style.display = "none"; timerText2.style.display = "none"; timerSpacer.style.display = "none";}
							if (timerStatus == 1) {
								timerText1.innerHTML = new Date(Date.now() - (data.timerStarted * 1000)).toISOString().substr(11, 1);
								timerText2.innerHTML = new Date(Date.now() - (data.timerStarted * 1000)).toISOString().substr(12, 1);
								timerText3.innerHTML = new Date(Date.now() - (data.timerStarted * 1000)).toISOString().substr(14, 1);
								timerText4.innerHTML = new Date(Date.now() - (data.timerStarted * 1000)).toISOString().substr(15, 1);
								timerText5.innerHTML = new Date(Date.now() - (data.timerStarted * 1000)).toISOString().substr(17, 1);
								timerText6.innerHTML = new Date(Date.now() - (data.timerStarted * 1000)).toISOString().substr(18, 1);
								
								if ((Date.now() - (data.timerStarted * 1000)) >= 3600000) {
									timerText2.style.display = "inline-block";
									timerSpacer.style.display = "inline-block";
								}
								if ((Date.now() - (data.timerStarted * 1000)) >= 36000000) {
									timerText1.style.display = "inline-block";
								}
							}
							if (timerStatus == 2) {
								timerText1.innerHTML = new Date((data.timerStopped * 1000) - (data.timerStarted * 1000)).toISOString().substr(11, 1);
								timerText2.innerHTML = new Date((data.timerStopped * 1000) - (data.timerStarted * 1000)).toISOString().substr(12, 1);
								timerText3.innerHTML = new Date((data.timerStopped * 1000) - (data.timerStarted * 1000)).toISOString().substr(14, 1);
								timerText4.innerHTML = new Date((data.timerStopped * 1000) - (data.timerStarted * 1000)).toISOString().substr(15, 1);
								timerText5.innerHTML = new Date((data.timerStopped * 1000) - (data.timerStarted * 1000)).toISOString().substr(17, 1);
								timerText6.innerHTML = new Date((data.timerStopped * 1000) - (data.timerStarted * 1000)).toISOString().substr(18, 1);
								
								if ((data.timerStopped - data.timerStarted) >= 3600) {
									timerText2.style.display = "inline-block";
									timerSpacer.style.display = "inline-block";
								}
								if ((data.timerStopped - data.timerStarted) >= 36000) {
									timerText1.style.display = "inline-block";
								}
							}
							
							switch (data.usingAudio) {
								case "Red":
									playerRed.setVolume(1.0);
									playerBlue.setVolume(0.0);
									playerGreen.setVolume(0.0);
									playerYellow.setVolume(0.0);
								break;
								case "Blue":
									playerRed.setVolume(0.0);
									playerBlue.setVolume(1.0);
									playerGreen.setVolume(0.0);
									playerYellow.setVolume(0.0);
								break;
								case "Green":
									playerRed.setVolume(0.0);
									playerBlue.setVolume(0.0);
									playerGreen.setVolume(1.0);
									playerYellow.setVolume(0.0);
								break;
								case "Yellow":
									playerRed.setVolume(0.0);
									playerBlue.setVolume(0.0);
									playerGreen.setVolume(0.0);
									playerYellow.setVolume(1.0);
								break;
							}
						}
					});
				}
				setInterval(updateEventInfo, 1000);
				sleep(1000).then(() => {doFacts();});
				async function doFacts() {
					var facts = <?= getFacts() ?>;
					
					var wrapper = document.getElementById('timesthingy');
					var title = document.getElementById('factTitle');
					var rule = document.getElementById('factRule');
					var subtitle = document.getElementById('factSubtitle');
					var body = document.getElementById('factBody');
					
					function getTimesBody(color) {
						var times = eval(color + 'Times');
						var ce;
						var h2;
						var h3;
						var odst;
						var reach;
						var h4;
						var h5;
						
						if (times[0] != "") {
							ce = "<tr><td>Halo CE</td><td>" + times[0] + "</td></tr>";
						} else {
							ce = "<tr></tr>"
						}
						
						if (times[1] != "") {
							h2 = "<tr><td>Halo 2</td><td>" + times[1] + "</td></tr>";
						} else {
							h2 = "<tr></tr>"
						}
						
						if (times[2] != "") {
							h3 = "<tr><td>Halo 3</td><td>" + times[2] + "</td></tr>";
						} else {
							h3 = "<tr></tr>"
						}
						
						if (times[3] != "") {
							odst = "<tr><td>ODST</td><td>" + times[3] + "</td></tr>";
						} else {
							odst = "<tr></tr>"
						}
						
						if (times[4] != "") {
							reach = "<tr><td>Reach</td><td>" + times[4] + "</td></tr>";
						} else {
							reach = "<tr></tr>"
						}
						
						if (times[5] != "") {
							h4 = "<tr><td>Halo 4</td><td>" + times[5] + "</td></tr>";
						} else {
							h4 = "<tr></tr>"
						}
						
						if (times[6] != "") {
							h5 = "<tr><td>Halo 5</td><td>" + times[6] + "</td></tr>";
						} else {
							h5 = "<tr></tr>"
						}
						
						return "<table class='timesTable'> " + ce + h2 + h3 + odst + reach + h4 + h5 + "</table>"
					}
					
					function selectFact() {
						return facts[Math.floor(Math.random() * facts.length)];
					}
					
					$(wrapper).fadeOut(500, function() {
						title.innerHTML = "Times";
						subtitle.innerHTML = "Red Team";
						body.innerHTML = getTimesBody('Red');
						$(wrapper).fadeIn(500);
					});
					await sleep(29000);
					if (overrideFact) { forceFact(); return; }
					$(wrapper).fadeOut(500, function() {
						title.innerHTML = "Times";
						subtitle.innerHTML = "Blue Team";
						body.innerHTML = getTimesBody('Blue');
						$(wrapper).fadeIn(500);
					});
					await sleep(29000);
					if (overrideFact) { forceFact(); return; }
					$(wrapper).fadeOut(500, function() {
						title.innerHTML = "Times";
						subtitle.innerHTML = "Green Team";
						body.innerHTML = getTimesBody('Green');
						$(wrapper).fadeIn(500);
					});
					await sleep(29000);
					if (overrideFact) { forceFact(); return; }
					$(wrapper).fadeOut(500, function() {
						title.innerHTML = "Times";
						subtitle.innerHTML = "Yellow Team";
						body.innerHTML = getTimesBody('Yellow');
						$(wrapper).fadeIn(500);
					});
					await sleep(29000);
					if (overrideFact) { forceFact(); return; }
					$(wrapper).fadeOut(500, function() {
						title.innerHTML = "Fun Fact";
						subtitle.innerHTML = selectFact()['category'];
						body.innerHTML = "<br>" + selectFact()['fact'];
						$(wrapper).fadeIn(500);
					});
					await sleep(29000);
					if (overrideFact) { forceFact(); return; }
					doFacts();
				}
				
				async function forceFact() {
					var wrapper = document.getElementById('timesthingy');
					var title = document.getElementById('factTitle');
					var rule = document.getElementById('factRule');
					var subtitle = document.getElementById('factSubtitle');
					var body = document.getElementById('factBody');
					
					console.log('test')
					$(wrapper).fadeOut(500, function() {
						title.innerHTML = "Fun Fact";
						subtitle.innerHTML = factOverride;
						body.innerHTML = "<br>" + catOverride;
						$(wrapper).fadeIn(500);
						console.log('test1')
					});
					
					<?php if ($_GET['key'] == "hr_relay_21") { ?>
					$.ajax({
						type: "POST",
						url: "fnc/factOverride.php",
						data: {}
					});
					<?php } ?>
					
					await sleep(29000);
					if (overrideFact) { forceFact(); return; }
					doFacts();
				}
			</script>
		</div>
	</body>
</html>