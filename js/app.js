const container = document.querySelector(".container")
const products = [
  { name: "Code", image: "img/code.svg", url: "https://sign.peruri.co.id/dashboard/peruri-code/" },
  { name: "Sign", image: "img/sign.svg", url: "https://sign.peruri.co.id/dashboard/peruri-sign/" },
  { name: "Trust", image: "img/trust.svg", url: "https://sign.peruri.co.id/dashboard/peruri-trust/" },
]

const showProducts= () => {
    let output = ""
    products.forEach(
      ({ name, image, url }) =>
        (output += `
                <div class="card">
                  <img class="card--avatar" src=${image} />
                  <h1 class="card--title">${name}</h1>
                  <a class="card--link" href=${url}> Info </a>
                </div>
                `)
    )
    container.innerHTML = output
  }
  
  document.addEventListener("DOMContentLoaded", showProducts)

  if ("serviceWorker" in navigator) {
    window.addEventListener("load", function() {
      navigator.serviceWorker
        .register("/serviceWorker.js")
        .then(res => console.log("service worker registered"))
        .catch(err => console.log("service worker not registered", err))
    })
  }