const circle = document.querySelector(".cursor-circle");

document.addEventListener("mousemove", (e) => {
    document.addEventListener("mousemove", (e) => {
    circle.style.transform = `translate(${e.clientX}px, ${e.clientY}px) translate(-50%, -50%)`;
});

});


document.querySelectorAll(".portfolio-item").forEach(item => {
    item.addEventListener("click", () => {
        item.classList.toggle("active");
    });
});

