// scroll
const goTopBtn = document.querySelector('.go-top-btn');
window.addEventListener('scroll', checkHeight)
function checkHeight(){
  if(window.scrollY > 200) {
    goTopBtn.style.display = "flex"
  } else {
    goTopBtn.style.display = "none"
  }
}
goTopBtn.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  })
})
// END Scroll