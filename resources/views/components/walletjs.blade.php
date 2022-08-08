<script>
    let currentAccount = null;
    let connectionMode = null;
    let databaseWallet = "{{ auth()->user()->wallet ?? '' }}";
    var provider = new WalletConnectProvider({
        infuraId: "43fc8fa086844be0831a586fe4b764b5",
        chainId: 3,
    })

    provider.enable().then(function(accounts) {
        currentAccount = accounts[0];
        ConnectionMode()
    });
    provider.on('disconnect', function() {
        window.location.reload()
    })



    $('.jsc_wc_connect').on('click', () => {
        $('#walletconnect-wrapper').show();
    });
    provider.wc.on('connect', function() {
        window.location.reload();
    })



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


            console.log(currentAccount);
            ConnectionMode()
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
        if (connectionMode != null && databaseWallet.length != 0 && currentAccount.toLowerCase() != databaseWallet.toLowerCase()) {
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
        web3.eth.getBalance(currentAccount, (err, balance) => {
            balance = web3.utils.fromWei(balance, "ether");
            $(".jsc_balance").text(balance.slice(0, 6));
        });

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

    }
</script>
{{-- user type --}}
<script>
    //FIXME Alan besoorate unsafe bade inke taraf fee zad bara sakhte nft pro modesh mikonim dar ayande bayad check she too blockchain nftish hast yana
</script>
