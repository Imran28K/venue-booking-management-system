document.getElementById("loginForm").addEventListener("submit", function(event) {
   event.preventDefault(); // Stop the page from refreshing

   const username = document.getElementById("username").value;
   const password = document.getElementById("password").value;
   const errorMessage = document.getElementById("error-message");

   // Basic validation
   if (username === "" || password === "") {
       errorMessage.textContent = "Please fill in all fields.";
       return;
   }

   // Send POST request to server
   fetch('/login', {
       method: 'POST',
       headers: {
           'Content-Type': 'application/json',
       },
       body: JSON.stringify({ username, password })
   })
   .then(response => response.json())
   .then(data => {
       if (data.success) {
           console.log('Login successful!');
           window.location.href = '/test.html'; // Redirect to another page if login OK
       } else {
           errorMessage.textContent = data.message;
       }
   })
   .catch(error => {
       console.error('Error:', error);
       errorMessage.textContent = "An error occurred during login.";
   });
});



 