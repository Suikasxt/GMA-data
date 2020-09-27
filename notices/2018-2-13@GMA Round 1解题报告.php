<h1 style="font-size:30px;font-weight:bold;line-height:100px;" align=center>GMA Round 1 解题报告</h1>
<h1>向量计算</h1>
<p><?php _tab();_tab();?><math>\left | \overrightarrow{AB}+\overrightarrow{CD}  \right |^2+ \left | \overrightarrow{CD}+\overrightarrow{EF}  \right |^2+ \left | \overrightarrow{EF}+\overrightarrow{AB}  \right |^2</math></p>
<p><?php _tab();?><math>=\left |\overrightarrow{AB}  \right |^2+\left |\overrightarrow{CD}  \right |^2+2\overrightarrow{AB}\cdot \overrightarrow{CD}+\left |\overrightarrow{CD}  \right |^2+\left |\overrightarrow{EF}  \right |^2+2\overrightarrow{CD}\cdot \overrightarrow{EF}+\left |\overrightarrow{EF}  \right |^2+\left |\overrightarrow{AB}  \right |^2+2\overrightarrow{EF}\cdot \overrightarrow{AB}</math></p>
<p><?php _tab();?><math>=2\left |\overrightarrow{AB}  \right |^2+2\left |\overrightarrow{CD}  \right |^2+2\left |\overrightarrow{EF}  \right |^2+2\overrightarrow{AB}\cdot \overrightarrow{CD}+2\overrightarrow{CD}\cdot \overrightarrow{EF}+2\overrightarrow{EF}\cdot \overrightarrow{AB}</math></p>
<p><?php _tab();?><math>=2*(\left |\overrightarrow{AB}  \right |^2+\left |\overrightarrow{CD}  \right |^2+\left |\overrightarrow{EF}  \right |^2+\overrightarrow{AB}\cdot \overrightarrow{CD}+\overrightarrow{CD}\cdot \overrightarrow{EF}+\overrightarrow{EF}\cdot \overrightarrow{AB})</math></p>
<p><?php _tab();?><math>=2*18</math></p>
<p><?php _tab();?><math>=36</math></p>
<p><?php _tab();?>定位：简单题</p>
<br><br><br>



<h1>三视图</h1>
<p><?php _tab();?>该几何体如图所示，是一个边长为<math>2\sqrt{3}</math>的正四面体，高是<math>h=2\sqrt{2}</math>，内切球半径是<math>r=\frac{h}{4}=\frac{\sqrt{2}}{2}</math>，则体积<math>V=\frac{4}{3}\pi r^3=\frac{\sqrt{2}}{3}*\pi</math></p>
<p><?php _tab();?>至于为什么<math>r=\frac{h}{4}</math>你可以连接内切球球心到各个点，把这个正四面体切成4个三棱锥，根据体积列式：<math>\frac{1}{3}h*S=4*\frac{1}{3}r*S</math>（S表示一个面的面积）</p>
<p><?php _tab();?>定位：简单题</p>
<img src="/notices/others/1.png"/>
<br><br><br>



<h1>二项式展开</h1>
<p><?php _tab();?>用排列组合的思想，相当于在12个括号里选项出来。先把<math>2x</math>和<math>\frac{3}{x}</math>的项选出来，确保选这两种项的个数相等，假设<math>2x</math>和<math>\frac{3}{x}</math>各选i个(0<=i<=6)，方案数为<math>C_{12}^{i}C_{12-i}^{i}</math>，系数为<math>6^i</math>。剩下的项自由分配给-y和4z,令y=z=1，则可得系数和为<math>(4-1)^{12-2i}</math>。主要难点可能是计算量比较大。</p>
<p><?php _tab();?>答案为：<math>\sum_{i=0}^{6}6^i*3^{12-2i}*C_{12}^{2i}*C_{2i}^{i}</math></p>
<p><?php _tab();?>定位：简单题、计算题</p>
<br><br><br>



<h1>简单的线性规划</h1>
<p><?php _tab();?>根据不等式<math>\frac{3}{\frac{1}{a}+\frac{1}{b}+\frac{1}{c}}\leq \sqrt[3]{abc}\leq \frac{a+b+c}{3}(a>0,b>0,c>0)</math>，所以答案是<math>\frac{33*(x+3+y-1+12-x-y)}{3}</math>。</p>
<p><?php _tab();?>上面不等式的第一个不等号可以用均值不等式证明。</p>
<p><?php _tab();?>定位：简单题</p>
<br><br><br>



