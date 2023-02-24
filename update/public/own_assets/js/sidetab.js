let tabs = document.querySelectorAll(".tabs h4");
let tabContent = document.querySelectorAll(".tab-content div");

tabs.forEach((tab, index) => {
    tab.addEventListener("click", () => {
        tabContent.forEach((content) => {
            content.classList.remove("active");
        });
        tabs.forEach((tab) => {
            tab.classList.remove("active");
        });
        tabContent[index].classList.add("active");
        tabs[index].classList.add("active");
    });
});

let tab_penyakit = document.querySelectorAll(".tab-penyakit .x");
let tabContent_penyakit = document.querySelectorAll(".content-penyakit .card");
let imgleft = document.getElementById("imgLeft");

tab_penyakit.forEach((tab, index) => {
    tab.addEventListener("click", () => {
        imgleft.classList.remove("d-lg-block");
        tabContent_penyakit.forEach((content) => {
            content.classList.remove("aktif");
        });
        tab_penyakit.forEach((tab) => {
            //tab_penyakit.classList.remove("aktif");
        });
        tabContent_penyakit[index].classList.add("aktif");
        //tab_penyakit[index].classList.add("aktif");
    });
});

function lihatGejala() {
    let imgleft = document.getElementById("imgLeft");
    let gejalas = document.getElementById("gejalaPenyakit");
    let btn = document.getElementById("bukagejala");
    if (imgleft.classList.contains("penanda")) {
        imgleft.classList.remove("d-lg-block");
        imgleft.classList.remove("penanda");
        gejalas.classList.add("aktif");
        btn.textContent = "Tutup Gejala";
    } else {
        imgleft.classList.add("penanda");
        imgleft.classList.add("d-lg-block");
        gejalas.classList.remove("aktif");
        btn.textContent = "Lihat Gejala";
    }
}
