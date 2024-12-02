function capitalandlowercase(s)
{
    return /[A-Z]/.test(s) && /[a-z]/.test(s);
}

function usernameFive(username)
{
    const user = username.value.trim();

    if ((user.length >= 5) && capitalandlowercase(user))
        {
            valid(username);
            return true;
        }
    else
        {
            invalid(username);
            return false;
        }
}

function passwordTen(password)
{
    const pw = password.value.trim();

    if (pw.length >= 10)
        {
            valid(password);
            return true;
        }
    else
        {
            invalid(password);
            return false;
        }
}




function valid(x) 
{
    x.style.borderColor = 'green';
    x.style.outline = 'none';
}

function invalid(x) 
{
    x.style.borderColor = 'red';
    x.style.outline = 'none';
}

function validateForm(event) 
{
    const form = event.target;
    let isValid = true;

    const username = form.querySelector('#username');
    const password = form.querySelector('#password');

    isValid = usernameFive(username) && isValid;
    isValid = passwordTen(password) && isValid;

    if (!isValid) 
        {
            event.preventDefault();
        }
}


document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('.login-container form');

    if (form) 
        {
            form.addEventListener('submit', validateForm);
        }
});