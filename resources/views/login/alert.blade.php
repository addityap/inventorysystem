@if(session()->has('fail'))
      <div class="alert alert-danger">
        {{session()->get('fail')}}
      </div>
@endif