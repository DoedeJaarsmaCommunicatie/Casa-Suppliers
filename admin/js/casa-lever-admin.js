(function( $ ) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	$(document).ready(() => {
		openSupplierModal();
	})

})( jQuery );


function openSupplierModal() {
	const button = document.querySelector('.js-open-new-supplier-modal'),
		template = document.querySelector('#template-modal-card');

	if (!button || !template) {
		return;
	}

	button.addEventListener('click', () => {
		const dialog = template.content.cloneNode(true);

		document.body.append(dialog);
		addSubmitListener();
		closeDialogListener();
	})
}

function addSubmitListener() {
	const dialogContainer = document.querySelector('.dialog-backdrop'),
		dialog = dialogContainer.querySelector('.dialog'),
		form = dialog.querySelector('form');

	form.addEventListener('submit', (e) => {
		e.preventDefault();
		jQuery.ajax({
			url: '/wp-admin/admin-ajax.php',
			method: 'POST',
			data: {
				action: 'add_new_supplier',
				name: e.target.querySelector('#name').value
			}
		}).then(res => {
			if (res) {
				console.dir(res);

				const select = document.querySelector('#casalever_product_supplier');
				pushNewOption(
					select,
					res.data.new.key,
					res.data.new.val
				)
			}
			closeDialog(dialogContainer);
		})

	})
}

function pushNewOption(select, key, value) {
	const option = document.createElement('option');
	option.setAttribute('value', key);
	option.innerHTML = value;

	select.append(option);
}

function closeDialogListener() {
	const dialogContainer = document.querySelector('.dialog-backdrop'),
		dialog = dialogContainer.querySelector('.dialog');

	dialogContainer.addEventListener('click', (e) => {
		if (e.target === dialog || dialog.contains(e.target)) {
			return;
		}

		closeDialog(dialogContainer);
	})
}

function closeDialog(dialogContainer = null) {
	if (!dialogContainer) {
		dialogContainer = document.querySelector('.dialog-backdrop')
	}

	dialogContainer.parentNode.removeChild(dialogContainer);
}
