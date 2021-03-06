
<?php $__env->startSection('short','active'); ?>
<?php $__env->startSection('otherkill','active opened active'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
    <div class="col-sm-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">短网址生成</h3>
                <div class="panel-options">
                    <a href="#" data-toggle="panel">
                        <span class="collapse-icon">–</span>
                        <span class="expand-icon">+</span>
                    </a>
                </div>
            </div>
            <div class="panel-body">

                <form class="form-inline" id="myform">
                    <div class="form-group">
                        <input type="text" class="form-control" size="50" name="longurl" id="longurl" placeholder="请输入需要转换的网址">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-secondary btn-single" id="shengcheng">生成</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="col-md-8" id="jg" style="display: none">

        <!-- Colored panel, remember to add "panel-color" before applying the color -->
        <div class="panel panel-color panel-success"><!-- Add class "collapsed" to minimize the panel -->
            <div class="panel-heading">
                <h3 class="panel-title">生成结果</h3>

                <div class="panel-options">
                    <a href="#">
                        <i class="linecons-cog"></i>
                    </a>

                    <a href="#" data-toggle="panel">
                        <span class="collapse-icon">–</span>
                        <span class="expand-icon">+</span>
                    </a>

                    <a href="#" data-toggle="reload">
                        <i class="fa-rotate-right"></i>
                    </a>
                </div>
            </div>

            <div class="panel-body">
                    <h5>短网址</h5>

                    <ul class="list-group list-group-minimal" id="xsjg">
                    </ul>
            </div>
        </div>
    </div>
    </div>
    <script>
        $(function () {
            $('#shengcheng').click(function () {
                var url = $('#longurl').val();
                if(url==''){
                    layer.msg('请填写完整信息');
                    return false;
                }
                var fm = new FormData($('#myform')[0]);
                $.ajax({
                    type:"post",
                    url:"/action/shorturl",
                    dataType:"json",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'token':localStorage.getItem('token'),
                    },
                    data: fm,
                    processData: false,
                    contentType: false,
                    success: function (resp){
                        if(resp.status==200){
                             var str = '<li class="list-group-item">'+resp.shorturl+'</li>';
                            $('#xsjg').html(str);
                            $('#jg').show();
                        }
                        else if(resp.status==500){
                            layer.msg(resp.msg);
                            setTimeout(function(){
                                window.location = window.location.href;
                            },1000)
                        }
                        else {
                            layer.msg('生成失败');
                        }
                    }
                })

                return false;
            })
        })
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('public.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>