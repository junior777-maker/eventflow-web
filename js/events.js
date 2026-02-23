function displayEvents(events) {
const eventList = document.getElementById("eventList");

events.forEach(event => {
const div = document.createElement("div");
div.innerHTML = `
<h3>${event.title}</h3>
<p>Data: ${event.date}</p>
<p>Local: ${event.location}</p>
<hr>
`;
eventList.appendChild(div);
});
}

document.addEventListener("DOMContentLoaded", loadEvents);

function logout() {
localStorage.removeItem("user");
window.location.href = "index.html";
}