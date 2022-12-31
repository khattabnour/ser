@extends('let')
@section('coment')

<div class="d-flex justify-content-evenly text-center">
@foreach ($categorys as $cat)

<div class="card g-col-4" style="width: 18rem;">

  <div class="card-body">

    <h5 class="card-title">{{$cat->name}}</h5>
    <form action={{route('category.destroy',$cat->id)}} method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="delete">
    </form>
</div>
</div>
@endforeach
</div>
@endsection
