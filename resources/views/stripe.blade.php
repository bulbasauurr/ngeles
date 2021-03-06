<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>W3path | laravel Stripe Payment Gateway Integration - W3path.com</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <style>
   .container{
    padding: 0.5%;
   } 
</style>
</head>
<body>
  <div class="container">
    <h2 style="margin-top: 12px;" class="alert alert-success">laravel Stripe Payment Gateway Integration - <a href="https://www.w3path.com" target="_blank" >W3path</a></h2><br>  
 
    <div class="row">
      <div class="col-md-12"><pre id="token_response"></pre></div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <button class="btn btn-primary btn-block" onclick="pay(10)">Pay $10</button>
      </div>
      <div class="col-md-4">
        <button class="btn btn-success btn-block" onclick="pay(50)">Pay $50</button>
      </div>
      <div class="col-md-4">
        <button class="btn btn-info btn-block" onclick="pay(100)">Pay $100</button>
      </div>
    </div>
</div>
 
 
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://checkout.stripe.com/checkout.js"></script>
 
<script type="text/javascript">
  $(document).ready(function () {  
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  });
 
  function pay(amount) {
    var handler = StripeCheckout.configure({
      key: 'pk_test_aeUUjYYcx4XNfKVW60pmHTtI',
      locale: 'auto',
      token: function (token) {
        // You can access the token ID with `token.id`.
        // Get the token ID to your server-side code for use.
        console.log('Token Created!!');
        console.log(token)
        $('#token_response').html(JSON.stringify(token));
 
        $.ajax({
          url: '{{ url("stripe") }}',
          method: 'post',
          data: { tokenId: token.id, amount: amount },
          success: (response) => {
 
            console.log(response)
 
          },
          error: (error) => {
            console.log(error);
            alert('Oops! Something went wrong')
          }
        })
      }
    });
  
    handler.open({
      name: 'Demo Site',
      description: '2 widgets',
      amount: amount * 100
    });
  }
</script>
</body>
</html>