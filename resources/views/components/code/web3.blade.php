<script>
    let currentAccount = null;
    let connectionMode = null;
    let databaseWallet = "{{ auth()->user()->wallet ?? '' }}";
    var provider = new WalletConnectProvider({
        infuraId: "43fc8fa086844be0831a586fe4b764b5",
        chainId: 3,
    })


    /******************************
     *   AFTER PROVIDER CONNECTED *
     ******************************/
    if (provider.wc._connected == true) {
        provider.enable().then(function(accounts) {
            afterProviderConnected(accounts)
        });
    }

    function afterProviderConnected(accounts) {
        currentAccount = accounts[0];
        const web3B = new Web3(provider);
        web3B.eth.getBalance(currentAccount, (err, balance) => {
            balance = web3B.utils.fromWei(balance, "ether");
            $(".jsc_balance").text(balance.slice(0, 6));
            ConnectionMode()
        });
    }

    /**********************
     * PROVIDER LISTENERS *
     **********************/

    $('body').on('click','.jsc_wc_disconnect', () => {
        provider.disconnect();
    })
    provider.wc.on('connect', function() {
        window.location.reload();
    })

    provider.on('disconnect', function() {
        window.location.reload()
    })

    /***************************
     * CLICK ON CONNECT BUTTON *
     ***************************/
    $('body').on('click','.jsc_wc_connect', () => {
        provider.enable().then(function(accounts) {
            afterProviderConnected(accounts)
        });
    });
    $('.jsc_update_wallet').on('click', function() {
        if (databaseWallet.length == 0) {
            $.ajax({
                type: "get",
                url: "{{ route('update_user_wallet') }}",
                data: {
                    wallet: currentAccount
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        }
    });

    function getCurrentAccount() {
        web3.eth.getAccounts().then(function(accounts) {
            currentAccount = accounts[0];
        }).catch(function(e) {
            console.log(e);
        })
    }
    $('.jsc_wc_disconnect').on('click', () => {
        provider.disconnect();
    })

    function ConnectionMode() {
        /*
         * MODE -1 = WALLET CONNECTED || DATABASE EMPTY
         * MODE 0 =  WALLET NOT CONNECTED || DATABASE EMPTY 
         * MODE 1 = WALLET NOT CONNECTED || DATABASE FULL
         * MODE 2 = WALLET CONNECTED || DATABASE FULL || NOT MATCH
         * MODE 3 = WALLET CONNECTED || DATABASE FULL || MATCH
         */
        if (currentAccount == null && databaseWallet.length == 0) {
            connectionMode = '-1';
        }
        if (currentAccount != null && databaseWallet.length == 0) {
            connectionMode = '0';
        }
        if (currentAccount == null && databaseWallet.length != 0) {
            connectionMode = '1';
        }
        if (currentAccount != null && databaseWallet.length != 0 && currentAccount.toLowerCase() != databaseWallet.toLowerCase()) {
            connectionMode = '2';
        }
        if (currentAccount != null && databaseWallet.length != 0 && currentAccount.toLowerCase() == databaseWallet.toLowerCase()) {
            connectionMode = '3';
        }
        showConnectionSection();
    }

    function showConnectionSection() {
        $("#mode_-1").hide();
        $('.jsc_wallet_address').text(currentAccount);
        if (connectionMode == '-1') {
            $("#mode_-1").show();
        }
        if (connectionMode == '0') {
            $("#mode_0").show();
        }
        if (connectionMode == '1') {
            $("#mode_1").show();
        }
        if (connectionMode == '2') {
            $("#mode_2").show();
        }
        if (connectionMode == '3') {
            $("#mode_3").show();
        }
        if (connectionMode != 3) {
            $('.jsc_wallet_error').show();
        } else {
            $('.jsc_upgrade_section').show();
        }
        $('.jsc_dash_close_menu').on('click', function(e) {
            $('.jsc_dash_menu').hide();
        })
        $('.jsc_dash_open').on('click', function(e) {
            $('.jsc_dash_menu').show();
        })
    }
</script>
