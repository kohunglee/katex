# katex
emlog 插件，前台和编辑器( editor.md )支持 LaTeX 公式功能的激活插件。

<hr>
详细教程地址：https://www.ccgxk.com/emlog_dev/katex.html
# 插件说明和使用教程

# 效果 <span id='1' ></span>

$$ \int\int\int\int\int\int\int\int\int\int\int\int$$

$$\(\sqrt{3x-1}+(1+x)^2\)$$

$$\sin(\alpha)^{\theta}=\sum_{i=0}^{n}(x^i + \cos(f))$$

$$\Bigg(\bigg(\Big(\big((x)\big)\Big)\bigg)\Bigg)\quad$$

markdown源码：
```
## 效果 

$$ \int\int\int\int\int\int\int\int\int\int\int\int$$

$$\(\sqrt{3x-1}+(1+x)^2\)$$

$$\sin(\alpha)^{\theta}=\sum_{i=0}^{n}(x^i + \cos(f))$$

$$\Bigg(\bigg(\Big(\big((x)\big)\Big)\bigg)\Bigg)\quad$$

```

# 本插件简介 <span id='2' ></span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(请保证你的emlogpro版本是最新的，否则可能会有问题。)

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;本插件内置了katex的源码，可以让你的博客网站显示LaTeX数学公式，如上图所示。

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;本插件很简单，开箱即用，不过依然有一个后台设置。其中第一项是编辑器是否启用，默认是打钩的，如果你的emlog使用了其他编辑器，为防止出现错误可以从这里关闭。

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;第二项是设置前台的渲染引擎。这里有两个选项，katex和mathjax，主要是因为katex出现比较晚，可能一些公式的显示效果不及mathjax好，但也是仁者见仁智者见智，mathjax虽然好一点，但渲染速度比katex慢上将近百倍。**推荐使用默认的katex**。

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;如果你想使用emlogpro来写一些公式方面的内容，比如数学笔记，这个插件可以很好的为你服务。

## LaTeX是什么？ <span id='3' ></span>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LaTeX是一种**标记语言**，**比markdown更复杂更强大**。你可以把它当做高级版的markdown。

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;**这个插件叫katex，并不是LaTeX全语法支持插件**，你用LaTeX数学公式语法把你的公式写在文章里，如`$$\sum_{i=0}^{n}i^2$$`，本插件可以自动给你转成公式应该长的样子 （如下） ，对于其他的LaTeX语法，该插件无能为力。

$$\sum_{i=0}^{n}i^2$$

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LaTeX是一个专业级别的排版利器，广泛应用于学术论文等科技排版，它的内容不止公式，甚至音乐音符、化学符号图、电路图等等一切你想看到的图都能给你做出来。而且经过长时间的校对优化，可以达到惊人的排版级别的显示效果。感兴趣的朋友可以到搜索引擎上了解一下。

# LaTex公式使用教程及手册 <span id='4' ></span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LaTex的开始结束标志有很多，但效果一样，在本编辑器中只需记住使用 `$$ 你的公式内容 $$` 就行了。现在我们来学习一下它的基础语法。

$$\sum_{i=0}^{n}i^2$$

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;但阅读大量文字描述不是一个好的学习方式，下面的内容你仔细对照它们之间的异同，然后利用emlogpro自带的editor.md编辑器试验一下，自然就能得到LaTex语法书写的规律。

<br>

> 有些效果可能在编辑器里得不到预览效果，不过没关系，只要网页前台能显示出就行。

<br>

## 角标 <span id='5' ></span>

```
$$x_{1}$$		#试完角标这一节，你应该就明白LaTex语法大概的逻辑了
```

$$x_{1}$$


```
$$x^1$$
```

$$x^1$$

```
$$x_1^{n}$$
```

$$x_1^{n}$$

```
$${{{x_{1}}_1}_1}_1$$
```

$${{{x_{1}}_1}_1}_1$$


```
$${{{x^1}^1}^1}^1$$
```

$${{{x^1}^1}^1}^1$$


```
$${}^{n}_{2} x$$
```

$${}^{n}_{2} x$$


## 分式（使用\frac标签） <span id='6' ></span>

```
$$\frac{1}{2}$$
```

$$\frac{1}{2}$$

```
$$\frac{x+y}{1+\frac{1}{2}}$$
```

$$\frac{x+y}{1+\frac{1}{2}}$$



## 根号（使用\sqrt标签） <span id='7' ></span>

```
$$\sqrt{2+2}$$
```

$$\sqrt{2+2}$$

```
$$\sqrt[2]{3}$$
```

$$\sqrt[2]{3}$$

```
$$\sqrt{x+\sqrt{y+3}}$$
```

