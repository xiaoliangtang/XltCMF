<?php
namespace Admin\Controller;
use Think\Controller;
use Org\Util\File;
class SystemController extends BaseController {

	public function index()
	{
		# code...
	}


	/**
	 * 清空缓存
	 */
	public function clear() {
		$cacheFile = RUNTIME_PATH.'Cache';
		$file = new File;
		if ($file->remove_dir($cacheFile, true)) {
			$this->success('缓存清除成功');
		} else {
			$this->error('缓存清除失败');
		}
	}

}