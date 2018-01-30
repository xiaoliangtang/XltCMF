<?php if (!defined('THINK_PATH')) exit(); if(is_array($navs)): $i = 0; $__LIST__ = $navs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr id="<?php echo ($pid); ?>-<?php echo ($v["id"]); ?>">
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
				<input type="text" name="<?php echo ($v["id"]); ?>" value="<?php echo ($v["listorder"]); ?>" class="xltcmf-input-sort">
			</label>
		</td>

		<td><a data-id="<?php echo ($v["id"]); ?>" data-level="<?php echo ($v["level"]); ?>" href="<?php echo U('Nav/index');?>" style="cursor:pointer;" class="ajax_menu_index"><span class="icon-plus blue"></span></a></td>

		<td style='padding-left:<?php if($v["leftpin"] != 0): echo ($v["leftpin"]); ?>px<?php endif; ?>'><?php echo ($v["lefthtml"]); echo ($v["label"]); ?></td>

		<td><?php echo ($v["href"]); ?></td>

		<td>
			<?php if($v['status'] == 1): ?><a class="red display-btn" href="<?php echo U('Nav/nav_status');?>" data-id="<?php echo ($v["id"]); ?>" title="已显示">
					<div id="zt<?php echo ($v["id"]); ?>"><button class="btn btn-minier btn-yellow">显示</button></div>
				</a>
				<?php else: ?>
				<a class="red display-btn" href="<?php echo U('Nav/nav_status');?>" data-id="<?php echo ($v["id"]); ?>" title="已隐藏">
					<div id="zt<?php echo ($v["id"]); ?>"><button class="btn btn-minier btn-danger">隐藏</button></div>
				</a><?php endif; ?>
		</td>
		<td class="hidden-480"><?php echo ($v["name"]); ?></td>

		<td>
			<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
				<a class="blue" href="<?php echo U('Nav/nav_add',array('pid'=>$v['id']));?>">
					<i class="icon-plus-sign bigger-130"></i>
				</a>

				<a class="green" href="<?php echo U('Nav/nav_edit',array('id'=>$v['id']));?>">
					<i class="icon-pencil bigger-130"></i>
				</a>

				<a class="red confirm-nav-delete" href="<?php echo U('Nav/nav_delete',array('id'=>$v['id']));?>" data-info="你确定要删除吗？" title="删除">
					<i class="icon-trash bigger-130"></i>
				</a>
			</div>

		</td>
	</tr><?php endforeach; endif; else: echo "" ;endif; ?>