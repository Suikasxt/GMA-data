<head>
	<link rel="stylesheet" type="text/css" href="/CSS/problem.css" >
</head>

<p class="title">数列求和(Hard)</p>
<p><?php _tab()?>在数列{<math>a_n</math>}中，<math>a_1=-\frac{1}{4}</math>，<math>\frac{1}{a_{n+1}}+\frac{1}{a_n}=\begin{cases}-3（n为偶数）\\3（n为奇数） \end{cases}</math></p>
<p><?php _tab()?>当n趋近于正无穷时，求{<math>a_n</math>}的前n项和。</p>
<p><?php _tab()?>由于结果比较复杂，请将答案化为最简后按照以下约定处理后给出：</p>
<p><?php _tab();_tab();?><b>1</b>.本题答案保证可以表示为<math>A*ln(B)+C*e+D*π+\sqrt{E}*π+F</math>的形式。</p>
<p><?php _tab();_tab();?><b>2</b>.其中A,B,C,D,E,F均为有理数（可能为0），B为整数。</p>
<p><?php _tab();_tab();?><b>3</b>.B不含平方因子。</p>
<p><?php _tab();_tab();?>请给出A+B+C+D+E+F的结果，保留小数点后9位。</p>