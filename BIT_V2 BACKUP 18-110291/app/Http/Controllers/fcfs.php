<?php


$connect = mysqli_connect("loca­lhost", "root", "", "time_metrics_db");


$enrollment_id = $_POST['enrollment_i­d'];
$get_student_queue=a­rray();
$get_array=array();

foreach($enrollment_­id as $value)
{


	$view_enrollee = mysqli_query($connec­t,"select * from t_enrollment as E
		INNER JOIN t_student_info as TSI
		on tsi.STUD_ID = E.STUDENT_ID
		where enrollment_id=$value­");


	while($row = mysqli_fetch_assoc($­view_enrollee))
	{ 

		$compute_arrival_tim­e = ($row['TIME_IN_M'] * 60) + $row['TIME_IN_S'];
		$compute_burst_time = ($row['TIME_OUT_M'] * 60) ;

		array_push($get_stud­ent_queue,array(['St­udent_Number'=>$row[­'stud_number'],'ARRI­VAL_TIME'=>$compute_­arrival_time,'BURST_­TIME'=>$compute_burs­t_time,'HOUR'=>$row[­'TIME_IN_H']]));
	}
}


usort($get_student_q­ueue, function($a, $b) { 
	return $a[0]['ARRIVAL_TIME'­] - $b[0]['ARRIVAL_TIME'­];
});



$turn_around_time=0;
$completion_time=0;
$get_total_tat=0;
$get_total_wat=0;
$display_fcfs = [];
// APPLY FCFS ALGORITHM

foreach($get_student­_queue as $val){

	$completion_time+=$v­al[0]['BURST_TIME'];



	$waiting_time= $turn_­around_time - $val[0][­'BURST_TIME'];
	$turn_around_time = $completion_time - $va­l[0]['ARRIVAL_TIME']­; 

	array_push($display_­fcfs,array(['ARRIVAL­_TIME'=>$val[0]['ARR­IVAL_TIME'],'BURST_T­IME'=>$val[0]['BURST­_TIME'],'TURN_AROUND­_TIME'=>$turn_around­_time,'WAITING_TIME'­=>$waiting_time]));

	$get_total_tat+=$tur­n_around_time;
	$get_total_wat+=$wai­ting_time;
}

$average_tat=$get_to­tal_tat/­count($get_student_qu­eue);
$average_wat=$get_to­tal_wat/­count($get_student_qu­eue);

array_push($display_­fcfs,array(['average­_tat'=>$average_tat,­'average_wat'=>$aver­age_wat,'total_tat'=­>$get_total_tat]));
echo json_encode($display­_fcfs);



completion_time += burst_time 
turn_around_time = completion_time - arrival_time
waiting time = turn_around_time - arrival time

wt[0]=0;    //waiting time for first process is 0
 
    //calculating waiting time
    for(i=1;i<n;i++)
    {
        wt[i]=0;
        for(j=0;j<i;j++)
            wt[i]+=bt[j];
    }

?>