const btnLight = document.querySelector(".btn-light");
const btnAssign = document.querySelectorAll(".btn-group .btn-small");
const dropdown = document.querySelector(".btn-list .dropdown");
const headerTime = document.querySelector(".header-info .header-time span");
const panelTitle = document.querySelector(".panel .panel-title");
const panelCollapse = document.querySelector(".panel .panel-collapse");
const deleteTicketBtn = document.querySelectorAll(".actions .delete-ticket");
const deleteTicketCancelBtn = document.querySelector(
    ".delete-ticket-btn.cancel"
);
const deleteTicketSpan = document.querySelector(".delete-ticket-span");
const deleteTicketModal = document.querySelector(".delete-ticket-overlay");
const priorityModal = document.querySelector(".priority-overlay");
const priorityModalCancel = document.querySelector(".priority-overlay .close");
const editPriority = document.querySelector("#priority button");
const categoryModal = document.querySelector(".category-overlay");
const categoryModalCancel = document.querySelector(".category-overlay .close");
const editCategory = document.querySelector("#category button");
const assignModal = document.querySelector(".assign-overlay");
const assignModalCancel = document.querySelector(".assign-overlay .close");
const globalTicketsSide = document.querySelector(".slide-menu").parentNode;

if (globalTicketsSide) {
    globalTicketsSide.addEventListener("click", () => {
        globalTicketsSide.classList.toggle("is-expanded");
    });
}

if (deleteTicketBtn.length > 0) {
    deleteTicketBtn.forEach((btn) => {
        const tooltipDelete = btn.parentNode.querySelector(".tooltip.delete");
        const tooltipShow = btn.parentNode.querySelector(".tooltip.show");
        const viewTicket = btn.parentNode.querySelector(".view-ticket");
        btn.addEventListener("click", (e) => {
            deleteTicketModal.classList.toggle("show");
            e.stopPropagation();
            updateFormTicketId(
                document.querySelector(".delete-modal form"),
                btn
            );
        });

        btn.addEventListener("mouseover", (e) => {
            e.stopPropagation();
            tooltipDelete.classList.add("show-tooltip");
        });

        btn.addEventListener("mouseout", (e) => {
            e.stopPropagation();
            tooltipDelete.classList.remove("show-tooltip");
        });

        viewTicket.addEventListener("mouseover", (e) => {
            e.stopPropagation();
            tooltipShow.classList.add("show-tooltip");
        });

        viewTicket.addEventListener("mouseout", (e) => {
            e.stopPropagation();
            tooltipShow.classList.remove("show-tooltip");
        });
    });

    document.addEventListener("click", (e) => {
        if (e.target === deleteTicketModal) {
            deleteTicketModal.classList.remove("show");
        }
    });
    deleteTicketCancelBtn.addEventListener("click", () => {
        deleteTicketModal.classList.remove("show");
    });
}

if (btnAssign.length > 0) {
    const otherBtn = document.querySelectorAll("#other");

    btnAssign.forEach((btn) => {
        const parent = btn.parentNode;
        const dropdownMenu = parent.querySelector(":scope > .dropdown-menu");
        btn.addEventListener("click", (e) => {
            dropdownMenu.classList.toggle("show");
            e.stopPropagation();
            updateFormTicketId(
                document.querySelector(".assign-modal form"),
                btn
            );
        });

        document.addEventListener("click", (e) => {
            if (e.target !== btn) {
                dropdownMenu.classList.remove("show");
            }
        });
    });

    otherBtn.forEach((btn) => {
        btn.addEventListener("click", (e) => {
            assignModal.classList.toggle("show");
            e.stopPropagation();
        });
    });

    assignModalCancel.addEventListener("click", () =>
        assignModal.classList.remove("show")
    );

    document.addEventListener("click", (e) => {
        if (e.target === assignModal) {
            assignModal.classList.remove("show");
        }
    });
}

if (categoryModal && categoryModalCancel && editCategory) {
    const tooltipCategory =
        editCategory.parentNode.querySelector(".tooltip.category");
    editCategory.addEventListener("click", (e) => {
        categoryModal.classList.toggle("show");
        e.stopPropagation();
    });
    categoryModalCancel.addEventListener("click", () =>
        categoryModal.classList.remove("show")
    );

    document.addEventListener("click", (e) => {
        if (e.target === categoryModal) {
            categoryModal.classList.remove("show");
        }
    });

    editCategory.addEventListener("mouseover", (e) => {
        e.stopPropagation();
        tooltipCategory.classList.add("show-tooltip");
    });

    editCategory.addEventListener("mouseout", (e) => {
        e.stopPropagation();
        tooltipCategory.classList.remove("show-tooltip");
    });
}

if (priorityModal && priorityModalCancel && editPriority) {
    const tooltipPriority =
        editPriority.parentNode.querySelector(".tooltip.priority");
    editPriority.addEventListener("click", (e) => {
        priorityModal.classList.toggle("show");
        e.stopPropagation();
    });
    priorityModalCancel.addEventListener("click", () =>
        priorityModal.classList.remove("show")
    );

    document.addEventListener("click", (e) => {
        if (e.target === priorityModal) {
            priorityModal.classList.remove("show");
        }
    });

    editPriority.addEventListener("mouseover", (e) => {
        e.stopPropagation();
        tooltipPriority.classList.add("show-tooltip");
    });

    editPriority.addEventListener("mouseout", (e) => {
        e.stopPropagation();
        tooltipPriority.classList.remove("show-tooltip");
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

    deleteTicketCancelBtn.addEventListener("click", () => {
        deleteTicketModal.classList.remove("show");
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

if (headerTime) {
    updateTime();
    setInterval(updateTime, 60000);
}

function updateFormTicketId(form, btn) {
    const nearestTr = btn.closest("tr");
    const id = nearestTr.querySelector(".ticket-details").dataset.ticketId;
    const formUrl = form.getAttribute("action");
    const newUrl = formUrl.replace(/(\d+)(?!.*\d)/, id);
    form.setAttribute("action", newUrl);
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
