const title = document.querySelector("#title");
const content = document.querySelector("#content");
let submit = document.querySelector("#submit");
let clear = document.querySelector("#clear");

submit.addEventListener("click", function (e) {
  if (title.value === "" || content.value === "") {
    e.preventDefault();
    if (title.value === "") {
      title.style.background = "rgba(233, 233, 102, 0.795)";
      setTimeout(() => (title.style.background = "white"), 4000);
    }
    if (content.value === "") {
      content.style.background = "rgba(233, 233, 102, 0.795)";
      setTimeout(() => (content.style.background = "white"), 4000);
    }
    window.alert("fill both fields before submitting");
  }
});

clear.addEventListener("click", function (e) {
  e.preventDefault();
  if (window.confirm("are you sure you want to clear all text?")) {
    content.value = "";
    title.value = "";
  } else {
  }
});
