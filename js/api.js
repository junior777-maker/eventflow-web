function loadEvents() {
fetch("data/events.json")
.then(response => response.json())
.then(data => displayEvents(data))
.catch(error => console.error("Erro:", error));
}