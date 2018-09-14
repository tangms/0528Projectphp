$(function() {
    //对哪个表单做验证
    $('#formregin')
        .bootstrapValidator({
            message: '不能为空', //全局的出错消息配置
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok', //验证成功的图标
                invalid: 'glyphicon glyphicon-remove', //验证失败的图标
                validating: 'glyphicon glyphicon-refresh' //异步验证ajax
            },
            //对那些字段做验证，注意使用name属性
            fields: {
                //对用户名做验证
                username: {
                    message: '用户名验证失败',
                    //验证的规则
                    validators: {
                        //非空
                        notEmpty: {
                            message: '用户名必须填写'
                        },
                        //长度
                        stringLength: {
                            min: 6, //最小
                            max: 12, //最大
                            message: '用户名长度必须在6~12位之间'
                        }
                    }
                },
                password: {
                    message: '密码验证失败',
                    //验证的规则
                    validators: {
                        //非空
                        notEmpty: {
                            message: '密码必须填写'
                        },
                        //长度
                        stringLength: {
                            min: 6, //最小
                            max: 12, //最大
                            message: '密码长度必须在6~18位之间'
                        }
                    }
                },
                checkpassword: {
                    message: '验证失败',
                    //验证的规则
                    validators: {
                        //非空
                        notEmpty: {
                            message: '确认密码必须填写'
                        },
                        identical: {//与指定控件内容比较是否相同，比如两次密码不一致
                            field: 'password',//指定控件name
                            message: '输入的内容不一致'
                        },

                    }
                },
                phone: {
                    message: '手机号码验证失败',
                    //验证的规则
                    validators: {
                        //非空
                        notEmpty: {
                            message: '手机号码必须填写'
                        },   
                        regexp: {//正则验证
                            regexp: /^((1[358][0-9])|(14[57])|(17[0678])|(19[7]))\d{8}$/,
                            message: '手机号码格式错误'
                        },
                    }
                },
                email: {
                    message: '邮箱验证失败',
                    //验证的规则
                    validators: {
                        //非空
                        notEmpty: {
                            message: '邮箱必须填写'
                        },
                        emailAddress: {//验证email地址
                            message: '不是正确的email地址'
                        }
                    }
                }
    
            }
        })
        .on('success.form.bv', function(e) {
            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});