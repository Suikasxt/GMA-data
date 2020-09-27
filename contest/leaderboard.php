<!--<MainTitle>Leaderboard</MainTitle>-->
<?php
date_default_timezone_set('PRC');$now=date('Y-m-d H:i:s');
$end=true;
$view=1;
if ($row['start']>$now){
	$view=0;
	if (isset($_SESSION["user_id"])){
		$query="SELECT admin FROM Users WHERE user_id=".$_SESSION['user_id'];
		$data=mysqli_query($conn,$query);
		$row=mysqli_fetch_array($data);
		if ($row["admin"]>=1) $view=1;
	}
}
if (!$view){
?>
	<i class="warning sign icon"></i><h3 style="display:inline;">Please wait until the contest start.</h3>
<?php
}else{
	?>
	<table class="ui very basic center aligned table" style="table-layout:fixed;">
		<thead>
			<tr>
				<th style="width:40px;">#</th>
				<th style="width:300px;">User</th>
				<th>stage</th>
				<th style="width:150px;">Time</th>
				<th style="width:100px;">Accepted</th>
			</tr>
		</thead>


		<tbody>
	<?php
		$user_id=array();$Accept=array();$Attempt=array();$AcceptNumber=array();$time=array();$order=array();
		function SortByAcc($a,$b){
			global $AcceptNumber,$time;
			if ($AcceptNumber[$a]==$AcceptNumber[$b]){
				if ($time[$a]>$time[$b]) return 1;else return -1;
				return 0;
			}
			if ($AcceptNumber[$a]<$AcceptNumber[$b]) return 1;else return -1;
		}
		function time_long($ti){
			return (int)($ti/3600+eps).' : '.(int)(($ti%3600)/60+eps).' : '.($ti%60);
		}
		if (isset($_GET['page'])){
			$_page=deal_number($_GET['page']);
		}
		$query="SELECT user_id,Accept,Attempt,time FROM Con".sprintf("%04d",$contest);
		$retval=mysqli_query($conn,$query);$page=1;
		if (!$retval){
			echo "Error!";
		}else{
			if (isset($_page)&&$_page>0) $page=$_page;
			$number=0;
			while($row = mysqli_fetch_array($retval)){
				array_push($user_id,$row['user_id']);
				array_push($Accept,$row['Accept']);
				array_push($Attempt,$row['Attempt']);
				array_push($order,$number);
				array_push($AcceptNumber,NumOfOne($row['Accept']));
				array_push($time,$row["time"]);
				$number++;
			}
			usort($order,"SortByAcc");
			if ($page>(int)(($number-1)/NumberPerPage)){
				$page=(int)(($number-1)/NumberPerPage)+1;
				$end=1;
			}else $end=0;
			for ($rank=($page-1)*NumberPerPage;$rank<$page*NumberPerPage&&$rank<$number;$rank++){
				$userid=$user_id[$order[$rank]];
				$query="SELECT username FROM Users WHERE user_id=$userid";
				$data=mysqli_query($conn,$query);
				$_row=mysqli_fetch_array($data);
	?>
				<tr <?php if (isset($_SESSION['user_id'])&&$_SESSION['user_id']==$userid)echo "class='self_in_leaderboard'"?>>
					<td><?php echo $rank+1;?></td>
					<td>
						<img class="ui medium circular image" src="image/personal/<?php echo FindHead($userid);?>" style="width:60px;height:60px;display:inline;">
						&nbsp;&nbsp;
						<a style="font-size:17px;font-weight:bold;"href="user.html?id=<?php echo $userid;?>"><?php echo $_row['username'];?></a>
					</td>
					<td>
						<?php
							$ac=$Accept[$order[$rank]];$at=$Attempt[$order[$rank]];
							for ($i=0;$i<$ProblemNumber;$i++){
								$color="";
								if ($ac&(1<<$i)) $color="background-color:green;";else
								if ($at&(1<<$i)) $color="background-color:yellow;";
								?>
								<a href="contest/problem.html?c=<?php echo $contest;?>&c_id=<?php echo $i+1;?>">
									<div class="circle" style="<?php echo $color;?>"><?php echo $i+1;?></div>
								</a>
								<?php
							}
						?>
					</td>
					<td class="TimeUsed"><?php echo time_long($time[$order[$rank]]);?></td>
					<td><?php echo $AcceptNumber[$order[$rank]];?></td>
				</tr>
	<?php
			}
		}
	?>

		</tbody>
	</table>

	<?php
		if ($page!=1){
	?>
		<a href="<?php echo sprintf("contest.html?id=%d&main=leaderboard&page=%d",$contest,$page-1);?>" class="ui grey button">Previous</a>
	<?php
		}
	?>
	<form method="get" action="contest.html" style="display:inline;">
		<div class="ui input">
			<input type="hidden" value="<?php echo $contest;?>" name="id"/>
			<input type="hidden" value="leaderboard" name="main"/>
			<input style="width:80px;" type="text" value="<?php echo $page;?>" name="page"/>
		</div>
	</form>
	<?php
		if (!$end){
	?>
	<a href="<?php echo sprintf("contest.html?id=%d&main=leaderboard&page=%d",$contest,$page+1);?>" class="ui grey button">Next</a>
	<?php
		}
}
?>