<?php 
class Render{
	public function view($view, $data){
		$smarty = new Smarty;
		$smarty->template_dir = VIEW_PATH.'/view';
		$smarty->compile_dir = VIEW_PATH.'/view_c';
		$smarty->config_dir = VIEW_PATH.'/config';
		$smarty->cache_dir = VIEW_PATH.'/cache';

		foreach ($data as $key => $value) {
			$smarty->assign($key, $value);
		}


		$smarty->display($view);
	}
}