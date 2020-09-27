<head>
	<link rel="stylesheet" type="text/css" href="/CSS/problem.css" >
	<link rel="stylesheet" type="text/css" href="/CSS/058.css" >
</head>
<p style="font-size:30px;font-weight:bold;line-height:100px;">连珠</p>
<p><?php _tab()?>来吧，游戏开始了。</p>
<div style="width:160px;margin-left:auto;margin-right:auto;text-align:center;font-size:20px;">
	<div>
		<b style="color:#EE2C2C; float:left;" class = "score">
			<span id = "scoreA"></span>
		</b>
		<i onclick="Reset()" class="undo icon" style="margin-left:auto;margin-right:auto;line-height:40px;"></i>
		<b style="color:#4169E1; float:right;" class = "score">
			<span id = "scoreB"></span>
		</b>
	</div>
	<br>
	<div id = "game" UnSelect=YES></div>
</div>
<div align=center>
	<b>
		LOG:<span id="log"></span>
	</b>
</div>
<div class="ui input" style="display:none">
	<input id="argc" value="8"/>
</div>
<div class="ui input" style="display:none">
	<input id="N" value="12"/>
	<input id="M" value="5"/>
</div>
<p><?php _tab()?>顾名思义，这是一个需要你把珠子连起来的游戏。</p>
<p><?php _tab()?>你与游戏神轮流操作，你是先手。<b>每次操作可以再某一未满的列将珠子落下，珠子将在重力作用下掉落。除非当前只剩一列未满，否则不能将珠子落在对方上一次落珠的一列。任何时刻不允许某两列的数量差超过3。棋盘完全填满时游戏结束。</b></p>
<p><?php _tab()?>计分方式：如果有n个相同颜色的珠子相连成一条线段（可以是水平或两种45°斜向的线段，竖直不计），且线段两端延伸均会碰到边界或异色珠子，则该颜色所属方得分(n-1)<sup>3</sup>，例如，如果一个3*3的矩形都是同色珠子，则改方得分8*(3+2)+1*4=44（长度为3的线段有水平3条，斜向两条，长度为2有斜向4条）。</p>
<p><?php _tab()?>只要游戏结束时你的得分高于游戏神，就算通过考验，你需要将自己的操作序列作为答案上交，这个序列用一个只包含大写字母'A'~'E'的字符串表示，依次代表第1~5列，游戏过程中我们已经准备好了记录工具，你只需将LOG中的字符串复制到输入框上交即可。由于游戏神的操作没有随机性，只要知道了你的操作序列，我们就可以还原出整个游戏过程，以此判断你是否真的取胜了。</p>
<p><?php _tab()?>为提高用户体验，我们默认设置了本页面AI会在玩家完成操作<span class="ui input"><input style="width:65px;" id="delay" value="500"/></span>ms后才开始运行，选手可以根据自身需要在输入框中直接调整该值。</p>
<p><?php _tab()?>由于此题的判题过程对服务器算力消耗较大（可以明显地注意到提交后页面等待时间较长），希望诸君自觉爱护服务器，谨慎提交。</p>
<p><?php _tab()?>另外我们还为选手提供了AI的可执行程序：<a href="/problems/check/58_Release.exe">Windows</a>、<a href="/problems/check/58_Release">Linux</a>。（暂时只有这两个版本）。该程序会不断从stdin读入选手操作，并向stdout输出AI操作，用0开始的非负整数表示列标号，选手输入-1表示提前结束游戏。游戏结束后会向stdout输出双方得分。</p>
<p><?php _tab()?>游戏的最终季的获胜方式是不战而胜。</p>
<br>
<br>
<script src="/js/058.js"></script>