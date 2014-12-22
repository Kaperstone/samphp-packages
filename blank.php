// This is a comment
// uncomment the line below if you want to write a filterscript
// define("FILTERSCRIPT", "THIS_IS");
require 'core/bootstrap.php';

if(defined("FILTERSCRIPT")) {

	Event::on('FilterScriptInit', function() {
		echo "\n--------------------------------------";
		echo " Blank Filterscript by your name here";
		echo "--------------------------------------\n";
	});
	Event::on('FilterScriptExit', function() {

	});

}else{

	main()
	{
		echo "\n----------------------------------";
		echo " Blank Gamemode by your name here";
		echo "----------------------------------\n";
	}

}

Event::on('GameModeInit', function() {
	// Don't use these lines if it's a filterscript
	Server::setGameModeText("Blank Script");
	Server::addPlayerClass(0, 1958.3783, 1343.1572, 15.3746, 269.1425, 0, 0, 0, 0, 0, 0);
	return 1;
});
Event::on('GameModeExit', function() {

});
Event::on('PlayerRequestClass', function($playerid, $classid) {
	$playerid->setPos(playerid, 1958.3783, 1343.1572, 15.3746);
	$playerid->camera->setPos(1958.3783, 1343.1572, 15.3746);
	$playerid->camera->setLookAt(1958.3783, 1343.1572, 15.3746);
});

Event::on('PlayerConnect', function($playerid) {

});

Event::on('PlayerDisconnect', function($playerid, $reason) {

});

Event::on('PlayerSpawn', function($playerid) {

});

Event::on('PlayerDeath', function($playerid, $killerid, $reason) {

});

Event::on('VehicleSpawn', function($vehicleid) {

});

Event::on('VehicleDeath', function($vehicleid, $killerid) {

});

Event::on('PlayerText', function($playerid, $text) {

});

Event::on('PlayerEnterVehicle', function($playerid, $vehicleid, $ispassenger) {

});

Event::on('PlayerExitVehicle', function($playerid, $vehicleid) {

});

Event::on('PlayerStateChange', function($playerid, $newstate, $oldstate) {

});

Event::on('PlayerEnterCheckpoint', function($playerid) {

});

Event::on('PlayerLeaveCheckpoint', function($playerid) {

});

Event::on('PlayerEnterRaceCheckpoint', function($playerid) {

});

Event::on('PlayerLeaveRaceCheckpoin', function($playerid) {

});

Event::on('RconCommand', function($cmd) {

});

Event::on('PlayerRequestSpawn', function($playerid) {

});

Event::on('ObjectMoved', function($objectid) {

});

Event::on('PlayerObjectMoved', function($playerid, $objectid) {

});

Event::on('PlayerPickUpPickup', function($playerid, $pickupid) {

});

Event::on('VehicleMod', function($playerid, $vehicleid, $componentid) {

});

Event::on('VehiclePaintjob', function($playerid, $vehicleid, $paintjobid) {

});

Event::on('VehicleRespray', function($playerid, $vehicleid, $color1, $color2) {

});

Event::on('PlayerSelectedMenuRow', function($playerid, $row) {

});

Event::on('PlayerExitedMenu', function($playerid) {

});

Event::on('PlayerInteriorChange', function($playerid, $newinteriorid, $oldinteriorid) {

});

Event::on('PlayerKeyStateChange', function($playerid, $newkeys, $oldkeys) {

});

Event::on('RconLoginAttempt', function($ip, $password, $success) {

});

Event::on('PlayerUpdate', function($playerid) {

});

Event::on('PlayerStreamIn', function($playerid, $forplayerid) {

});

Event::on('PlayerStreamOut', function($playerid, $forplayerid) {

});

Event::on('VehicleStreamIn', function($vehicleid, $forplayerid) {

});

Event::on('VehicleStreamOut', function($vehicleid, $forplayerid) {

});

Event::on('DialogResponse', function($playerid, $dialogid, $response, $listitem, $inputtext) {

});

Event::on('PlayerClickPlayer', function($playerid, $clickedplayerid, $source) {

});
