document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); 
 
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;
    const errorMessage = document.getElementById("error-message");
 
    // Basic validation
    if (username === "" || password === "") {
       errorMessage.textContent = "Please fill in all fields.";
    } else {
       // Here, you can handle form submission (e.g., send to server)
       console.log("Logging in with", username, password);
    }
 });
 