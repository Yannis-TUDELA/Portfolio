const burger= document.querySelector(".burger")
const nav= document.querySelector("nav")
burger.addEventListener("click",()=>{
    if(nav.classList.contains("active"))
    {
        nav.classList.remove("active")
    } else {
        nav.classList.add('active')
    }
})
