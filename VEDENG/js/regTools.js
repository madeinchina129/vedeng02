function checkAll(type,value){
	var reg;
	switch(type){
		case "uname":reg = uname();break;
		case "upass":reg = upass();break;
		case "email":reg = email();break;
		case "phone":reg = phone();break;
		default:;
	}
	if(reg.test(value)){
		return true;
	}else{
		return false;
	}
}

function uname(){
	return /^[a-zA-Z_]\w{5,14}$/;
}
function upass(){
	return /^[a-zA-Z_]\w{5,14}$/;
}
function email(){
	return /^\w{3,}@\w+\.(com|net|cn)$/i;
}
function phone(){
	return /^1[35478]\d{9}$/;
}