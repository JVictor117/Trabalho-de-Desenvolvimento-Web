const form = document.querySelector("#Form");
const nameInput = document.querySelector("#Nome");
const emailInput = document.querySelector("#Email");

form.addEventListener("submit", (event) => {
 event.preventDefault();

 form.submit();

}) ;