$$\sqrt{x+\sqrt{y+3}}$$

## 求和（使用\sum标签） <span id='8' ></span>

```
$$\sum_{i=1}^{n}i$$
```

$$\sum_{i=1}^{n}i$$

```
$$\sum_{i=1}^{n}\frac{1}{i}$$
```

$$\sum_{i=1}^{n}\frac{1}{i}$$


## 积分(使用\int标签) <span id='9' ></span>

```
$$\int_{a}^{b}$$
```

$$\int_{a}^{b}$$

```
$$\int_{a}^{b} f(x)dx$$
```

$$\int_{a}^{b} f(x)dx$$


```
$$\int_{a}^{b} f(x)\mathrm{d}x$$       # mathrm可以使斜体变为正体
```

$$\int_{a}^{b} f(x)\mathrm{d}x$$

## 空格（按空格长度从小到大分为 “\\ ” “\\quad“ “\\qquad“标签） <span id='10' ></span>

```
$$a\ b$$
```

$$a\ b$$

```
$$a\quad b$$
```

$$a\quad b$$

```
$$a\qquad b$$
```

$$a\qquad b$$

## 定界符 <span id='11' ></span>

这里的定界符，与编程中定界符的定义不同，你可以理解为是一个可以智能识别在一个范围内，公式的“占地体积”，然后调整范围外的符号大小。具体你可以查看下面的对比。

> 对比

**不使用定界符：**

```
$$(\frac{1}{1-x}^2)$$
```

$$(\frac{1}{1-x}^2)$$

```
$$\frac{1}{x^2}|_0^1$$
```

$$\frac{1}{x^2}|_0^1$$


**使用定界符：**

```
$$\left( \frac{1}{1-x}^2  \right)$$
```

$$\left( \frac{1}{1-x}^2  \right)$$


```
$$\left. \frac{1}{x^2}\right |_0^1$$
```

$$\left. \frac{1}{x^2}\right |_0^1$$


```
$$\left(\sum_{k=\frac{1}{2}}^{N^2}\frac{1}{k}\right)$$
```

$$\left(\sum_{k=\frac{1}{2}}^{N^2}\frac{1}{k}\right)$$

你会发现使用这个定位符`$$\left(   你的内容   \right)$$` 后括号变大了。其实就是这个意思。不过我们还可以用其他的标签来更灵活调整公式的显示效果。

```
$$\big(\big)$$
```

$$\big(\big)$$

```
$$\Big(\Big)$$
```

$$\Big(\Big)$$

```
$$\bigg(\bigg)$$
```

$$\bigg(\bigg)$$

```
$$\Bigg(\Bigg)$$
```

$$\Bigg(\Bigg)$$

```
$$\Biggl[  x  \Biggr]$$
```

$$\Biggl[  x  \Biggr]$$

```
$$\Bigg \lbrace x \Bigg \rbrace$$
```

$$\Bigg \lbrace x \Bigg \rbrace$$

```
$$\Biggl\langle x \Biggr\rangle$$
```

$$\Biggl\langle x \Biggr\rangle$$

```
$$\Biggl\lvert x \Biggr\rvert$$
```

$$\Biggl\lvert x \Biggr\rvert$$

```
$$\Biggl\lVert x \Biggr\rVert$$
```

$$\Biggl\lVert x \Biggr\rVert$$

## 步骤标注 <span id='12' ></span>

```
$$\overrightarrow{AB}\ \Delta A B C $$
```

$$\overrightarrow{AB}\ \Delta A B C $$

```
$$\overrightarrow{AB}\ \Delta A B C \tag{步骤1} $$
```

$$\overrightarrow{AB}\ \Delta A B C \tag{步骤1} $$

## 颜色 <span id='13' ></span>

```
$$\color{red}{a^b}$$
$$\color{blue}{\overrightarrow{AB}\ \Delta A B C  }$$
$$\color{green}{\int_{a}^{b} f(x)\mathrm{d}x}$$
```

$$\color{red}{a^b}$$ $$\color{blue}{\overrightarrow{AB}\ \Delta A B C  }$$ $$\color{green}{\int_{a}^{b} f(x)\mathrm{d}x}$$

## 背景颜色 <span id='14' ></span>

```
$$\colorbox{yellow}{ Text }$$
```

$$\colorbox{yellow}{ Text }$$

```
$$\colorbox{yellow}{ $a^b$ }$$
```

$$\colorbox{yellow}{ $a^b$ }$$


## 文本效果 <span id='15' ></span>

手写体

```
$$\mathcal{ABCDEFGHIJKLMNOPQRSTUVWXYZ}$$
```

$$\mathcal{ABCDEFGHIJKLMNOPQRSTUVWXYZ}$$

