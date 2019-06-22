@extends('home')

@section('content')
<div class= 'container '>

<form action = "/Product"  enctype = "multipart/form-data"  method = "POST" >
@csrf


<div class = "row">
<div class = "col-8 offset-2">

    <label for= "name"   class = "col-form-label col-md-12">Named the product </label>
    <input id = "name"
    type = "text"
    value= "{{ old('name') }}"
    name = "name"
    class = "form-control"
    autocomplete = "put the of product"
    autofocus>

</div>
</div>


<div class = "row pt-6">
    <label for= "image"   class = ""> </label>
    <input id = "image"
    value= "{{ old('image') }}"
    type = "file"
    name = "image">
    </div>




    <div class = "row">

    <button class= "btn btn-primary"> Add product</button>
    </div>










</form>
    </div>
@endsection
