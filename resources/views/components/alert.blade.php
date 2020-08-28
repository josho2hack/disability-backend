@if ( session('success') )
  <div class="alert alert-success">{{ session('success') }}</div>
@elseif ( session('error') )
  <div class="alert alert-error">{{ session('error') }}</div>
@endif