<?php if (!defined('THINK_PATH')) exit(); if(is_array($menus)): $i = 0; $__LIST__ = $menus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr id="<?php echo ($pid); ?>-<?php echo ($v["id"]); ?>">
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
				<input type="text" name="sort" value="<?php echo ($v["sort"]); ?>" class="xltcmf-input-sort">
			</label>
		</td>

		<td><a data-id="<?php echo ($v["id"]); ?>" data-level="<?php echo ($v["level"]); ?>" href="<?php echo U('Menu/index');?>" style="cursor:pointer;" class="ajax_menu_index"><span class="icon-plus blue"></span></a></td>

		<td style='padding-left:<?php if($v["leftpin"] != 0): echo ($v["leftpin"]); ?>px<?php endif; ?>'><?php echo ($v["lefthtml"]); echo ($v["title"]); ?></td>

		<td><?php echo ($v["name"]); ?></td>

		<td>
			<?php if($v['status'] == 1): ?><a class="red display-btn" href="<?php echo U('Menu/menu_status');?>" data-id="<?php echo ($v["id"]); ?>" data-status="<?php echo ($v["status"]); ?>" title="已显示">
					<div id="zt<?php echo ($v["id"]); ?>"><button class="btn btn-minier btn-yellow">显示</button></div>
				</a>
				<?php else: ?>
				<a class="red display-btn" href="<?php echo U('Menu/menu_status');?>" data-id="<?php echo ($v["id"]); ?>" data-status="<?php echo ($v["status"]); ?>" title="已隐藏">
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