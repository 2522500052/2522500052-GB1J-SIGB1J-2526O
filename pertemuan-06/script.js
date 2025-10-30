document.getElementById("menuToggle").addEventListener("click", function ( ) {
    document.querySelector("nav").classList.toggle("active");
})

alert("halo, saya Noviana Siadari");
let nama = prompt("siapa nama kamu?");
alert("halo, " + nama + "!");

document.querySelector("form").addEventListener("submit", function (e) {
const nama = document.getElementById("txtNama").value.trim();
const email = document.getElementById("txtEmail").value.trim();
const pesan = document.getElementById("txtPesan").value.trim();
if (nama === "" || email === "" || pesan === "") {
alert("Semua kolom wajib diisi!");
e.preventDefault();
} else {
alert("Terima kasih, " + nama + "! Pesan Anda telah dikirim.");
}
});