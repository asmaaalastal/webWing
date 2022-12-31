@foreach($errors->all() as $message)
  <p style="color:#ffffff; padding:0px; background-color:#8f0f09; font-weight:normal;" > {{$message}} </p>
  <hr>
@endforeach