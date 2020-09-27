<head>
	<link rel="stylesheet" type="text/css" href="/CSS/problem.css" >
</head>

<p style="font-size:30px;font-weight:bold;line-height:100px;">Water</p>
<p><?php _tab()?>你的任务是给山坡上的 10 块地浇水，每次会从还没成功浇灌的地中等概率随机抽一块出来浇上水。实际在浇的时候，你发现如果 10 号地还没浇就去浇 9 号地，浇在 9 号地上的水就会流失，9 号地仍是没浇过的状态，但此次浇水仍然计数。即对于任意的整数 x(1<=x<=9)，只有当 x+1 被成功浇灌过时，才能成功地浇 x 号地，否则该次浇地失败，但仍然计数。完成这 10 块地的浇灌的期望浇灌次数是多少呢？</p>
