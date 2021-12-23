<?php
/*
Plugin Name: KaTex
Version: 1.0
Plugin URL: https://www.ccgxk.com/emlog_dev/katex.html
Description: 前台和编辑器(editor.md)支持LaTeX公式功能的激活插件
Author: 串串狗xk
Author URL: http://www.ccgxk.com
*/
!defined('EMLOG_ROOT') && exit('access deined!');

//后台部分
function katex() {
	include_once("katex_config.php");
	if(IS_MD == 'y'){
?>

<!--编辑器支持LaTex配置---->
<script>
	function setKatex(obj) {
		obj.config({ tex: true });
	}
	//将上面名为setKatex()的函数装载到js钩子的挂载点处
	hooks.addAction("loaded", setKatex);//文章编辑器
	hooks.addAction("sum_loaded", setKatex);//摘要编辑器
	hooks.addAction("page_loaded", setKatex);//页面编辑器
</script>
<!--编辑器支持LaTex配置（结束）-->
<?php
	}
}
addAction('adm_head', 'katex');

//前台部分
function katex_frontTemplates() {
	include_once("katex_config.php");
	$mathjaxJs = "https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML&amp;v=20200504";//mathjax cdn
	$mathjaxConfig = "
		MathJax.Hub.Config({
			tex2jax: { inlineMath: [['$','$'], ['\\(','\\)']], processClass: 'math', processEscapes: true },
		TeX: {
			equationNumbers: { autoNumber: ['AMS'], useLabelIds: true },
			extensions: ['extpfeil.js', 'mediawiki-texvc.js'],
			Macros: {bm: \""."\\\boldsymbol"."\"}
		},
		'HTML-CSS': { linebreaks: { automatic: true } },
		SVG: { linebreaks: { automatic: true } }
		});
	";

	if(RENDER == 'mathjax'){
		echo '
		<script type="text/javascript" 	src='.$mathjaxJs.'></script>
		<script type="text/javascript">'.$mathjaxConfig.'</script>
		';
	}else{
		echo '
		<link rel="stylesheet" type="text/css" 	href="'.BLOG_URL.'content/plugins/katex/katex.min.css">
		<script type="text/javascript" 	src="'.BLOG_URL.'content/plugins/katex/katex.min.js"></script>
		<script src="'.BLOG_URL.'content/plugins/katex/contrib/auto-render.min.js"></script>
		<script type="text/javascript">
			renderMathInElement(document.body,
				{
					delimiters: [
						{left: "$$", right: "$$", display: true},
						{left: "$", right: "$", display: false},
					]
				}
			);	
		</script>
		';
	}
}
addAction('index_footer', 'katex_frontTemplates');

