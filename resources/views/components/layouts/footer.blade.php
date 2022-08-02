<script>
    $('.gls_alert').delay(5000).fadeOut();
    const input = document.querySelector(".global_phone");
    intlTelInput(input, {
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
</script>
