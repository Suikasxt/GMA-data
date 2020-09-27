<?php $list=array(77,73,56);?>
<h1 style="font-size:30px;font-weight:bold;line-height:100px;" align=center>GMA Round 2 谢幕</h1>

<p><?php _tab();?>GMA Round 2完满谢幕！</p>
<p><?php _tab();?>首先恭喜在此次比赛中获得前3名的选手</p>
<table class="ui very basic small collapsing center aligned table" style="margin-left:10%">
	<thead>
		<tr>
			<th style="width:50px;">#</th>
			<th style="">User</th>
			<th style="">Personal introduction</th>
		</tr>
	</thead>
	<tbody>
      	<?php
      		$rank=0;
			$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);mysqli_query($conn,"set names 'utf8'");
      		foreach ($list as $user_id){
              	$rank++;
				$query="SELECT username,introduction FROM Users where user_id=$user_id";
				$row = mysqli_fetch_array(mysqli_query($conn,$query));
              	?>
					<tr>
						<td><?php echo $rank;?></td>
						<td>
							<img class="ui medium circular image" src="/image/personal/<?php echo FindHead($user_id);?>" style="width:60px;height:60px;display:inline;">
							&nbsp;&nbsp;
							<a style="font-size:17px;font-weight:bold;" href="user.html?id=<?php echo $user_id;?>"><?php echo $row["username"];?></a>
						</td>
						<td>
                          	<?php echo $row["introduction"];?>
						</td>
					</tr>
      			<?php
            }
      		mysqli_close($conn);
      	?>
	</tbody>
</table>
<p><?php _tab();?>另有幸运奖选手：
<img class="ui medium circular image" src="/image/personal/<?php echo FindHead(77);?>" style="width:60px;height:60px;display:inline;">
	&nbsp;&nbsp;
<a style="font-size:17px;font-weight:bold;" href="user.html?id=77"><?php echo ask_username(77)?></a>&nbsp;&nbsp;
<img class="ui medium circular image" src="/image/personal/<?php echo FindHead(85);?>" style="width:60px;height:60px;display:inline;">
	&nbsp;&nbsp;
<a style="font-size:17px;font-weight:bold;" href="user.html?id=89"><?php echo ask_username(89)?></a>&nbsp;&nbsp;</p>
<p><?php _tab();?>请以上选手使用你们注册账号时的邮箱联系565687562@qq.com，获得奖金的选手请留下支付方式（支持微信/支付宝）。</p>
<p><?php _tab();?>另附：<a style="font-weight:bold;" href="/notice.html?name=2018-7-8%40GMA+Round+2%E8%A7%A3%E9%A2%98%E6%8A%A5%E5%91%8A.php">比赛题目解题报告</a></p>

<p><?php _tab();?>最后感谢本次比赛验题人：abslime、sky_miner</p>
<p><?php _tab();?>感谢各位对GMA的支持！</p>