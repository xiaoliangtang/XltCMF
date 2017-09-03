<?php

/**
 * 返回按层级加前缀的菜单数组
 * @author  rainfer
 * @param array $menu 待处理菜单数组
 * @param string $id_field 主键id字段名
 * @param string $pid_field 父级字段名
 * @param string $lefthtml 前缀
 * @param int $pid 父级id
 * @param int $lvl 当前lv
 * @param int $leftpin 左侧距离
 * @return array
 */
function menu_layer($menu,$id_field='id',$pid_field='pid',$lefthtml = '─' , $pid=0 , $lvl=0, $leftpin=0){
    $arr=array();
    foreach ($menu as $v){
        if($v[$pid_field]==$pid){
            $v['lvl']=$lvl + 1;
            $v['leftpin']=$leftpin;
            $v['lefthtml']='├'.str_repeat($lefthtml,$lvl);
            $arr[]=$v;
            $arr= array_merge($arr,menu_layer($menu,$id_field,$pid_field,$lefthtml,$v[$id_field], $lvl+1 ,$leftpin+20));
        }
    }
    return $arr;
}