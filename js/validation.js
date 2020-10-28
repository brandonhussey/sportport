// Variable Initialization and Declaration
var firstName = document.getElementById('firstName');
var lastName = document.getElementById('lastName');
var email = document.getElementById('email');
var password = document.getElementById('password');
var confirm = document.getElementById('confirm');

var loginEmail = document.getElementById('loginEmail');
var loginPassword = document.getElementById('loginEmail');

var firstNameError = document.getElementById('firstNameError');
var lastNameError = document.getElementById('lastNameError');
var emailError = document.getElementById('emailError');
var passwordError = document.getElementById('passwordError');
var confirmError = document.getElementById('confirmError');

var loginError = document.getElementById('loginError');

var results = document.getElementById('results');

// Adding Event Listeners
firstName.addEventListener('blur', firstNameValidate, true);
lastName.addEventListener('blur', lastNameValidate, true);
email.addEventListener('blur', emailValidate, true);
password.addEventListener('blur', passwordValidate, true);
confirm.addEventListener('keyup', confirmValidate, true);

// Validating Our Form
function validateForm(){
	// Check the user has not left the First Name blank
	if(!firstNameValidate()) {
		firstName.focus();
		return false;
	}
	// Check the user has not left the last name field blank
    if(!lastNameValidate()) {
        lastName.focus();
        return false;
    }
	// Check the user has not left the email field blank
    if(!emailValidate()) {
        email.focus();
        return false;
    }
	// Check the user has not left the password field blank
    if(!passwordValidate()) {
        confirm.focus();
        return false;
    }
	//check if passwords match
    if(!confirmValidate()) {
        confirm.focus();
        return false;
    }
}

function valid(obj){
    obj.style.color ='#00c018';
    obj.style.border ='thin solid #00c018';
}

function has_error(obj){
    obj.style.color ='#c0392b';
    obj.style.border ='thin solid #c0392b';
}

// Event Listener Functions
function firstNameValidate(){
	if(firstName.value === ''){
        firstNameError.textContent ='Please provide your first name';
	}
	else if(!/^[A-Za-z]+$/.test(firstName.value)){
        firstNameError.textContent ='Can only contain letters';
    }
	else{
        valid(firstName);
        firstNameError.innerHTML ='';
		return true;
	}
	has_error(firstName);
	return false;
}
function lastNameValidate(){
    if(lastName.value === ''){
        lastNameError.textContent ='Please provide your last name';
    }
    else if(!/^[A-Za-z]+$/.test(lastName.value)){
        lastNameError.textContent ='Can only contain letters';
    }
    else{
        valid(lastName);
        lastNameError.innerHTML ='';
        return true;
    }
    has_error(lastName);
    return false;
}
function emailValidate(){
	 if(email.value === ''){
        emailError.textContent ='Please provide your email address';
    }
    else if(!/^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/.test(email.value)){
        emailError.textContent ='Please enter a valid email address';
    }
    else{
        valid(email);
        emailError.innerHTML ='';
        return true;
    }
    has_error(email);
    return false;
}

function passwordValidate(){
	if(password.value === ''){
		passwordError.innerHTML ='Please enter a new password';
	}
	else if(password.length < 8){
        passwordError.innerHTML ='Password must contain 8 or more characters';
    }
    else{
        valid(password);
        passwordError.innerHTML ='';
        return true;
    }

    has_error(password);
    has_error(confirm);
    return false;

}

function confirmValidate(){
	if(confirm.value !== password.value){
        confirmError.innerHTML = 'Passwords must match!'
	}
    else if(password.value === ''){
        passwordError.innerHTML ='Please enter a new password';
    }
    else if(password.length < 8){
        passwordError.innerHTML ='Password must contain 8 or more characters';
    }
	else{
        valid(confirm);
        valid(password);
        confirmError.innerHTML = '';
        return true;
	}

    has_error(password);
    has_error(confirm);
    return false;
}

