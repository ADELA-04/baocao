// public/assets/js2/custom.js

$(document).ready(function() {
    $('#toggle-password').on('click', function() {
        const passwordField = $('#password');
        const passwordFieldType = passwordField.attr('type') === 'password' ? 'text' : 'password';
        passwordField.attr('type', passwordFieldType);
        $(this).find('i').toggleClass('icon-eye icon-eye-off');
    });

    $('#toggle-confirm-password').on('click', function() {
        const confirmPasswordField = $('#password-confirmation');
        const confirmPasswordFieldType = confirmPasswordField.attr('type') === 'password' ? 'text' : 'password';
        confirmPasswordField.attr('type', confirmPasswordFieldType);
        $(this).find('i').toggleClass('icon-eye icon-eye-off');
    });
});
