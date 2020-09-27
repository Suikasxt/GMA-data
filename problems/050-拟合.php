<head>
	<link rel="stylesheet" type="text/css" href="/CSS/problem.css" >
</head>

<p style="font-size:30px;font-weight:bold;line-height:100px;">拟合</p>
<p><?php _tab()?>谁没有过拿绝对值函数拟合图案的经历呢？</p>
<p><?php _tab()?>你现在拿到了一个函数<math>F(x)=\sum_{i=1}^n |a_i-x|</math>，拟合目标是<math>F(233)=F(232)=...=F(0)=F(-1)=...=F(-232)=F(-233)=637954</math>，另外为了**，希望<math>a_n</math>是个<b>等差数列</b>，而且要<b>尽可能长</b>(即n尽可能大)，求n的最大值。</p>