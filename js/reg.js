if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {
var name = document.getElementById('name')
var password = document.getElementById('password')
var form = document.getElementById('form')
var errorElement = document.getElementById('error')
var phonenumber = document.getElementById('phone-number')

form.addEventListener('btn', (e) => {
  let messages = []
  if (name.value === '' || name.value == null) {
    messages.push('Name is required')
  }

  if (password.value.length <= 6) {
    messages.push('Password must be longer than 6 characters')
  }

  if (password.value.length >= 20) {
    messages.push('Password must be less than 20 characters')
  }

  if (password.value === 'password') {
    messages.push('Password cannot be password')
  }
 var val = phonenumber.value
  if(/^\d{10}$/.test(val))
  {
      return true;
  }
  else
  {
     alert("Not a valid Phone Number");
     return false;
  }
  

  if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = messages.join(', ')
  }
})
}