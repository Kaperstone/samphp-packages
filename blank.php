require 'core/bootstrap.php';

Event::on('GameModeInit', function() {
	echo "\n----------------------------------";
	echo " Blank Gamemode by your name here";
	echo "----------------------------------\n";
	
	// Don't use these lines if it's a filterscript
	Server::setGameModeText("Blank Script");
	Server::addPlayerClass(0, 1958.3783, 1343.1572, 15.3746, 269.1425, 0, 0, 0, 0, 0, 0);
});
Event::on('GameModeExit', function() {

});
Event::on('PlayerRequestClass', function($player, $class) {
	$player->setPos(1958.3783, 1343.1572, 15.3746);
	$player->camera->setPos(1958.3783, 1343.1572, 15.3746);
	$player->camera->setLookAt(1958.3783, 1343.1572, 15.3746);
});

Event::on('PlayerConnect', function($player) {

});

Event::on('PlayerDisconnect', function($player, $reason) {

});

Event::on('PlayerSpawn', function($player) {

});

Event::on('PlayerDeath', function($player, $killer, $reason) {

});

Event::on('VehicleSpawn', function($vehicle) {

});

Event::on('VehicleDeath', function($vehicle, $killer) {

});

Event::on('PlayerText', function($player, $text) {

});

Event::on('PlayerEnterVehicle', function($player, $vehicle, $ispassenger) {

});

Event::on('PlayerExitVehicle', function($player, $vehicle) {

});

Event::on('PlayerStateChange', function($player, $newstate, $oldstate) {

});

Event::on('PlayerEnterCheckpoint', function($player) {

});

Event::on('PlayerLeaveCheckpoint', function($player) {

});

Event::on('PlayerEnterRaceCheckpoint', function($player) {

});

Event::on('PlayerLeaveRaceCheckpoin', function($player) {

});

Event::on('RconCommand', function($cmd) {

});

Event::on('PlayerRequestSpawn', function($player) {

});

Event::on('ObjectMoved', function($object) {

});

Event::on('PlayerObjectMoved', function($player, $object) {

});

Event::on('PlayerPickUpPickup', function($player, $pickupid) {

});

Event::on('VehicleMod', function($player, $vehicle, $componentid) {

});

Event::on('VehiclePaintjob', function($player, $vehicle, $paintjobid) {

});

Event::on('VehicleRespray', function($player, $vehicle, $color1, $color2) {

});

Event::on('PlayerSelectedMenuRow', function($player, $row) {

});

Event::on('PlayerExitedMenu', function($player) {

});

Event::on('PlayerInteriorChange', function($player, $newinteriorid, $oldinteriorid) {

});

Event::on('PlayerKeyStateChange', function($player, $newkeys, $oldkeys) {

});

Event::on('RconLoginAttempt', function($ip, $password, $success) {

});

Event::on('PlayerUpdate', function($player) {

});

Event::on('PlayerStreamIn', function($player, $forplayer) {

});

Event::on('PlayerStreamOut', function($player, $forplayer) {

});

Event::on('VehicleStreamIn', function($vehicle, $forplayer) {

});

Event::on('VehicleStreamOut', function($vehicle, $forplayer) {

});

Event::on('DialogResponse', function($player, $dialogid, $response, $listitem, $inputtext) {

});

Event::on('PlayerClickPlayer', function($player, $clickedplayer, $source) {

});
