<head>
	<link rel="stylesheet" type="text/css" href="/CSS/problem.css" >
</head>

<p class="title">代数数</p>
<p><?php _tab()?>对于一个数M，你需要求一个最小的正整数n，使得存在整数<math>a_0</math>,<math>a_1</math>,<math>a_2</math>,...,<math>a_n</math>满足<math>\sum_{i=0}^{n}a_i*M^i=0</math></p>
<p><?php _tab()?>例如，<math>M=\sqrt{6}</math>时，答案为2，因为此时<math>M^2-6=0</math>。<math>M=\sqrt{2}+\sqrt{3}</math>时，答案为4，因为此时<math>M^4-10*M^2+1=0</math></p>
<p><?php _tab()?>现在你需要求出<math>M=\sum_{i=800000}^{1000000}\sqrt{i}</math>时的答案，这个答案可能很大，请将其对<math>10^9+7</math>取模。</p>