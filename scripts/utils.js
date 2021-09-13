function maximize(id) {
	var minimize = document.getElementById('minimize');
	minimize.classList.remove('hidden');

	var elem = document.getElementById(id);
	elem.classList.add('maximize');

	document.body.insertBefore(elem, minimize.nextSibling);
}

function minimize(id, orginalParent) {

	var minimize = document.getElementById('minimize');
	minimize.classList.add('hidden');


	var elem = document.getElementById(id);
	elem.classList.remove('maximize');
	document.getElementById(orginalParent).appendChild(elem);
}

function submitForm(form) {
	var elements = form.elements;
	var body = '&body=';
	for (var i = 0, element; element = elements[i++];) {
					body += (element.name + ': ' + element.value + '%0D');
	}
	window.open("mailto:marwandmin@hotmail.com?subject="+form.requestType.value + body);
	return false; /* cancel submit or else page reloads */
}
