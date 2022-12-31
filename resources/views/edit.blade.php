@extends('let')
@section('coment')
<form action="{{route('editproduct')}}" method="get">
    <select name="select" id="">
        <option value="{{old('select')}}">select</option>
        @foreach ($category as $cat)
        <option value={{$cat->id}}>{{$cat->name}}</option>
        @endforeach
        <input type="submit" value="filter">
        </select>
</form>
<div class=" text-center d-flex justify-content-evenly">
@foreach ($products as $product)

<div class="card g-col-4" style="width: 18rem;">

  <div class="card-body">
    <img src="{{ asset('imgs/'.$product->img) }}" style="height: 300px" class="card-img-top" alt="...">
    <h5 class="card-title">{{$product->name}}</h5>
    <h5 class="card-title"> {{$product->category->name}}</h5>
    <p class="card-text">{{$product->title}}</p>
    <a href={{route('product.edit',$product->id)}} type="submit">edit</a>
    <br>
    <form action={{route('product.destroy',$product->id)}} method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="delete">
    </form>

  </div>
</div>
@endforeach
</div>


@endsection
