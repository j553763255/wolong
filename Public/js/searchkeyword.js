	
	function searchkeyword(url){
		var keyword = $('#searchkeyword').val();
		if( keyword == "" ||  keyword == null ){
			alert("请输入要查询的关键字");
		}else{
			url = url + '/' + keyword;
			console.log(url);
			window.open(url, '_blank');
		}
	}

	
	function searchkeywordEvent(event, url){
		
		var e = event || window.event || arguments.callee.caller.arguments[0];
		if(e && e.keyCode==13){ // enter 键
			var keyword = $('#searchkeyword').val();
			if( keyword == "" ||  keyword == null ){
				alert("请输入要查询的关键字");
			}else{
				url = url + '/' + keyword;
				console.log(url);
				window.open(url, '_blank');
			}
		}
	}
	
