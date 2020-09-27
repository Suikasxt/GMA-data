<h1 style="font-size:30px;font-weight:bold;line-height:100px;" align=center>函数绘制工具使用说明</h1>
<p><?php _tab();?>由于某些原因需要制作这么一个绘制工具，顺便服务一下GMA的用户们就把这个工具放上来了。</p>
<p><?php _tab();?>还是那句话，请使用现代浏览器访问，如果发现任何BUG请及时告知管理员。</p>
<h2>Bug修复</h2>
<p><?php _tab();?>2018/8/17：移动端可能出现在control模式下缩放页面，切换至图像后无法将页面缩放为原始大小的情况。解决方式：双击开启control模式。</p>
<p><?php _tab();?>2018/10/4：修复了参数导出时部分不可见的BUG，修改为输入框。支持省略括号前的乘号。参数导入导出记录了颜色。</p>
<p><?php _tab();?>2018/11/16：修复前缀负号无法正常表示的BUG。</p>
<h2>画面</h2>
<p><?php _tab();?>图像全屏，对应坐标系中的位置由X、Y坐标两个区间决定。PC端画面移动由鼠标按下，移动和抬起事件处理，缩放则是滑轮滚动。移动端调用Hammer.js中的pan、pinch事件。窗口大小变化后画布大小会随窗口改变，此时函数图像可能产生扭曲。Coordinate中可修改坐标数字字体样式。</p>
<h2>函数</h2>
<p><?php _tab();?>打开控制台（右下角control）后可以添加函数（Add Function）。下拉框可选择函数类型。所有函数初始颜色随机，可修改。</p>
<p><?php _tab();?>Cartesian普通显函数，y=f(x)的形式。<a href="/function.html?pre=;f_0_x;">Sample</a></p>
<p><?php _tab();?>Polar极坐标方程，r=f(t)的形式。下方t表示定义域，Space表示绘制间距（离散绘制）。<a href="/function.html?pre=;f_1_t;">Sample</a></p>
<p><?php _tab();?>Implicit隐函数，f(x,y)=0的形式。慎用！复杂度较大可能导致浏览器无响应，绘制后建议关闭Draw while moving（在高级选项中）或尽量不要移动图像。W、H为绘制优化参数（将图像拆成W*H的多个方格，仅对边缘上出现零点的方格进行绘制），jump表示绘制间距。<a href="/function.html?pre=;f_2_x^2+(y-(x^2)^(1/3))^2-1;">Sample</a></p>
<p><?php _tab();?>Parameter参数方程，x=f(t),y=f(t)的形式。有关参数与Polar同义。<a href="/function.html?pre=;f_3_cos(t)|sin(t)_to_pi;">Sample</a></p>
<p><?php _tab();?>DrawLine复选框，选中后，绘制图像中将把相邻两个离散点用线段连接起来，能使某些函数图像更美观。<a href="/function.html?pre=;f_0_1/ln(x)_DLT;f_0_1/ln(-x);">Sample</a></p>
<p><?php _tab();?>JS Mode复选框。开启JS模式后，将把表达式看成js表达式，使用自带js解释器进行解释，由于没有浏览器的加速，速度可能较慢，但使用js模式可能可以实现普通表达式无法实现的效果。使用时请注意变量不要与绘制器使用变量重名。<a href="/function.html?pre=;f_0_tmp=1.414,tmp*tmp_JST;">Sample</a></p>
<h2>动画及全局变量</h2>
<p><?php _tab();?>在高级选项中可以开启动画特效，开启后时间戳ST会由起点（初始为0）缓慢增加至1。参数Interval表示两次绘制之间的时间间隔，Distance表示两次绘制之间ST的增加量。可以直接在函数表达式中加入ST变量。<a href="/function.html?pre=AT;f_0_ST;">Sample</a></p>
<p><?php _tab();?>控制台中Global部分展开后可以添加全局变量（Add）。全局变量中能够指定一个字母（为安全起见仅支持一个字母）作为变量名，其后一个式子为表达式。所有参数值会在一次绘制中处理函数之前依次算出。参数表达式中可以调用ST的值，靠后的参数可以调用靠前参数的值。<a href="/function.html?pre=AT;f_0_ax;f_0_bx;g_a_ST;g_b_-a;">Sample</a>。参数计算支持js模式。Add按钮右侧复选框可开关画面右侧实时参数表。</p>
<h2>Advanced Options 高级选项</h2>
<p><?php _tab();?>X行、Y行表示画面对应坐标系的区间，修改时请注意不要让区间右端小于或等于左端。</p>
<p><?php _tab();?>Coordinate中修改坐标数字字体样式。</p>
<p><?php _tab();?>SizeLimit当画面缩放比例过大或过小时停止缩放。</p>
<p><?php _tab();?>PointRadii绘制离散点时点的半径大小。</p>
<p><?php _tab();?>TableWeight方格线粗细，在某些设备上方格线过细可能导致闪烁、模糊等情况，调粗即可。</p>
<p><?php _tab();?>Scale每次缩放操作时缩放的比例。</p>
<p><?php _tab();?>Table方格线密集程度及颜色。</p>
<p><?php _tab();?>Draw while moving关闭后移动画面时不进行函数绘制，绘制隐函数时建议将其关闭。</p>
<p><?php _tab();?>Animation动画开关。</p>
<p><?php _tab();?>Size画布大小</p>
<h2>参数预设</h2>
<p><?php _tab();?>参考源代码中的pretreat函数，在访问页面时将预设参数代码段以get形式发送即可，名称“pre”。由于url转义的关系，后台会将代码段中所有空格替换为“+”（url中将“+”转义为空格）。</p>
<p><?php _tab();?>可参考前面所有Sample。</p>
<p><?php _tab();?>以分号“;”区别语句，语句中参数以下划线_分隔。第一个语句为全局预设，AT、AF为动画开关，Lx、Rx、Ly、Ry、interval、distance、Scale、Table、PointRadii、TableWeight等后接对应数值，如“Lx_10_TableWeight_3”，预设颜色可以在color后接颜色代码（不写‘#’）。<p>
<p><?php _tab();?>之后每个语句代表一个函数或全局变量分别以首字母f、g表示。函数后接类型（目前0~3）、表达式，参数方程两个表达式以“|”隔开。全局变量后接字母、表达式，后可接其他参数：JST、JSF为开关JS模式，DLT、DLF为开关连线，from、to、jump、spacew、spaceh后可接参数。如“f_3_t|2*t_DLT_from_-1”、“g_a_ST*3”。</p>
<h2>参数导出（update on 2018/9/28）</h2>
<p><?php _tab();?>控制面板底部Export按钮可导出当前画布、函数、全局变量部分数据，返回一个url后把url共享给别人，以此url即可获得对应图像。</p>


<script>
$(function(){
      $("p>a").css("color","blue");
})
</script>