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
										<img src="/Public/admin/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
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
										<img src="/Public/admin/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
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
										<img src="/Public/admin/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
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
								<img class="nav-user-photo" src="/Public/admin/avatars/user.jpg" alt="<?php echo ($admin_info['admin_nickname']); ?>" /><?php endif; ?>

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
					

	<!--
	<div class="page-header">
		<h1>
			Tables
			<small>
				<i class="icon-double-angle-right"></i>
				Static &amp; Dynamic Tables
			</small>
		</h1>
	</div>
	--><!-- /.page-header -->

	<div class="col-xs-12">
		<div class="tabbable">
			<ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
				<li>
					<a href="<?php echo U('Nav/index');?>">菜单列表</a>
				</li>

				<li>
					<a href="<?php echo U('Nav/nav_add');?>">添加菜单</a>
				</li>

				<li class="active">
					<a href="<?php echo U('Nav/nav_edit');?>">编辑菜单</a>
				</li>

			</ul>

			<div class="tab-content">
				<div id="menu_list" class="tab-pane in active">

					<div class="page-content">

						<div class="row">
							<div class="col-xs-12">		

								<form class="form-horizontal form_nav_edit" name="admin_rule_copy" method="post" action="<?php echo U('Nav/nav_runedit');?>">

								<input type="hidden" name="id" value="<?php echo ($nav["id"]); ?>">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 菜单分类： </label>
										<div class="col-sm-9">
											<select name="cid"  class="col-xs-10 col-sm-5" required>
												<?php if(is_array($navCats)): foreach($navCats as $key=>$v): ?><option value="<?php echo ($v["navcid"]); ?>" <?php if($v['navcid'] == $nav['cid']): ?>selected<?php endif; ?> ><?php echo ($v["name"]); ?></option><?php endforeach; endif; ?>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 父级： </label>
										<div class="col-sm-9">
											<select name="parentid"  class="col-xs-10 col-sm-5" required>
												<option value="0">--默认顶级--</option>
												<?php if(is_array($nav_layer)): foreach($nav_layer as $key=>$v): ?><option value="<?php echo ($v["path"]); ?>" <?php if($v['id'] == $nav['parentid']): ?>selected<?php endif; ?> ><?php echo ($v["lefthtml"]); echo ($v["label"]); ?></option><?php endforeach; endif; ?>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 菜单名称： </label>
										<div class="col-sm-9">
											<input type="text" name="label" id="label"  value="<?php echo ($nav["label"]); ?>"  class="col-xs-10 col-sm-5" required/>
                                            <span class="help-inline col-xs-12 col-sm-7">
												<span class="middle" id="resone"></span>
											</span>
										</div>
									</div>
									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 控制器/方法： </label>
										<div class="col-sm-9">
											<input type="text" name="href" id="href"  value="<?php echo ($nav["href"]); ?>"  class="col-xs-10 col-sm-5" required/>
                                            <span class="help-inline col-xs-12 col-sm-7">
												<span class="middle" id="restwo"></span>
											</span>
										</div>
									</div>
									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 菜单图标： </label>
										<div class="col-sm-9">
											<input type="text" name="icon" id="icon"  value="<?php echo ($v["icon"]); ?>" class="col-xs-10 col-sm-5" />
				                            <span class="help-inline col-xs-12 col-sm-7">
												<!-- <span class="middle">只针对顶级栏目有效</span> -->
												<a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#iconModal">参考图标</a>
											</span>
										</div>
										<!-- <span class="col-sm-3"></span><span class="col-sm-9" style="font-size:12px; color:#999; margin-top:5px;">预留样式：fa-tachometer ， fa-folder ， fa-list ， fa-list-alt ， fa-calendar</span> -->
									</div>
									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 打开方式： </label>
										<div class="col-sm-9">
											<select name="target"  class="col-xs-10 col-sm-5" >
												<option value="">默认</option>
												<option value="_blank" <?php if($nav['target'] == '_blank'): ?>selected<?php endif; ?> >新窗口打开</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 是否开启： </label>
										<div class="col-sm-9" style="padding-top:5px;">
											<input name="status" value="1" class="ace ace-switch ace-switch-5" type="checkbox" <?php if($nav['status'] == 1): ?>checked<?php endif; ?> />
											<span class="lbl"></span>
										</div>
									</div>
									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 排序（从小到大）： </label>
										<div class="col-sm-9">
											<input type="text" name="listorder" id="listorder"  value="<?php echo ($nav["listorder"]); ?>" class="col-xs-10 col-sm-1" />
										</div>
									</div>
									<div class="space-4"></div>

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="icon-ok bigger-110"></i>
												确定
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="icon-undo bigger-110"></i>
												重置
											</button>
										</div>
									</div>

								</form>

							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->

				</div>

			</div>
		</div>
	</div><!-- /span -->

	<!-- 显示参考模态框（Modal） -->
	<div class="modal fade" id="iconModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-dialog" style="width: 70%;">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
							aria-hidden="true">×
					</button>
					<h4 class="modal-title" id="myModalLabel">
						参考图标
					</h4>
				</div>
				<div class="modal-body">

					<div class="row">

						<div class="col-xs-6 col-sm-3">
							<ul class="list-unstyled">
								<li>
									<i class="icon-adjust"></i>
									icon-adjust
								</li>

								<li>
									<i class="icon-asterisk"></i>
									icon-asterisk
								</li>

								<li>
									<i class="icon-ban-circle"></i>
									icon-ban-circle
								</li>

								<li>
									<i class="icon-bar-chart"></i>
									icon-bar-chart
								</li>

								<li>
									<i class="icon-barcode"></i>
									icon-barcode
								</li>

								<li>
									<i class="icon-beaker"></i>
									icon-beaker
								</li>

								<li>
									<i class="icon-beer"></i>
									icon-beer
								</li>

								<li>
									<i class="icon-bell"></i>
									icon-bell
								</li>

								<li>
									<i class="icon-bell-alt"></i>
									icon-bell-alt
								</li>

								<li>
									<i class="icon-bolt"></i>
									icon-bolt
								</li>

								<li>
									<i class="icon-book"></i>
									icon-book
								</li>

								<li>
									<i class="icon-bookmark"></i>
									icon-bookmark
								</li>

								<li>
									<i class="icon-bookmark-empty"></i>
									icon-bookmark-empty
								</li>

								<li>
									<i class="icon-briefcase"></i>
									icon-briefcase
								</li>

								<li>
									<i class="icon-bullhorn"></i>
									icon-bullhorn
								</li>

								<li>
									<i class="icon-calendar"></i>
									icon-calendar
								</li>

								<li>
									<i class="icon-camera"></i>
									icon-camera
								</li>

								<li>
									<i class="icon-camera-retro"></i>
									icon-camera-retro
								</li>

								<li>
									<i class="icon-certificate"></i>
									icon-certificate
								</li>
							</ul>
						</div>

						<div class="col-xs-6 col-sm-3">
							<ul class="list-unstyled">
								<li>
									<i class="icon-check"></i>
									icon-check
								</li>

								<li>
									<i class="icon-check-empty"></i>
									icon-check-empty
								</li>

								<li>
									<i class="icon-circle"></i>
									icon-circle
								</li>

								<li>
									<i class="icon-circle-blank"></i>
									icon-circle-blank
								</li>

								<li>
									<i class="icon-cloud"></i>
									icon-cloud
								</li>

								<li>
									<i class="icon-cloud-download"></i>
									icon-cloud-download
								</li>

								<li>
									<i class="icon-cloud-upload"></i>
									icon-cloud-upload
								</li>

								<li>
									<i class="icon-coffee"></i>
									icon-coffee
								</li>

								<li>
									<i class="icon-cog"></i>
									icon-cog
								</li>

								<li>
									<i class="icon-cogs"></i>
									icon-cogs
								</li>

								<li>
									<i class="icon-comment"></i>
									icon-comment
								</li>

								<li>
									<i class="icon-comment-alt"></i>
									icon-comment-alt
								</li>

								<li>
									<i class="icon-comments"></i>
									icon-comments
								</li>

								<li>
									<i class="icon-comments-alt"></i>
									icon-comments-alt
								</li>

								<li>
									<i class="icon-credit-card"></i>
									icon-credit-card
								</li>

								<li>
									<i class="icon-dashboard"></i>
									icon-dashboard
								</li>

								<li>
									<i class="icon-desktop"></i>
									icon-desktop
								</li>

								<li>
									<i class="icon-download"></i>
									icon-download
								</li>

								<li>
									<i class="icon-download-alt"></i>
									icon-download-alt
								</li>
							</ul>
						</div>

						<div class="col-xs-6 col-sm-3">
							<ul class="list-unstyled">
								<li>
									<i class="icon-edit"></i>
									icon-edit
								</li>

								<li>
									<i class="icon-envelope"></i>
									icon-envelope
								</li>

								<li>
									<i class="icon-envelope-alt"></i>
									icon-envelope-alt
								</li>

								<li>
									<i class="icon-exchange"></i>
									icon-exchange
								</li>

								<li>
									<i class="icon-exclamation-sign"></i>
									icon-exclamation-sign
								</li>

								<li>
									<i class="icon-external-link"></i>
									icon-external-link
								</li>

								<li>
									<i class="icon-eye-close"></i>
									icon-eye-close
								</li>

								<li>
									<i class="icon-eye-open"></i>
									icon-eye-open
								</li>

								<li>
									<i class="icon-facetime-video"></i>
									icon-facetime-video
								</li>

								<li>
									<i class="icon-fighter-jet"></i>
									icon-fighter-jet
								</li>

								<li>
									<i class="icon-film"></i>
									icon-film
								</li>

								<li>
									<i class="icon-filter"></i>
									icon-filter
								</li>

								<li>
									<i class="icon-fire"></i>
									icon-fire
								</li>

								<li>
									<i class="icon-flag"></i>
									icon-flag
								</li>

								<li>
									<i class="icon-folder-close"></i>
									icon-folder-close
								</li>

								<li>
									<i class="icon-folder-open"></i>
									icon-folder-open
								</li>

								<li>
									<i class="icon-folder-close-alt"></i>
									icon-folder-close-alt
								</li>

								<li>
									<i class="icon-folder-open-alt"></i>
									icon-folder-open-alt
								</li>

								<li>
									<i class="icon-food"></i>
									icon-food
								</li>
							</ul>
						</div>

						<div class="col-xs-6 col-sm-3">
							<ul class="list-unstyled">
								<li>
									<i class="icon-gift"></i>
									icon-gift
								</li>

								<li>
									<i class="icon-glass"></i>
									icon-glass
								</li>

								<li>
									<i class="icon-globe"></i>
									icon-globe
								</li>

								<li>
									<i class="icon-group"></i>
									icon-group
								</li>

								<li>
									<i class="icon-hdd"></i>
									icon-hdd
								</li>

								<li>
									<i class="icon-headphones"></i>
									icon-headphones
								</li>

								<li>
									<i class="icon-heart"></i>
									icon-heart
								</li>

								<li>
									<i class="icon-heart-empty"></i>
									icon-heart-empty
								</li>

								<li>
									<i class="icon-home"></i>
									icon-home
								</li>

								<li>
									<i class="icon-inbox"></i>
									icon-inbox
								</li>

								<li>
									<i class="icon-info-sign"></i>
									icon-info-sign
								</li>

								<li>
									<i class="icon-key"></i>
									icon-key
								</li>

								<li>
									<i class="icon-leaf"></i>
									icon-leaf
								</li>

								<li>
									<i class="icon-laptop"></i>
									icon-laptop
								</li>

								<li>
									<i class="icon-legal"></i>
									icon-legal
								</li>

								<li>
									<i class="icon-lemon"></i>
									icon-lemon
								</li>

								<li>
									<i class="icon-lightbulb"></i>
									icon-lightbulb
								</li>

								<li>
									<i class="icon-lock"></i>
									icon-lock
								</li>

								<li>
									<i class="icon-unlock"></i>
									icon-unlock
								</li>
							</ul>
						</div>
					</div>


				</div>
				
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->

	</div><!-- /.modal -->


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
		

	<!-- page specific plugin scripts -->

	<script src="__JS__/jquery.dataTables.min.js"></script>
	<script src="__JS__/jquery.dataTables.bootstrap.js"></script>

	<!-- inline scripts related to this page -->


		<!-- 与此页相关的js -->
		
</body>
</html>