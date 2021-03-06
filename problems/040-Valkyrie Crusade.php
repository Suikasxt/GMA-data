<head>
	<link rel="stylesheet" type="text/css" href="/CSS/problem.css" >
</head>

<p style="font-size:30px;font-weight:bold;line-height:100px;">Valkyrie Crusade</p>
<p><?php _tab()?>谨此留念。</p>
<p><?php _tab()?>这是一个回合制卡牌游戏，暂且抛开实际，将卡牌分为普通卡和点灯卡两种。普通卡有一个攻击技能，每个回合开始时所有未进入发动状态的卡都有一定概率进入发动状态。点灯卡的效果是在回合开始时有一定概率使随机一张普通卡变为发动状态（每张普通卡等概率，且无论其是否已经进入发动状态）。这里提到的概率称为发动概率。</p>
<p><?php _tab()?>现在假设某人可以出战n张卡，他可以选择下列两种出战方案：①全部出战普通卡，每张卡的发动概率都是5%。②出战n-1张普通卡和1张点灯卡，每张普通卡的发动概率都是0%，点灯卡发动概率是50%。</p>
<p><?php _tab()?>出于某种需要，他需要等到所有普通卡的技能都处于发动状态后再一起发动攻击。</p>
<p><?php _tab()?>在实际中，n的值为5，方案①发动攻击需要<b>等待</b>的期望回合数约是44，方案②则约是15.67，显然方案②更优。（如果第K个回合可以发动攻击，我们称等待了K-1个回合）</p>
<p><?php _tab()?>某天，游戏出现了BUG，n的值变成了1000，他现在就不知道方案①和②哪个更优，因此想问一下你，方案①需要等待的期望回合数减去方案②以后的值是多少。结果保留8位小数。</p>