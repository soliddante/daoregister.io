<script>

  

    $('.jsc_generate_nft').on('click', function() {
        const elementToSave = document.querySelector(".jsc_account_nft");
        html2canvas(elementToSave, {
            windowWidth: 1400,
            width: 700,
        }).then(canvas => {
            let image = canvas.toDataURL("image/jpeg");
            $('.jsc_contract_image').attr('src', image)
            $('.jsc_contract_image_link').attr('href', image)
            $('.jsc_hide_after_generate').hide();
            $('.show_hide_after_generate').show();

            var image2 = new Image();
            image2.onload = function() {

            }
            image2.src = image;
            document.body.appendChild(image2);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });



            let form_firstname = "{{ auth()->user()->firstname }}";
            let form_lastname = "{{ auth()->user()->lastname }}";
            let form_email = "{{ auth()->user()->email }}";
            let form_gendar = "{{ auth()->user()->gendar }}";
            let form_birthday = "{{ auth()->user()->birthday }}";
            let form_profession = "{{ auth()->user()->profession }}";
            let form_education = "{{ auth()->user()->education }}";
            let form_university = "{{ auth()->user()->university }}";
            let form_country = "{{ auth()->user()->country }}";
            let form_city = "{{ auth()->user()->city }}";
            let form_postalcode = "{{ auth()->user()->postalcode }}";
            let form_address = "{{ auth()->user()->address }}";
            let form_phone = "{{ auth()->user()->phone }}";
            let form_language_first = "{{ auth()->user()->language_first }}";
            let form_language_second = "{{ auth()->user()->language_second }}";
            let form_instagram = "{{ auth()->user()->instagram ?? '-' }}";
            let form_facebook = "{{ auth()->user()->facebook ?? '-' }}";
            let form_twitter = "{{ auth()->user()->twitter ?? '-' }}";
            let form_linkedin = "{{ auth()->user()->linkedin ?? '-' }}";
            let form_whatsapp = "{{ auth()->user()->whatsapp ?? '-' }}";
            let form_telegram = "{{ auth()->user()->telegram ?? '-' }}";
            let form_wallet = "{{ auth()->user()->wallet }}";


            var fd = new FormData();
            fd.append('token', Math.floor(Math.random() * 900000000000));
            fd.append('wallet', form_wallet);
            fd.append('the_image', image);
            fd.append('firstname', form_firstname);
            fd.append('lastname', form_lastname);
            fd.append('email', form_email);
            fd.append('gendar', form_gendar);
            fd.append('birthday', form_birthday);
            fd.append('profession', form_profession);
            fd.append('education', form_education);
            fd.append('university', form_university);
            fd.append('country', form_country);
            fd.append('city', form_city);
            fd.append('postalcode', form_postalcode);
            fd.append('address', form_address);
            fd.append('phone', form_phone);
            fd.append('language_first', form_language_first);
            fd.append('language_second', form_language_second);
            fd.append('instagram', form_instagram);
            fd.append('facebook', form_facebook);
            fd.append('twitter', form_twitter);
            fd.append('linkedin', form_linkedin);
            fd.append('whatsapp', form_whatsapp);
            fd.append('telegram', form_telegram);

            $.ajax({
                url: "{{ route('ipfs_create') }}",
                data: fd,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function(data) {
                    create_account_nft();
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    console.dir(xhr.status);
                    console.dir(xhr.responseText);
                    console.dir(thrownError);
                }
            });

        });
    })
    function create_account_nft(){
            $.ajax({
                type: "get",
                url: "{{ route('ipfs_last_get') }}",
                success: function (response) {
                    database_ipfs = response;                       
                    console.log(database_ipfs); 
                }
            });
    }
    // sakhte axo ipfs TODO
</script>