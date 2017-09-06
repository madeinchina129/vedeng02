/**
 * Created by Administrator on 2017/9/6.
 */
$(function(){
    $("#uname").onblur = function(){
        var uname = this.value;
        var checkUname = checkAll("uname",uname)
        if(checkUname == true){
            $("uspan").innerHTML = "√";
        }else{
            $("uspan").innerHTML = "使用数字 字母 下划线，且数字不能开头，长度在6-15之间";
        }
    }

    $("#password").onblur = function(){
        var upass = this.value;
        var checkUpass = checkAll("upass",upass);
        if(checkUpass == true){
            $("pspan").innerHTML = "√";
        }else{
            $("pspan").innerHTML = "使用数字 字母 下划线，且数字不能开头，长度在6-15之间";
        }
    }

    $("#qrpass").onblur = function(){
        var qrpass = this.value;
        if(qrpass != $("upass").value){
            $("qrspan").innerHTML = "两次密码不一致";
        }else{
            $("qrspan").innerHTML = "√";
        }
    }

    $("#email").onblur = function(){
        var email = this.value;
        var checkEmail = checkAll("email",email);
        if(checkEmail == true){
            $("espan").innerHTML = "√";
        }else{
            $("espan").innerHTML = "邮箱格式不正确";
        }
    }

    $("#mobile").onblur = function(){
        var phone = this.value;
        var checkPhone = checkAll("phone",phone);
        if(checkPhone == true){
            $("phspan").innerHTML = "√";
        }else{
            $("phspan").innerHTML = "手机号码不正确";
        }
    }
});

