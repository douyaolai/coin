<?php if (!defined('THINK_PATH')) exit();?>    <!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
	<meta name="renderer" content="webkit">
    <title>网站后台管理</title>
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Admin/iconfont/demo.css">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/iconfont/iconfont.css"/>
    <script type="text/javascript" src="/Public/Admin/js/libs/modernizr.min.js"></script>
	<script type="text/javascript" src="/Public/Admin/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/Public/js/layer/layer.js"></script>
    <script type="text/javascript" src="/Public/js/laydate/laydate.js"></script>
    
	<link type="text/css" href="/Public/Admin/css/jquery-ui-1.8.17.custom.css" rel="stylesheet" />
    <link type="text/css" href="/Public/Admin/css/jquery-ui-timepicker-addon.css" rel="stylesheet" />
    <script type="text/javascript" src="/Public/Admin/js/jquery-ui-1.8.17.custom.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/jquery-ui-timepicker-addon.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/jquery-ui-timepicker-zh-CN.js"></script>

    <script>
(function ($) {
    // 汉化 Datepicker
    $.datepicker.regional['zh-CN'] =
    {
        clearText: '清除', clearStatus: '清除已选日期',
        closeText: '关闭', closeStatus: '不改变当前选择',
        prevText: '<上月', prevStatus: '显示上月',
        nextText: '下月>', nextStatus: '显示下月',
        currentText: '今天', currentStatus: '显示本月',
        monthNames: ['一月', '二月', '三月', '四月', '五月', '六月',
        '七月', '八月', '九月', '十月', '十一月', '十二月'],
        monthNamesShort: ['一', '二', '三', '四', '五', '六',
        '七', '八', '九', '十', '十一', '十二'],
        monthStatus: '选择月份', yearStatus: '选择年份',
        weekHeader: '周', weekStatus: '年内周次',
        dayNames: ['星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'],
        dayNamesShort: ['周日', '周一', '周二', '周三', '周四', '周五', '周六'],
        dayNamesMin: ['日', '一', '二', '三', '四', '五', '六'],
        dayStatus: '设置 DD 为一周起始', dateStatus: '选择 m月 d日, DD',
        dateFormat: 'yy-mm-dd', firstDay: 1,
        initStatus: '请选择日期', isRTL: false
    };
    $.datepicker.setDefaults($.datepicker.regional['zh-CN']);
 
    //汉化 Timepicker
  $.timepicker.regional['zh-CN'] = {
    timeOnlyTitle: '选择时间',
    timeText: '时间',
    hourText: '小时',
    minuteText: '分钟',
    secondText: '秒钟',
    millisecText: '微秒',
    timezoneText: '时区',
    currentText: '现在时间',
    closeText: '关闭',
    timeFormat: 'hh:mm',
    amNames: ['AM', 'A'],
    pmNames: ['PM', 'P'],
    ampm: false
  };
  $.timepicker.setDefaults($.timepicker.regional['zh-CN']);
})(jQuery);
</script>
<style>
.iconfont{ padding-right:5px;}
.fsize{ font-size:15px;}
</style>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.html">首页</a></li>
                <li><a href="<?php echo U('Index/index');?>" target="_blank">网站首页</a></li>
                <li><a href="<?php echo U('Index/infoStatistics');?>" target="_blank">全站统计信息</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="<?php echo U('Manage/index');?>">管理员</a></li>
                <li><a href="<?php echo U('Manage/pwdUpdate');?>">修改密码</a></li>
                <li><a href="<?php echo U('Login/loginout');?>">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