哥特字体

```
$$\mathfrak{ABCDEFGHIJKLMNOPQRSTUVWXYZ}$$
```

$$\mathfrak{ABCDEFGHIJKLMNOPQRSTUVWXYZ}$$

## 文本大小 <span id='16' ></span>

```
$${\Huge 超大字Huge}$$		#更多字体案例可以查阅下列网站
```

$${\Huge 超大字Huge}$$

## 特殊符号 <span id='17' ></span>

```
$$\alpha \sim \backslash $$		#更多可以查阅下列表格，当然也可以使用html实体字符
```

$$\alpha \sim \backslash $$

当然你也可以查阅以下地址来发现更丰富的效果。


https://latex.codecogs.com/eqneditor/editor.php		#一个在线可视化编辑和测试latex数学公式的网站
https://www.cnblogs.com/1024th/p/11623258.html		#LaTeX公式手册(全网最全)
https://uinika.gitee.io/Zen/LaTex/		#通用 LaTeX 数学公式语法手册
...

# LaTex的一些常用符号或表达式 <span id='18' ></span>


运算符

| 符号 | 表达式  | 符号 | 表达式  | 符号  | 表达式  | 符号  | 表达式  |
| :------------: | :------------: | :------------: | :------------: | :------------: | :------------: | :------------: | :------------: |
| $$\times$$  |  \times   | $$\vee$$  |   \vee  |  $$45^\circ$$ |   45^\circ  |  $$\angle$$  |   \angle  |
| $$\div$$  |  \div   |  $$\perp$$  |   \perp  | $$	\wedge$$  |   \wedge  |  $$\lneqq$$ |   lneqq$  |
|  $$\pm$$ |  \pm   |  $$\leqq$$ |  \leqq   |  $$\bullet$$ |   \bullet  |  $$\parallel$$  |   \parallel  |
| $$\mp$$  |   \mp  | $$\leqq$$  |  \leqq   | $$\oplus$$  |  \oplus   | $$\parallel$$ |  \parallel   |
| $$\triangleright$$  |   \triangleright  |  $$\ominus$$ |  \ominus   |  $$\sphericalangle$$ |   \sphericalangle  |  $$\nleqq$$| \nleqq    |
|  $$\cdot$$ |   \cdot$ |   $$\not\lll$$ |  \not\lll   |  $$\odot$$ |  \odot   | $$\lneq$$ |   \lneq  |
|  $$\star$$ |  \star   | $$\le$$  |   \le  |  $$\oslash$$ |  \oslash   |$$\ngtr$$ |  \ngtr   |
|  $$\cup$$ |  \cup   |   $$\propto$$  |  \propto   |  $$\otimes$$ |   \otimes  |  $$\nless$$ |  \nless   |
| $$\cap$$  |  \cap   |  $$\sim$$ |  \sim   |  $$\bigcirc$$ |  \bigcirc   |  $$\approx$$ |  \approx   |
|  $$\ne$$ |  \ne   |  $$\doteq$$  |  \doteq   |  $$\backsim$$ |   \backsim  | $$\cong$$  |  \cong|


逻辑符号

| 符号 | 表达式  | 符号 | 表达式  | 符号  | 表达式  | 符号  | 表达式  |
| :------------: | :------------: | :------------: | :------------: | :------------: | :------------: | :------------: | :------------: |
| $$\forall$$  | \forall | $$\And$$  |  \And |  $$\curlywedge$$ |  \curlywedge |  $$\lnot$$ |  \lnot |
| $$\exists$$  | \exists  |  $$\lor$$ | \lor  | $$\bigwedge$$  | \bigwedge  |  $$\neg$$ | \neg  |
|  $$\nexists$$ |  \nexists |  $$\curlyvee$$ | \curlyvee  |  $$\bar{q}$$ | \bar{q}  |  $$\not\operatorname{R}$$ | \not\operatorname{R}  |
| $$\therefore$$  | \therefore  | $$\bigvee$$  |  \bigvee | $$\bar{abc}$$  |  \bar{abc} | $$\bot$$  |  \bot |
| $$\because$$  | \because  |  $$\wedge$$ | \wedge  |  $$\overline{abc}$$ |  \overline{abc} |  $$\top$$ | \top  |
|  $$\vdash$$ | \vdash  |  $$\Vdash$$ | \Vdash  |  $$\nvdash$$ |  \nvdash | $$\urcorner$$  | \urcorner  |
|  $$\dashv$$ | \dashv  | $$\models$$  | \models  |  $$\nVdash$$ |  \nVdash | $$\llcorner$$  |  \llcorner |
|  $$\vDash$$ | \vDash  |  $$\Vvdash$$ | \Vvdash  |  $$\ulcorner$$ |  \ulcorner | $$\lrcorner$$  | \lrcorner  |

