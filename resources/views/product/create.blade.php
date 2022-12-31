
    @extends('let')
    @section('coment')
    <form action={{ route('product.store')}} method="POST" enctype="multipart/form-data" >
        @csrf
     @method('POST')

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">name</label>
      <input type="text" class="form-control"  name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">price</label>
        <input type="number" class="form-control"  name="price" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">photo</label>
        <input type="file" class="form-control"  name="photo" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">title</label>
        <br>
        <textarea name="title" id="" cols="30" rows="10" style="border:1px rgb(48, 46, 46) solid"></textarea>
      </div>
    <div class="mb-3 form-check">
        <label class="form-check-label" for="exampleCheck1">select</label>
        <select name="category" id="">
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
