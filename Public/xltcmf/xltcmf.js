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

/************************************** ajaxForm提交 **************************************/
/** 后台菜单添加 **/
$(function () {
    $('.form_menu_add').ajaxForm({
        success: complete2, // 这是提交后的方法
        dataType: 'json'
    });
});

/** 后台菜单编辑 **/
$(function(){
    $('.form_menu_edit').ajaxForm({
        success: complete2,
        dataType: 'json'
    });
});

//失败跳转
function complete(data) {
    if (data.status == 1) {
        layer.alert(data.info, {icon: 6}, function (index) {
            layer.close(index);
            window.location.href = data.url;
        });
    } else {
        layer.alert(data.info, {icon: 5}, function (index) {
            layer.close(index);
            window.location.href = data.url;
        });
        return false;
    }
}
//失败不跳转
function complete2(data) {
    if (data.status == 1) {
        layer.alert(data.info, {icon: 6}, function (index) {
            layer.close(index);
            window.location.href = data.url;
        });
    } else {
        layer.alert(data.info, {icon: 5}, function (index) {
            layer.close(index);
        });
    }
}
//失败不跳转,验证码刷新
function complete3(data) {
    if (data.status == 1) {
        window.location.href = data.url;
    } else {
        $("#verify").val('');
        $("#verify_img").click();
        layer.alert(data.info, {icon: 5});
    }
}

/** 删除菜单 **/
$(function(){
    $('.confirm-menu-delete').click(function(){
        var href = this.href;
        var info = $(this).data('info');
        layer.confirm(info, {icon:3},function(index){
            layer.close(index);
            $.get(href,function(data){

                if (data.status == 1) {

                    layer.alert(data.info, {icon: 6}, function (index) {
                        layer.close(index);
                        window.location.href = data.url;
                    });

                } else if (data.status == 2) {
                    layer.alert(data.info, {icon: 5}, function (index) {
                        layer.close(index);
                        window.location.href = data.url;
                    });
                } else {

                    layer.alert(data.info, {icon: 5}, function (index) {
                        layer.close(index);
                    });

                }
            },"json");

        });
        return false;
    });
});

/** 显示状态操作 **/
$(function(){
    $('.display-btn').click(function(){
        var id = $(this).data('id');
        var href = this.href;
        var btn = $(this);
        $.post(href, {id:id}, function(data){
            if (data.status == 1) {

                if (data.info == '菜单隐藏成功') {
                    btn.children('div').html('<button class="btn btn-minier btn-danger">隐藏</button>');
                    btn.attr('title','已隐藏');
                    return false;
                } else if(data.info == '菜单显示成功') {
                    btn.children('div').html('<button class="btn btn-minier btn-yellow">显示</button>');
                    btn.attr('title','已显示');
                    return false;
                }
                
            } else {
                layer.alert(data.info, {icon: 5});
            }
        },'json');
        return false;
    });
});

/** 展开菜单 **/
$(function () {

    $('body').on('click','.ajax_menu_index',function () {
        var $a=$(this),$tr=$a.parents('tr');
        var $pid=$tr.attr('id');
        if($a.find('span').hasClass('icon-minus')){
            $("tr[id^='"+$pid+"-']").attr('style','display:none');
            $a.find('span').removeClass('icon-minus').addClass('icon-plus');
        }else{
            if($("tr[id^='"+$pid+"-']").length>0){
                $("tr[id^='"+$pid+"-']").attr('style','');
                $a.find('span').removeClass('icon-plus').addClass('icon-minus');
            }else{
                var $url = this.href,$id=$a.data('id'),$level=$a.data('level');
                $.post($url,{pid:$id,level:$level,id:$pid}, function (data) {
                    if (data.status) {
                        $a.find('span').removeClass('icon-plus').addClass('icon-minus');
                        $tr.after(data.info);
                    }else{
                        $a.find('span').removeClass('icon-plus').addClass('icon-minus');
                    }
                }, "json");
            }
        }
        return false;
    });
    
});

/** 菜单排序 **/
$(function(){
    $('body').on('click', '#btnsort', function(data) {
        var href = this.href;
        $.post(href, $('input.xltcmf-input-sort').serialize(), function(data){
            if (data.status == 1) {
                layer.alert(data.info, {icon: 6}, function (index) {
                    window.location.href = data.url;
                    layer.close(index);
                });
            } else {
                layer.alert(data.info, {icon: 5}, function (index) {
                    layer.close(index);
                });
            }
        }, 'json');

        return false;
    });
});

