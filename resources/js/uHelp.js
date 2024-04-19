const btnLight = document.querySelector(".btn-light");
const btnAssign = document.querySelector(".btn-group .btn-small");
const dropdown = document.querySelector(".btn-list .dropdown");
const dropdownMenu = document.querySelector(".btn-group .dropdown-menu");
const headerTime = document.querySelector(".header-info .header-time span");
const panelTitle = document.querySelector(".panel .panel-title");
const panelCollapse = document.querySelector(".panel .panel-collapse");
const deleteTicketBtn = document.querySelector(".actions .delete-ticket");
const deleteTicketSpan = document.querySelector(".delete-ticket-span");
const deleteTicketModal = document.querySelector(".delete-ticket-overlay");

if (deleteTicketBtn && deleteTicketModal) {
    deleteTicketBtn.addEventListener("click", (e) => {
        deleteTicketModal.classList.toggle("show");
        e.stopPropagation();
    });

    document.addEventListener("click", (e) => {
        if (e.target === deleteTicketModal) {
            deleteTicketModal.classList.remove("show");
        }
    });
}

if (deleteTicketSpan && deleteTicketModal) {
    deleteTicketSpan.addEventListener("click", (e) => {
        deleteTicketModal.classList.toggle("show");
        e.stopPropagation();
    });

    document.addEventListener("click", (e) => {
        if (e.target === deleteTicketModal) {
            deleteTicketModal.classList.remove("show");
        }
    });
}

if (panelCollapse && panelTitle) {
    panelTitle.addEventListener("click", () => {
        panelTitle.classList.toggle("collapsed");
        panelCollapse.classList.toggle("show");
    });
}

if (btnLight && dropdown) {
    btnLight.addEventListener("click", (e) => {
        dropdown.classList.toggle("show");
        e.stopPropagation();
    });

    document.addEventListener("click", (e) => {
        if (e.target !== btnLight) {
            dropdown.classList.remove("show");
        }
    });
}

if (btnAssign && dropdownMenu) {
    btnAssign.addEventListener("click", (e) => {
        dropdownMenu.classList.toggle("show");
        e.stopPropagation();
    });

    document.addEventListener("click", (e) => {
        if (e.target !== btnAssign) {
            dropdownMenu.classList.remove("show");
        }
    });
}

if (headerTime) {
    updateTime();
    setInterval(updateTime, 60000);
}

function updateTime() {
    const now = new Date();
    let hours = now.getHours();
    let minutes = now.getMinutes();
    const ampm = hours >= 12 ? "PM" : "AM";

    hours = hours % 12;
    hours = hours ? hours : 12;
    minutes = minutes < 10 ? "0" + minutes : minutes;
    headerTime.innerHTML = `${hours}:${minutes} ${ampm}`;
}