<div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                 <?php if(!empty($sys_nav)): ?><li>
                    <a href="#"><i class="iconfont">&#xe614;</i><span class="fsize">系统管理</span></a>
                    <ul class="sub-menu">
                        
                        	<?php if(is_array($sys_nav)): $i = 0; $__LIST__ = $sys_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["nav_url"]); ?>"><i class="iconfont"><?php echo ($vo["nav_e"]); ?></i>&nbsp;<?php echo ($vo["nav_name"]); ?></a></li>
                            <!--<li><a href="system.html"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                            <li><a href="system.html"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                            <li><a href="system.html"><i class="icon-font">&#xe045;</i>数据还原</a></li>--><?php endforeach; endif; else: echo "" ;endif; ?>
                        
                    </ul>
                </li><?php endif; ?>
			   
			   <?php if(!empty($bank_nav)): ?><li>
                    <a href="#"><i class="iconfont">&#xe635;</i><span class="fsize">银行管理</span></a>
                    <ul class="sub-menu">
                        	<?php if(is_array($bank_nav)): $i = 0; $__LIST__ = $bank_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["nav_url"]); ?>"><i class="iconfont"><?php echo ($vo["nav_e"]); ?></i>&nbsp;<?php echo ($vo["nav_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </li><?php endif; ?>
				
               <?php if(!empty($common_nav)): ?><li>
                    <a href="#"><i class="iconfont">&#xe635;</i><span class="fsize">常用操作</span></a>
                    <ul class="sub-menu">
                        	<?php if(is_array($common_nav)): $i = 0; $__LIST__ = $common_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["nav_url"]); ?>"><i class="iconfont"><?php echo ($vo["nav_e"]); ?></i>&nbsp;<?php echo ($vo["nav_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </li><?php endif; ?>
                
                <?php if(!empty($user_nav)): ?><li>
                    <a href="#"><i class="iconfont">&#xe64d;</i><span class="fsize">会员管理</span></a>
                    <ul class="sub-menu">
                    
                        	<?php if(is_array($user_nav)): $i = 0; $__LIST__ = $user_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["nav_url"]); ?>"><i class="iconfont"><?php echo ($vo["nav_e"]); ?></i>&nbsp;<?php echo ($vo["nav_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </li><?php endif; ?>
				
                 <!--<?php if(!empty($bonus_nav)): ?><li>
                    <a href="#"><i class="icon-font">&#xe018;</i><span class="fsize">分红管理</span></a>
                    <ul class="sub-menu">
                    
                        	<?php if(is_array($bonus_nav)): $i = 0; $__LIST__ = $bonus_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["nav_url"]); ?>"><i class="icon-font">&#xe017;</i><?php echo ($vo["nav_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </li><?php endif; ?>
				
                <?php if(!empty($zhongchou_nav)): ?><li>
                    <a href="#"><i class="iconfont">&#xe650;</i><span class="fsize">众筹管理</span></a>
                     <ul class="sub-menu">
                     
                        	<?php if(is_array($zhongchou_nav)): $i = 0; $__LIST__ = $zhongchou_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["nav_url"]); ?>"><i class="iconfont"><?php echo ($vo["nav_e"]); ?></i>&nbsp;<?php echo ($vo["nav_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </li><?php endif; ?>-->
                
                <?php if(!empty($finance_nav)): ?><li>
                    <a href="#"><i class="iconfont">&#xe6c8;</i><span class="fsize">财务管理</span></a>
                     <ul class="sub-menu">
                     
                        	<?php if(is_array($finance_nav)): $i = 0; $__LIST__ = $finance_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["nav_url"]); ?>"><i class="iconfont"><?php echo ($vo["nav_e"]); ?></i>&nbsp;<?php echo ($vo["nav_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </li><?php endif; ?>

                <?php if(!empty($trade_nav)): ?><li>
                        <a href="#"><i class="iconfont">&#xe631;</i><span class="fsize">交易管理</span></a>
                        <ul class="sub-menu">
                            <?php if(is_array($trade_nav)): $i = 0; $__LIST__ = $trade_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["nav_url"]); ?>"><i class="iconfont"><?php echo ($vo["nav_e"]); ?></i>&nbsp;<?php echo ($vo["nav_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            <!--<li><a href="<?php echo U('Trade/trade');?>"><i class="icon-font">&#xe017;</i>交易记录</a></li>-->
                            <!--<li><a href="<?php echo U('Trade/orders');?>"><i class="icon-font">&#xe017;</i>委托记录</a></li>-->
                        </ul>
                    </li><?php endif; ?>
                
                <?php if(!empty($wallet_nav)): ?><li>
                        <a href="#"><i class="iconfont">&#xe631;</i><span class="fsize">钱包币种管理</span></a>
                        <ul class="sub-menu">
                            <?php if(is_array($wallet_nav)): $i = 0; $__LIST__ = $wallet_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["nav_url"]); ?>"><i class="iconfont"><?php echo ($vo["nav_e"]); ?></i>&nbsp;<?php echo ($vo["nav_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            <!--<li><a href="<?php echo U('Trade/trade');?>"><i class="icon-font">&#xe017;</i>交易记录</a></li>-->
                            <!--<li><a href="<?php echo U('Trade/orders');?>"><i class="icon-font">&#xe017;</i>委托记录</a></li>-->
                        </ul>
                    </li><?php endif; ?>
                
                  <?php if(!empty($article_nav)): ?><li>
                        <a href="#"><i class="iconfont">&#xe6f7;</i><span class="fsize">文章管理</span></a>
                        <ul class="sub-menu">
                            <?php if(is_array($article_nav)): $i = 0; $__LIST__ = $article_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["nav_url"]); ?>"><i class="iconfont"><?php echo ($vo["nav_e"]); ?></i>&nbsp;<?php echo ($vo["nav_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            <!--<li><a href="<?php echo U('Trade/trade');?>"><i class="icon-font">&#xe017;</i>交易记录</a></li>-->
                            <!--<li><a href="<?php echo U('Trade/orders');?>"><i class="icon-font">&#xe017;</i>委托记录</a></li>-->
                        </ul>
                    </li><?php endif; ?>
                
                <?php if(!empty($admin_nav)): ?><li>
                        <a href="#"><i class="iconfont">&#xe64d;</i><span class="fsize">管理员管理</span></a>
                        <ul class="sub-menu">
                            <?php if(is_array($admin_nav)): $i = 0; $__LIST__ = $admin_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["nav_url"]); ?>"><i class="iconfont"><?php echo ($vo["nav_e"]); ?></i>&nbsp;<?php echo ($vo["nav_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            <!--<li><a href="<?php echo U('Trade/trade');?>"><i class="icon-font">&#xe017;</i>交易记录</a></li>-->
                            <!--<li><a href="<?php echo U('Trade/orders');?>"><i class="icon-font">&#xe017;</i>委托记录</a></li>-->
                        </ul>
                    </li><?php endif; ?>
                <?php if(!empty($tongji_nav)): ?><li>
                        <a href="#"><i class="iconfont">&#xe64d;</i><span class="fsize">统计</span></a>
                        <ul class="sub-menu">
                            <?php if(is_array($tongji_nav)): $i = 0; $__LIST__ = $tongji_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["nav_url"]); ?>"><i class="iconfont"><?php echo ($vo["nav_e"]); ?></i>&nbsp;<?php echo ($vo["nav_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            <!--<li><a href="<?php echo U('Trade/trade');?>"><i class="icon-font">&#xe017;</i>交易记录</a></li>-->
                            <!--<li><a href="<?php echo U('Trade/orders');?>"><i class="icon-font">&#xe017;</i>委托记录</a></li>-->
                        </ul>
                    </li><?php endif; ?>
            </ul>
        </div>
    </div>
