const nav = document.getElementsByClassName('nav-link')
const page = document.getElementsByTagName('title')[0].innerHTML.split(" ")[4]
const imgGal = document.getElementsByClassName('img-thumbnail')

for (let n of nav) {
    if (n.innerHTML.split(" ")[0] == page) {
        n.classList.add("active")
    }
}

for (let i of imgGal) {
    i.addEventListener('click', () => {
        console.log(i.dataset.img)
    })
}