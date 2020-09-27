<?php
	require_once("style.php");
	
	$view=1;
	if (isset($_SESSION['user_id'])){
		$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
		$query="SELECT admin FROM Users WHERE user_id=".$_SESSION['user_id'];
		$data=mysqli_query($conn,$query);
		$row=mysqli_fetch_array($data);
		$Admin=$row['admin'];
		mysqli_close($conn);
		if ($Admin>0) $view=1;
	}

	if (!$view){
		?>
		<i class="warning sign icon"></i><h3 style="display:inline;">Please wait until the contest end.</h3>
		<?php
		exit(0);
	}
?>
<h1 style="font-size:30px;font-weight:bold;line-height:100px;" align=center>GMA Round 3 解题报告</h1>

<h1>简单开心我会</h1>
<p><?php _tab();?>GMA天下第……</p>
<br>
<h1>拟合</h1>
<p><?php _tab();?>显然数列<math>{a_n}</math>中需要有一半小于等于-233，一半大于233，为使n尽可能大只需公差为466。再由<math>\sum_{i=1}^{i=n}|a_i|=637954</math>得<math>n_{max} = 74</math>。</p>
<br>
<h1>常规曲线</h1>
<p><?php _tab();?>M轨迹为抛物线，可得<math>\frac{1}{|AF|}+\frac{1}{|DF|}=\frac{1}{2019}</math>，于是<math>|AC|+4|BD|=|AF|+4|DF|+5 \geq 2019*9+5=18176</math></p>
<br>
<h1>常规几何</h1>
<p><?php _tab();?>易得<math>CD_1</math>中点与<math>A_1D_1</math>中点的连线为P轨迹，由于限定在三角形内需要再除以二。</p>
<br>
<h1>常规计数</h1>
<p><?php _tab();?><math>\sum_{i=0}^{2019}C_n^i*(-x)^i=(1-x)^{2019}</math>，两边积分即可得<math>\sum_{i=0}^{2019}\frac{C_n^i*(-1)^i}{i+1}=\frac{1}{2020}</math></p>
<br>
<h1>HTML</h1>
<p><?php _tab();?>打开网页源码即可发现一个标签名为answer的隐藏元素，内容即为答案。</p>
<br>
<h1>Milk</h1>
<p><?php _tab();?>n套器材共有<math>2^n</math>种不同的组合，即可以识别<math>2^n</math>瓶牛奶，因此取log即可。</p>
<br>
<h1>ABC</h1>
<p><?php _tab();?>a循环节为8，可以推得<math>t_0=2019,b_1=3</math></p>
<p><?php _tab();?><math>b_{n+1}-b_n-2^{n+1}={[b_n-(2^{n+1}-2)+1]*[b_n-(2^{n+1}-2)]+1}^{\frac{1}{2}}</math>，设<math>d_n=b_{n+1}-b_n-2^{n+1}</math>，前n项和记为<math>S_n</math>，有<math>d_{n+1}=\sqrt{S_n^2+S_n+1}</math>，即<math>d_n^2=S_n^2+1^2-2*S_n*\cos{120°}</math>，之后可以转化为顶角120°，三边分别为<math>d_{n+1},S_n,1</math>的钝角三角形进行求解。故<math>d_n=\frac{\sqrt{3}}{2*\sin{\frac{\pi}{3*2^{n-1}}}},b_n=\frac{\sqrt{3}}{2*\tan{\frac{\pi}{3*2^n}}}-\frac{1}{2}+2^{n+1}-2,m=741076</math></p>
<img style="width:400px" src="/problems/others/56.png"/>
<p><?php _tab();?>令<math>C_n=f_n+\frac{1}{f_n},g(x)=x+\frac{1}{x}</math>则<math>g(f_{n+1})=g(f_n^3)</math>，易得<math>g(x)</math>在<math>[8,+\infty]</math>递增，所以<math>f_{n+1}=f_n^3</math>，故<math>f_n=2^{3^n},c_n=2^{3^n}+\frac{1}{2^{3^n}}</math>，最终可得<math>k=3^{741076}</math></p>
<br>
<h1>连珠</h1>
<p><?php _tab();?>题目设计的出发点是希望大家写程序来AI对战的，但假如你可以手玩过去就……</p>
<p><?php _tab();?>事实上是可以不写代码的，AI在本地javascript跑，完全可以直接改程序让AI之间对打，这就叫不战而胜。</p>
<p><?php _tab();?>AI本身只是一个简单的极大极小搜索。</p>
<br>
<h1>abc</h1>
<p><?php _tab();?><math>\frac{b}{1+a^2}+\frac{c}{1+b^2}+\frac{a}{1+c^2}=(a+b+c)-\frac{a^2b}{1+a^2}-\frac{b^2c}{1+b^2}-\frac{c^2a}{1+c^2}\geq 3-(\frac{ab}{2}+\frac{bc}{2}+\frac{ca}{2})=\frac{(a+b+c)^2}{4}-\frac{ab+bc+ca}{2}+\frac{3}{4}=\frac{a^2+b^2+c^2}{4}+\frac{3}{4} \geq \frac{3}{4}+\frac{3}{4} = \frac{3}{2}</math></p>
<br>
<h1>常规概率</h1>
<p><?php _tab();?><math>P(0)=\frac{1}{10}, P(1)=\frac{6}{10}, P(2)=\frac{3}{10}, E(X)=\frac{6}{5}, D(X)=\frac{9}{25}</math></p>
<br>
<h1>椭圆</h1>
<p><?php _tab();?>暴算题：<math>F_1(-1, 0), F_2(1, 0)</math></p>
<p><?php _tab();?><math>D(2, \frac{3\sqrt{15}}{5})</math>, 过D切线<math>\frac{x}{5}+\frac{\sqrt{15}y}{15}=1</math></p>
<p><?php _tab();?><math>E(5, 0), G(10, -\sqrt{15})</math>，I轨迹为<math>x^2+y^2=10</math></p>
<p><?php _tab();?><math>I(2, \sqrt{6})</math>，<math>l_{EI}:y=-\frac{\sqrt{6}}{3}(x-5)</math>，<math>l_{DF_{2}}:y=\frac{3\sqrt{15}}{5}(x-1)</math></p>
<p><?php _tab();?><math>J:(\frac{31+36\sqrt{10}}{71}, \frac{108\sqrt{6}-24\sqrt{15}}{71})</math></p>
<p><?php _tab();?><math>F_2J=\frac{32}{9+\sqrt{10}}</math>，<math>F_2G=4\sqrt{6}</math></p>
<p><?php _tab();?><math>JF_2\perp F_2G</math>，<math>S_{\triangle JF_2G}=\frac{64\sqrt{6}}{9+\sqrt{10}}</math></p>
<p><?php _tab();?><math></math></p>
<br>
<h1>常规期望</h1>
<p><?php _tab();?><math>\frac{\int_0^1 x^{n-1} * x dx}{\int_0^1 x^{n-1} dx}=\frac{n}{n+1}</math></p>
<br>
<h1>常规娱乐题</h1>
<p><?php _tab();?>用S, W, T, O分别代表三位出题人和一道外来idea，本次15题序列是：SWWWWSOTTSTTTSS</p>
<br>