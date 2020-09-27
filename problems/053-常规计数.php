<head>
	<link rel="stylesheet" type="text/css" href="/CSS/problem.css" >
</head>

<p style="font-size:30px;font-weight:bold;line-height:100px;">常规计数</p>
<p><?php _tab();?>这当然是一道常规的计数题。</p>
<p><?php _tab();?>有2020个框，分别编号为0到2019，每个框里有2019个互不相同的球。现从每个框里取球，取出球的数量等于该框编号，记每个框内取球方案数为<math>a_0, a_1, a_2,...,a_{2019}</math></p>
<p><?php _tab();?>求<math>\sum_{i=0}^{2019}\frac{(-1)^i*a_i}{i+1}</math>（保留小数点后6位）</p>