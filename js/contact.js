const form = document.getElementById("contactForm");

form.addEventListener("submit", function (e) {
  e.preventDefault();
  const formData = new FormData(form);
  const textSuccess = "Message was sent"

  fetch("form-handler.php", {
    method: "POST",
    body: formData,
  })
    .then((res) => res.text())
    .then((text) => {
      console.log(text);
      if (text.includes(textSuccess)) {
        const modalElement = document.getElementById("successModal");
const successModal = new bootstrap.Modal(modalElement);
successModal.show();
        
        form.reset();
      } else {
        alert("Nepodařilo se odeslat zprávu.");
      }
    })
    .catch(() => {
      alert("Chyba spojení se serverem.");
    });
});