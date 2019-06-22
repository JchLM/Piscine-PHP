window.onload = function(){
	function GetCookie(Cookiename){
		var name = cookie + "=";
		var cookieList = document.cookie.split(";");

		for (var i = 0; i < cookieList.length; i++){
			var cookie = cookieList[i];
			while(cookie.charAt(0) == " ")
				cookie = cookie.substring(1);
			if (cookie.indexOf(name) == 0)
				return cookie.substring(name.lenght, cookie.lenght);		
		}
		return null;
	}

	function setCookie(name, value, days){
		document.cookie = name + "=" + value + "" + ";path=/";
	}
	CookieValue = 0;

	function addTask(text) {
		console.log("adding task to DOM: " + text);

		CookieValue++;
		itemId = "todo" + CookieValue;
		setCookie(itemId, text, 10000);

		var newItem = document.createElement("li");
		newItem.id = itemId;
		newItem.appendChild(document.createTextNode(text));

		newItem.addEventListener("click", function(eventObject) {
			var uSure = confirm("Do you really want to delete this task?");
			if (uSure) {
				setCookie(eventObject.target.id, "", -1);
				eventObject.target.remove();
			}
		});

		var list = document.getElementById("ft_list");
		list.insertBefore(newItem, list.childNodes[0]);
	}

	var newButton = document.getElementById("add_item");
	newButton.addEventListener("click", function() {
		console.log("they clicked the button");
		var newTaskText = prompt("Enter the task name", "");
		if (newTaskText) {
			addTask(newTaskText);
		} else {
			console.log("cancel :(");
		}
	});

	var cookieList = document.cookie.split(';');
	for(var i = 0; i < cookieList.length; i++) {
		var cookie = cookieList[i];
		while (cookie.charAt(0)==' ') {
			cookie = cookie.substring(1);
		}
		if (cookie.indexOf("todo") === 0) {
			var brokenCookie = cookie.split('=');
			var indexOfCookie = brokenCookie[0];
			var valueofCookie = brokenCookie[1];
			setCookie(indexOfCookie, "", -1);
			addTask(valueofCookie);
		}
	}
}