<h1>抛硬币</h1>
<p><?php _tab();?>直接套公式<math>np(1-p)*(X-Y)^2=666*0.6*(1-0.6)*(3-1)^2</math></p>
<p><?php _tab();?>稍微证明一下这个式子，题目等价于正面2分，反面不得分，这里我们先假设正面得1分。</p>
<p><?php _tab();?>首先我们来证明期望等分E(x)=np：</p>
<p><?php _tab();_tab();?><math>\sum_{i=0}^{n}*P(i)*i</math></p>
<p><?php _tab();?><math>=\sum_{i=0}^{n}C_{n}^{i}*i*p^i*(1-p)^{n-i}</math></p>
<p><?php _tab();?><math>=\sum_{i=1}^{n}n*C_{n-1}^{i-1}*p^i*(1-p)^{n-i}</math></p>
<p><?php _tab();?><math>=n\sum_{j=0}^{n-1}C_{n-1}^{j}*p^(j+1)*(1-p)^{n-1-j}</math>（设<math>j=i-1</math>）</p>
<p><?php _tab();?><math>=np\sum_{j=0}^{n-1}C_{n-1}^{j}*p^j*(1-p)^{n-1-j}</math></p>
<p><?php _tab();?><math>=np(p+1-p)^{n-1}</math></p>
<p><?php _tab();?><math>=np</math></p>

<p><?php _tab();?>那么得分为i(0≤i≤n)的概率为<math>P(X=i)=C_{n}^{i}p^i(1-p)^{n-i}</math>，方差
<math>S^2=\sum_{i=0}^{n}P(i)*(i-np)^2=\sum_{i=0}^{n}P(i)*(i^2+n^2p^2-2inp)=\sum_{i=0}^{n}P(i)*i^2-n^2p^2</math></p>
<p><?php _tab();?>接下来只要求出得分的平方的期望值即可：</p>
<p><?php _tab();_tab();?><math>\sum_{i=0}^{n}*P(i)*i^2</math></p>
<p><?php _tab();?><math>=\sum_{i=0}^{n}*C_{n}^{i}*i^2*p^i*(1-p)^{n-i}</math></p>
<p><?php _tab();?><math>=n\sum_{i=0}^{n-1}i*C_{n-1}^{i-1}*p^i*(1-p)^{n-i}</math></p>
<p><?php _tab();?><math>=np\sum{j=0}^{n-1}(j+1)*C_{n-1}^{j}*p^j*(1-p)^{n-1-j}</math></p>
<p><?php _tab();?><math>=np((n-1)p+1)</math></p>
<p><?php _tab();?><math>=n^2p^2-np^2+np</math></p>
<p><?php _tab();?><math>=n^2p^2+np(1-p)</math></p>
<p><?php _tab();?>代入上式可得<math>S^2=n^2p^2+np(1-p)-n^2p^2=np(1-p)</math>，由于原题是正面得两分那么我们在这个式子的基础上乘个4就可以了。</p>
<p><?php _tab();?>由于高中阶段只要求记忆最终公式，不要求证明，本题实际上变成了为高三选手提供优势的题目。（看到好多高一高二选手卡在这道题）</p>
<p><?php _tab();?>定位：简单题</p>
<br><br><br>



<h1>相交</h1>
<p><?php _tab();?>根据题意可以很容易得到<math>a≥b^2</math>，然后积分求面积即可。</p>
<p><?php _tab();?>定位：简单题</p>
<br><br><br>



<h1>最大值</h1>
<p><?php _tab();_tab();?><math>f(x)+\sqrt{3}</math></p>
<p><?php _tab();?><math>=\sqrt{cos^2x+2\sqrt{3}x+3}+\sqrt{cos^2x-4\sqrt{3}cos+4\sqrt{2}sinx+10}</math></p>
<p><?php _tab();?><math>=\sqrt{3cos^2x+2\sqrt{3}x+2sin^2x+1}+\sqrt{3cos^2x-4\sqrt{3}cosx+4sqrt{2}sinx+2sin^2x+8}</math></p>
<p><?php _tab();?><math>=\sqrt{(\sqrt{3}cosx+1)^2+(\sqrt{2}sinx)^2}+\sqrt{(\sqrt{3}cosx-2)^2+(\sqrt{2}sinx+2)^2}</math></p>


