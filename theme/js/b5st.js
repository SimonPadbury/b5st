/*!
 * b5st JS
 */

document.addEventListener('DOMContentLoaded', function () {

	let commentListItem = document.querySelectorAll('.comment');
	let commentReplyLink = document.querySelectorAll('.comment-reply-link');
	let formElems = document.querySelectorAll('input[type=text]','input[type=email]','input[type=password]','textarea','select');
	let submitButtons = document.querySelectorAll('input[type=submit]');

	commentListItem.forEach(element => {
		element.classList.add('card','shadow-sm','mb-3');
	});

	commentReplyLink.forEach(element => {
		element.classList.add('btn','btn-primary');
	});

	formElems.forEach(element => {
		element.classList.add('form-control');
	});

	submitButtons.forEach(element => {
		element.classList.add('btn','btn-primary');
	});

	

	// Pagination fix for ellipsis
	//document.querySelectorAll('.pagination .dots').classList.add('page-link');
	//document.querySelectorAll('.pagination .dots').parent.classList.add('disabled');

}, false);