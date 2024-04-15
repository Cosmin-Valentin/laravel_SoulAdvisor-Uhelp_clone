document.addEventListener("DOMContentLoaded", function () {
    if (window.location.href.includes("list-practice/create")) {
        profileCarousel();
        flatpickr("#appointment-booking", {});
    }
});

function profileCarousel() {
    const sections = document.querySelectorAll(".profile-section");
    const prevBtn = document.querySelector(".previous-btn");
    const nextBtn = document.querySelector(".next-btn");
    const errors = document.querySelectorAll(".profile-section .text-red-600");
    if (errors.length == 0) {
        let currentSection = 1;

        prevBtn.addEventListener("click", (e) => {
            e.preventDefault();
            if (currentSection > 1) {
                currentSection--;
                openSection(sections, currentSection);
            }
            disableButton(currentSection, prevBtn, nextBtn);
        });

        nextBtn.addEventListener("click", (e) => {
            e.preventDefault();
            if (currentSection < sections.length) {
                currentSection++;
                openSection(sections, currentSection);
            }
            disableButton(currentSection, prevBtn, nextBtn);
        });
        disableButton(currentSection, prevBtn, nextBtn);
    } else {
        prevBtn.parentNode.classList.add("hidden");
        openSection(sections);
        errors.forEach((el) => {
            el.closest(".profile-section").classList.remove("hidden");
        });
    }
}

function openSection(sections, current = 8) {
    sections.forEach((section) => {
        if (section.dataset.section != current) {
            section.classList.add("hidden");
        } else {
            section.classList.remove("hidden");
        }
    });
}

function disableButton(idx, prevBtn, nextBtn) {
    const prev = prevBtn.classList;
    const next = nextBtn.classList;
    if (idx == 1) {
        prev.add("pointer-events-none");
    } else if (idx == 7) {
        next.add("pointer-events-none");
    } else {
        prev.remove("pointer-events-none");
        next.remove("pointer-events-none");
    }
}
