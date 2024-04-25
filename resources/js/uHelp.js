// Ticket view reply form panel toggle
const panelTitle = document.querySelector(".panel .panel-title");
const panelCollapse = document.querySelector(".panel .panel-collapse");

if (panelTitle && panelCollapse) {
    panelTitle.addEventListener("click", () => {
        panelTitle.classList.toggle("collapsed");
        panelCollapse.classList.toggle("show");
    });
}

// Delete ticket modal
const deleteTicketModal = document.querySelector(".delete-ticket-overlay");
const deleteTicketBtns = document.querySelectorAll(
    ".table-format .actions .action-delete"
);
const deleteTicketCancelBtn = document.querySelector(
    ".delete-ticket-btn.cancel"
);
const deleteTicketSpan = document.querySelector(".quick-delete-ticket");
if (deleteTicketModal && deleteTicketCancelBtn) {
    if (deleteTicketBtns.length > 0) {
        deleteTicketBtns.forEach((btn) => {
            btn.addEventListener("click", (e) => {
                deleteTicketModal.classList.toggle("show");
                e.stopPropagation();
                updateFormTicketId(
                    document.querySelector(".delete-modal form"),
                    btn
                );
            });
        });
    }

    document.addEventListener("click", (e) => {
        if (
            e.target === deleteTicketModal ||
            e.target === deleteTicketCancelBtn ||
            e.target === deleteTicketSpan
        ) {
            deleteTicketModal.classList.remove("show");
        }
    });

    deleteTicketCancelBtn.addEventListener("click", () =>
        deleteTicketModal.classList.remove("show")
    );

    if (deleteTicketSpan) {
        deleteTicketSpan.addEventListener("click", (e) => {
            deleteTicketModal.classList.toggle("show");
            e.stopPropagation();
        });
    }
}

// Admin ticket view page category/priority edit modal
function setupModalInteraction(modalSelector, buttonSelector) {
    const modal = document.querySelector(modalSelector);
    if (!modal) return;
    const modalCancel = modal.querySelector(".close");
    if (!modalCancel) return;
    const editButton = document.querySelector(buttonSelector);
    if (!editButton) return;

    if (modal && modalCancel && editButton) {
        document.addEventListener("click", (e) => {
            if (e.target === editButton || editButton.contains(e.target)) {
                modal.classList.toggle("show");
                e.stopPropagation();
            } else if (
                e.target === modal ||
                e.target === modalCancel ||
                modalCancel.contains(e.target)
            ) {
                modal.classList.remove("show");
            }
        });
    }
}
setupModalInteraction(".category-overlay", "#category button");
setupModalInteraction(".priority-overlay", "#priority button");

// Admin ticket assign button
const btnAssign = document.querySelectorAll(".btn-group .btn-small");
const otherBtn = document.querySelectorAll("#other");
const assignModal = document.querySelector(".assign-overlay");
const assignModalCancel = document.querySelector(".assign-overlay .close");
if (btnAssign.length > 0) {
    document.addEventListener("click", (e) => {
        btnAssign.forEach((btn) => {
            const parent = btn.parentNode;
            const dropdownMenu = parent.querySelector(
                ":scope > .dropdown-menu"
            );

            if (e.target === btn) {
                dropdownMenu.classList.toggle("show");
                updateFormTicketId(
                    document.querySelector(".assign-modal form"),
                    btn
                );
                e.stopPropagation();
            } else if (!parent.contains(e.target)) {
                dropdownMenu.classList.remove("show");
            }
        });

        otherBtn.forEach((btn) => {
            if (e.target === btn) {
                assignModal.classList.toggle("show");
                e.stopPropagation();
            }
        });

        if (e.target === assignModal) {
            assignModal.classList.remove("show");
        }
    });

    assignModalCancel.addEventListener("click", () =>
        assignModal.classList.remove("show")
    );
}

function updateFormTicketId(form, btn) {
    const ticketId = btn.closest("tr")?.querySelector(".ticket-details")
        ?.dataset.ticketId;
    if (form && ticketId) {
        const formUrl = form.getAttribute("action");
        form.setAttribute("action", formUrl.replace(/(\d+)(?!.*\d)/, ticketId));
    }
}

// Admin category page add category
const addCategoryBtn = document.getElementById("add-category");
if (addCategoryBtn) {
    const addCategoryModal = document.querySelector(".add-category-overlay");
    const addCategoryModalCancel = addCategoryModal.querySelector(".close");

    document.addEventListener("click", (e) => {
        if (e.target === addCategoryBtn) {
            addCategoryModal.classList.toggle("show");
            e.stopPropagation();
        } else if (
            e.target === addCategoryModalCancel ||
            e.target === addCategoryModal
        ) {
            addCategoryModal.classList.remove("show");
        }
    });
}

// Admin side menu ticket type list toggle
const globalTicketsSide = document.querySelector(".slide-menu");
if (globalTicketsSide) {
    globalTicketsSide.parentNode.addEventListener("click", () => {
        globalTicketsSide.parentNode.classList.toggle("is-expanded");
    });
}

// Admin ticket view quick actions toggle
const btnLight = document.querySelector(".btn-light");
const dropdown = document.querySelector(".btn-list .dropdown");
if (btnLight && dropdown) {
    document.addEventListener("click", (e) => {
        if (e.target === btnLight || btnLight.contains(e.target)) {
            dropdown.classList.toggle("show");
        } else {
            dropdown.classList.remove("show");
        }
        e.stopPropagation();
    });
}

// Admin dashboard current time
const headerTime = document.querySelector(".header-info .header-time span");
if (headerTime) {
    updateTime();
    setInterval(updateTime, 60000);
}

function formatTime(date) {
    let hours = date.getHours();
    const minutes = date.getMinutes();
    const ampm = hours >= 12 ? "PM" : "AM";

    hours = hours % 12 || 12;
    const formattedMinutes = minutes < 10 ? `0${minutes}` : minutes;

    return `${hours}:${formattedMinutes} ${ampm}`;
}

function updateTime() {
    const now = new Date();
    headerTime.innerHTML = formatTime(now);
}
