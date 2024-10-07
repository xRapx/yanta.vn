// Global variables
var main = document.getElementById("main");
var sidebar = document.querySelector(".sidebar");
var path = window.location.pathname;

// Function to update selected class
function updateSelected() {
    var links = document.querySelectorAll("a");
    links.forEach(function (link) {
        if (link.getAttribute("href") === path) {
            link.parentNode.classList.add("selected");
        } else {
            link.parentNode.classList.remove("selected");
        }
    });
}

// Event listener for sidebar clicks
sidebar.addEventListener("click", function (e) {
    if (e.target.tagName === 'A') {
        path = e.target.getAttribute('href');
        history.pushState(null, '', path);
        updateSelected();
    }
});

// Function to render data from API
async function renderData() {
    var fetchData = await fetch('https://jsonplaceholder.typicode.com/users');
    var data = await fetchData.json();
    console.log(data);
    var listUser = document.getElementById('list-user');
    listUser.innerHTML = ''; // Clear existing content

    data.forEach(user => {
        var userCard = document.createElement('div');
        userCard.className = 'user-card';

        var img = document.createElement('img');
        img.src = 'https://via.placeholder.com/100'; // Placeholder image URL
        img.alt = user.name;

        var name = document.createElement('h3');
        name.textContent = user.name;

        var email = document.createElement('p');
        email.textContent = `Email: ${user.email}`;

        var role = document.createElement('p');
        role.textContent = 'Role: User';

        var userActions = document.createElement('div');
        userActions.className = 'user-actions';

        var editButton = document.createElement('button');
        editButton.className = 'btn';
        editButton.textContent = 'Edit';

        var deleteButton = document.createElement('button');
        deleteButton.className = 'btn';
        deleteButton.textContent = 'Delete';

        userActions.appendChild(editButton);
        userActions.appendChild(deleteButton);

        userCard.appendChild(img);
        userCard.appendChild(name);
        userCard.appendChild(email);
        userCard.appendChild(role);
        userCard.appendChild(userActions);

        listUser.appendChild(userCard);
    });
}

// Initial render and update
renderData();
updateSelected();

// Update selected class on page load
window.addEventListener('popstate', updateSelected);
