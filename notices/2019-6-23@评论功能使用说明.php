<h1 style="font-size:30px;font-weight:bold;line-height:100px;" align=center>评论功能使用说明</h1>
<p><?php _tab();?>没有评论功能的网站是没有灵魂的！</p>
<p><?php _tab();?>可是我又怕有人拿评论功能搞事情，最后决定采用人工审核评论的方式。。。反正小破站也没什么人来嘛。</p>
<p><?php _tab();?>如您所见，登录后在讨论版能够看见一个评论用输入框。由于自己不会写文本编辑器，就决定让广大用户直接输html代码来实现花样了，有一个简单的预览但是由于是用onkeyup做的所以输中文可能比较难受。<s>貌似</s>一次最多输入1023个字符。提交评论后后台会有管理员审核您的评论，如果您的评论非常正能量却迟迟没有通过审核（大概一天？），那么<s>（估计是管理员咕掉了）</s>您可以直接发邮件给管理组，联系方式在FAQ中有提到。</p>
<p><?php _tab();?>什么样的评论比较好过审？文字内容肯定要积极向上<s>少膜人</s>，如果用了html自己玩样式的话要注意不能给别人浏览带来困扰，最好不要强占大量篇幅。以及如果你提交了评论，刷新页面的时候注意不要重复提交POST数据，理论上如果不小心交了两条我们只会给你过审一条<s>，但是它躺在未过审名单里就很难受啊</s>。</p>
<p><?php _tab();?>最后还是请诸位大佬爱护GMA，不要恶意hack，因为我只是一个小萌新，肯定打不过你们T_T，谢谢各位了。</p>
<?php
if (isset($Admin) && $Admin > 0){
?>
<br>
<span style="color:blue">
<p><?php _tab();?>管理员文档：</p>
<p><?php _tab();?>权限大于等于1的管理员可以对评论进行审核。</p>
<p><?php _tab();?>评论提交后暂存在Queue表中，管理员可以选择通过或不通过，不通过的评论放在Banned表中，Banned表中评论可恢复至Queue中。Banned表默认只显示最近10条被Ban的评论，可以在GET数据中加入BannedNumber进行修改，设为小于0的数视为无限制。</p>
<p><?php _tab();?>管理员同时可以将已通过评论删除，删除后会丢到Queue表中。</p>
</span>
<?php
}
?>