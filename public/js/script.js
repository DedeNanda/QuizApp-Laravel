//untuk pesan pada sweet alert
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

    //pesan succes pada change profile dan password
    const successMessageUser = document.getElementById("success-message-user");
    if (successMessageUser) {
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: successMessageUser.dataset.message,
            showConfirmButton: false,
            timer: 1500,
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

    //untuk peringatan sudah selesai ujian atau belom pada soal ipa dan ips
    const examFinishMessage = document.getElementById("exam-finish-message");
    if (examFinishMessage) {
        Swal.fire({
            title: "Selesai Ujian",
            text: examFinishMessage.dataset.message,
            icon: "success",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Selesai",
        });
    }

    //pesan untuk edit pada nilai IPA dan IPS success
    const successMessageEdit = document.getElementById("success-message-edit");
    if (successMessageEdit) {
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: successMessageEdit.dataset.message,
            showConfirmButton: false,
            timer: 1500,
        });
    }

    //pesan untuk delete pada nilai IPA dan IPS
    const deleteButtons = document.querySelectorAll(".btn-delete");

    deleteButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const id = button.getAttribute("data-id");
            const form = document.querySelector(`#form-delete-${id}`);

            // SweetAlert untuk konfirmasi
            Swal.fire({
                title: "Apakah Anda yakin?",
                text: "Data ini akan dihapus secara permanen!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Ya, hapus!",
                cancelButtonText: "Batal",
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // Submit form jika dikonfirmasi
                }
            });
        });
    });
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
