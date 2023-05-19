document.getElementById('feedback-form').addEventListener('submit', function(e) {
    e.preventDefault();
    sendEmail();
  });
  
  function sendEmail() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;
  
    var subject = "Feedback from " + name;
    var body = "Name: " + name + "\nEmail: " + email + "\nMessage: " + message;
  
    // Replace "YOUR_EMAIL_ADDRESS" with the email address where you want to receive the feedback
    window.location.href = "mailto:mankaegor25@gmail.com?subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(body);
  }
  