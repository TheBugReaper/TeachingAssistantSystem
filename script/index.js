function login() {
    var form = document.getElementById("login-form");
    var submit = form.elements["submit"];
    var data = new FormData(form);

    if(typeof loginAjax == "undefined"){
        loginAjax = new AjaxUtil();
        loginAjax.asyRequest(form.action, data, "post");
        loginAjax.setSuccessAction(function(){
            document.getElementById("login-success").hidden = false;
            document.getElementById("login-window").hidden = true;
        });
        loginAjax.setFailureAction(function(){
            document.getElementById("login-failed").hidden = false;
            document.getElementById("login-window").hidden = true;
        });
    } else if(loginAjax instanceof AjaxUtil){
        loginAjax.asyRequest(form.action, data, "post");
    }

}
function showLogin() {
    var loginWindow = document.getElementById("login");
    loginWindow.hidden = false;
}
window.onload = function () {
    var loginForm = document.getElementById("login-form");
    var submit = loginForm.elements["submit"];
    submit.addEventListener("click", function () {
        event.preventDefault();
        login();
    })
}