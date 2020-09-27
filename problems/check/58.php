<?php
$output = "";
function judger($answer){
	$N = 12;
	$M = 5;
	$DEEP = 8;
	$Type = 1;
	$Number = 0;
	$last = array(-1, -1);
	$pos = new ArrayObject();
	$tab = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
	global $output;
	for ($i = 0; $i <= $M; $i++){
		$pos -> append(0);
	}
	
	for ($i = 0; $i < strlen($answer); $i++)
	if (ord($answer[$i]) < 65 || ord($answer[$i]) >= 65 + $M){
		$output = "Illegal answer with " . $answer[$i];
		return 0;
	}
	
	$cwd = "/www/wwwroot/enceladus.cf/problems/check";
	$descriptorspec = array(
		0 => array("pipe", "r"),
		1 => array("pipe", "w"),
		2 => array("pipe", "w")
	);

	$env = array();
	
	$process = proc_open('./58_judger', $descriptorspec, $pipes, $cwd, $env);
	fwrite($pipes[0], $N.' '.$M.' '.$DEEP.' '.$Type.' ');
	
	function getLeftNumber($N, $M, $pos){
		$res = 0;
		for ($i = 0; $i < $M; $i++){
			if ($pos[$i] < $N) $res++;
		}
		return $res;
	}
	for ($i = 0; $i < strlen($answer) && $Number < $N * $M; $i++){
		$opeA = ord($answer[$i]) - 65;
		if ($pos[$opeA] >= $N){
			$output .= "Col " . $opeA . " exceed at operation " . $i . "<br>" . $tab;
			break;
		}
		if ($last[1] == $opeA && getLeftNumber($N, $M, $pos) > 1){
			$output .= "Operation #" . $i . " Error! Same as AI just do." . "<br>" . $tab;
			break;
		}
		$pos[$opeA]++;
		$last[0] = $opeA;
		
		fwrite($pipes[0], $opeA . ' ');
		
		$opeB = (int)(fread($pipes[1], 10));
		//echo $answer." ".$opeA." ".$opeB."<br>";
		
		if ($opeB < 0 || $opeB >=$M || $pos[$opeB] >= $N || ($last[0] == $opeB && getLeftNumber($N, $M, $pos) > 1)){
			$output .= "AI Error!If you see this message, please let us know.<br>" .$tab;
			break;
		}
		$pos[$opeB]++;
		$last[1] = $opeB;
		$Number += 2;
	}
	fwrite($pipes[0], '-1 ');
	$score = fread($pipes[1], 100);
	$scoreList = explode(" ", $score);
	fclose($pipes[0]);
	fclose($pipes[1]);
    $return_value = proc_close($process);
	
	if ($Number != $N * $M){
		$output .= "Game is not over. " . "<br>" . $tab . "Score : " . $scoreList[0] . " " . $scoreList[1];
		return 0;
	}else{
		$output .= "Score : " . $scoreList[0] . " " . $scoreList[1];
		return (int)($scoreList[0]) > (int)($scoreList[1]);
	}
}
$judge = judger($answer);
?>