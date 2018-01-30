/************************************** layui加载layer模块 **************************************/
$(function(){
    layui.use('layer', function(){
      var layer = layui.layer;
    });
});

/************************************** 权限节点操作 **************************************/
$(function(){

    $('body').on('click','#btn_role_add',function(){
        var rules = getZTreeNodesValue();
        var href = this.href;
        $.post(href, {rules:rules}, function(data){
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

/** 后台管理员添加 **/
$(function(){
    $('.form_user_add').ajaxForm({
        beforeSubmit: checkuserForm,
        success: complete2,
        dataType: 'json'
    });
});

/** 后台管理员编辑 **/
$(function(){
    $('.form_user_edit').ajaxForm({
        beforeSubmit: checkuserForm, // 此方法主要是提交前执行的方法，根据需要设置
        success: complete2, // 这是提交后的方法
        dataType: 'json'
    });
});

/** 角色添加 **/
$(function(){
    $('.form_role_add').ajaxForm({
        success: complete2,
        dataType: 'json'
    });
});

/** 角色编辑 **/
$(function(){
    $('.form_role_edit').ajaxForm({
        success: complete2,
        dataType: 'json'
    });
});

/** 管理员登录 **/
$(function(){
    $('.form_admin_login').ajaxForm({
        success: complete3,
        dataType: 'json'
    });
});

/** 会员添加 **/
$(function(){
    $('.form_member_add').ajaxForm({
        beforeSubmit: checkmemberForm,
        success: complete2,
        dataType: 'json'
    });
});

/** 会员编辑 **/
$(function(){
    $('.form_member_edit').ajaxForm({
        beforeSubmit: checkmemberForm,
        success: complete2,
        dataType: 'json'
    });
});

/** 会员组添加 **/
$(function(){
    $('.form_member_group_add').ajaxForm({
        success: complete2,
        dataType: 'json'
    });
});

/** 会员组添加 **/
$(function(){
    $('.form_member_group_edit').ajaxForm({
        success: complete2,
        dataType: 'json'
    });
});

/** 后台菜单添加 **/
$(function(){
    $('.form_nav_add').ajaxForm({
        success: complete2,
        dataType: 'json'
    });
});

/** 后台菜单编辑 **/
$(function(){
    $('.form_nav_edit').ajaxForm({
        success: complete2,
        dataType: 'json'
    });
});

/** 后台菜单分类添加 **/
$(function(){
    $('.form_navcat_add').ajaxForm({
        success: complete2,
        dataType: 'json'
    });
});

/** 后台菜单分类编辑 **/
$(function(){
    $('.form_navcat_edit').ajaxForm({
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

/** 管理员表单验证**/
function checkuserForm() {
    // 验证码用户名
    var admin_name = $.trim($('input[name="admin_name"]').val()); //获取INPUT值
    var myReg = /^[\u4e00-\u9fa5]+$/;//验证中文
    if (admin_name.indexOf(" ") >= 0) {
        layer.alert('登录用户名包含了空格，请重新输入', {icon: 5}, function (index) {
            layer.close(index);
            $('#admin_name').focus();
        });
        return false;
    }
    if (myReg.test(admin_name)) {
        layer.alert('用户名必须是字母，数字，符号', {icon: 5}, function (index) {
            layer.close(index);
            $('#admin_name').focus();
        });
        return false;
    }

    // 验证密码
    var pwdReg = /^[a-zA-Z]\w{5,14}$/;
    if (!$('#admin_pass').val().match(pwdReg)) {
        layer.alert('密码必须字母开头且6-15位之间', {icon: 5}, function (index) {
            layer.close(index);
            $('#admin_name').focus();
        });
        return false;
    }

    // 验证码电话号码
    if (!$("#admin_mobile").val().match(/^(((13[0-9]{1})|(15[0-9]{1})|(17[0-9]{1})|(18[0-9]{1}))+\d{8})$/)) {
        layer.alert('电话号码格式不正确', {icon: 5}, function (index) {
            layer.close(index);
            $('#admin_mobile').focus();
        });
        return false;
    }
}

/** 管理员表达验证 **/
function checkmemberForm(){
    // 验证码电话号码
    if (!$("#member_tel").val().match(/^(((13[0-9]{1})|(15[0-9]{1})|(17[0-9]{1})|(18[0-9]{1}))+\d{8})$/)) {
        layer.alert('电话号码格式不正确', {icon: 5}, function (index) {
            layer.close(index);
            $('#member_tel').focus();
        });
        return false;
    }
}

/*************************************** 后台菜单 ***************************************/
/** 菜单删除 **/
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

/** 菜单状态操作 **/
$(function(){
    $('body').on('click','.display-btn',function(){
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

/** 菜单展开 **/
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


/*************************************** 前台菜单 ***************************************/
/** 菜单删除 **/
$(function(){
    $('body').on('click', '.confirm-nav-delete', function(){
        var href = this.href;
        var info = $(this).data('info');
        layer.confirm(info, {icon:3}, function(index) {
            layer.close(info);
            $.get(href, function(data) {
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
            }, 'json');
        });
        return false;
    });
});

/** 菜单分类删除 **/
$(function(){
    $('body').on('click','.confirm-navcat-delete',function(){

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

/*************************************** 管理员 ***************************************/
/** 管理员状态操作 **/
$(function(){
    $('body').on('click','.admin-status-btn',function(){
        var id = $(this).data('id');
        var href = this.href;
        var btn = $(this);
        $.post(href, {id:id}, function(data){
            if (data.status == 1) {

                if (data.info == '管理员禁用成功') {
                    btn.children('div').html('<button class="btn btn-minier btn-danger">禁用</button>');
                    btn.attr('title','已禁用');
                    return false;
                } else if(data.info == '管理员开启成功') {
                    btn.children('div').html('<button class="btn btn-minier btn-yellow">开启</button>');
                    btn.attr('title','已开启');
                    return false;
                }
                
            } else {
                layer.alert(data.info, {icon: 5});
            }
        },'json');
        return false;
    });
});

/** 管理员删除 **/
$(function(){
    $('.confirm-user-delete').click(function(){
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


/** 管理员角色删除 **/
$(function(){
    $('body').on('click','.confirm-role-delete',function(){
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

/** 管理员角色状态操作 **/
$(function(){
    $('body').on('click','.role-status-btn',function(){
        var btn = $(this);
        var id = btn.data('id');
        var href = this.href;
        $.post(href, {id:id}, function(data){
            if (data.status == 1) {
                if (data.info == '角色开启成功') {
                    btn.children('div').html('<button class="btn btn-minier btn-yellow">开启</button>');
                    btn.attr('title','已开启');
                    return false;
                } else if(data.info == '角色禁用成功') {
                    btn.children('div').html('<button class="btn btn-minier btn-danger">禁用</button>');
                    btn.attr('title','已禁用');
                    return false;
                }
            } else {
                layer.alert(data.info, {icon: 5});
            }
        }, 'json');
        return false;
    });
});

/*************************************** 会员 ***************************************/
/** 会员状态操作 **/
$(function(){
    $('body').on('click','.member-status-btn',function(){
        var btn = $(this);
        var id = btn.data('id');
        var href = this.href;
        $.post(href, {id:id}, function(data){
            if (data.status == 1) {
                if (data.info == '会员开启成功') {
                    btn.children('div').html('<button class="btn btn-minier btn-yellow">开启</button>');
                    btn.attr('title','已开启');
                    return false;
                } else if(data.info == '会员禁用成功') {
                    btn.children('div').html('<button class="btn btn-minier btn-danger">禁用</button>');
                    btn.attr('title','已禁用');
                    return false;
                }
            } else {
                layer.alert(data.info, {icon: 5});
            }
        }, 'json');
        return false;
    });
});


/** 会员激活操作 **/
$(function(){
    $('body').on('click','.member-active-btn',function(){
        var btn = $(this);
        var id = btn.data('id');
        var href = this.href;
        $.post(href, {id:id}, function(data){
            if (data.status == 1) {
                if (data.info == '会员激活成功') {
                    btn.children('div').html('<button class="btn btn-minier btn-yellow">已激活</button>');
                    btn.attr('title','已激活');
                    return false;
                } else if(data.info == '会员取消激活成功') {
                    btn.children('div').html('<button class="btn btn-minier btn-danger">未激活</button>');
                    btn.attr('title','未激活');
                    return false;
                }
            } else {
                layer.alert(data.info, {icon: 5});
            }
        }, 'json');
        return false;
    });
});


/** 会员删除 **/
$(function(){
    $('body').on('click','.confirm-member-delete',function(){
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

/** 会员组状态操作 **/
$(function(){
    $('body').on('click','.member-group-status-btn',function(){
        var btn = $(this);
        var id = btn.data('id');
        var href = this.href;
        $.post(href, {id:id}, function(data){
            if (data.status == 1) {
                if (data.info == '会员组开启成功') {
                    btn.children('div').html('<button class="btn btn-minier btn-yellow">开启</button>');
                    btn.attr('title','已开启');
                    return false;
                } else if(data.info == '会员组禁用成功') {
                    btn.children('div').html('<button class="btn btn-minier btn-danger">禁用</button>');
                    btn.attr('title','已禁用');
                    return false;
                }
            } else {
                layer.alert(data.info, {icon: 5});
            }
        }, 'json');
        return false;
    });
});

/** 会员组删除 **/
$(function(){
    $('body').on('click','.confirm-member-group-delete',function(){
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



/* textarea字数提示 */
$(function () {
    $('textarea.limited').maxlength({
        'feedback': '.charsLeft',
    });
    $('textarea.limited1').maxlength({
        'feedback': '.charsLeft1',
    });
    $('textarea.limited2').maxlength({
        'feedback': '.charsLeft2',
    });
    $('textarea.limited3').maxlength({
        'feedback': '.charsLeft3',
    });
    $('textarea.limited4').maxlength({
        'feedback': '.charsLeft4',
    });
    $('textarea.limited5').maxlength({
        'feedback': '.charsLeft5',
    });
});
$(function () {
    $("[data-toggle='tooltip']").tooltip();
});


/** 清除缓存操作 **/
$(function(){
    $('body').on('click','.clearCache',function(){
        var href = this.href;
        $.get(href, function(data){
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
        },'json');
        return false;
    });
});