<p><?php _tab();?>设<math>P(\sqrt{3}cosx,\sqrt{2}sinx)</math>，<math>F_1(-1,0)</math>,<math>F_2(1,0)</math>,<math>A(2,-2)</math>。P的轨迹是以<math>F_1</math>、<math>F_2</math>为焦点的椭圆。</p>
<p><?php _tab();?><math>f(x)+\sqrt{3}=|PA|+|PF_1|=|PA|+2a-|PF_2|≤2a+|AF_2|=2\sqrt{3}+\sqrt{5}</math>因此<math>f(x)≤\sqrt{3}+\sqrt{5}</math></p>
<p><?php _tab();?>定位：中等题</p>
<br><br><br>



<h1>函数求值</h1>
<p><?php _tab();?>设g(x)=f(x)-212x，1~2017为g(x)的2017个零点，设最后一个零点横坐标为r，g(x)=(x-1)(x-2)……(x-2017)(x-r)。</p>
<p><?php _tab();?>g(0)=1*2*……*2017*r=2017!*r</p>
<p><?php _tab();?>g(2018)=2017*……*2*1*(2018-r)=2017!*(2018-r)</p>
<p><?php _tab();?>g(0)+g(2018)=2017!*(r+2018-r)=2018!</p>
<p><?php _tab();?>原式=g(0)+g(2018)+0*212+2018*212-2018!=2018*212=427816</p>
<p><?php _tab();?>定位：中等题</p>
<br><br><br>



<h1>双曲线与面积</h1>
<img src="/notices/others/2.png"/>
<p><?php _tab();?>如图，本题中a=1471，b=1372，设A坐标为<math>(x_1,\frac{b}{a}x_1)</math>，B坐标为<math>(x_2,-\frac{b}{a}x_2)</math>，易得<math>\frac{(x_1+x_2)^2}{4a^2}-\frac{(x_1-x_2)^2}{4a^2}=1</math>，化简得<math>x_1x_2=a^2</math>，<math>S=\frac{1}{2}*(x_1*\sqrt{1+\frac{b^2}{a^2}})*(x_2*\sqrt{1+\frac{b^2}{a^2}})*sin∠AOB=ab</math></p>
<p><?php _tab();?>定位：简单题</p>
<br><br><br>



<h1>数列求单项</h1>
<p><?php _tab();?>设<math>b_n=\frac{1}{a_n}</math>，易得<math>b_n=(-1)^n(3n+1)</math>，因此<math>a_n=\frac{1}{(-1)^n(3n+1)}</math>。</p>
<p><?php _tab();?>定位：简单题</p>
<br><br><br>



<h1>数列求和(Hard)</h1>
<p><?php _tab();?>由泰勒公式得</p>
<math>\frac{1}{1+x^3}=1-x^3+x^6-x^9+……+(-1)^nx^{3n}+……(x\in(-1,1))</math>
<p><?php _tab();?>对两端从0到t进行积分得</p>
<math>\int_{0}^{t}\frac{1}{1+x^3}dx</math>
<math>=\int_{0}^{t}dx-\int_{0}^{t}x^3dx+……</math>
<math>=t-\frac{t^4}{4}+\frac{t^7}{7}-……+(-1)^n\frac{t^{3n+1}}{3^n+1}+……</math>
<p><?php _tab();?>又</p>
<math>\int_{0}^{t}dx=\frac{1}{3}ln\frac{t+1}{\sqrt{t^2-t+1}}+\frac{\sqrt{3}}{3}arctan\frac{2\sqrt{3}t-\sqrt{3}}{3}+\frac{\sqrt{3}}{18}\pi</math>
<p><?php _tab();?>由莱布尼茨审敛法知<math>\sum_{n=0}^{\infty}(-1)^n\frac{1}{3n+1}</math>收敛</p>
<p><?php _tab();?>令t=1得</p>
<math>\sum_{n=1}^{\infty}a_i=\sum_{n=1}^{\infty}(-1)^n\frac{1}{3n+1}=\frac{1}{3}ln2+\frac{\sqrt{3}}{9}\pi-1</math>
<p><?php _tab();?>定位：困难题、超纲题</p>
<br><br><br>



