// Webpack Imports
import * as bootstrap from 'bootstrap';

import axios from 'axios';

( function () {
	'use strict';

	// Focus input if Searchform is empty
	[].forEach.call( document.querySelectorAll( '.search-form' ), ( el ) => {
		el.addEventListener( 'submit', function ( e ) {
			var search = el.querySelector( 'input' );
			if ( search.value.length < 1 ) {
				e.preventDefault();
				search.focus();
			}
		} );
	} );

	// Initialize Popovers: https://getbootstrap.com/docs/5.0/components/popovers
	var popoverTriggerList = [].slice.call( document.querySelectorAll( '[data-bs-toggle="popover"]' ) );
	var popoverList = popoverTriggerList.map( function ( popoverTriggerEl ) {
		return new bootstrap.Popover( popoverTriggerEl, {
			trigger: 'focus',
		} );
	} );

	let currentPage = 1;

	const formData = new FormData();
	formData.append('action', 'anglo_load_more');

	const btnLoadMore = document.querySelector('#load-more')
	if(btnLoadMore) {
		btnLoadMore.addEventListener('click', loadMore);
	}

	function addLoadingButton() {
		btnLoadMore.innerHTML = 'Carregando...';
		btnLoadMore.classList.add('disabled');
	}

	function removeLoadingButton() {
		btnLoadMore.innerHTML = 'Carregar mais';
		btnLoadMore.classList.remove('disabled');
	}


	const ajaxUrl = '/site/wp-admin/admin-ajax.php';
	// const ajaxUrl = '/wp-admin/admin-ajax.php';

	function loadMore() {
		currentPage++;
		formData.set('paged', currentPage);

		addLoadingButton();

		axios.post(ajaxUrl, formData)
			.then(({data}) => {
				const loop = document.querySelector('#loop');
				loop.innerHTML += data;
				const parser = new DOMParser();
				let articles = parser.parseFromString(data, 'text/html').querySelectorAll('article');
				if(articles.length < 6) {
					removeBtnLoadMore()
				} else {
					removeLoadingButton();
					setTimeout(() => {
						removeLoadMore();
					}, 0); 
				}


			});
	}

	function removeBtnLoadMore() {
		btnLoadMore.classList.add('d-none');
	}

	function removeLoadMore() {
		const testLoadMore = new FormData();
		testLoadMore.append('action', 'anglo_load_more');
		testLoadMore.append('paged', currentPage + 1);
		
		axios.post(ajaxUrl, testLoadMore)
			.then(({data}) => {
				if(!data) {
					btnLoadMore.classList.add('d-none');
				}
			});
		
	}

	const loop = document.querySelector('#loop');
	if(!!loop) {
		let articles = loop.querySelectorAll('article');
		console.log(articles);
		if(articles.length < 6) {
			removeBtnLoadMore();
		}
	}

} )();