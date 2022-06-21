//toggle
const toggleBtn = document.querySelector(".toggle-btn");
const linkContainer = document.querySelector(".links_container");

toggleBtn.addEventListener("click", () => {
  toggleBtn.classList.toggle("active");
  linkContainer.classList.toggle("show");
});
const links = document.querySelectorAll(".link");

links.forEach((link) => {
  link.addEventListener("click", () => {
    links.forEach((e) => {
      e.classList.remove("active");
      linkContainer.classList.remove("show");
      toggleBtn.classList.remove("active");
    });
    link.classList.add("active");
  });
});

const alert = () => {
  Swal.fire({
    title: "Esta seguro de esto?",
    text: "Desea borrar el usuario!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Si, Borralo!",
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire("Deleted!", "Your file has been deleted.", "success");
    }
  });
};
