/*微信随机*/
$(function() {
	var url = 'http://5g.xpfamily.com/userlist/base134/case134/get_name.php?q=javascript&callback=?',
        hongc = $(".hong");  	
		$.getJSON(url,
		function(result) {
			var newArr = new Array();
			if(result.length<0){
				return;
			}
			result.forEach(function(item, index) {
				if (result[index]['benchmark'] == 1) {
					var stansoppussier = result[index]['name'];
					newArr.push(stansoppussier);
				}
			})
			var rand = Math.floor(Math.random()*newArr.length); 
			for(var i=0; len=hongc.length, i<len; i++){
				   hongc.html(newArr[rand]);                           
			}
	 })	
})

