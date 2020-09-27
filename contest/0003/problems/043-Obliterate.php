<head>
	<link rel="stylesheet" type="text/css" href="/CSS/problem.css" >
</head>

<p style="font-size:30px;font-weight:bold;line-height:100px;">Obliterate</p>
<p><?php _tab()?>过去的痕迹需要抹杀掉。</p>
<p><?php _tab()?>这块正方形石板上有N*N个格子，每个格子都记录着一段回忆。你的刷子是一个十字形的工具，选定一个中心格后可以刷新该格及其4相邻的所有格子。</p>
<p><?php _tab()?>假设每个格子都有一半的概率被设定为中心格子（有多少个格子被设为中心格子则用刷子多少次），记<math>F(N)</math>表示将石板完全刷新的概率与<math>2^{N*N}</math>的乘积。<math>F(2)=11</math>。</p>
<p><?php _tab()?>求<math>F(15)</math>。</p>