import './bootstrap';

window.initToggleablePassword = function () {
    let $ = window.$;
    let iconEl = $('.toggle-password .fa');
    let passwordEl = $('.toggle-password-target');
    $('.toggle-password').click(function () {
        let t = passwordEl.attr('type');
        passwordEl.attr('type', t === 'password' ? 'text' : 'password');
        iconEl.addClass(t === 'password' ? 'fa-eye-slash' : 'fa-eye');
        iconEl.removeClass(t === 'password' ? 'fa-eye' : 'fa-eye-slash');
    })
};
