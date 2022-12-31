@extends('let')
@section('coment')
<form action={{ route('category.store')}} method="POST" >
    @csrf
    <input type="text" name="name"class="form-control"   >
    <input type="submit" value="submit"   >
    </form>
    @endsection
