<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Of Pokadex  Presale Site</title>
    <!-- Include Web3 JS for Ethereum Blockchain interaction -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/web3@1.3.0/dist/web3.min.js"></script>
</head>
<body>
<style>
    #transactionForm .row {
        flex-wrap: nowrap;
    }

    @media (max-width: 575.98px) {
        #transactionForm .row {
            flex-wrap: wrap;
        }
        #transactionForm .col, #transactionForm .col-auto {
            width: 100%;
            max-width: 100%;
        }
    }
</style>
 
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3" style="margin-top:20%;">
        <h1>Book Of Pokadex Fair launch</h1>
    <button id="connectWalletButton">Connect to MetaMask</button>

    <div id="transactionForm" style="display:none;">
         <label for="exampleFormControlInput1" class="form-label">Enter Presale Amount</label>
        <input type="text" class="form-control" id="ethAmount" placeholder="Amount in ETH">
        <button id="sendEthButton" class="btn btn-primary">Send Ethereum</button>
    </div>

        </div>

    </div>

</div>
    

    <script>
        const receiverAddress = '0x845018574e0B0C99e8Ee8058CcC205203eb73654'; // Hardcode the receiver's address here

        document.getElementById('connectWalletButton').addEventListener('click', async () => {
            if (typeof window.ethereum !== 'undefined') {
                try {
                    await ethereum.request({ method: 'eth_requestAccounts' });
                    document.getElementById('transactionForm').style.display = 'block';
                } catch (error) {
                    console.error('User denied account access', error);
                }
            } else {
                console.log('Please install MetaMask!');
            }
        });

        document.getElementById('sendEthButton').addEventListener('click', async () => {
            const ethAmount = document.getElementById('ethAmount').value;
            const web3 = new Web3(window.ethereum);
            const accounts = await web3.eth.getAccounts();

            if (ethAmount) {
                web3.eth.sendTransaction({
                    from: accounts[0],
                    to: receiverAddress,
                    value: web3.utils.toWei(ethAmount, 'ether')
                })
                .then(receipt => console.log('Transaction successful:', receipt))
                .catch(error => console.error('Transaction failed:', error));
            } else {
                alert('Please enter the amount of ETH to send.');
            }
        });
    </script>
</body>
</html>
