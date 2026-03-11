console.log("Searchbar.js loaded.");

var searchInput = document.querySelector('input[name="search"]');
var menuItems = document.querySelectorAll('.menu-item');

searchInput.addEventListener('input', function () {
    const searchTerm = this.value.toLowerCase();

    menuItems.forEach(item => {
        const name = item.querySelector('.menu-item__name').textContent.toLowerCase();
        if (name.includes(searchTerm)) {
            item.style.display = '';
        } else {
            item.style.display = 'none';
        }
    });
});