const contactForm = document.getElementById("contactForm");

let datos = document.getElementById("datos");

contactForm.addEventListener("submit", (e) => {
  e.preventDefault();
  let name = document.getElementById("name").value;
  let lastName = document.getElementById("lastName").value;
  let cell = document.getElementById("cell").value;
  let mail = document.getElementById("email").value;
  let textArea = document.getElementById("textArea").value;
  console.log(name);
  datos.innerHTML =
    "Nombre " +
    name +
    "<br/> Apellido: " +
    lastName +
    "<br/> Mail: " +
    mail +
    "<br/> Telefono: " +
    cell +
    "<br/> Consulta: " +
    textArea;
  myModal.show();
});

const options = {
  backdrop: true,
  keyboard: true,
  focus: true,
};

const myModal = new bootstrap.Modal(
  document.getElementById("contactModal"),
  options
);

// ----- TOAST
const toastTrigger = document.getElementById("liveToastBtn");
const toastLiveExample = document.getElementById("liveToast");
if (toastTrigger) {
  toastTrigger.addEventListener("click", () => {
    const toast = new bootstrap.Toast(toastLiveExample);

    toast.show();
  });
}
