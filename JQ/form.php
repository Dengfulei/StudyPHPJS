    

<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
<form method="post" name="loginForm" id="loginForm" autocomplete="on">
    <fieldset>
        <label class="block clearfix">
            <span class="block input-icon input-icon-right">
                <input type="text" name="username" class="form-control" placeholder="用户名"/>
                <i class="icon-user"></i>
            </span>
        </label>

        <label class="block clearfix">
            <span class="block input-icon input-icon-right">
                <input type="password" name="password" class="form-control" placeholder="密码" />
                <i class="icon-lock"></i>
            </span>
        </label>

        <div class="space"></div>

        <div class="clearfix">
            <label class="inline">
                <input type="checkbox" class="ace" />
                <span class="lbl"> 记住密码</span>
            </label>

            <button  class="width-35 pull-right btn btn-sm btn-primary">
                <i class="icon-key"></i>
                登录
            </button>
        </div>

        <div class="space-4"></div>
    </fieldset>
</form>

<script type="text/javascript">
    $(function(){

                // for(var i in document) {
                //     console.log(i);
                // }


                $("#loginForm").on('submit',function(event){                    
                    var self = this;
                    var $this = $(this);
                    console.log(self);
                    event.preventDefault();
                    event.stopPropagation();
                    if (self.submitted) {

                        return;
                    }
                    if($this.find("input[name=\"username\"]").val() == ""){
                        alert("请输入用户名！");return false;
                    }
                    if($this.find("input[name=\"password\"]").val() == ""){
                        alert("请输入密码！");return false;
                    }
                    self.submitted = true;
                    self.sign = 'world';
                    $data = $(self).serializeArray();
                    console.log($data);
                    $.ajax({
                        url: 'form.html',
                        data: $data,
                        type: 'post',
                        success: function(result) {
                            if(result.code.toUpperCase() == "SUCCESS"){
                                alert('success');
                                self.submit();//invoke the save password in browser

                            }
                            else{
                                alert(result.message);
                            }
                        },
                        complete: function(){
                            self.submitted = false;
                            self.sign = 'hello';
                        }
                    });
                    return false;
                });
            });
</script>