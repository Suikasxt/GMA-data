<head>
	<link rel="stylesheet" type="text/css" href="/CSS/problem.css" >
</head>

<p style="font-size:30px;font-weight:bold;line-height:100px;">Approach</p>
<p><?php _tab()?>我们构造一个随机数列：<math>a_1=1,a_{i+1}=(a_i*1706167+1534823)\%(1000000007)</math>，其中%表示整除取余操作。</p>
<p><?php _tab()?>现在你需要在这个数列的前<math>10^6</math>个数中挑出3个数（下标不可重复），并得到这3个数的乘积。但是一个数如果带着一堆后缀0，这个乘积去掉后缀零后得到的值就是你的最终得数。</p>
<p><?php _tab()?>求出可能的最大得数。</p>