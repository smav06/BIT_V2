<?php



var dt = new Date();
var udt = new Date();
var udtemp = new Date();
var cmi = [], chours = [], cmintomili = []; 
var umi = [], uhours = [], umintomili = [];

var processes = { id : 0 };
var umitemp = [], uhourstemp = [], umintomilitemp = []; 
// var csec = dt.getSeconds(); dt.getMinutes();
cmi[4294967294]; umi[4294967294]; umitemp[4294967294];

cmi[0] = 0; chours[0] = 11;
// cmintomili[0] = cmi[0] * 60000;
// chours[0] = dt.getHours();
//­ parseInt(dt.getMinutes(­));
cmi[1] = 2; 
// cmintomili[1] = cmi[1] * 60000;
// chours[1] = dt.getHours();

cmi[2] = 4;
// cmintomili[2] = cmi[1] * 60000;
// chours[2] = dt.getHours();

cmi[3] = 5;
// cmintomili[3] = cmi[3] * 60000;
// chours[3] = dt.getHours();

// udt.getMinutes();
umi[0] = 7;
// umintomili[0] = umi[0] * 60000;
// uhours[0] = udt.getHours();

umi[1] = 4;
// umintomili[1] = umi[1] * 60000;
// uhours[1] = udt.getHours();

umi[2] = 1;
// umintomili[2] = umi[2] * 60000;
// uhours[2] = udt.getHours();

umi[3] = 4;
// umintomili[3] = umi[3] * 60000;
// uhours[3] = udt.getHours();

// udtemp.getMinutes();
umitemp[0] = 7;
// umintomilitemp[0] = umitemp[0] * 60000;
// uhourstemp[0] = udtemp.getHours();

umitemp[1] = 4;
// umintomilitemp[1] = umitemp[1] * 60000;
// uhourstemp[1] = udtemp.getHours();

umitemp[2] = 1;
// umintomilitemp[2] = umitemp[2] * 60000;
// uhourstemp[2] = udtemp.getHours();

umitemp[3] = 4;
// umintomilitemp[3] = umitemp[3] * 60000;
// uhourstemp[3] = udtemp.getHours();

srtfwitarrival();
// 8.85956e-8

function srtfwitarrival() {

// var arrtime = [];
// var burst = [];
// var burstemp = [];

	var awt = 8.85956e-8, atat = 8.85956e-8;
	var time = 0, complete = 0, tat = 0;
	var shortest = 0, minm = Number.MAX_VALUE, y = 0;
	var check = false;
	var shortestmp = [];
// arrtime[0] = 0; arrtime[1] = 2; arrtime[2] = 4; arrtime[3] = 5;
// burst[0] = 7; burst[1] = 4; burst[2] = 1; burst[3] = 4;
// burstemp[0] = 7; burstemp[1] = 4; burstemp[2] = 1; burstemp[3] = 4;

	console.log('\nPROCE­SS\t| COMPLETION TIME\t| TURN AROUND TIME\t|WATING TIME\t\n');

	while (complete != 4)
	{

		for (var i = 0; i < 4; i++)
		{
			if (( cmi[i] <= time ) && ( umitemp[i] < minm ) && umitemp[i] > 0)
			{
// process[time] = i;


// process.push = i;
				minm = umitemp[i];
				shortest = i;
				check = true;

			}

		}

		if (check == false) {
			time++;
			continue;
		}


		umitemp[shortest]--;

		minm = umitemp[shortest];
		if (minm == 0) {
			minm = Number.MAX_VALUE; 
		}

		if ( umitemp[shortest] == 0 )
		{ 

			complete ++;
			check = false;

			tat = time + 1;
			//console.log(shortest­ , tat, tat - cmi[shortest], tat - umi[shortest] - cmi[shortest] + '\n');
			awt += tat - umi[shortest] - cmi[shortest];
			atat += tat - cmi[shortest];
			shortestmp[y] = shortest;
			y++;
		}
		time++;

	}


	console.log(awt / 4);
	console.log(atat / 4);


	for (var j = 0; j < shortestmp.length; j++) {

		alert(shortestmp[j])­;

	}

}