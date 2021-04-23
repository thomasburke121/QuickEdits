
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>QuickEdits-Userpage</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script
            src="https://www.paypal.com/sdk/js?client-id=AZyx9CBMtZqoYpXhVAWIKnk3Jh_jfZpwziG5-eyfLNvtarkEXZNEbFhJL2gZqPXM9e3wUVApTVZ-eYOq"> // Required. Replace YOUR_CLIENT_ID with your sandbox client ID.
    </script>
    <link href="../../css/styles.css" rel="stylesheet" />
    <link href="../../css/userhome.css" rel="stylesheet" />
    <script src="../../js/ordercommission.js"></script>
</head>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg  navbar-collapse  navbar-dark bg-dark">
            <span class="navbar-text">
       <a class="float-right" href="../../logout.php"> Logout </a>
      </span>
        </div>
    </div>
</nav>
<div class="container">
    <div id="Commsion">
        <h1>How does this work?</h1>
        <p>So once you submit by paying via paypal for the commission i will try to have a logo back to you with in a week
        i give 2 free redo's. I will email you as soon as a logo is done.</p>
        <form  class="form-group" enctype="multipart/form-data>">
            <label for=" selection">Selection</label><br>
        <select class="form-control" id="selection" required="true">
            <option value="Logo">Logo</option>
            <option value="Photo">Photo</option>
            <option value="Audio">Audio</option>
            <option value="Video">Video</option>
        </select><br><br>
        <label for="email">Email</label><br>
        <input  class="form-control" type="email" id="emaila" required="true"><br>
        <label for="desc">Description</label><br>
        <input  class="form-control" type="text" id="desc" required="true" ><br><br>
            <label>(If selecting photo upload photo here)</label><br>
            <input class="btn btn-secondary" type="file" name="fileToUpload" id="fileToUpload">


</form>
<button class="btn btn-primary" onclick="checkform()">Validate</button>
<div id="paypalbutton">
    <div id="paypal-button-container"</div>

<h1>Completed commissions</h1>
<div id="done">
</div>
</div></div></div>
</div>
<script>
    function paypalcheck25(){
    paypal.Buttons({

        createOrder: function(data, actions) {
            // This function sets up the details of the transaction, including the amount and line item details.
            return actions.order.create({

                purchase_units: [{
                    amount: {
                        value: '25.00'
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            // This function captures the funds from the transaction.
            return actions.order.capture().then(function(details) {
                // This function shows a transaction success message to your buyer.
                //Todo display thank you for ordering & set up email
                submitorder();

            });
        }
    }).render('#paypal-button-container');}
    //This function displays Smart Payment Buttons on your web page.
    function paypalcheck10(){
        paypal.Buttons({

            createOrder: function(data, actions) {
                // This function sets up the details of the transaction, including the amount and line item details.
                return actions.order.create({

                    purchase_units: [{
                        amount: {
                            value: '10.00'
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
                // This function captures the funds from the transaction.
                return actions.order.capture().then(function(details) {
                    // This function shows a transaction success message to your buyer.
                    //Todo display thank you for ordering & set up email
                    submitorder();

                });
            }
        }).render('#paypal-button-container');}
    function paypalcheck40(){
        paypal.Buttons({

            createOrder: function(data, actions) {
                // This function sets up the details of the transaction, including the amount and line item details.
                return actions.order.create({

                    purchase_units: [{
                        amount: {
                            value: '40.00'
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
                // This function captures the funds from the transaction.
                return actions.order.capture().then(function(details) {
                    // This function shows a transaction success message to your buyer.
                    //Todo display thank you for ordering & set up email
                    submitorder();

                });
            }
        }).render('#paypal-button-container');}
</script>
</body>
</html>

