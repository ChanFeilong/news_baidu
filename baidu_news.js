$(document).ready(function(){
	$.ajax({
		url:"m.baidu.php",
		dataType:"json",
		success:function(data){
			var news_data = data.result;
			console.log(news_data);
			
		}
	});
});