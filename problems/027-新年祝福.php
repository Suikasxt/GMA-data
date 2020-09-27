<?php $n=15;?>
<head>
	<link rel="stylesheet" type="text/css" href="/CSS/problem.css" >
</head>

<p class="title">新年祝福</p>
<p><?php _tab()?><?php echo $n;?>个人聚集在一起，新年到来，他们每个人写下了一句新年祝福。大家把祝福收集起来，然后重新分回去。如果一个人拿到了自己写的祝福，他就会觉得很没有意思，因为得不到别人的祝福。要避免这种尴尬，一共会有多少种分配方案？</p>
<p><?php _tab()?>一句话题意：求满足下列条件的n的排列个数：对于任意i(1≤i≤n)，排列的第i个数不是i。本题中n=<?php echo $n;?>。</p>
<p><?php _tab()?>例如n=3时，满足条件的排列有2个：312和231</p>