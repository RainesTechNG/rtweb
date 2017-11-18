$(function($){
    if ($('#contact-form').length > 0) {
        $(function () {
            var fieldN = fn_form_fields('#contact-form');
            //var callback = fn_redirect('profile');
            var form = ajax_form("#contact-form", fieldN, 'fn_modalresp', 'data', '');
        });
    }

    if ($('#newsletter-form').length > 0) {
        $(function () {
            var fieldN = fn_form_fields('#newsletter-form');
            //var callback = fn_redirect('profile');
            var form = ajax_form("#newsletter-form", fieldN, 'fn_modalresp', 'data', '');
        });
    }

    if ($('#rfs-form').length > 0) {
        $(function () {
            var fieldN = fn_form_fields('#rfs-form');
            //var callback = fn_redirect('profile');
            var form = ajax_form("#rfs-form", fieldN, 'fn_modalresp', 'data', '#rfs-modal');
        });
    }
});
