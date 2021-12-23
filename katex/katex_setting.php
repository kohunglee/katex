<?php
/*
Plugin Name: KaTex
Version: 1.0
Plugin URL: 
Description: 前台和编辑器(editor.md)支持LaTeX公式功能的激活插件
Author: 串串狗xk
Author URL: http://www.ccgxk.com
*/ 
!defined('EMLOG_ROOT') && exit('error');
error_reporting(0); 
?>
<!-- Katex插件仪表盘的样式文件 -->
<style>
	.copyright{display:none}
	.katex_msg{padding-left:10px;color:#1cc88a00;animation:myfirst 4s;}
	@keyframes myfirst{	from {color:#1cc88a} to {color:#1cc88a00}}
</style>

<?php
function plugin_setting_view()
{
	$katex_msg = '';//提示消息

	if ($_GET["set_act"] == 'save') {//接收提交的表单
		$getConfig = [
			'is_md'		=> isset($_POST['is_md']) ? addslashes($_POST['is_md']) : 'n',
			'render'	=> isset($_POST['render']) ? addslashes($_POST['render']) : 'katex'
		];

		if(isset($_POST['is_md']) or isset($_POST['render'])){//提交表单后的后续显示
			$is_md = $getConfig[is_md];
			$render = $getConfig[render];		
		}else{
			exit("非法访问");
		}

		$config_new = "
		<?php

		define('IS_MD','".$getConfig[is_md]."'); 

		define('RENDER','".$getConfig[render]."');

		define('LAST_TIMES','".date('Y-m-d H:i:s')."')

		?>
		";

		file_put_contents("../content/plugins/katex/katex_config.php",$config_new);//根据提交后的表单内容更新配置文件
		$katex_msg = '保存成功!';
	}else{//未提交表单时，默认以配置文件的内容显示仪表盘
		require "../content/plugins/katex/katex_config.php" ;
		$is_md = IS_MD;
		$render = RENDER;
	}

//仪表盘显示
?>

<div class="card" style="max-width: 300px;">
	<div class="card-header py-3">
	<h6 class="m-0 font-weight-bold">KaTex插件配置<span class="katex_msg"><?php echo $katex_msg; ?></span></h6>
	</div>
	<div class="card-body">

	<form action="plugin.php?plugin=katex&set_act=save" method="post" name="input" id="input">
	后台编辑器：
	<div class="form-check">
        <input class="form-check-input" type="checkbox" value="y" name="is_md" id="is_md" <?php if($is_md == 'y'){echo 'checked="checked"';} ?> />
        <label class="form-check-label">editor.md编辑器启用</label>
    </div>
	<hr width="250px" />
	网站前台渲染引擎:
	<div class="form-check">
        <input class="form-check-input" type="radio" value="katex" name="render" id="render" checked="checked" />
        <label class="form-check-label">KaTex（速度快）</label>
    </div>
	<div class="form-check">
        <input class="form-check-input" type="radio" value="mathjax" name="render" id="render" <?php if($render == 'mathjax'){echo 'checked="checked"';} ?> />
        <label class="form-check-label">MathJax（兼容性强）</label>
    </div>
	<br/>
		<input type="button" name="savedf" id="savedf" value="返回" onclick="window.location.href = 'plugin.php';" class="btn btn-sm btn-success">
		<input type="submit" value="保存" class="btn btn-sm btn-primary"/>
		<hr width="250px" />
    </form>

	<div class="test">
		版本V1.0 <a id="KatexCheckUpdate" href="javascript:void(0)"> 检查更新 </a>
		<span id="updata_msg"></span>
	</div>
	</div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header"><h4 class="modal-title" id="myModalLabel">更新详情</h4></div>
			<div class="modal-body" id="updateInfo"><a id="updateInfo">...</a></div>
			<div style="padding: 1rem">商店的插件版本已同步更新，您也可以点击上方地址下载更新包自行安装，如果您信任这些内容，请点击右下角"在线更新"</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
				<button type="button" class="btn btn-primary" id="goUpdate">在线更新</button>
			</div>
		</div>
	</div>
</div>
<script>
var version = 10;//这是当前版本号，更新版本时一定要修改

$("#KatexCheckUpdate").click(function(){ //检查
	$("#KatexCheckUpdate").html("查询中...");
		$.get("../content/plugins/katex/pluginsUpdate.php?act=check&ver="+version,function(data,status){
			switch(data){
				case '0':
					$("#KatexCheckUpdate").html("目标服务器无响应...");
					break;
				case '1':
					$("#KatexCheckUpdate").html("已是最新版本");				
					break;
				default:
					$("#KatexCheckUpdate").html("可以更新，点击查看更新详情...");
					$("#KatexCheckUpdate").attr("data-toggle", "modal");
					$("#KatexCheckUpdate").attr("data-target", "#myModal");
					$("#KatexCheckUpdate").attr("id", "getInfo");
					$("#updateInfo").html(data);
					break;
			}
		}).fail(function () {
			$("#KatexCheckUpdate").html("找不到更新程序...");
        });
});

$("#goUpdate").click(function(){ //更新
	$("#goUpdate").html("更新中...");
	$.post("../content/plugins/katex/pluginsUpdate.php?ver="+version,
    {
        act:"goUpdate"
    },
    function(data){
        alert(data);
		location.reload();
    });
});
</script>
<?php
}