<script>
$(".sidebar-list li").children("a").on("click",function(){
	$(this).next(".sub-menu").toggle();
});
</script>

    <!--/sidebar-->
    <div class="main-wrap">
		

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="<?php echo U('Index/index');?>">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">第三方充值记录</span></div>
        </div>
        <!-- <div class="search-wrap">
            <div class="search-content">
				<div class="search-wrap">
					<div class="search-content">
						<form action="<?php echo U('Pay/payByMan');?>" method="post">
							<table class="search-tab">
								<tr>
									<th width="120">选择分类:</th>
									<td>
										<select name="status" id="">
											<option value="">全部</option>
											<option value="0">未付款</option>
											<option value="1">充值成功</option>
											<option value="2">充值失败</option>
											<option value="3">已失效</option>
										</select>
									</td>
									<th width="70">汇款人:</th>
									<td><input class="common-text" placeholder="汇款人" name="member_name" value="" id="" type="text"></td>
									<td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
								</tr>
							</table>
						</form> 
					</div>
				</div>
			</div>
        </div> -->
				<div class="panel-actions" style="height:50px;">
                <h1 class="fl" style="line-height:50px; margin-left:20px;">
					<i class="icon-font"></i>
					数据统计状况
				</h1>
				    <form action="<?php echo U('Tongji/xiangxi');?>" method="post" class="form-inline form-search" style="fr">					
					<div class="fr" style="line-height:50px;">						
                       <input type="text" name="userid" value=""  class="form-control search-query" style="width:20%;" placeholder="会员id" title="会员id" /> 
								<input type="text" name="stime" class="stime" placeholder="开始时间：如2016-03-22" title="开始时间" readonly="" style="margin-right:20px;" onclick="laydate()">		
								<input type="text" name="etime" class="etime" placeholder="结束时间：如2016-04-21" title="结束时间" readonly="" style="margin-right:20px;" onclick="laydate()">

							<input type="submit" id="submit" class="btn btn-primary" value="搜索" data-loading="稍候..." style="margin-right:20px;">
					</div>
				  </form>
				</div>
        <div class="result-wrap">
        <!--余额统计-->
            <form name="myform" id="myform" method="post"></form>
                <div class="result-tab">
                
                <div class="panel-actions" style="height:50px;">
                <h1 class="fl" style="line-height:50px; margin-left:20px;">
					<i class="icon-font"></i>
					推广统计状况
				</h1>
				    <form action="/newadmin.php/Home/Member/commissionShow/" method="get" class="form-inline form-search" style="fr">					
					<div class="fr" style="line-height:50px;">						
                       <!-- <input type="text" name="userid" value=""  class="form-control search-query" style="width:20%;" placeholder="会员id" title="会员id" /> --> 
								<input type="text" name="stime" class="stime" placeholder="开始时间：如2016-03-22" title="开始时间" readonly="" style="margin-right:20px;" onclick="laydate()">		
								<input type="text" name="etime" class="etime" placeholder="结束时间：如2016-04-21" title="结束时间" readonly="" style="margin-right:20px;" onclick="laydate()">

							<input type="submit" id="submit" class="btn btn-primary" value="搜索" data-loading="稍候..." style="margin-right:20px;">
					</div>
				  </form>
				</div>
                
                    <div class="" style="overflow:hidden;">
				<div class="fl" style="padding-bottom:10px; width:56%; margin-left:15px;">
							<strong>					
								余额统计
							</strong>
				<table class="table table-hover table-striped table-bordered" style="width:100%; border: 1px solid #ddd;">
				<thead>	
					<tr>
						<th class="text-center w-100px">币种</th>
                        <th class="text-center w-200px">总余额</th>
						<th class="text-center w-300px">3684余额</th>
                        <th class="text-center w-300px">实际余额</th>
					</tr>
				</thead>
				<tbody>	
					<?php if(is_array($alltj)): $key = 0; $__LIST__ = $alltj;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><tr>
						<td class="text-right "><?php echo ($vo['paytj']['currency']['currency_mark']); ?></td>
						<td class="text-right"><?php echo ($vo['paytj']['allnum']); ?></td>
						<td class="text-right"></td>
						<td class="text-right"><?php echo ($vo['paytj']['allnum']); ?></td>  
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
			</table>
				</div>
                <!--冻结统计-->
				<div class="fl" style="padding-bottom:10px; width:40%; margin-left:10px;">
							<strong>					
								冻结统计
							</strong>
				<table class="table table-hover table-striped table-bordered" style="width:100%;border: 1px solid #ddd;">
				<thead>	
					<tr>
						<th class="text-center w-100px">币种</th>
                        <th class="text-center w-200px">冻结统计</th>
						<th class="text-center w-300px">3684冻结</th>
                        <th class="text-center w-300px">实际冻结</th>
					</tr>
				</thead>
				<tbody>
					<?php if(is_array($alltj)): $key = 0; $__LIST__ = $alltj;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><tr>
						<td class="text-right "><?php echo ($vo['paytj']['currency']['currency_mark']); ?></td>
						<td class="text-right"><?php echo ($vo['paytj']['allcoldnum']); ?></td>
						<td class="text-right"></td>
						<td class="text-right"><?php echo ($vo['paytj']['allcoldnum']); ?></td>  
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
				</div>
                </div>
                <!--用户余额-->
                <div class="" style="overflow:hidden;">
				<div class="fl" style="padding-bottom:10px; width:56%; margin-left:15px;">
							<strong>					
								用户余额
							</strong>
				<table class="table table-hover table-striped table-bordered" style="width:100%; border: 1px solid #ddd;">
				<thead>	
					<tr>
						<th class="text-center w-100px">币种</th>
                        <th class="text-center w-200px">用户余额</th>
						<th class="text-center w-300px">用户冻结</th>
					</tr>
				</thead>
				<tbody>		
					<?php if(is_array($alltj)): $key = 0; $__LIST__ = $alltj;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><tr>
						<td class="text-right "><?php echo ($vo['membertj']['currency']['currency_mark']); ?></td>
						<td class="text-right"><?php echo ((isset($vo['membertj']['allnum']) && ($vo['membertj']['allnum'] !== ""))?($vo['membertj']['allnum']):'0.0000'); ?></td>
						<td class="text-right"><?php echo ((isset($vo['membertj']['allcoldnum']) && ($vo['membertj']['allcoldnum'] !== ""))?($vo['membertj']['allcoldnum']):'0.0000'); ?></td>  
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>				
				</tbody>
			</table>
				</div>
                <!--充值提现-->
				<div class="fl" style="padding-bottom:10px; width:40%; margin-left:10px;">
							<strong>					
								充值提现
							</strong>
				<table class="table table-hover table-striped table-bordered" style="width:100%;border: 1px solid #ddd;">
				<thead>	
					<tr>
						<th class="text-center w-100px">币种</th>
                        <th class="text-center w-200px">充值</th>
						<th class="text-center w-300px">提现</th>
                        <th class="text-center w-300px">交易</th>
					</tr>
				</thead>
				<tbody>	
					<?php if(is_array($alltj)): $key = 0; $__LIST__ = $alltj;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><tr>
						<td class="text-right "><?php echo ($vo['cztxtj']['currency']['currency_mark']); ?></td>
						<td class="text-right"><?php echo ((isset($vo['cztxtj']['txmoney']['txmoney']) && ($vo['cztxtj']['txmoney']['txmoney'] !== ""))?($vo['cztxtj']['txmoney']['txmoney']):'0.0000'); ?></td>
                        <td class="text-right"><?php echo ((isset($vo['cztxtj']['czmoney']['czmoney']) && ($vo['cztxtj']['czmoney']['czmoney'] !== ""))?($vo['cztxtj']['czmoney']['czmoney']):'0.0000'); ?></td> 
                         <td class="text-right"><?php echo ((isset($vo['cztxtj']['jymoney']['jymoney']) && ($vo['cztxtj']['jymoney']['jymoney'] !== ""))?($vo['cztxtj']['jymoney']['jymoney']):'0.0000'); ?></td>  
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>	
				</tbody>
			</table>
				</div>
                </div>
                <!--挂单交易-->
                <div style="overflow:hidden;">
                  <div style="padding-bottom:10px; width:97%; clear:both; margin-left:15px;">
							<strong>					
								挂单交易
							</strong>
			<table class="table table-hover table-striped table-bordered" style="width:100%;border: 1px solid #ddd;">
				<thead>	
					<tr>
						<th class="text-center w-80px">交易类型</th>
                        <th class="text-center w-80px">买入挂单量</th>
                        <th class="text-center w-80px">买入挂单额</th>
                        <th class="text-center w-80px">卖出挂单量</th>
                        <th class="text-center w-80px">卖出挂单额</th>
						<th class="text-center w-80px">买入交易量</th>
						<th class="text-center w-80px">买入交易额</th>
                        <th class="text-center w-80px">卖出交易量</th>
						<th class="text-center w-80px">卖出交易额</th>
					</tr>
				</thead>
				<tbody>
					<?php if(is_array($list)): $key = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?><tr>                     
						<td class="text-right "><?php echo ($vo['currency']['currency_mark']); ?>_<?php echo ($vo['trade_currency']['currency_mark']); ?></td>
						<td class="text-right "><?php echo ($trade[$key]['jiaoyinum']); ?></td>
                        <td class="text-right "><?php echo ($trade[$key]['jiaoyiprice']); ?></td>
                        <td class="text-right "><?php echo ($trade[$key]['jiaoyiprice']); ?></td>
                        <td class="text-right "><?php echo ($trade[$key]['jiaoyiprice']); ?></td>
                        <td class="text-right ">39666890.58940000</td>
                        <td class="text-right ">1457810.50958020</td>
                        <td class="text-right ">39666890.58940000</td>
                        <td class="text-right ">1457810.50958020</td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>	
                    <tr>						
                        <th colspan="2" class="text-right ">合计</th>
                        <td class="text-right " colspan="2"></td>
					</tr>
					
				</tbody>
			</table>
				</div>
			</div>
            <!--游戏统计-->
            <div style="overflow:hidden;">
                  <div style="padding-bottom:10px; width:97%; clear:both; margin-left:15px;">
							<strong>					
								游戏统计
							</strong>
			<table class="table table-hover table-striped table-bordered" style="width:100%;border: 1px solid #ddd;">
				<thead>	
					<tr>
						<th class="text-center w-100px">币种</th>
                        <th class="text-center w-200px">投注</th>
						<th class="text-center w-200px">奖金</th>
						
					</tr>
				</thead>
				<tbody>					
					<tr>
						<td class="text-right ">VRC</td>
						<td class="text-right "></td>
                        <td class="text-right "></td>
                                          
					</tr><tr>
						<td class="text-right ">CNY</td>
						<td class="text-right "></td>
                        <td class="text-right "></td>
                                          
					</tr><tr>
						<td class="text-right ">FHG</td>
						<td class="text-right "></td>
                        <td class="text-right "></td>
                                          
					</tr><tr>
						<td class="text-right ">NEC</td>
						<td class="text-right "></td>
                        <td class="text-right "></td>
                                          
					</tr><tr>
						<td class="text-right ">BLK</td>
						<td class="text-right "></td>
                        <td class="text-right "></td>
                                          
					</tr><tr>
						<td class="text-right ">BC</td>
						<td class="text-right "></td>
                        <td class="text-right "></td>
                                          
					</tr>                    <tr>
						<th colspan="2" class="text-right ">合计</th>
                        <td colspan="2" class="text-right "></td>
					</tr>
					
				</tbody>
			</table>
				</div>
			</div>
            <!--计算-->
            <div style="overflow:hidden;">
                  <div style="padding-bottom:10px; width:97%; clear:both; margin-left:15px;">
							<strong>					
								计算
							</strong>
			<table class="table table-hover table-striped table-bordered" style="width:100%;border: 1px solid #ddd;">
				<thead>	
               		<tr>
						<th class="warning">币种 </th>
					</tr>
					<tr>
						<th class="warning">充值量-提现量+买入量-卖出量+奖金-投注量-挂单量</th>
					</tr>
					<tr>
						<th class="warning">用户余额</th>
					</tr>
				</thead>
				<tbody>	
					<tr>
                    	
						<td class="text-right ">VRC</td>
					</tr>
                    <tr>
                    	
						<td class="text-right ">44706356.232455                        
                        </td>
					</tr>
                    <tr></tr><tr>
                    	
						<td class="text-right ">CNY</td>
					</tr>
                    <tr>
                    	
						<td class="text-right ">3438487.9776789                        
                        </td>
					</tr>
                    <tr></tr><tr>
                    	
						<td class="text-right ">FHG</td>
					</tr>
                    <tr>
                    	
						<td class="text-right ">299826                        
                        </td>
					</tr>
                    <tr></tr><tr>
                    	
						<td class="text-right ">NEC</td>
					</tr>
                    <tr>
                    	
						<td class="text-right ">3249466                        
                        </td>
					</tr>
                    <tr></tr><tr>
                    	
						<td class="text-right ">BLK</td>
					</tr>
                    <tr>
                    	
						<td class="text-right ">5209500.7747685                        
                        </td>
					</tr>
                    <tr></tr><tr>
                    	
						<td class="text-right ">BC</td>
					</tr>
                    <tr>
                    	
						<td class="text-right ">14999152.9                        
                        </td>
					</tr>
                    <tr></tr>					
				</tbody>
			</table>
				</div>
			</div>
                     <div class="list-page"> <ul><?php echo ($page); ?></ul></div>
                </div>
            
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>

