/************************************** 权限操作 **************************************/
$(function(){
	$("#saveAccess").click(function(){
		var nodesID = getZTreeNodesValue();
		alert(nodesID);
	});
});
/** 获取树节点id值 **/
function getZTreeNodesValue(){
	var zTree = $.fn.zTree.getZTreeObj("treeAccess"),
	nodes = zTree.getCheckedNodes(true),
    v = "";
    v_str = "";
    for(var i=0; i<nodes.length; i++){
    	v += nodes[i].name + ",";
    	v_str += nodes[i].id + ",";
    	//alert(nodes[i].id); //获取选中节点的值
    }

    return v_str.slice(0,v_str.length-1);
}