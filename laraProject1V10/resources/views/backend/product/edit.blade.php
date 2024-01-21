@extends('backend.layouts.app')

@section('title', 'Product - Add Product');

@section('content')


<main id="main" class="main">

    <div class="pagetitle">
      <h1>Category</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Validation</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Product</h5>
                @if($errors->any()) 
                <div class="alert alert-danger">
                  @foreach($errors->all() as $err)
                    <li>{{$err}}</li>
                  @endforeach
                </div>
                @endif

              <!-- Browser Default Validation -->
              <form class="row g-3" method="POST" action="{{ route('product.store', $product->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                  <label for="validationDefault01" class="form-label">Product name</label>
                  <input type="text" class="form-control" id="validationDefault01" name="product" value= "{{old('product', $product->name)}}" placeholder="Product name" required>
                </div> <br>

                <div class="col-md-12">
                  <label for="validationDefault02" class="form-label">Description</label><br>
                  {{-- <input type="text" class="form-control" id="validationDefault02" value="Doe" required> --}}
                  <textarea class="form-control tinymce-editor" name="description" id="" rows="5">{{old('description', $product->description)}}</textarea>
                </div><br><br>
                
                <div class="col-md-12" style="margin-top: 50px">
                  <label for="validationDefault03" class="form-label">Price</label>
                  <input type="text" class="form-control" name="price" value="{{old('price', $product->price)}}" id="validationDefault03" required>
                </div>

                <div class="col-md-12">
                  <label for="validationDefault04" class="form-label">Category</label>
                  <select class="form-select" id="validationDefault04" name="category" required>
                    <option selected value="">Choose A Category</option>
                    @foreach ($category as $cat)
                    
                    <option value="{{$cat->id}}" @selected($product->category_id == $cat->id)>{{$cat->name}}</option>
                        
                    @endforeach
                  </select> <br>
                </div> 

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Upload Image</label> <br>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" name="image" id="formFile">
                  </div>
                </div>
                <img src="{{asset('images/' . $product->image)}}" width="50px" alt="">
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Update</button>
                </div>
              </form>
              <!-- End Browser Default Validation -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->



@endsection