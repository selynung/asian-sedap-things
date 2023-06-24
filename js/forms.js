function init() {
	document.getElementById("reviewForm").addEventListener('submit', 
		checkForEmptyFields);
}

window.addEventListener('load', init);

function checkForEmptyFields(e) {
	var errorArea = document.getElementById('errors');
	errorArea.className = 'hidden';

	var cssSelector = 'input[type=text],input[type=range],textarea';
	var fields = document.querySelectorAll(cssSelector);


	var fieldList = [];
	for (i=0; i<fields.length; i++) {
		if (fields[i].value == null || fields[i].value == '' || fields[i].value == '0') {
			e.preventDefault();
			fieldList.push(fields[i]);
		}
	}

	var msg = "The following fields can't be empty: ";
	if (fieldList.length > 0) {
		for (i=0; i<fieldList.length; i++) {
			msg += fieldList[i].id + ', ';
		}
		errorArea.innerHTML = '<p>' + msg + '<p>';
		errorArea.className = 'visible';
	}
}