<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

	<!-- 头部 -->
		<head>
		<meta charset="utf-8" />
		<title>控制台 - Bootstrap后台管理系统模版Ace下载</title>
		<meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
		<meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->
		<link href="/Public/admin/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/Public/admin/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="/Public/admin/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->

		<!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" /> -->

		<!-- ace styles -->

		<link rel="stylesheet" href="/Public/admin/css/ace.min.css" />
		<link rel="stylesheet" href="/Public/admin/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="/Public/admin/css/ace-skins.min.css" />

		<!-- xltcmf styles -->
		<link rel="stylesheet" href="/Public/plugins/xltcmf/xltcmf.css" />

		

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="/Public/admin/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="/Public/admin/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="/Public/admin/js/html5shiv.js"></script>
		<script src="/Public/admin/js/respond.min.js"></script>
		<![endif]-->
	</head>
	<!-- 头部 -->

	<body>

		<!-- 顶部 -->
				<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="icon-leaf"></i>
							XltCMF后台管理系统
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-ok"></i>
									还有4个任务完成
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">软件更新</span>
											<span class="pull-right">65%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:65%" class="progress-bar "></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">硬件更新</span>
											<span class="pull-right">35%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:35%" class="progress-bar progress-bar-danger"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">单元测试</span>
											<span class="pull-right">15%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:15%" class="progress-bar progress-bar-warning"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">错误修复</span>
											<span class="pull-right">90%</span>
										</div>

										<div class="progress progress-mini progress-striped active">
											<div style="width:90%" class="progress-bar progress-bar-success"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										查看任务详情
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-bell-alt icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-warning-sign"></i>
									8条通知
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink icon-comment"></i>
												新闻评论
											</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="btn btn-xs btn-primary icon-user"></i>
										切换为编辑登录..
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
												新订单
											</span>
											<span class="pull-right badge badge-success">+8</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-info icon-twitter"></i>
												粉丝
											</span>
											<span class="pull-right badge badge-info">+11</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										查看所有通知
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-envelope-alt"></i>
									5条消息
								</li>

								<li>
									<a href="#">
										<img src="__AVATAR__/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												不知道写啥 ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>1分钟以前</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="__AVATAR__/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												不知道翻译...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20分钟以前</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="__AVATAR__/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												到底是不是英文 ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>下午3:15</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="inbox.html">
										查看所有消息
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">

							<?php if(!empty($admin_info['admin_avatar'])): ?><img class="nav-user-photo" src="<?php echo ($admin_info['admin_avatar']); ?>" alt="<?php echo ($admin_info['admin_nickname']); ?>" />
							<?php else: ?>
								<img class="nav-user-photo" src="__AVATAR__/user.jpg" alt="<?php echo ($admin_info['admin_nickname']); ?>" /><?php endif; ?>

								<span class="user-info">
									<small>欢迎光临,</small>
									<?php echo ($admin_info['admin_nickname']); ?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="<?php echo U('User/user_setting');?>">
										<i class="icon-cog"></i>
										设置
									</a>
								</li>

								<li>
									<a href="<?php echo U('User/user_profile');?>">
										<i class="icon-user"></i>
										个人中心
									</a>
								</li>

								<li>
									<a class="clearCache" href="<?php echo U('System/clear');?>">
										<i class="icon-cog"></i>
										清空缓存
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo U('Login/admin_runloginout');?>">
										<i class="icon-off"></i>
										退出
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>
		<!-- 顶部 -->

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				
				<!-- 菜单 -->
								<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-success">
								<i class="icon-signal"></i>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button class="btn btn-danger">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->

					<ul class="nav nav-list">

					<?php if(is_array($menus_tree)): $i = 0; $__LIST__ = $menus_tree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="<?php if((count($menu_parents) >= 1) AND ($menu_parents[0]['id'] == $v['id'])): ?>open active<?php endif; ?>">
							<a href="<?php echo ($v["url"]); ?>" class="dropdown-toggle">
								<i class="<?php echo ($v["css"]); ?>"></i>
								<span class="menu-text"> <?php echo ($v["title"]); ?> </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<?php if(!empty($v['child'])): ?><ul class="submenu">

								<?php if(is_array($v['child'])): $i = 0; $__LIST__ = $v['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?><li class="<?php if((count($menu_parents) >= 2) AND ($menu_parents[1]['id'] == $v2['id'])): ?>open active<?php endif; ?>">
									<a href="<?php echo ($v2["url"]); ?>" class="dropdown-toggle">
										<i class="icon-double-angle-right"></i>
										<?php echo ($v2["title"]); ?>
										<b class="arrow icon-angle-down"></b>
									</a>

									<?php if(!empty($v2['child'])): ?><ul class="submenu">

										<?php if(is_array($v2['child'])): $i = 0; $__LIST__ = $v2['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v3): $mod = ($i % 2 );++$i;?><li class="<?php if((count($menu_parents) >= 3) AND ($menu_parents[2]['id'] == $v3['id'])): ?>active<?php endif; ?>">
											<a href="<?php echo ($v3["url"]); ?>">
												<i class="<?php echo ($v3["css"]); ?>"></i>
												<?php echo ($v3["title"]); ?>
											</a>
										</li><?php endforeach; endif; else: echo "" ;endif; ?>

									</ul><?php endif; ?>
								</li><?php endforeach; endif; else: echo "" ;endif; ?>

							</ul><?php endif; ?>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>


						<!--
						<li class="active">
							<a href="index.html">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> 系统设置 </span>
							</a>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-group"></i>
								<span class="menu-text"> 用户管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">

								<li>
									<a href="#" class="dropdown-toggle">
										<i class="icon-double-angle-right"></i>
										管理组
										<b class="arrow icon-angle-down"></b>
									</a>

									<ul class="submenu">
										<li>
											<a href="<?php echo U('Admin/User/index');?>">
												<i class="icon-leaf"></i>
												管理员
											</a>
										</li>

										<li>
											<a href="<?php echo U('Admin/User/role');?>">
												<i class="icon-leaf"></i>
												角色管理
											</a>
										</li>

									</ul>
								</li>

								<li>
									<a href="#" class="dropdown-toggle">
										<i class="icon-double-angle-right"></i>
										会员管理
										<b class="arrow icon-angle-down"></b>
									</a>

									<ul class="submenu">
										<li>
											<a href="<?php echo U('Member/index');?>">
												<i class="icon-leaf"></i>
												会员列表
											</a>
										</li>

										<li>
											<a href="<?php echo U('Member/member_group_list');?>">
												<i class="icon-leaf"></i>
												会员组
											</a>
										</li>

									</ul>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 菜单管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">

								<li>
									<a href="#" class="dropdown-toggle">
										<i class="icon-double-angle-right"></i>
										后台菜单
										<b class="arrow icon-angle-down"></b>
									</a>

									<ul class="submenu">
										<li>
											<a href="<?php echo U('Admin/Menu/index');?>">
												<i class="icon-leaf"></i>
												菜单列表
											</a>
										</li>

									</ul>
								</li>

								<li>
									<a href="#" class="dropdown-toggle">
										<i class="icon-double-angle-right"></i>
										前台菜单
										<b class="arrow icon-angle-down"></b>
									</a>

									<ul class="submenu">
										<li>
											<a href="#">
												<i class="icon-leaf"></i>
												菜单分类
											</a>
										</li>

										<li>
											<a href="#">
												<i class="icon-leaf"></i>
												菜单列表
											</a>
										</li>

									</ul>
								</li>
							</ul>
						</li>
						-->

					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>
				<!-- 菜单 -->

				<div class="main-content">
					
					<!-- 面包屑导航 -->
					<div class="breadcrumbs" id="breadcrumbs">
	<script type="text/javascript">
		try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
	</script>

	<ul class="breadcrumb">
		<li>
			<i class="icon-home home-icon"></i>
			<a href="<?php echo U('Index/index');?>">首页</a>
		</li>
		<?php if(is_array($menu_parents)): $i = 0; $__LIST__ = $menu_parents;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li <?php if($vo['id'] == $cur_id): ?>class="active"><?php endif; ?><a href="<?php echo U($vo['name']);?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul><!-- .breadcrumb -->

	<div class="nav-search" id="nav-search">
		<form class="form-search">
			<span class="input-icon">
				<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
				<i class="icon-search nav-search-icon"></i>
			</span>
		</form>
	</div><!-- #nav-search -->
</div>
					<!-- 面包屑导航 -->

					<!-- 右侧下主要内容开始 -->
					
	<div class="page-content">

		<div class="row">
			<div class="col-xs-12">
				<!-- PAGE CONTENT BEGINS -->

				<div class="alert alert-block alert-success">
					<button type="button" class="close" data-dismiss="alert">
						<i class="icon-remove"></i>
					</button>

					<i class="icon-ok green"></i>

					欢迎使用
					<strong class="green">
						XltCMF后台管理系统
						<small>(v1.0)</small>
					</strong>
					,轻量级好用的CMF后台管理系统.	
				</div>

				<div class="row">
					<div class="space-6"></div>

					<div class="col-sm-7 infobox-container">
						<div class="infobox infobox-green  ">
							<div class="infobox-icon">
								<i class="icon-comments"></i>
							</div>

							<div class="infobox-data">
								<span class="infobox-data-number">32</span>
								<div class="infobox-content">2个评论</div>
							</div>
							<div class="stat stat-success">8%</div>
						</div>

						<div class="infobox infobox-blue  ">
							<div class="infobox-icon">
								<i class="icon-twitter"></i>
							</div>

							<div class="infobox-data">
								<span class="infobox-data-number">11</span>
								<div class="infobox-content">新粉丝</div>
							</div>

							<div class="badge badge-success">
								+32%
								<i class="icon-arrow-up"></i>
							</div>
						</div>

						<div class="infobox infobox-pink  ">
							<div class="infobox-icon">
								<i class="icon-shopping-cart"></i>
							</div>

							<div class="infobox-data">
								<span class="infobox-data-number">8</span>
								<div class="infobox-content">新订单</div>
							</div>
							<div class="stat stat-important">4%</div>
						</div>

						<div class="infobox infobox-red  ">
							<div class="infobox-icon">
								<i class="icon-beaker"></i>
							</div>

							<div class="infobox-data">
								<span class="infobox-data-number">7</span>
								<div class="infobox-content">调查</div>
							</div>
						</div>

						<div class="infobox infobox-orange2  ">
							<div class="infobox-chart">
								<span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
							</div>

							<div class="infobox-data">
								<span class="infobox-data-number">6,251</span>
								<div class="infobox-content">页面查看次数</div>
							</div>

							<div class="badge badge-success">
								7.2%
								<i class="icon-arrow-up"></i>
							</div>
						</div>

						<div class="infobox infobox-blue2  ">
							<div class="infobox-progress">
								<div class="easy-pie-chart percentage" data-percent="42" data-size="46">
									<span class="percent">42</span>%
								</div>
							</div>

							<div class="infobox-data">
								<span class="infobox-text">交易使用</span>

								<div class="infobox-content">
									<span class="bigger-110">~</span>
									剩余58GB
								</div>
							</div>
						</div>

						<div class="space-6"></div>

						<div class="infobox infobox-green infobox-small infobox-dark">
							<div class="infobox-progress">
								<div class="easy-pie-chart percentage" data-percent="61" data-size="39">
									<span class="percent">61</span>%
								</div>
							</div>

							<div class="infobox-data">
								<div class="infobox-content">任务</div>
								<div class="infobox-content">完成</div>
							</div>
						</div>

						<div class="infobox infobox-blue infobox-small infobox-dark">
							<div class="infobox-chart">
								<span class="sparkline" data-values="3,4,2,3,4,4,2,2"></span>
							</div>

							<div class="infobox-data">
								<div class="infobox-content">获得</div>
								<div class="infobox-content">$32,000</div>
							</div>
						</div>

						<div class="infobox infobox-grey infobox-small infobox-dark">
							<div class="infobox-icon">
								<i class="icon-download-alt"></i>
							</div>

							<div class="infobox-data">
								<div class="infobox-content">下载次数</div>
								<div class="infobox-content">1,205</div>
							</div>
						</div>
					</div>

					<div class="vspace-sm"></div>

					<div class="col-sm-5">
						<div class="widget-box">
							<div class="widget-header widget-header-flat widget-header-small">
								<h5>
									<i class="icon-signal"></i>
									访问来源
								</h5>

								<div class="widget-toolbar no-border">
									<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown">
										本周
										<i class="icon-angle-down icon-on-right bigger-110"></i>
									</button>

									<ul class="dropdown-menu pull-right dropdown-125 dropdown-lighter dropdown-caret">
										<li class="active">
											<a href="#" class="blue">
												<i class="icon-caret-right bigger-110">&nbsp;</i>
												本周
											</a>
										</li>

										<li>
											<a href="#">
												<i class="icon-caret-right bigger-110 invisible">&nbsp;</i>
												上周
											</a>
										</li>

										<li>
											<a href="#">
												<i class="icon-caret-right bigger-110 invisible">&nbsp;</i>
												本月
											</a>
										</li>

										<li>
											<a href="#">
												<i class="icon-caret-right bigger-110 invisible">&nbsp;</i>
												上月
											</a>
										</li>
									</ul>
								</div>
							</div>

							<div class="widget-body">
								<div class="widget-main">
									<div id="piechart-placeholder"></div>

									<div class="hr hr8 hr-double"></div>

									<div class="clearfix">
										<div class="grid3">
											<span class="grey">
												<i class="icon-facebook-sign icon-2x blue"></i>
												&nbsp; likes
											</span>
											<h4 class="bigger pull-right">1,255</h4>
										</div>

										<div class="grid3">
											<span class="grey">
												<i class="icon-twitter-sign icon-2x purple"></i>
												&nbsp; tweets
											</span>
											<h4 class="bigger pull-right">941</h4>
										</div>

										<div class="grid3">
											<span class="grey">
												<i class="icon-pinterest-sign icon-2x red"></i>
												&nbsp; pins
											</span>
											<h4 class="bigger pull-right">1,050</h4>
										</div>
									</div>
								</div><!-- /widget-main -->
							</div><!-- /widget-body -->
						</div><!-- /widget-box -->
					</div><!-- /span -->
				</div><!-- /row -->

				<div class="hr hr32 hr-dotted"></div>

				<div class="row">
					<div class="col-sm-5">
						<div class="widget-box transparent">
							<div class="widget-header widget-header-flat">
								<h4 class="lighter">
									<i class="icon-star orange"></i>
									热门域名
								</h4>

								<div class="widget-toolbar">
									<a href="#" data-action="collapse">
										<i class="icon-chevron-up"></i>
									</a>
								</div>
							</div>

							<div class="widget-body">
								<div class="widget-main no-padding">
									<table class="table table-bordered table-striped">
										<thead class="thin-border-bottom">
											<tr>
												<th>
													<i class="icon-caret-right blue"></i>
													名称
												</th>

												<th>
													<i class="icon-caret-right blue"></i>
													价格
												</th>

												<th class="hidden-480">
													<i class="icon-caret-right blue"></i>
													状态
												</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<td>internet.com</td>

												<td>
													<small>
														<s class="red">$29.99</s>
													</small>
													<b class="green">$19.99</b>
												</td>

												<td class="hidden-480">
													<span class="label label-info arrowed-right arrowed-in">销售中</span>
												</td>
											</tr>

											<tr>
												<td>online.com</td>

												<td>
													<small>
														<s class="red"></s>
													</small>
													<b class="green">$16.45</b>
												</td>

												<td class="hidden-480">
													<span class="label label-success arrowed-in arrowed-in-right">可用</span>
												</td>
											</tr>

											<tr>
												<td>newnet.com</td>

												<td>
													<small>
														<s class="red"></s>
													</small>
													<b class="green">$15.00</b>
												</td>

												<td class="hidden-480">
													<span class="label label-danger arrowed">待定</span>
												</td>
											</tr>

											<tr>
												<td>web.com</td>

												<td>
													<small>
														<s class="red">$24.99</s>
													</small>
													<b class="green">$19.95</b>
												</td>

												<td class="hidden-480">
													<span class="label arrowed">
														<s>无货</s>
													</span>
												</td>
											</tr>

											<tr>
												<td>domain.com</td>

												<td>
													<small>
														<s class="red"></s>
													</small>
													<b class="green">$12.00</b>
												</td>

												<td class="hidden-480">
													<span class="label label-warning arrowed arrowed-right">售完</span>
												</td>
											</tr>
										</tbody>
									</table>
								</div><!-- /widget-main -->
							</div><!-- /widget-body -->
						</div><!-- /widget-box -->
					</div>

					<div class="col-sm-7">
						<div class="widget-box transparent">
							<div class="widget-header widget-header-flat">
								<h4 class="lighter">
									<i class="icon-signal"></i>
									销售统计
								</h4>

								<div class="widget-toolbar">
									<a href="#" data-action="collapse">
										<i class="icon-chevron-up"></i>
									</a>
								</div>
							</div>

							<div class="widget-body">
								<div class="widget-main padding-4">
									<div id="sales-charts"></div>
								</div><!-- /widget-main -->
							</div><!-- /widget-body -->
						</div><!-- /widget-box -->
					</div>
				</div>

				<div class="hr hr32 hr-dotted"></div>

				<div class="row">
					<div class="col-sm-6">
						<div class="widget-box transparent" id="recent-box">
							<div class="widget-header">
								<h4 class="lighter smaller">
									<i class="icon-rss orange"></i>
									最近
								</h4>

								<div class="widget-toolbar no-border">
									<ul class="nav nav-tabs" id="recent-tab">
										<li class="active">
											<a data-toggle="tab" href="#task-tab">任务</a>
										</li>

										<li>
											<a data-toggle="tab" href="#member-tab">会员</a>
										</li>

										<li>
											<a data-toggle="tab" href="#comment-tab">评论</a>
										</li>
									</ul>
								</div>
							</div>

							<div class="widget-body">
								<div class="widget-main padding-4">
									<div class="tab-content padding-8 overflow-visible">
										<div id="task-tab" class="tab-pane active">
											<h4 class="smaller lighter green">
												<i class="icon-list"></i>
												可拖拽排序列表
											</h4>

											<ul id="tasks" class="item-list">
												<li class="item-orange clearfix">
													<label class="inline">
														<input type="checkbox" class="ace" />
														<span class="lbl"> 问答</span>
													</label>

													<div class="pull-right easy-pie-chart percentage" data-size="30" data-color="#ECCB71" data-percent="42">
														<span class="percent">42</span>%
													</div>
												</li>

												<li class="item-red clearfix">
													<label class="inline">
														<input type="checkbox" class="ace" />
														<span class="lbl"> BUG修复</span>
													</label>

													<div class="pull-right action-buttons">
														<a href="#" class="blue">
															<i class="icon-pencil bigger-130"></i>
														</a>

														<span class="vbar"></span>

														<a href="#" class="red">
															<i class="icon-trash bigger-130"></i>
														</a>

														<span class="vbar"></span>

														<a href="#" class="green">
															<i class="icon-flag bigger-130"></i>
														</a>
													</div>
												</li>

												<li class="item-default clearfix">
													<label class="inline">
														<input type="checkbox" class="ace" />
														<span class="lbl">添加新的特征</span>
													</label>

													<div class="inline pull-right position-relative dropdown-hover">
														<button class="btn btn-minier bigger btn-primary">
															<i class="icon-cog icon-only bigger-120"></i>
														</button>

														<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-caret dropdown-close pull-right">
															<li>
																<a href="#" class="tooltip-success" data-rel="tooltip" title="Mark&nbsp;as&nbsp;done">
																	<span class="green">
																		<i class="icon-ok bigger-110"></i>
																	</span>
																</a>
															</li>

															<li>
																<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																	<span class="red">
																		<i class="icon-trash bigger-110"></i>
																	</span>
																</a>
															</li>
														</ul>
													</div>
												</li>

												<li class="item-blue clearfix">
													<label class="inline">
														<input type="checkbox" class="ace" />
														<span class="lbl"> 更新模版脚本</span>
													</label>
												</li>

												<li class="item-grey clearfix">
													<label class="inline">
														<input type="checkbox" class="ace" />
														<span class="lbl"> 添加新皮肤</span>
													</label>
												</li>

												<li class="item-green clearfix">
													<label class="inline">
														<input type="checkbox" class="ace" />
														<span class="lbl"> 升级服务端</span>
													</label>
												</li>

												<li class="item-pink clearfix">
													<label class="inline">
														<input type="checkbox" class="ace" />
														<span class="lbl"> 清理垃圾</span>
													</label>
												</li>
											</ul>
										</div>

										<div id="member-tab" class="tab-pane">
											<div class="clearfix">
												<div class="itemdiv memberdiv">
													<div class="user">
														<img alt="Bob Doe's avatar" src="/Public/admin/avatars/user.jpg" />
													</div>

													<div class="body">
														<div class="name">
															<a href="#">Bob Doe</a>
														</div>

														<div class="time">
															<i class="icon-time"></i>
															<span class="green">20 min</span>
														</div>

														<div>
															<span class="label label-warning label-sm">pending</span>

															<div class="inline position-relative">
																<button class="btn btn-minier bigger btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown">
																	<i class="icon-angle-down icon-only bigger-120"></i>
																</button>

																<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																	<li>
																		<a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
																			<span class="green">
																				<i class="icon-ok bigger-110"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
																			<span class="orange">
																				<i class="icon-remove bigger-110"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																			<span class="red">
																				<i class="icon-trash bigger-110"></i>
																			</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>

												<div class="itemdiv memberdiv">
													<div class="user">
														<img alt="Joe Doe's avatar" src="assets/avatars/avatar2.png" />
													</div>

													<div class="body">
														<div class="name">
															<a href="#">Joe Doe</a>
														</div>

														<div class="time">
															<i class="icon-time"></i>
															<span class="green">1 hour</span>
														</div>

														<div>
															<span class="label label-warning label-sm">pending</span>

															<div class="inline position-relative">
																<button class="btn btn-minier bigger btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown">
																	<i class="icon-angle-down icon-only bigger-120"></i>
																</button>

																<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																	<li>
																		<a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
																			<span class="green">
																				<i class="icon-ok bigger-110"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
																			<span class="orange">
																				<i class="icon-remove bigger-110"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																			<span class="red">
																				<i class="icon-trash bigger-110"></i>
																			</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>

												<div class="itemdiv memberdiv">
													<div class="user">
														<img alt="Jim Doe's avatar" src="assets/avatars/avatar.png" />
													</div>

													<div class="body">
														<div class="name">
															<a href="#">Jim Doe</a>
														</div>

														<div class="time">
															<i class="icon-time"></i>
															<span class="green">2 hour</span>
														</div>

														<div>
															<span class="label label-warning label-sm">pending</span>

															<div class="inline position-relative">
																<button class="btn btn-minier bigger btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown">
																	<i class="icon-angle-down icon-only bigger-120"></i>
																</button>

																<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																	<li>
																		<a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
																			<span class="green">
																				<i class="icon-ok bigger-110"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
																			<span class="orange">
																				<i class="icon-remove bigger-110"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																			<span class="red">
																				<i class="icon-trash bigger-110"></i>
																			</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>

												<div class="itemdiv memberdiv">
													<div class="user">
														<img alt="Alex Doe's avatar" src="assets/avatars/avatar5.png" />
													</div>

													<div class="body">
														<div class="name">
															<a href="#">Alex Doe</a>
														</div>

														<div class="time">
															<i class="icon-time"></i>
															<span class="green">3 hour</span>
														</div>

														<div>
															<span class="label label-danger label-sm">blocked</span>
														</div>
													</div>
												</div>

												<div class="itemdiv memberdiv">
													<div class="user">
														<img alt="Bob Doe's avatar" src="assets/avatars/avatar2.png" />
													</div>

													<div class="body">
														<div class="name">
															<a href="#">Bob Doe</a>
														</div>

														<div class="time">
															<i class="icon-time"></i>
															<span class="green">6 hour</span>
														</div>

														<div>
															<span class="label label-success label-sm arrowed-in">approved</span>
														</div>
													</div>
												</div>

												<div class="itemdiv memberdiv">
													<div class="user">
														<img alt="Susan's avatar" src="assets/avatars/avatar3.png" />
													</div>

													<div class="body">
														<div class="name">
															<a href="#">Susan</a>
														</div>

														<div class="time">
															<i class="icon-time"></i>
															<span class="green">yesterday</span>
														</div>

														<div>
															<span class="label label-success label-sm arrowed-in">approved</span>
														</div>
													</div>
												</div>

												<div class="itemdiv memberdiv">
													<div class="user">
														<img alt="Phil Doe's avatar" src="assets/avatars/avatar4.png" />
													</div>

													<div class="body">
														<div class="name">
															<a href="#">Phil Doe</a>
														</div>

														<div class="time">
															<i class="icon-time"></i>
															<span class="green">2 days ago</span>
														</div>

														<div>
															<span class="label label-info label-sm arrowed-in arrowed-in-right">online</span>
														</div>
													</div>
												</div>

												<div class="itemdiv memberdiv">
													<div class="user">
														<img alt="Alexa Doe's avatar" src="assets/avatars/avatar1.png" />
													</div>

													<div class="body">
														<div class="name">
															<a href="#">Alexa Doe</a>
														</div>

														<div class="time">
															<i class="icon-time"></i>
															<span class="green">3天以前</span>
														</div>

														<div>
															<span class="label label-success label-sm arrowed-in">approved</span>
														</div>
													</div>
												</div>
											</div>

											<div class="center">
												<i class="icon-group icon-2x green"></i>

												&nbsp;
												<a href="#">
													查看所有会员 &nbsp;
													<i class="icon-arrow-right"></i>
												</a>
											</div>

											<div class="hr hr-double hr8"></div>
										</div><!-- member-tab -->

										<div id="comment-tab" class="tab-pane">
											<div class="comments">
												<div class="itemdiv commentdiv">
													<div class="user">
														<img alt="Bob Doe's Avatar" src="/Public/admin/avatars/avatar.png" />
													</div>

													<div class="body">
														<div class="name">
															<a href="#">Bob Doe</a>
														</div>

														<div class="time">
															<i class="icon-time"></i>
															<span class="green">6 min</span>
														</div>

														<div class="text">
															<i class="icon-quote-left"></i>
															Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
														</div>
													</div>

													<div class="tools">
														<div class="inline position-relative">
															<button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown">
																<i class="icon-angle-down icon-only bigger-120"></i>
															</button>

															<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																<li>
																	<a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
																		<span class="green">
																			<i class="icon-ok bigger-110"></i>
																		</span>
																	</a>
																</li>

																<li>
																	<a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
																		<span class="orange">
																			<i class="icon-remove bigger-110"></i>
																		</span>
																	</a>
																</li>

																<li>
																	<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																		<span class="red">
																			<i class="icon-trash bigger-110"></i>
																		</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>

												<div class="itemdiv commentdiv">
													<div class="user">
														<img alt="Jennifer's Avatar" src="assets/avatars/avatar1.png" />
													</div>

													<div class="body">
														<div class="name">
															<a href="#">Jennifer</a>
														</div>

														<div class="time">
															<i class="icon-time"></i>
															<span class="blue">15 min</span>
														</div>

														<div class="text">
															<i class="icon-quote-left"></i>
															Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
														</div>
													</div>

													<div class="tools">
														<div class="action-buttons bigger-125">
															<a href="#">
																<i class="icon-pencil blue"></i>
															</a>

															<a href="#">
																<i class="icon-trash red"></i>
															</a>
														</div>
													</div>
												</div>

												<div class="itemdiv commentdiv">
													<div class="user">
														<img alt="Joe's Avatar" src="assets/avatars/avatar2.png" />
													</div>

													<div class="body">
														<div class="name">
															<a href="#">Joe</a>
														</div>

														<div class="time">
															<i class="icon-time"></i>
															<span class="orange">22 min</span>
														</div>

														<div class="text">
															<i class="icon-quote-left"></i>
															Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
														</div>
													</div>

													<div class="tools">
														<div class="action-buttons bigger-125">
															<a href="#">
																<i class="icon-pencil blue"></i>
															</a>

															<a href="#">
																<i class="icon-trash red"></i>
															</a>
														</div>
													</div>
												</div>

												<div class="itemdiv commentdiv">
													<div class="user">
														<img alt="Rita's Avatar" src="assets/avatars/avatar3.png" />
													</div>

													<div class="body">
														<div class="name">
															<a href="#">Rita</a>
														</div>

														<div class="time">
															<i class="icon-time"></i>
															<span class="red">50 min</span>
														</div>

														<div class="text">
															<i class="icon-quote-left"></i>
															Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
														</div>
													</div>

													<div class="tools">
														<div class="action-buttons bigger-125">
															<a href="#">
																<i class="icon-pencil blue"></i>
															</a>

															<a href="#">
																<i class="icon-trash red"></i>
															</a>
														</div>
													</div>
												</div>
											</div>

											<div class="hr hr8"></div>

											<div class="center">
												<i class="icon-comments-alt icon-2x green"></i>

												&nbsp;
												<a href="#">
													See all comments &nbsp;
													<i class="icon-arrow-right"></i>
												</a>
											</div>

											<div class="hr hr-double hr8"></div>
										</div>
									</div>
								</div><!-- /widget-main -->
							</div><!-- /widget-body -->
						</div><!-- /widget-box -->
					</div><!-- /span -->

					<div class="col-sm-6">
						<div class="widget-box ">
							<div class="widget-header">
								<h4 class="lighter smaller">
									<i class="icon-comment blue"></i>
									会话
								</h4>
							</div>

							<div class="widget-body">
								<div class="widget-main no-padding">
									<div class="dialogs">
										<div class="itemdiv dialogdiv">
											<div class="user">
												<img alt="Alexa's Avatar" src="/Public/admin/avatars/avatar1.png" />
											</div>

											<div class="body">
												<div class="time">
													<i class="icon-time"></i>
													<span class="green">4秒钟前</span>
												</div>

												<div class="name">
													<a href="#">Alexa</a>
												</div>
												<div class="text">大家好啊</div>

												<div class="tools">
													<a href="#" class="btn btn-minier btn-info">
														<i class="icon-only icon-share-alt"></i>
													</a>
												</div>
											</div>
										</div>

										<div class="itemdiv dialogdiv">
											<div class="user">
												<img alt="John's Avatar" src="/Public/admin/avatars/avatar.png" />
											</div>

											<div class="body">
												<div class="time">
													<i class="icon-time"></i>
													<span class="blue">38秒以前</span>
												</div>

												<div class="name">
													<a href="#">John</a>
												</div>
												<div class="text">框架很好用嘛</div>

												<div class="tools">
													<a href="#" class="btn btn-minier btn-info">
														<i class="icon-only icon-share-alt"></i>
													</a>
												</div>
											</div>
										</div>

										<div class="itemdiv dialogdiv">
											<div class="user">
												<img alt="Bob's Avatar" src="/Public/admin/avatars/user.jpg" />
											</div>

											<div class="body">
												<div class="time">
													<i class="icon-time"></i>
													<span class="orange">2分钟以前</span>
												</div>

												<div class="name">
													<a href="#">Bob</a>
													<span class="label label-info arrowed arrowed-in-right">admin</span>
												</div>
												<div class="text">欢迎大家使用ACE后台管理系统.</div>

												<div class="tools">
													<a href="#" class="btn btn-minier btn-info">
														<i class="icon-only icon-share-alt"></i>
													</a>
												</div>
											</div>
										</div>

										<div class="itemdiv dialogdiv">
											<div class="user">
												<img alt="Jim's Avatar" src="/Public/admin/avatars/avatar4.png" />
											</div>

											<div class="body">
												<div class="time">
													<i class="icon-time"></i>
													<span class="grey">3分钟以前</span>
												</div>

												<div class="name">
													<a href="#">Jim</a>
												</div>
												<div class="text">大家多提提BUG</div>

												<div class="tools">
													<a href="#" class="btn btn-minier btn-info">
														<i class="icon-only icon-share-alt"></i>
													</a>
												</div>
											</div>
										</div>

										<div class="itemdiv dialogdiv">
											<div class="user">
												<img alt="Alexa's Avatar" src="/Public/admin/avatars/avatar1.png" />
											</div>

											<div class="body">
												<div class="time">
													<i class="icon-time"></i>
													<span class="green">4分钟以前</span>
												</div>

												<div class="name">
													<a href="#">Alexa</a>
												</div>
												<div class="text">继续支持ACE后台系统</div>

												<div class="tools">
													<a href="#" class="btn btn-minier btn-info">
														<i class="icon-only icon-share-alt"></i>
													</a>
												</div>
											</div>
										</div>
									</div>

									<form>
										<div class="form-actions">
											<div class="input-group">
												<input placeholder="Type your message here ..." type="text" class="form-control" name="message" />
												<span class="input-group-btn">
													<button class="btn btn-sm btn-info no-radius" type="button">
														<i class="icon-share-alt"></i>
														发送
													</button>
												</span>
											</div>
										</div>
									</form>
								</div><!-- /widget-main -->
							</div><!-- /widget-body -->
						</div><!-- /widget-box -->
					</div><!-- /span -->
				</div><!-- /row -->

				<!-- PAGE CONTENT ENDS -->
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.page-content -->


					<!-- 右侧下主要内容结束 -->

				</div><!-- /.main-content -->

				<!-- 界面设置 -->
				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="default" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; 选择皮肤</span>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
							<label class="lbl" for="ace-settings-navbar"> 固定导航条</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> 固定滑动条</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs">固定面包屑</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl">切换到左边</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
							<label class="lbl" for="ace-settings-add-container">
								切换窄屏
								<b></b>
							</label>
						</div>
					</div>
				</div><!-- /#ace-settings-container -->
				<!-- 界面设置 -->

			</div><!-- /.main-container-inner -->

			<!-- 返回顶部 -->
			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
			<!-- 返回顶部 -->

		</div><!-- /.main-container -->

		<!-- basic scripts -->
		<!-- basic scripts -->

	<!--[if !IE]> -->

	<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> -->

	<!-- <![endif]-->

	<!--
	[if IE]>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<![endif]
	-->

	<!--[if !IE]> -->

	<script type="text/javascript">
		window.jQuery || document.write("<script src='/Public/admin/js/jquery-2.0.3.min.js'>"+"<"+"script>");
	</script>

	<!-- <![endif]-->

	<!--
	[if IE]>
	<script type="text/javascript">
	 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"script>");
	</script>
	<![endif]
	-->

	<script type="text/javascript">
		if("ontouchend" in document) document.write("<script src='/Public/admin/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
	</script>
	<script src="/Public/admin/js/bootstrap.min.js"></script>
	<script src="/Public/admin/js/typeahead-bs2.min.js"></script>

	<!-- page specific plugin scripts -->

	<!--[if lte IE 8]>
	  <script src="assets/js/excanvas.min.js"></script>
	<![endif]-->

	<script src="/Public/admin/js/jquery-ui-1.10.3.custom.min.js"></script>
	<script src="/Public/admin/js/jquery.ui.touch-punch.min.js"></script>
	<script src="/Public/admin/js/jquery.slimscroll.min.js"></script>
	<script src="/Public/admin/js/jquery.easy-pie-chart.min.js"></script>
	<script src="/Public/admin/js/jquery.sparkline.min.js"></script>
	<script src="/Public/admin/js/flot/jquery.flot.min.js"></script>
	<script src="/Public/admin/js/flot/jquery.flot.pie.min.js"></script>
	<script src="/Public/admin/js/flot/jquery.flot.resize.min.js"></script>

	<!-- ace scripts -->

	<script src="/Public/admin/js/ace-elements.min.js"></script>
	<script src="/Public/admin/js/ace.min.js"></script>

	<!-- jquery.form、layer、jquery.validation、xltcmf的js -->
	<script src="/Public/plugins/others/jquery.form.js"></script>
	<!-- <script src="/Public/plugins/layer/layer_zh-cn.js"></script> -->
	<script src="/Public/plugins/layui/layui.js"></script>
	<script src="/Public/plugins/others/jquery.validation.min.js"></script>
	<script src="/Public/plugins/others/maxlength.js"></script>
	<script src="/Public/plugins/xltcmf/xltcmf.js"></script>

		<!-- basic scripts -->

		<!-- 此页相关插件js -->
		
		<!-- 与此页相关的js -->
		
</body>
</html>