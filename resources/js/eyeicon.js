const eyeIcon = document.querySelector(".fa-eye-slash");
if (eyeIcon){
    const passwordInput = document.querySelector("#password");
    eyeIcon.addEventListener("click"  , function (){
        if (passwordInput.type === "password" && passwordInput.value !== ""){
            passwordInput.type = "text";
            eyeIcon.classList.replace("fa-eye-slash" , "fa-eye")
        }else {
            passwordInput.type = "password";
            eyeIcon.classList.replace("fa-eye" , "fa-eye-slash")
        }
    });
}
