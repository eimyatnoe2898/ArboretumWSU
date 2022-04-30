function formValidation(event) {
    event.preventDefault();
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var msg = document.getElementById('msg').value;
    if (name == '') {
        alert('Please enter name');
    }
    else if (email == '') {
        alert('Please enter email');
    }
    else if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))) {
        alert('Please enter valid email format');
    }
    else if (phone == '') {
        alert('Please enter phone');
    }
    else if ((/\D/.test(phone))) {
        alert('Please enter valid phone format');
    }
    else if (msg == '') {
        alert('Please enter message');
    }
    else {
        document.getElementById("cf").submit();
    }
}  