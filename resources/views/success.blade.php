<html>


<div class="row">
   <div>
    <h3 class="display">You are Successfully login to the System</h3>
    
    @if(isset(Auth::user()->email))
    <div class="alert alert-danger">
        <strong>Welcome {{Auth::user()->email}}</strong>

        <br>
        <a href="{{url('logout')}}">Log Out</a>
    </div>
    @else
    <script>window.location="/";<script>
    @endif
    </div>
    </div>
</html>