<h1>奇怪的数列</h1>
<p><?php _tab();?>将原等式两边平方得<math>a_{n+1}^2=a_n^2+2+\frac{1}{a_n^2}</math>，<math>\frac{1}{a_n^2}</math>可舍去，于是<math>a_n\approx\sqrt{2*n-1}</math></p>
<p><?php _tab();?>定位：简单题、思维题</p>
<br><br><br>



<h1>极坐标的忧伤</h1>
<p><?php _tab();?>不难将给出的极坐标方程化为参数方程：<math>\begin{cases}x=f(t)=tcost\\y=g(t)=tsint\end{cases}</math>，根据提示知道f'(t)即是<math>\frac{dx}{dt}</math>，g'(t)即是<math>\frac{dy}{dt}</math>，而题目要求的是f'(t)即是<math>\frac{dy}{dx}=\frac{g'(t)}{f'(t)}</math>，代入<math>t=\frac{\pi}{2}</math>可得<math>-\frac{2}{\pi}</math>。</p>
<p><?php _tab();?>定位：中等题、拓展题</p>
<br><br><br>



<h1>极坐标的愤怒</h1>
<p><?php _tab();?>提示中已经告知积分方向：</p>
<p><?php _tab();_tab();?><math>\int_{0}^{\frac{\pi}{2}}\frac{1}{2}r*rdt</math></p>
<p><?php _tab();?><math>=\int_{0}^{\frac{\pi}{2}}\frac{1}{2}t^2dt</math></p>
<p><?php _tab();?><math>=\frac{t^3}{6}|_{t=\frac{\pi}{2}}-\frac{t^3}{6}|_{t=0}</math></p>
<p><?php _tab();?><math>=\frac{\pi^3}{48}</math></p>
<p><?php _tab();?>定位：中等题、拓展题</p>
<br><br><br>



<h1>逃亡</h1>
<img src="/notices/others/3.png"/>
<p><?php _tab();?>如图所示，我们考虑更一般的情况。</p>
<p><?php _tab();?>可以得到下面的式子：</p>
<math>s_0=\int v_2dt-\int v_1cos\theta dt=v_2t-v_1\int cos\theta dt</math>
<math>s_1=\int v_2cos\theta dt-\int v_1dt=v_2\int cos\theta dt-v_1t</math>
<p><?php _tab();?>联立解得<math>t=\frac{v_2s_0+v_1s_1}{v_2^2-v_1^2}</math></p>
<p><?php _tab();?>定位：困难题、拓展题</p>
<br><br><br>



<h1>新年祝福</h1>
<p><?php _tab();?>设答案数列为<math>a_n</math>，容易知道<math>a_0=1</math>，<math>a_1=0</math>，下面我们证明<math>a_n=(n-1)(a_{n-1}+a_{n-2})</math>，利用这个式子就可以很容易算出<math>a_{15}</math></p>
<p><?php _tab();?>我们用这样一个角度看待n的一个排列：对于排列的第i个数<math>b_i</math>，我们连从i向<math>b_i</math>一条边，最后会得到一些环。例如2143对应两个环：1->2->1和3->4->3，长度均为2。31245对应3个环：1->3->2->1，4和5，长度分别为3、1、1。</p>
<p><?php _tab();?>一个符合条件的完全错位的排列不能有长度为1的环。要统计n时的所有合法排列，我们可以把它们分成两类：n所在环长度为2和n所在环大于2。第一类我们可以枚举与n在同一个环上的数字，一共有n-1种可能，此后剩下的n-2个数字可以独立考虑，方案数为<math>a_{n-2}</math>，所以是<math>(n-1)*a_{n-2}</math>。第二类在删除掉n这个数以后仍然是合法排列，可以在n-1的所有排列上任意位置插入一个n来得到，共有n-1种插入位置，所以是<math>(n-1)*a_{n-1}</math>。因此<math>a_{n}=(n-1)(a_{n-1}+a_{n-2})</math>。</p>
<p><?php _tab();?>定位：中等题、思维题</p>
<br><br><br>



<h1>年货</h1>
<p><?php _tab();?>其实一个个数未尝不是个好办法，总共也就100多个，分好类别数错就行。n特意改小降低难度。</p>
<p><?php _tab();?>注意到一个六边形我们只要找到它出现最少需要多少层三角形就能确定它在整个三角形中的出现次数。我们换个角度思考，最小出现层数为a的三角形一共有多少个呢？下图给出了a=12时的所有情况：</p>
<img style="display:inline;width:30%;height:auto" src="/notices/others/4-0.jpg"/>
<img style="display:inline;width:30%;height:auto" src="/notices/others/4-1.jpg"/><br>
<img style="display:inline;width:30%;height:auto" src="/notices/others/4-2.jpg"/>
<img style="display:inline;width:30%;height:auto" src="/notices/others/4-3.jpg"/><br>
<p><?php _tab();?>有解肯定得a是3的倍数，而且解的数量是<math>\frac{a}{3}</math>，于是得到这个式子：<math>\sum\limits_{0<3i≤n}i*C_{n-3i+2}^2</math></p>
<br><br><br>



<h1>YGGDRASIL</h1>
<p><?php _tab();?>容易得到<math>a_{n+1}+1=(a_n+1)^2</math>，于是<math>a_n=141^{2^{n-1}}-1</math>稍微算一下就会发现141的偶数次幂都是72，奇数次幂都是141（这是因为141在模71意义下与-1同余，于是<math>141^2\equiv 1\pmod{71}</math>，从而<math>141^3\equiv 141\pmod{213}</math>），所以答案就是71。</p>
<p>定位：简单题</p>
<br><br><br>



<h1>大吉大利，晚上吃鸡</h1>
<p><?php _tab();?>由于数字较小，可以借助计算器直接算出来。</p>
<p><?php _tab();?>考虑式子<math>(1+a)^{32}</math>，当a=-1时和a=1时进行二项式展开，并将2式相加可得</p>
<math>\sum_{i=0}^{16}C_{32}^{2i}=2^{31}</math>
<p><?php _tab();?>再考虑当a=i时和a=-i时进行二项式展开，并将两式相加可得</p>
<math>\sum_{i=0}^{16}(-1)^i*C_{32}^{2i}=2^{16}</math>
<p><?php _tab();?>再次相加可得</p>
<math>\sum_{i=0}^{8}C_{32}^{4i}=2^{30}+2^{15}</math>
<p><?php _tab();?>定位：中等题、思维题</p>
<br><br><br>



<h1>最短距离</h1>
<p><?php _tab();?>设椭圆方程：<math>\frac{x^2}{a^2}+\frac{y^2}{b^2}=1</math>，结论是两垂直切线交点P的轨迹为<math>x^2+y^2=a^2+b^2</math>。当切线斜率不存在或为0时易验证。否则设P坐标为<math>(x_0,y_0)</math>，两条直线<math>l_1:y=k(x-x_0)+y_0</math>，<math>l_2:y=-\frac{1}{k}(x-x_0)+y_0</math>为椭圆的两条切线。</p>
<p><?php _tab();?>将<math>l_1</math>与<math>l_2</math>分别与椭圆联立，并另其判别式为0，可得下列两式：</p>
<math>2kx_0y_0-k^2x_0^2+b^2-y_0^2+k^2a^2=0</math>
<math>-2kx_0y_0-x_0^2+k^2b^2-k^2y_0^2+a^2=0</math>
<p><?php _tab();?>将两式相加得<math>(1+k^2)(a^2+b^2-x_0^2-y_0^2)=0</math>，即<math>x_0^2+y_0^2=a^2+b^2</math></p>
<p><?php _tab();?>这样一来P的轨迹是以<math>\sqrt{a^2+b^2}</math>为半径的圆，距离最短时P在x轴上，距离为<math>\sqrt{a^2+b^2}-a</math></p>
<p><?php _tab();?>定位：简单题</p>
<br><br><br>

<h1>三角形</h1>
<math>sin2A+sin2B+sin2C=2sin(A+B)cos(A-B)+2sinCcosC=4*sinA*sinB*sinC</math>
<br>
<math>4cos\frac{A}{2}cos\frac{B}{2}cos\frac{C}{2}</math>
<math>=2cos\frac{A}{2}(cos\frac{B+C}{2}+cos{B-C}{2})</math>
<math>=sinA+2sin\frac{B+C}{2}cos\frac{B-C}{2}</math>
<math>=sinA+sinB+sinC</math>
<math>≥3\sqrt[3]{sinA*sinB*sinC}</math>
<math>=3\sqrt[3]{\frac{3\sqrt{3}}{8}}</math>
<math>=\frac{3\sqrt{3}}{2}</math>
<br>
<math>cos\frac{A}{2}cos\frac{B}{2}cos\frac{C}{2}≥\frac{3\sqrt{3}}{8}</math>
<p><?php _tab();?>定位：中等题</p>
<br><br><br>



<h1>新程序</h1>
<p><?php _tab();?>容易看出该程序求n以内质数个数，50以内有15个。</p>
<p><?php _tab();?>定位：简单题</p>
<br><br><br>



<h1>空降</h1>
<p><?php _tab();?>假设我们先随机选出11个点来，这11个点存在某两个点与出口距离相等的可能是可以忽略不计的，那么11个点中总有一个点离出口最近，那么只要BOSS是剩下10个点就可以了，概率是<math>\frac{10}{11}</math></p>
<p><?php _tab();?>定位：简单题、思维题</p>
<br><br><br>



<h1>新年的复数</h1>
<p><?php _tab();_tab();?><math>(A+Bi)^{2018}</math></p>
<p><?php _tab();?><math>=[(A+Bi)^2]^{1009}</math></p>
<p><?php _tab();?><math>=(A^2-B^2+2ABi)^{1009}</math></p>
<p><?php _tab();?><math>=(2\sqrt{3}+2i)^{1009}</math></p>
<p><?php _tab();?><math>=4^{1009}*(\frac{\sqrt{3}}{2}+\frac{1}{2}i)^{1009}</math></p>
<p><?php _tab();?><math>=2^{2018}*(\frac{\sqrt{3}}{2}+\frac{1}{2}i)</math></p>
<p><?php _tab();?><math>=2^{2017}*(\sqrt{3}+i)</math></p>
<p><?php _tab();?>其中<math>(\frac{\sqrt{3}}{2}+\frac{1}{2}i)^{12}=(cos\frac{\pi}{6}+sin\frac{\pi}{6}*i)^{12}=1</math></p>
<p><?php _tab();?>每个向量在复平面上对应一个角度(与x轴的夹角)，向量相乘相当于模长相乘，角度旋转。举例来说，x,y,z为复数，如果xy=z，那么|z|=|x||y|，z对应角度相当于x对应角度逆时针旋转了y的角度。<math>(A+Bi)^2</math>对应的角度是30°，模长是4，因此答案的模长是<math>4^{1009}</math>，角度是从x轴逆时针旋转1009*30°，对360取模后是30°。</p>
<p><?php _tab();?>定位：中等题</p>
<br><br><br>



<h1>波动函数</h1>
<p><?php _tab();_tab();?>这题应该一张图就可以解决了。</p>
<img style="width:80%;height:auto;"src="/notices/others/5.png"/>
<p><?php _tab();?>定位：简单题</p>
<br><br><br>



<h1>离心率</h1>
<p><?php _tab();_tab();?>这两个圆的条件是在告诉你<math>|PF_1|-|PF_2|=c</math>，再结合<math>|PF_1|+|PF_2|=2a</math>可以得到<math>|PF_1|=a+\frac{c}{2}</math>，<math>|PF_2|=a-\frac{c}{2}</math>。然后直接<math>\frac{S\triangle PNF_1}{S\triangle PNF_2}=\frac{|PF_1|}{|PF_2|}=\frac{|NF_1|}{|NF_2|}=\frac{4}{3}</math>，由这个等式可以化简出离心率。</p>
<p><?php _tab();?>定位：简单题</p>
<br><br><br>



<h1>数列与方程</h1>
<p><?php _tab();?>由<math>S_{n+1}^2-2S_{n+1}S_{n}-\sqrt{2}S_n-1=0</math>，<math>S_{n+1}=a_{n+1}+S_n</math>可得<math>a_{n+1}^2=S_n^2+\sqrt{2}S_n+1=S_n^2+1-2*S_n*cos\frac{3\pi}{4}</math>。</p>
<p><?php _tab();?>因此，可以构成边长为<math>a_{n+1}</math>，<math>S_n</math>，1的三角形，<math>S_n</math>与1的夹角为<math>\frac{3\pi}{4}</math>。得<math>\frac{a_{n+1}}{sin\frac{3\pi}{4}}=\frac{1}{sin\theta}</math>，当斜边为<math>a_{n+1}</math>时，<math>\theta=(\frac{1}{2})^{n-1}*\frac{\pi}{2^{n+2}}</math>。于是<math>a_n=\frac{\sqrt{2}}{2*sin\frac{\pi}{2^{n+1}}}</math></p>
<p><?php _tab();?>定位：中等偏困难题</p>
<br><br><br>