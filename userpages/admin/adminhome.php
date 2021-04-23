
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script
        src="https://www.paypal.com/sdk/js?client-id=AZyx9CBMtZqoYpXhVAWIKnk3Jh_jfZpwziG5-eyfLNvtarkEXZNEbFhJL2gZqPXM9e3wUVApTVZ-eYOq"> // Required. Replace YOUR_CLIENT_ID with your sandbox client ID.
    </script>
    <link href="../../css/styles.css" rel="stylesheet" />
    <link href="../../css/admin.css" rel="stylesheet" />
    <script src="../../js/admin.js"></script>
</head>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg  navbar-collapse  navbar-dark bg-dark">
            <span class="navbar-text">
       <a class="float-right" href="../../logout.php"> Logout </a>
      </span>
</nav>
<div class="container">
    <div id="info">

    <h1>Active commissions</h1>
    <div id="Commsion">

    </div>
    <h1>Completed</h1>
    <div id="Commsionall">

    </div><br><br>
    <h1>Close submission</h1>
    <form method="post">
        <label>Id</label><br><br>
        <input type="text" id="id"><br><br>
        <label>Done file</label><br><br>
        <input class="btn btn-secondary" type="file" name="fileToUpload" id="fileToUpload">
    </form>
    <button class="btn btn-primary" onclick="finishcommission()">Submit</button>
</div> </div>
</body>
</html>

