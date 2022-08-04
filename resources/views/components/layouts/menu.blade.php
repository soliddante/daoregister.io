<div class="gls_menu  hidden fixed top-[64px] right-0 w-screen  h-screen bg-black bg-opacity-40 z-40">
    <div id="menu" class="jsc_right_menu md:w-[360px] w-full absolute bg-white h-screen right-0 top-0">
        <x-layouts.menu_inner></x-layouts.menu_inner>
    </div>

</div>
<script>
    $('.gls_menu').on('click', function(e) {
        if (!($(e.target).hasClass('jsc_right_menu') || $(e.target).parents().hasClass('jsc_right_menu'))) {
            $('.gls_menu').fadeOut()
        }
    })
</script>
<x-walletjs></x-walletjs>
// TODO add wallet exists error FFFFFFFF
