

@extends('let')
@section('coment')
<form action={{route('product.update',$product->id ) }} method="POST" enctype="multipart/form-data" >
    @csrf
@method('PUT')

<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label" >name</label>
  <input type="text" class="form-control"  name="name" value={{$product->name}} id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">price</label>
    <input type="number" class="form-control"  name="price" value={{$product->price}} id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">photo</label>
    <input type="file" class="form-control" value={{$product->photo}}  name="photo" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <input class="form-control" value={{$product->title}}  name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
<div class="mb-3 form-check">
    <label class="form-check-label" for="exampleCheck1">select</label>
    <select name="category" id=""  >
        <option value="">select</option>
        @foreach ($cat as $ca )
        <option value={{$ca->id}}>{{$ca->name}}</option>
        @endforeach
    </select>
  </div>

<div class="mb-3 form-check">
  <button type="submit" class="btn btn-primary" class="form-control">Submit</button>
</div>

</form>
@endsection
