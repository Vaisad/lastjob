
let loginBtn = document.getElementById('login');
let closeModal = document.getElementById('closeModal');
let closeBtn = document.getElementById('close');


loginBtn.addEventListener("click", () => {
    document.getElementById("id01").style.display = 'block';
});
closeModal.addEventListener("click", () => {
    document.getElementById("id01").style.display = 'none';
});
closeBtn.addEventListener("click", () => {
    document.getElementById("id01").style.display = 'none';
});


let modal = document.getElementById('id01');

modal.addEventListener('click', (event) => {
    if (event.target == modal) {
        modal.style.display = "none";
    }
});




