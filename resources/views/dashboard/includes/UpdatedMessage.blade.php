@if(session()->has('st'))
@if(session('st'))
<div style="color:#ffffff; padding:20px; background-color:#2d873d; font-weight:bold;" > Updated successfully </div>
@else
<div style="color:#ffffff; padding:20px; background-color:#8f0f09; font-weight:bold;" > Updated Failed </div>
@endif
@endif