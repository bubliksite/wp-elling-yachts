let menuItem = document.getElementsByClassName('menu-item')
let menuItemHasChild = document.getElementsByClassName('menu-item-has-children')
let subMenu = document.getElementsByClassName('sub-menu')


document.getElementById('menu-toggler').addEventListener('click', ()=> {
	document.getElementById('navbarContent').classList.toggle('show')
})

for (let i=0; i<menuItemHasChild.length; i++) {
	menuItemHasChild[i].classList.add('dropdown')
	menuItemHasChild[i].children[0].classList.add('dropdown-toggle')
	menuItemHasChild[i].children[0].setAttribute('id', `dropdown-menu-${i}`)
	menuItemHasChild[i].children[1].setAttribute('id', `dropdown-submenu-${i}`)
	menuItemHasChild[i].children[0].setAttribute('role', 'button')
	menuItemHasChild[i].children[0].setAttribute('data-bs-toggle', 'dropdown')
}

for (let i=0; i<menuItem.length; i++) {
	menuItem[i].classList.add('nav-item')
	menuItem[i].children[0].classList.add('nav-link')
}

for (let i=0; i<subMenu.length; i++) {
	subMenu[i].classList.add('dropdown-menu')
}

document.addEventListener("DOMContentLoaded", function(){
// make it as accordion for smaller screens
	if (window.innerWidth > 992) {

		document.querySelectorAll('.navbar .nav-item').forEach(function(everyitem){

			everyitem.addEventListener('mouseover', function(e){

				let el_link = this.querySelector('a[data-bs-toggle]');

				if(el_link != null){
					let nextEl = el_link.nextElementSibling;
					el_link.classList.add('show');
					nextEl.classList.add('show');
				}

			});
			everyitem.addEventListener('mouseleave', function(e){
				let el_link = this.querySelector('a[data-bs-toggle]');

				if(el_link != null){
					let nextEl = el_link.nextElementSibling;
					el_link.classList.remove('show');
					nextEl.classList.remove('show');
				}


			})
		});

	}
// end if innerWidth
});
// DOMContentLoaded  end