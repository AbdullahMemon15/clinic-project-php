const navToggle = document.getElementsByClassName('navbar-toggle')[0]
const navlinks = document.getElementsByClassName('navbar-links')[0]
navToggle.addEventListener('click',()=>
{
    navlinks.classList.toggle('active')
})


document.getElementById('btn').addEventListener('click', submission)
function submission() {
    alert('Thank you we will contact you soon')
}