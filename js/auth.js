// REGISTRO
const registerForm = document.getElementById("registerForm");

if (registerForm) {
registerForm.addEventListener("submit", function(e) {
e.preventDefault();

const name = document.getElementById("name").value;
const email = document.getElementById("email").value;
const password = document.getElementById("password").value;

if (!name || !email || !password) {
alert("Preencha todos os campos!");
return;
}

const user = { name, email, password };

localStorage.setItem("user", JSON.stringify(user));

alert("Cadastro realizado!");
window.location.href = "index.html";
});
}

// LOGIN
const loginForm = document.getElementById("loginForm");

if (loginForm) {
loginForm.addEventListener("submit", function(e) {
e.preventDefault();

const email = document.getElementById("email").value;
const password = document.getElementById("password").value;

const storedUser = JSON.parse(localStorage.getItem("user"));

if (storedUser && email === storedUser.email && password === storedUser.password) {
window.location.href = "home.html";
} else {
alert("Credenciais inválidas");
}
});
}