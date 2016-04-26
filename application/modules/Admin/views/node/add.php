<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <title>添加节点</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link href="/public/admin/css/bootstrap.min.css?v=3.4.0" rel="stylesheet">
    <link href="/public/admin/css/font-awesome.min.css?v=4.3.0" rel="stylesheet">
    <link href="/public/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/public/admin/css/animate.min.css" rel="stylesheet">
    <link href="/public/admin/css/style.min.css?v=3.0.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>所有表单元素 <small>包括自定义样式的复选和单选按钮</small></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="form_basic.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="form_basic.html#">选项1</a>
                                </li>
                                <li><a href="form_basic.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form method="post" class="form-horizontal" action="/admin/node/add">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">上级:</label>
                                <div class="col-sm-10">
                                    <select class="form-control m-b" name="parentid">
                                        <option value="0">作为一级节点</option>
                                        <option>选项 2</option>
                                        <option>选项 3</option>
                                        <option>选项 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">名称:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name"> <span class="help-block m-b-none">节点名称中文</span>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">模块:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="model"> <span class="help-block m-b-none">首字母大写</span>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">控制器:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="controller"> <span class="help-block m-b-none"></span>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">方法:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="action"> <span class="help-block m-b-none"></span>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">状态:</label>
                                <div class="col-sm-10">
                                    <select class="form-control m-b" name="status">
                                        <option value="1">显示</option>
                                        <option value="0">不显示</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit">保存内容</button>
                                    <button class="btn btn-white" type="submit">取消</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

   

    <!-- 全局js -->
    <script src="/public/admin/js/jquery-2.1.1.min.js"></script>
    <script src="/public/admin/js/bootstrap.min.js?v=3.4.0"></script>

    <!-- 自定义js -->
    <script src="/public/admin/js/content.min.js?v=1.0.0"></script>

    <!-- iCheck -->
    <script src="/public/admin/js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>

    
    <!--统计代码，可删除-->

</body>

</html>