字母

| 符号 | 表达式  | 符号 | 表达式  | 符号  | 表达式  | 符号  | 表达式  |
| :------------: | :------------: | :------------: | :------------: | :------------: | :------------: | :------------: | :------------: |
| $$\alpha$$  | \alpha  | $$\kappa$$  | \kappa  |  $$\upsilon$$ | \upsilon  |  $$\Theta$$ |  \Theta |
| $$\beta$$  |  \beta |  $$\lambda$$ |  \lambda | $$\phi$$  |  \phi |  $$\Lambda$$ |  \Lambda |
|  $$\gamma$$ |  \gamma |  $$\mu$$ |  \mu |  $$\chi$$ |  \chi |  $$\Xi$$ |  \Xi |
| $$\delta$$  |  \delta | $$\nu$$  |  \nu | $$\psi$$  | \psi  | $$\Pi$$  |  \Pi  |
| $$\epsilon$$  |  \epsilon |  $$\xi$$ |  \xi |  $$\omega$$ |  \omega |  $$\Sigma$$ |  \Sigma |
|  $$\zeta$$ |  \zeta |  $$\pi$$ |  \pi |  $$\digamma$$ | \digamma  | $$\Upsilon$$  |  \Upsilon |
|  $$\eta$$ | \eta | $$\rho$$  |  \rho |  $$\Gamma$$ | \Gamma  | $$\Phi$$  |  \Phi |
|  $$\theta $$ |  \theta |  $$\sigma$$ |  \sigma |  $$\Psi$$ |  \Psi | $$\Omega$$  |  \Omega |
| $$\iota$$  | \iota  |  $$\tau$$ |  \tau |  $$\Delta$$ | \Delta  |  $$\varkappa$$ | \varkappa  |
|$$\aleph$$|\aleph|$$\beth$$|\beth|$$\gimel$$|\gimel|$$\daleth$$|\daleth|


其他

| 符号 | 表达式  | 符号 | 表达式  | 符号  | 表达式  |
| :------------: | :------------: | :------------: | :------------: | :------------: | :------------: |
| $$\prod_{a}^{b}$$  | \prod_{a}^{b} | $$\Rightarrow$$  | \Rightarrow  |  $$\Leftrightarrow$$ |\Leftrightarrow  |
| $$	\coprod_{a}^{b}$$  | 	\coprod_{a}^{b}  |  $$\Longrightarrow$$ |  \Longrightarrow | $$\rightleftharpoons$$  | \rightleftharpoons |
|  $$	\bigcup_{a}^{b}$$ | 	\bigcup_{a}^{b}  |  $$\nLeftarrow$$ | \nLeftarrow  |  $$\infty$$ | \infty  |
| $$\bigcap_{a}^{b}$$  |  \bigcap_{a}^{b} | $$\Longleftrightarrow$$  | \Longleftrightarrow  | $$\complement$$  | \complement  |
| $$\bigvee_{a}^{b}$$  | \bigvee_{a}^{b}  |  $$\Uparrow$$ | \Uparrow  |  $$\Re$$ |  \Re |
|  $$	\bigwedge_{a}^{b}$$ | 	\bigwedge_{a}^{b}  |  $$\Downarrow$$ | \Downarrow  |  $$\diamondsuit$$ |\diamondsuit   |
|  $$\Rrightarrow$$ |  \Rrightarrow | $$\Updownarrow$$  |  \Updownarrow |  $$\circeq$$ | \circeq  |
|  $$\Lleftarrow$$ |\Lleftarrow   |  $$\to$$ |\to   |  $$\gets$$ |  \gets |
| $$\Leftarrow$$  | \Leftarrow  |  $$\nrightarrow$$ |  \nrightarrow |  $$\nleftarrow$$ |\nleftarrow   |
|$$\triangleq$$| \triangleq | $$\trianglerighteq$$| \trianglerighteq |$$\ntrianglerighteq$$| \ntrianglerighteq |


# 更新问题 <span id='19' ></span>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;本插件内置了一个插件更新程序，`pluginsUpdate.php`，katex插件本身很简单，但为了满足katex源码本身的更新要求以及本插件以后潜在的更新要求，所以内置了更新程序。

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;更新是自愿的，V1.0完全满足显示公式的所有要求，如果你对安全比较在意，可以从插件后台获取更新包等检查内容后自行更新。当然，emlog官网商店上线最新版本后才会在插件内进行版本更新通知的。所以你可以在得知更新信息后删除再到商店安装，也可以直接一键更新。

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;祝你使用愉快！