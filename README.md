# PHP Server Client Validation

This project demonstrates server-side and client-side validation using PHP and JavaScript.


## Files

- **[form.php](../../f:/php_server_client_validation/form.php)**: This file handles the server-side validation of the form data.
- **[index.html](../../f:/php_server_client_validation/index.html)**: This file contains the HTML form and client-side validation logic.

## Server-Side Validation

In `form.php`, the server-side validation is performed using regular expressions to check the format of the email and name fields.

```php
$emailPattern = '/^[^\s@]+@[^\s@]+\.[^\s@]+$/';
$namePattern = '/^[a-zA-Z]{3,15}$/';

if (!preg_match($emailPattern, $email)) {
  $error .= "Invalid email format<br>";
} else {
  $msg .= "Email is OK.<br>";
}

if (!preg_match($namePattern, $name)) {
  $error .= "Invalid name format";
} else {
  $msg .= "Name is OK.";
```

## Client-Side Validation

In `index.html`, the client-side validation is performed using JavaScript before the form is submitted.

```javascript
document.getElementById('myForm').addEventListener('submit', function (event) {
    var email = document.getElementById('email').value;
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert('Please enter a valid email address.');
        event.preventDefault();
    }

    var name = document.getElementById('name').value;
    var namePattern = /^[a-zA-Z]{3,15}$/;
    if (!namePattern.test(name)) {
        alert('Please enter a valid name (3-15 characters).');
        event.preventDefault();
    }
});
```

