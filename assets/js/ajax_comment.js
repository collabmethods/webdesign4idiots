Event.observe(window, 'load', init, false);
	
	function init() {
		$('comment-submit').style.display = 'none';
		Event.observe('comment-result', 'keyup', greet, false);
	}

	function greet(){
	  var url = 'forms/new_comment';
		var params = 'greeting-name='+escape($F('greeting-name'));
		var target = 'comment-result';
		var myAjax = new Ajax.Updater(target, url, {	method: 'get',	parameters: params});
	}
