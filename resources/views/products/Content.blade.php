@extends('home')





@section('content')
<script  src = "./dist/app.js/" > </script>






<div class='container'>


<example-component> </example-component>



<div class= 'pb-4'><a class = 'btn btn-outline-success ' href='/Product/create'> Add Product  </a></div>
@foreach($Product as $Products )
<div class="card col-md-2  d-inline-block" >
    <img class="card-img-top"  src="/storage/{{$Products->image}}"  alt="Card image cap">
    <div class="card-body">

            <h5 class="card-title"></h5>
            <p class="card-text"></p>
          <p class="card-text"><small class="text-muted">{{$Products->name}}</small></p>
            <a href='/Product/{{$Products->id}}'  class='btn btn-warning mb'>Visit</a>





    </div>
  </div>

@endforeach

{{$Product->links()}}
</div>

  @endsection
