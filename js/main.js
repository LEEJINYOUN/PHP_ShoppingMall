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

const signUpCheck = () => {
  const userEmail = document.signUpForm.email;
  const userName = document.signUpForm.name;
  const userPw = document.signUpForm.pw;

  if (userEmail.value == "") {
    alert("이메일을 입력해주세요");
    userEmail.focus();
    return false;
  }

  const expEmailText = /^[A-Za-z0-9\.\-]+@[A-Za-z0-9\.\-]+\.[A-Za-z0-9\.\-]+$/;
  if (!expEmailText.test(userEmail.value)) {
    alert("이메일 형식으로 입력해주세요.");
    userEmail.focus();
    return false;
  }

  if (userEmail.value.length < 6 || userEmail.value.length > 25) {
    alert("이메일은 6자 이상 25자 이하로 입력해주세요.");
    userEmail.focus();
    return false;
  }

  if (userName.value == "") {
    alert("이름을 입력해주세요.");
    userName.focus();
    return false;
  }

  const expNameText = /[가-힣]+$/;
  if (!expNameText.test(userName.value)) {
    alert("이름은 한글만 가능합니다.");
    userName.focus();
    return false;
  }

  if (userPw.value == "") {
    alert("비밀번호를 입력해주세요.");
    userPw.focus();
    return false;
  }

  if (userPw.value.length < 6 || userPw.value.length > 20) {
    alert("비밀번호는 6자 이상 20자 이하로 입력해주세요.");
    userPw.focus();
    return false;
  }

  return true;
};
