//Following Get Started Section on ContentTools website
window.addEventListener('load', function() {
	var editor;
});

editor = ContentTools.EditorApp.get();
editor.init('*[data-editable]', 'data-name');

editor.addEventListener('saved', function (e) {
	var name, payload, regions, xhr;

	//Check that something changed
	regions = ev.detail().regions;
	if (Object.keys(regions).length == 0) {
		return;
	}

	//Set the editor as busy while we save the changes
	this.busy(true);

	//Collect the contents of each region into a FormData instance
	payload = new FormData();
	for (name in regions) {
		if (regions.hasOwnProperty(name)) {
			payload.append(name, regions[name]);
		}
	}

	//Send the updated content to the server to be saved
	function onStateChange(e) {
		//Check if the request is finished
		if (e.target.readyState == 4) {
			editor.busy(false);
			if (e.target.status == '200') {
				//Save was successful, notify the user with flash message
				new ContentTools.FlashUI('ok');
			} else {
				//Save failed, notify the user with flash message
				new ContentTools.FlashUI('no');
			}
		}
	};

	xhr = new XMLHttpRequest();
	xhr.addEventListener('readystatechange', onStateChange);
	xhr.open('POST', '/save-my-page');
	xhr.send(payload);
});