//untuk pesan gagal login
document.addEventListener("DOMContentLoaded", function () {
    // Pesan sukses
    const successMessage = document.getElementById("success-message");
    if (successMessage) {
        Swal.fire({
            icon: "success",
            title: "Success",
            text: successMessage.dataset.message,
        });
    }

    // Pesan error
    const errorMessage = document.getElementById("error-message");
    if (errorMessage) {
        Swal.fire({
            icon: "error",
            title: "Gagal!",
            text: errorMessage.dataset.message,
        });
    }
});

//view password pada login
function viewPassword() {
    const passwordField = document.getElementById("password");
    const showIcon = document.getElementById("show-icon");
    const hideIcon = document.getElementById("hide-icon");

    if (passwordField.type === "password") {
        passwordField.type = "text";
        showIcon.style.display = "inline";
        hideIcon.style.display = "none";
    } else {
        passwordField.type = "password";
        showIcon.style.display = "none";
        hideIcon.style.display = "inline";
    }
}

//dateDisplay pada user_header
const date = new Date().getDate();
const day = new Date().getDay();
const month = new Date().getMonth();
const year = new Date().getFullYear();

const nameDay = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
];

const nameMonth = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
];
const dateDisplay = document.getElementById("dateDisplay");
dateDisplay.textContent = `${nameDay[day]}, ${date} ${nameMonth[month]} ${year}`;

//modal pada index_users sesuai mata pelajaran
const quizModal = document.getElementById("quizModal");
quizModal.addEventListener("show.bs.modal", function (event) {
    const button = event.relatedTarget;
    const subject = button.getAttribute("data-subject");
    const subjectNameElement = document.getElementById("subject-name");
    subjectNameElement.textContent = subject;
});


