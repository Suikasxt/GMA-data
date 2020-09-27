<?php
date_default_timezone_set('PRC');$now=date('Y-m-d H:i:s');
$view=1;
if ($row['start']>$now) $view=0;
if (isset($_SESSION["user_id"])){
	$query="SELECT admin FROM Users WHERE user_id=".$_SESSION['user_id'];
	$data=mysqli_query($conn,$query);
	$row=mysqli_fetch_array($data);
	if ($row["admin"]>=1) $view=1;
}
if (!$view){
?>
	<i class="warning sign icon"></i><h3 style="display:inline;">Please wait until the contest start.</h3>
<?php
}else if (is_dir("contest/".sprintf("%04d",$contest)."/problems")){
?>
	<table class="ui very basic center aligned table" style="table-layout:fixed;line-height:80px;">
		<thead>
			<tr>
				<th style="width:100px;" class="a_number" onclick="SortTable(this)">#</th>
				<th style="width:300px;" class="a_problem" onclick="SortTable(this)">Problem</th>
				<th style="width:100px;" id="acc" class="a_acc" onclick="SortTable(this)">Solve By</th>
			</tr>
		</thead>
		<tbody>
		<?php
			$pid=deal_number($_GET['id']);
			$dir="contest/".sprintf("%04d",$contest)."/problems";
			$list=scandir($dir);$number=0;
			foreach ($list as $file)
			if (is_file($dir.'/'.$file)&&$file!='.'&&$file!='..'){
				$name=strstr($file,'.',TRUE);
				$number++;
				?>
				<tr>
					<td name="_number">
						<?php echo $number;?>
					</td>
					<td name="_problem">
						<a style="font-size:20px;font-weight:bold;line-height:80px;"
						href="<?php echo sprintf("/contest/problem.php?c=%d&c_id=%d",$pid,$number);?>">
						<?php echo substr(strstr($name,'-',FALSE),1);?>
						<?php
							if (isset($_SESSION['user_id'])&&$c_acc[$number-1]==true){
						?>
						</a>
						<i class='checkmark icon' style='color:green;'></i>
						<?php
							}
						?>
					</td>
					<td name="_acc">
						<?php
							echo c_pro($number,'Accept');
						?>
					</td>
				</tr>
				<?php
			}
		?>
		</tbody>
	</table>
	<script type="text/javascript">
		var name,way;
		var tdnumber=[];
		var tdproblem=[];
		var tdacc=[];
      	//SortTable(document.getElementById("acc"));
		function as(x,y){
			if (name=="number") return (tdnumber[x]<tdnumber[y])?-1:1;else
			if (name=="problem") return (tdproblem[x]<tdproblem[y])?-1:1;else
			return (tdacc[x]<tdacc[y])?-1:1;
		}
		function desc(x,y){
			if (name=="number") return (tdnumber[x]<tdnumber[y])?1:-1;else
			if (name=="problem") return (tdproblem[x]<tdproblem[y])?1:-1;else
			return (tdacc[x]<tdacc[y])?1:-1;
		}
		function SortTable(obj){
			name=obj.className.substr(2),way=obj.className.substr(0,1);
			tdnumber.splice(0,tdnumber.length);
			tdproblem.splice(0,tdproblem.length);
			tdacc.splice(0,tdacc.length);
			var neworder=[];
			
       	 	var tdnumbers=document.getElementsByName("_number");
        	var tdproblems=document.getElementsByName("_problem");
        	var tdaccs=document.getElementsByName("_acc");
		
			var n=tdnumbers.length;
        	for(var i=0;i<n;i++){
           		tdnumber.push(parseInt(tdnumbers[i].innerHTML));
				tdproblem.push(tdproblems[i].innerHTML);
				tdacc.push(parseInt(tdaccs[i].innerHTML));
				neworder.push(i);
			}
			
			if (way=="a"){
				neworder.sort(desc);
				obj.className="d_"+name;
			}else{
				neworder.sort(as);
				obj.className="a_"+name;
			}
			
			for (var i=0;i<n;i++){
				tdnumbers[i].innerHTML=tdnumber[neworder[i]];
				tdproblems[i].innerHTML=tdproblem[neworder[i]];
				tdaccs[i].innerHTML=tdacc[neworder[i]];
			}
		}
	</script>
<?php
	}
?>