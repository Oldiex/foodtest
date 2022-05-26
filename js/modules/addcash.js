function okok(){
    let buttonlox = document.querySelectorAll(".btnm");

    buttonlox.forEach(item => {
        item.addEventListener("click", (e) => {
            console.log(e.target.dataset.id);
        })
    })
};

export default okok;
