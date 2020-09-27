<head>
	<link rel="stylesheet" type="text/css" href="/CSS/problem.css" >
</head>

<p style="font-size:30px;font-weight:bold;line-height:100px;">ABC</p>
<p><?php _tab();?>数列<math>{a_n}</math>中<math>a_1=a_2=1</math>,<math>a_{n+2}=a_{n+1}+a_{n}</math>，且其前8079项能被3整除的共有<math>t_0</math>项。</p>
<p><?php _tab();?>数列<math>{b_n}</math>中有<math>b_1=\frac{t_0}{673}</math>，且<math>b_{n+1}=[(b_n-2^{n+1})^2+5(b_n-2^{n+1})+7]^{\frac{1}{2}}+b_n+2^{n+1}</math>，记<math>b_{18}</math>的整数部分为<math>m</math>。</p>
<p><?php _tab();?>数列<math>{c_n}</math>中<math>c_1=\frac{m-11}{11401}*\frac{1}{8}=\frac{m-11}{91208}</math>,<math>(c_{n+1}+3c_n)^{\frac{1}{3}}=c_n</math>，若<math>|c_m-2^k|\lt 0.01,k\in N+</math>，求<math>k</math>的值。（由于数字巨大，请将k质因数分解后给出(所有指数之积)+(所有底数之积)的结果即可）</p>