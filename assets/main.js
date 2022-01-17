// toggle search form
const searchTrigger = document.querySelector('#search');
const searchForm = document.querySelector('#search-form');
const searchInput = searchForm.querySelector('input');
searchTrigger.addEventListener('click', () => {
	searchForm.classList.toggle('active');
	window.scrollTo({
		top: 0,
		behavior: 'smooth'
	});
	searchInput.focus();
});
// toggle mobile menu
const mobileTrigger = document.querySelector('#mobile-menu');
const mobileNav = document.querySelector('#mobile');
mobileTrigger.addEventListener('click', () => {
	mobileNav.classList.toggle('active');
	mobileTrigger.classList.toggle('active');
});