<script>
function pass(id){
	layer.confirm(
	'确定通过审核', 
	{btn:['确定','取消']},
	function(){
	  $.post("<?php echo U('Pay/payUpdate');?>",{"pay_id":id,"status":1},function(data){
		  if(data.status==0){
					layer.msg(data['info']);
					setTimeout("location.reload()",2000);
				}else{
					layer.msg(data['info']);
					setTimeout("location.reload()",2000);
				}
		})
	}
	),
	function(){
		layer.msg('已取消');
	}
}

function fail(id){
	layer.confirm(
	'确定不通过审核', 
	{btn: ['确定','取消'],},
	function(){
		//href="<?php echo U('Pay/payUpdate',array('pay_id'=>$vo['pay_id'],'status'=>1));?>			
		$.post("<?php echo U('Pay/payUpdate');?>",{"pay_id":id,"status":2},function(data){
				if(data.status == 0){
					layer.msg(data['info']);
					setTimeout("location.reload()",2000);
					
				}else if(data.status == 2){
					layer.msg(data['info']);
					setTimeout("location.reload()",2000);
				}else{
					layer.msg(data['info']);
					setTimeout("location.reload()",2000);
				}
		})
		}
		),
	 function(){
		layer.msg('已取消');
	}
}
</script>
<script>
$(".sub-menu").eq(11).show();
$(".sub-menu").eq(11).children("li").eq(2).addClass("on");
</script>