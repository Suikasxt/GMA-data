<?php
define('ROAD','../');
require_once("../style.php");
?>
<div  id='main'>
	<?php
		$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
		if (isset($_POST["c"])&&isset($_POST["c_id"])){
			if (!isset($_SESSION['user_id'])||$contest>$id[0]) {header('Location:/contestlist.html');mysqli_close($conn);exit(0);}
			$id=mysqli_fetch_array($conn->query("select count(*) from contest"));
			$contest=deal_number($_POST["c"]);
			$c_id=deal_number($_POST["c_id"]);
			$dir=sprintf("%04d",$contest)."/problems/";
			$list=scandir($dir);
			$find=False;
			$proid=0;
			foreach ($list as $file)
			if (is_file($dir.'/'.$file)&&$file!='.'&&$file!='..')
			if ((++$proid)==$c_id){
				$find=True;
				$proid=(int)strstr($file,'-',TRUE);
				break;
			}
			if (!$find) {header('Location:/contestlist.html');mysqli_close($conn);exit(0);}
		}else {header('Location:/contestlist.html');mysqli_close($conn);exit(0);}
		
		
		function pro_check($pid,$answer){
			global $contest,$conn,$output;
			$path="../problems/check/".(int)$pid.".php";
			if (is_file($path)){
				$juege=0;
				include_once($path);
				return $judge;
			}else{
				$query="SELECT answer FROM answer WHERE id='$pid' AND answer='$answer'";
				$data=mysqli_query($conn,$query);
				$check=mysqli_num_rows($data)==1;
				return $check;
			}
		}
		
		$query="SELECT start,end FROM contest WHERE id=".$contest;
		$data=mysqli_query($conn,$query);
		if (mysqli_num_rows($data)==0) {header("Location:/contestlist.html");mysqli_close($conn);exit(0);}
		$row=mysqli_fetch_array($data);
		$time_start=time_transform($row["start"]);$time_end=time_transform($row["end"]);
		$time_used=time()-$time_start;
		
		if ($time_start>time()&&$Admin<=0){
			?>
				<Notice style='color:red;'>The contest hasn't started.</Notice>
			<?php
		}else
		if ($time_end<time()){
			?>
				<Notice style='color:red;'>The contest is over.</Notice>
			<?php
		}else
		if (!SubmitJudge($_SESSION['user_id'])){
			?>
				<Notice style='color:red;'>Don't submit so frequently please.</Notice>
			<?php
		}else
		if (!judge($_POST['answer'])){
			?>
				<Notice style='color:red;'>Illegal character included!</Notice>";
			<?php
		}else{
			$answer=deal_input($_POST['answer']);$user=$_SESSION['user_id'];
			
			$query="SELECT * FROM Con".sprintf("%04d",$contest)." WHERE user_id=$user";
			$data=mysqli_query($conn,$query);
			if (mysqli_num_rows($data)==0){
				mysqli_query($conn,"INSERT INTO Con".sprintf("%04d",$contest)."(user_id,Accept,Attempt,Time) VALUES ($user,0,0,".$time_used.")");
				$data=mysqli_query($conn,$query);
			}
			$row=mysqli_fetch_array($data);
			if ((($row['Attempt']>>($c_id-1))&1)==0){
				$query="UPDATE Con".sprintf("%04d",$contest)." SET Attempt=".($row['Attempt']|(1<<($c_id-1)))." WHERE user_id=$user";
				$data=mysqli_query($conn,$query);
			}
			
			if (pro_check($proid,$answer)==1){
				$query="SELECT * FROM Con".sprintf("%04d",$contest)." WHERE user_id=$user";
				$data=mysqli_query($conn,$query);
				$row=mysqli_fetch_array($data);
				
				if ((($row['Accept']>>($c_id-1))&1)==0){
					$query="UPDATE Con".sprintf("%04d",$contest)." SET Accept=".($row['Accept']|(1<<($c_id-1))).",Time=".$time_used." WHERE user_id='$user'";
					$data=mysqli_query($conn,$query);
				}
				?>
					<Notice style='color:green;'>Correct Answer!</Notice>
				<?php
			}else echo "<Notice style='color:red;'>Wrong Answer!</Notice>";
		}
		mysqli_close($conn);
	?>
	<a style="text-align:center;font-size:20px;display:block;" href="<?php echo sprintf("problem.html?c=%d&c_id=%d",$contest,$c_id);?>">Back to the problem.</a>
	<?php
		if (!empty($output)){
			?>
			<div class="ui divider"></div>
			<h2>Tip</h2>
			<?php
			_tab();
			echo $output;
		}
	?>
</div>
