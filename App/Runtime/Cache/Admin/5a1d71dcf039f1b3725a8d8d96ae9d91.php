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
				<li class="active">
					<a href="<?php echo U('Menu/index');?>">菜单列表</a>
				</li>

				<li>
					<a href="<?php echo U('Menu/menu_add');?>">添加菜单</a>
				</li>

			</ul>

			<div class="tab-content">
				<div id="menu_list" class="tab-pane in active">

					<div class="page-content">

						<div class="row">
							<div class="col-xs-12">		
										
								<!-- PAGE CONTENT BEGINS -->

								<div class="row">
									<div class="col-xs-12">

										<div class="table-responsive">
											<table id="sample-table-2" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label>
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>ID</th>
														<th>排序</th>
														<th>展开</th>
														<th>菜单名称</th>
														<th>控制器/方法</th>
														<th>状态</th>
														<th>级别</th>
														<th>操作</th>
													</tr>
												</thead>

												<tbody>

												<?php if(is_array($menus)): $i = 0; $__LIST__ = $menus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr id="<?php echo ($pid); ?>-<?php echo ($v["id"]); ?>">
														<td class="center">
															<label>
																<input type="checkbox" class="ace"
																 name="id" value="<?php echo ($v["id"]); ?>" />
																<span class="lbl"></span>
															</label>
														</td>

														<td><?php echo ($v["id"]); ?></td>

														<td>
															<label>
																<input type="text" name="<?php echo ($v["id"]); ?>" value="<?php echo ($v["sort"]); ?>" class="xltcmf-input-sort">
															</label>
														</td>

														<td><a data-id="<?php echo ($v["id"]); ?>" data-level="<?php echo ($v["level"]); ?>" href="<?php echo U('Menu/index');?>" style="cursor:pointer;" class="ajax_menu_index"><span class="icon-plus blue"></span></a></td>

														<td><?php echo ($v["title"]); ?></td>

														<td><?php echo ($v["name"]); ?></td>

														<td>
															<?php if($v['status'] == 1): ?><a class="red display-btn" href="<?php echo U('Menu/menu_status');?>" data-id="<?php echo ($v["id"]); ?>" title="已显示">
																	<div id="zt<?php echo ($v["id"]); ?>"><button class="btn btn-minier btn-yellow">显示</button></div>
																</a>
																<?php else: ?>
																<a class="red display-btn" href="<?php echo U('Menu/menu_status');?>" data-id="<?php echo ($v["id"]); ?>" title="已隐藏">
																	<div id="zt<?php echo ($v["id"]); ?>"><button class="btn btn-minier btn-danger">隐藏</button></div>
																</a><?php endif; ?>
														</td>
														<td class="hidden-480"><?php echo ($v["level"]); ?>级</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<a class="blue" href="<?php echo U('Menu/menu_add',array('pid'=>$v['id']));?>">
																	<i class="icon-plus-sign bigger-130"></i>
																</a>

																<a class="green" href="<?php echo U('Menu/menu_edit',array('id'=>$v['id']));?>">
																	<i class="icon-pencil bigger-130"></i>
																</a>

																<a class="red confirm-menu-delete" href="<?php echo U('Menu/menu_delete',array('id'=>$v['id']));?>" data-info="你确定要删除吗？" title="删除">
																	<i class="icon-trash bigger-130"></i>
																</a>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
															
														</td>
													</tr><?php endforeach; endif; else: echo "" ;endif; ?>

												<tr>
													<td colspan="9" align="left">
														<a class="btn btn-sm btn-primary" id="btnsort" href="<?php echo U('Menu/menu_sort');?>">排序</a>
													</td>
												</tr>

												</tbody>
											</table>
										</div>
									</div>
								</div>

								<!-- 分页 -->
								<div class="modal-footer no-margin-top">

									<ul class="pagination pull-right no-margin">
										<li class="prev disabled">
											<a href="#">
												<i class="icon-double-angle-left"></i>
											</a>
										</li>

										<li class="active">
											<a href="#">1</a>
										</li>

										<li>
											<a href="#">2</a>
										</li>

										<li>
											<a href="#">3</a>
										</li>

										<li class="next">
											<a href="#">
												<i class="icon-double-angle-right"></i>
											</a>
										</li>
									</ul>
								</div>
								<!-- 分页 -->

							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->

				</div>

			</div>


			</div>
		</div>
	</div><!-- /span -->



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
		

	<script type="text/javascript">
		//$("#form_menu_add").validate();
	</script>
	<!-- page specific plugin scripts -->

	<script src="__JS__/jquery.dataTables.min.js"></script>
	<script src="__JS__/jquery.dataTables.bootstrap.js"></script>

	<!-- inline scripts related to this page -->

	<script type="text/javascript">

	</script>

		<!-- 与此页相关的js -->
		
</body>
</html>