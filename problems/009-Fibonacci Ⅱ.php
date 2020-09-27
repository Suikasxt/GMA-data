<link rel="stylesheet" type="text/css" href="/CSS/problem.css" >

<p class="title">Fibonacci Ⅱ</p>
<p><?php _tab()?>Fibonacci数列中F<sub>0</sub>=0，F<sub>1</sub>=1，F<sub>n</sub>=F<sub>n-1</sub>+F<sub>n-2</sub>(n>1，n为正整数)。</p>
<p><?php _tab()?>为方便表示，这里我们用字母M来代表10<sup>18</sup>，现在已知F<sub>M-1</sub>的最后8位数字是00390626，F<sub>M</sub>则是60546875。</p>
<p><?php _tab()?>设<math>ANS=\sum_{i=0}^{M}F_{i}^2</math>，求ANS的最后8位数字。</p>
<p><?php _tab()?>Tip:ANS=F<sub>0</sub><sup>2</sup>+F<sub>1</sub><sup>2</sup>+F<sub>2</sub><sup>2</sup>+...+F<sub>M</sub><sup>2</sup></p>
<p><?php _tab()?>鸣谢用户Sakits提供题目。</p>
