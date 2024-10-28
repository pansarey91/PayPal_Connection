<?php require 'config.php'; ?>
<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];

    $product=$cn->query("select * from products where id=$id");
    $product->execute();

    $singleproduct=$product->fetch(PDO::FETCH_OBJ);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5c5946fe44.js" crossorigin="anonymous"></script>
    <title>Pay Page</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark" >
    <div class="container" style="margin-top: none">
        <a class="navbar-brand  text-white" href="#">Pay Page</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">      
        </div>
    </div>
    </nav>
    <div class="container">  
                    <script src="https://www.paypal.com/sdk/js?client-id=AXKLFpJRSsjXVCZ6483Td8XNcyigYXJg_zg-05d8kikWc1krUWSO6VYfTV1qJvnRbA6jjlWLQ3A6Iaqv&currency=USD"></script>
                    <div id="paypal-button-container"></div>
                    <script>
                        paypal.Buttons({
                        createOrder: (data, actions) => {
                            return actions.order.create({
                            purchase_units: [{
                                amount: {
                                value: '<?php echo $singleproduct->qty ?>'
                                }
                            }]
                            });
                        },
                        onApprove: (data, actions) => {
                            return actions.order.capture().then(function(orderData) {
                          
                             window.location.href='index.php';
                            });
                        }
                        }).render('#paypal-button-container');
                    </script>
                  
                </div>
            </div>
        </div>
    <body>
</html>
