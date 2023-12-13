
/*****
 * LOGIN
 *****/

//  let loginForm = document.querySelector('#login-form')

//  loginForm.addEventListener('submit', function(event) {
//      event.preventDefault()
 
//      let loginName = document.querySelector('#login-name')
//      let loginPassword = document.querySelector('#login-password')
 
//      if(event.target.elements.loginName.value === 'fiato' && event.target.elements.loginPassword.value === 'rosa') {
//         //  console.log('fiato rosa')
//          window.location.href = 'members.php'
//      } else {
//          let wrongDataText = document.querySelector('.wrong-data-text')
//          wrongDataText.textContent = 'Zadal si zlé meno alebo heslo.'
//      }
//  })

let regChoice = document.querySelector('.reg-choice')
let loginChoice = document.querySelector('.login-choice')
let regForm = document.querySelector('#registration-form')
let loginForm = document.querySelector('#login-form')

loginChoice.addEventListener('click', function(event){
    event.preventDefault()
    regChoice.style.borderBottom = 'none'
    loginChoice.style.borderBottom = 'rgb(255, 128, 149) 1px solid'

    regForm.style.display = 'none'
    loginForm.style.display = 'flex'
})

regChoice.addEventListener('click', function(event){
    event.preventDefault()
    regChoice.style.borderBottom = 'rgb(255, 128, 149) 1px solid'
    loginChoice.style.borderBottom = 'none'
    
    regForm.style.display = 'flex'
    loginForm.style.display = 'none'
})