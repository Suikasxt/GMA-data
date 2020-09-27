<?php
	require_once("style.php");
	
	$view=1;
	/*if (isset($_SESSION['user_id'])){
		$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
		$query="SELECT admin FROM Users WHERE user_id=".$_SESSION['user_id'];
		$data=mysqli_query($conn,$query);
		$row=mysqli_fetch_array($data);
		$Admin=$row['admin'];
		mysqli_close($conn);
		if ($Admin>0) $view=1;
	}*/

	if (!$view){
		?>
		<i class="warning sign icon"></i><h3 style="display:inline;">Please wait until the contest end.</h3>
		<?php
		exit(0);
	}
?>
<h1 style="font-size:30px;font-weight:bold;line-height:100px;" align=center>GMA Round 2 解题报告</h1>

<h1>Die down</h1>
<p><?php _tab();?><math>\lceil\frac{\ln\frac{10^8}{10^{-5}}}{\ln(\frac{1}{0.9})}\rceil=285</math></p>
<br>


<h1>Valkyrie Crusade</h1>
<p><?php _tab();?>方案①：考虑经过t回合后，所有技能已全发动的概率（包括在t以前即全发动），这个值为：<math>P_t=(1-(1-0.05)^t)^n</math>。所求期望为<math>\sum_{t=1}^{\infty} 1-P_T=\sum_{t=1}^{\infty} 1-(1-(0.05)^t)^n</math> 把最外层n次幂展开，抵消掉常数1后有n个项，每个项形如<math>(-(1-0.05)^k)^t*C(n,k)</math>可以逐项对这个t进行求和，最终等于<math>\sum_{i=1}^{n}\frac{1}{1-(1-0.05)^k}*C(n,k)-1</math>。</p>
<p><?php _tab();?>方案②：所有普通卡都是一致的，考虑当前已经发动了a张卡，发动第a+1张需要的期望回合数为<math>\frac{n-1}{n-1-a}</math>，由于概率为50%再乘上2，最终期望等待回合数为<math>(\sum_{i=1}^{n-1}\frac{n-1}{i})*2-1</math></p>
<p><?php _tab();?><a href="/contest/0003/others/Valkyrie Crusade.py">Valkyrie Crusade.py</a></p>
<br>


<h1>Fool</h1>
<p><?php _tab();?>小数据背包即可。</p>
<p><?php _tab();?>先考虑等于n，发现解的个数是一个6次多项式，但是系数与n模420(1到7的lcm)下的值有关，因此考虑每420个一组求和，这样就是一个确定的多项式，再求前缀和变成7次多项式，插值把多项式求出来即可。因为觉得这么出题不太厚道就把V2的n设成这样一个一眼就能看出是420倍数的数字。</p>
<p><?php _tab();?><a href="/contest/0003/others/Fool.cpp">Fool.cpp</a></p>
<br>


<h1>Obliterate</h1>
<p><?php _tab();?>轮廓线DP即可。具体就是用<math>3^{15}</math>的状态表示轮廓线上一个格子是中心格子/已经被刷新/未被刷新，再逐格转移。</p>
<p><?php _tab();?><a href="/contest/0003/others/Obliterate.cpp">Obliterate.cpp</a></p>
<br>


<h1>Say Less</h1>
<p><?php _tab();?>推销本站函数图像生成器用的。<a href="https://enceladus.cf/function.html?pre=AT;f_0_ln(e+x)/x+e^x-a*ln(x)_DLT;g_a_(ST-0.5)*30">Sample</a></p>
<br>


<h1>Good and Bad</h1>
<p><?php _tab();?>求出所有质数后按顺序枚举所求数质因数分解后的结果，枚举至剩余部分大小小于当前质数的平方，则接下来必定只能接一个质数，套用<math>n^{\frac{2}{3}}</math>的求范围内质数个数算法即可</p>
<p><?php _tab();?><a href="/contest/0003/others/Good and Bad.cpp">Good and Bad.cpp</a></p>
<br>


<h1>Game</h1>
<p><?php _tab();?><math>\frac{a^2}{2} \leqq b^2	\implies a \leqq b*\sqrt{2}</math>先用连分数求出<math>\sqrt{2}</math>的近似分数，然后用类似欧几里得算法的递归法求整点个数即可。</p>
<p><?php _tab();?><a href="/contest/0003/others/Game.py">Game.py</a></p>
<br>


<h1>Approach</h1>
<p><?php _tab();?>去掉后缀零其实是唬人的，直接找到最大的三个数乘起来即可，最后并没有后缀零。如果要正面做这个题的话，就把数列中的数字按照包含2的幂、5的幂进行分类，每种保留前3大的数，最后爆枚即可。</p>
<p><?php _tab();?><a href="/contest/0003/others/Approach.py">Approach.py</a></p>
<br>