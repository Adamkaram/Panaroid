@extends('home')

@section('content')

<a class ='btn btn-primary'  href = '/Product/{{$Product->id}}/edit' >Edit </a>

<div class= "container  float-md-left " >


<!-- card div -->
<div class="card col-md-3 float-md-left ">
    <img class="card-img-top" src="/storage/{{$Product->image}}"  alt="Card image cap">
    <div class="card-body">

            <h5 class="card-title"></h5>

            <a href="/Product/"  class="btn btn-outline-success">Add to cart </a>
            <p class="card-text"></p>
          <p class="card-text"><small class="text-muted">this card has created By ::{{ $Product->user->name}}</small></p>

  </div>
  </div>
<!-- end card div  -->





<!-- details div  -->
  <div>

  </div>





<!-- Buy div  -->

  <div>




  </div>






  <!--EndContainer -->
  </div>


@endsection


