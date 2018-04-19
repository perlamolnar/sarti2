$(document).ready(function () {
    $("#sendContrasena").on("click", passwordCheck);
    
});

function passwordCheck() {
    var password = $("#password").val();
    console.log(password);

    $.post("Password.php", { password: password}, function (data) {
        $("#resultado").html(data);
    });
}