// toggle search form
const searchTrigger = document.querySelector('#search');
const searchForm = document.querySelector('#search-form');
searchTrigger.addEventListener('click', () => {
	searchForm.classList.toggle('active');
});
// toggle mobile menu
const mobileTrigger = document.querySelector('#mobile-menu');
const mobileNav = document.querySelector('#mobile');
mobileTrigger.addEventListener('click', () => {
	mobileNav.classList.toggle('active');
	mobileTrigger.classList.toggle('active');
});
