<?php $list=array(122,123,125,11,43,124);?>
<h1 style="font-size:30px;font-weight:bold;line-height:100px;" align=center>GMA Round 3 谢幕</h1>

<p><?php _tab();?>GMA Round 3完满谢幕！<s>（个鬼哦）</s></p>
<p><?php _tab();?>首先恭喜在此次比赛中获得前6名的选手</p>
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
<img class="ui medium circular image" src="/image/personal/<?php echo FindHead(126);?>" style="width:60px;height:60px;display:inline;">
	&nbsp;&nbsp;
<a style="font-size:17px;font-weight:bold;" href="user.html?id=77"><?php echo ask_username(126)?></a>&nbsp;&nbsp;
<img class="ui medium circular image" src="/image/personal/<?php echo FindHead(96);?>" style="width:60px;height:60px;display:inline;">
	&nbsp;&nbsp;
<a style="font-size:17px;font-weight:bold;" href="user.html?id=89"><?php echo ask_username(96)?></a>&nbsp;&nbsp;</p>
<p><?php _tab();?>接下来是激动人心的开奖环节！</p>

<table class="ui celled padded table">
	<thead>
		<tr>
			<th style="width:50px;">#</th>
			<th style="">获得奖品</th>
			<th style="">备注</th>
			<th style="">信息</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th style="">1</th>
			<th style="">景品</th>
			<th style="">兑现换为大会员包季*2（假装是Rank1特权）</th>
			<th style="">bilibili用户名</th>
		</tr>
		<tr>
			<th style="">2</th>
			<th style="">书</th>
			<th style="">加纪念品</th>
			<th style="">书名或购买链接及邮寄地址</th>
		</tr>
		<tr>
			<th style="">3</th>
			<th style="">Steam游戏</th>
			<th style=""></th>
			<th style="">Steam游戏名及用户名</th>
		</tr>
		<tr>
			<th style="">4</th>
			<th style="">命题组成员请客吃饭一次</th>
			<th style="">限THU校内，以及我有空的时间</th>
			<th style=""></th>
		</tr>
		<tr>
			<th style="">5</th>
			<th style="">西瓜一个</th>
			<th style="">预计通过每日优鲜发放，加纪念品</th>
			<th style="">姓名地址及希望送达的时间</th>
		</tr>
		<tr>
			<th style="">6</th>
			<th style="">分配失败</th>
			<th style="">变更为纪念品包邮</th>
			<th style=""></th>
		</tr>
		<tr>
			<th style="">14</th>
			<th style="">电影票50RMB内报销</th>
			<th style=""></th>
			<th style="">微信名或支付宝账号，然后发送电影票照片或购买截图</th>
		</tr>
		<tr>
			<th style="">15</th>
			<th style="">微信红包（￥9.99）</th>
			<th style=""></th>
			<th style=""></th>
		</tr>
	</tbody>
</table>
<p><?php _tab();?>烦请各位再次使用注册邮箱发送奖品发放所需信息，如需沟通细节（或者纯粹交友）请附上微信名。</p>
<p><?php _tab();?>纪念品准备周期较长请耐心等候<s>我们咕一段时间</s>，目前已知需要纪念品的对应Rank有：2、5、6、13、16，未提供邮寄地址的话也请追加。</p>
<br>
<p><?php _tab();?>最后感谢本次比赛出题人：swm_sxt，探索，小王，验题人：abslime</p>
<p><?php _tab();?>感谢各位对GMA的支持！</p>