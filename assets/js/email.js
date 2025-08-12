document.addEventListener("DOMContentLoaded", function() {
    // Inisialisasi EmailJS
    emailjs.init("ehkckNUWauWmKhR9O"); // Masukkan Public Key kamu

    // Ambil elemen-elemen form
    const form = document.getElementById("contact-form");
    const loadingMessage = document.querySelector(".loading");
    const sentMessage = document.querySelector(".sent-message");
    const errorMessage = document.querySelector(".error-message");

    // Sembunyikan pesan awal
    loadingMessage.style.display = "none";
    sentMessage.style.display = "none";
    errorMessage.style.display = "none";

    // Tambahkan event listener untuk menangani submit form
    form.addEventListener("submit", function(event) {
      event.preventDefault(); // Mencegah pengiriman form default

      // Tampilkan pesan loading
      loadingMessage.style.display = "block";
      sentMessage.style.display = "none";
      errorMessage.style.display = "none";

      // Kirim form menggunakan EmailJS
      emailjs.sendForm("service_mb0kp5y", "template_wv7accq", form)
        .then(function(response) {
          // Jika berhasil mengirim email
          loadingMessage.style.display = "none";
          sentMessage.style.display = "block";
          form.reset(); // Reset form
        }, function(error) {
          // Jika terjadi kesalahan
          loadingMessage.style.display = "none";
          errorMessage.textContent = "Gagal mengirim pesan. Silakan coba lagi.";
          errorMessage.style.display = "block";
          console.error("EmailJS error:", error); // Log error dengan deskripsi lebih jelas
        });
    });
  });