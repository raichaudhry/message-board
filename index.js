const submit = function () {
    let messageValue = document.getElementById('message').value;
    let nameValue = document.getElementById('name').value;
    let message = " Name: " + nameValue + ", Message: " + messageValue;
    console.log(message);
}
fetch('http://raichaudhry.com/message-board/txt.json')
