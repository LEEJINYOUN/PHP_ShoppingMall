const preview = document.querySelector("#preview");
const upLoadName = document.querySelector(".upLoadName");

function readURL(input) {
  if (input.files && input.files[0]) {
    let reader = new FileReader();
    reader.onload = function (e) {
      preview.style.display = "block";
      preview.src = e.target.result;
      upLoadName.value = input.files[0].name;
    };
    reader.readAsDataURL(input.files[0]);
  } else {
    preview.src = "";
    preview.style.display = "none";
    upLoadName.value = "파일선택";
  }
}
