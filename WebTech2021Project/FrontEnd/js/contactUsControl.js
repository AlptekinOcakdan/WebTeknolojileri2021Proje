const name = document.getElementById('name')
const surname = document.getElementById('surname')
const mail = document.getElementById('mail')
const cellphone = document.getElementById('cellphone')
const message = document.getElementById('message')
const errorElement = document.getElementById('error')


let form;
form.addEventListener('submit',(e) => {
    let messages = []
    if (name.value === "" || name.value == null){
        messages.push('name must be filled')
    }
    if (surname.value === "" || surname.value == null){
        messages.push('surname must be filled')
    }
    if (mail.value === "" || mail.value == null){
        messages.push('e-mail must be filled')
    }
    if(!(mail.includes("."))){
    messages.push('e-mail is wrong')
    }
   
    if (message.value === "" || message.value == null){
        messages.push('message must be written')
    }

    if (cellphone.value === "" || cellphone.value == null){
        messages.push('phone number must be written')
    }

    
    
    if(messages.length > 0){
        e.preventDefault()
        errorElement.innerText = messages.join(', ')
    }
})


