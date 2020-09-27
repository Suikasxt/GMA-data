<?php
	define('ROAD','../');
	require_once("../style.php");
	date_default_timezone_set('PRC');$now=date('Y-m-d H:i:s');
	
	if (!isset($_GET["c"])||!isset($_GET["c_id"])) {header('Location:../contestlist.html');exit(0);}
	
	$contest=deal_number($_GET["c"]);
	$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
	
	$query="SELECT start FROM contest WHERE id=".$contest;
	$data=mysqli_query($conn,$query);
	if (mysqli_num_rows($data)==0) {header("Location:contestlist.html");mysqli_close($conn);exit(0);}
	$row=mysqli_fetch_array($data);
	
	mysqli_close($conn);
	$view=1;
	if ($row['start']>$now) $view=0;
	if (isset($_SESSION["user_id"])){
		$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
		
		$query="SELECT admin FROM Users WHERE user_id=".$_SESSION['user_id'];
		$data=mysqli_query($conn,$query);
		$row=mysqli_fetch_array($data);
		if ($row["admin"]>=1) $view=1;
		
		mysqli_close($conn);
	}
	
	if (!$view){
		?>
		<div id="main">
			<i class="warning sign icon"></i><h3 style="display:inline;">Please wait until the contest start.</h3>
		</div>
		<?php
		exit(0);
	}
	
	$c_id=deal_number($_GET["c_id"]);
	$dir=sprintf("%04d",$contest)."/problems/";
	$list=scandir($dir);
	$find=False;
	$problemID=0;
	foreach ($list as $file)
	if (is_file($dir.'/'.$file)&&$file!='.'&&$file!='..')
	if ((++$problemID)==$c_id){
		?>
		<div id='main' style="margin-bottom:100px;">
			<a href="<?php echo sprintf("../contest.php?id=%d&main=problemlist",$contest)?>">
				<div class="ui button">Back to the contest.</div>
			</a>
			<a href="<?php echo $_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']."&katex=no" ?>">
				<div class="ui button">No KaTeX</div>
			</a>
			<?php require_once($dir.'/'.$file);?>
		</div>
		<?php
		$find=True;
		$problemID=(int)strstr($file,'-',TRUE);
		break;
	}
	if (!$find) {header('Location:../contestlist.html');exit(0);}
	if (isset($_SESSION['user_id'])){
		
		
		$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
		$query="SELECT Accept FROM Con".sprintf("%04d",$contest)." WHERE user_id=".$_SESSION['user_id'];
		$data=mysqli_query($conn,$query);
		$re=mysqli_fetch_array($data);
		mysqli_close($conn);
		$this_acc=($re['Accept']&(1<<($c_id-1)));
		
		
		?>
		<form id="answer" name="SubmitBlock" method="post" action="submit.php">
			<div style="height:100px;" class="ui inverted segment">
				<?php
					if ($this_acc!=0){
						?>
						<i align="right" class="undo icon" onclick="cg('SubmitBlock','none');cg('AnswerBlock','block')"></i>
						<?php
				}
				?>
				<div class="ui fluid action input" style="margin-top:9px;">
					<input type="hidden" value="<?php echo $contest;?>" name="c"/>
					<input type="hidden" value="<?php echo $c_id;?>" name="c_id"/>
					<input class="ui <?php if ($this_acc!=0) echo "big";else echo "massive";?> input" placeholder="Type your answer here and press Enter to submit it." type="text" name="answer"/>
				</div>
			</div>
		</form>
		<?php
		
		
		if ($this_acc){
			?>
			<script>
				function cg(name,opa){document.getElementsByName(name)[0].style.display=opa;}
			</script>
			<div name="AnswerBlock" id="answer" style="height:100px" class="ui inverted segment">
				<span style="line-height:20px;">
					<i align="right" class="undo icon" onclick="cg('SubmitBlock','block');cg('AnswerBlock','none')"></i>
					You have accepted this problem.Here is a reference answer :
				</span>
				<p style="font-size:35px;overflow:auto;"><?php 	
					$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
					
					$query="SELECT answer FROM answer WHERE id='$problemID'";
					$data=mysqli_query($conn,$query);
					$row=mysqli_fetch_array($data);
					echo $row['answer'];
					mysqli_close($conn);
				;?></p>
			</div>
			<script>
				document.getElementsByName("SubmitBlock")[0].style.display="none";
				document.getElementsByName("AnswerBlock")[0].style.display="block";
			</script>
			<?php
		}
	}
?>
