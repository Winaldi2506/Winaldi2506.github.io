document.addEventListener("DOMContentLoaded", function () {
    var form = document.querySelector("form");
    var notification = document.getElementById("notification");
    form.addEventListener("submit", function (event) {
    event.preventDefault();

    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var alamat = document.getElementById("Alamat").value;
    var phone = document.getElementById("phone").value;
    var message = document.getElementById("message").value;

    var notificationMessage = "Terima kasih, " + name + "! Pesan Anda telah terkirim. Kami akan segera menghubungi Anda.";

    notification.style.display = "block";
    notification.textContent = notificationMessage;

    form.reset();
    });
});