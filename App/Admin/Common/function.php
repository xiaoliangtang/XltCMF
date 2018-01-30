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

/**
 * 树形菜单
 */
function menu_tree($menu,$id_field='id',$pid_field='pid',$child_field = 'child' , $pid=0){

    $arr = array();
    foreach ($menu as $v) {
        if ($v[$pid_field] == $pid) {
            $v[$child_field] = menu_tree($menu, 'id', 'pid', 'child' , $v[$id_field]);
            $arr[] = $v;
        }
    }
    return $arr;
}

/**
 * 根据当前菜单id获取父级数据
 */
function get_parents($menu, $id, $id_field='id', $pid_field='pid'){
    $arr = array();
    foreach ($menu as $v) {
        if($v[$id_field] == $id){
            $arr[] = $v;
            $arr = array_merge(get_parents($menu, $v[$pid_field]), $arr);
        }
    }
    return $arr;
}