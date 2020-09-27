<?php $list=array(12,11,43,21,20,32,51,30);?>
<h1 style="font-size:30px;font-weight:bold;line-height:100px;" align=center>GMA Round 1 谢幕</h1>

<p><?php _tab();?>GMA Round 1完满谢幕！</p>
<p><?php _tab();?>首先恭喜在此次比赛中获得前8名的选手</p>
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
<p><?php _tab();?>另有幸运奖（奖品为GMA纪念品）选手：
<img class="ui medium circular image" src="/image/personal/<?php echo FindHead(39);?>" style="width:60px;height:60px;display:inline;">
	&nbsp;&nbsp;
<a style="font-size:17px;font-weight:bold;" href="user.html?id=39">xy</a>&nbsp;&nbsp;幸运奖选取方式为比赛排名第19（20180213mod35 +1）名的选手</p>
<p><?php _tab();?>请以上选手使用你们注册账号时的邮箱联系565687562@qq.com，获得奖金的选手请留下支付方式，获得纪念品的选手请留下地址、姓名、联系电话方便邮寄。纪念品尚在制作中，制作完毕会尽快发放。</p>
<p><?php _tab();?>另附：<a style="font-weight:bold;" href="/notice.html?name=2018-2-13%40GMA+Round+1%E8%A7%A3%E9%A2%98%E6%8A%A5%E5%91%8A.php">比赛题目解题报告</a></p>

<p><?php _tab();?>最后是本次比赛出题组（不分先后）：</p>
<span style="font-weight:bold;">
	<p><?php _tab();_tab();?>广州市铁一中学 abslime</p>
	<p><?php _tab();_tab();?>浙江省长兴中学 小王</p>
	<p><?php _tab();_tab();?>汕头市金山中学 swm_sxt</p>
	<p><?php _tab();_tab();?>浙江省衢州第二中学 Manchery</p>
	<p><?php _tab();_tab();?>北京师范大学贵阳附属中学 探索</p>
</span>
<p><?php _tab();?>感谢来自河北衡水中学的AntiLeaf提供的部分出题思路。感谢出题人们的辛勤付出。</p>