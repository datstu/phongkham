<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo Application</title>

</head>
<body>

<div class="container">
    <div class="col-md-4 col-md-offset-2">
        <fieldset style="padding-top: 30px">
            <legend>Form pusher:</legend>
            <form action="{{URL::to('/pusher')}}" method="POST">
                @csrf
                <label for="">Message push</label>
                <br>
                <textarea name="contents" id="" cols="33" rows="10"></textarea>

                <br>
                <button class="btn btn-primary">Submit</button>
            </form>
        </fieldset>
    </div>
</div>
</body>
</html>
{{-- /////
<!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('b59b303106eccae4e8fe', {
      cluster: 'ap1'
    });

    var channel = pusher.subscribe('a');
    channel.bind('my-event', function(data) {
      alert(JSON.stringify(data));
    });
  </script>
</head>
<body>
  <h1>Pusher Test</h1>
  <p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>.
  </p>
</body> --}}