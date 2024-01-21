@extends('backend.layouts.app')

@section('title', 'Product - Product Views');

@section('content')


<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Products</h5>
              
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Product Price</th>
                    <th>Product Image</th>
                    <th>Product Category</th>
                    <th>Action</th>
                    {{-- <th data-type="date" data-format="YYYY/DD/MM">Start Date</th> --}}
                  </tr>
                </thead>
                <tbody>   
                    @foreach ($products as $product)                       
                                  
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <td> <img src="{{'images/'. $product->image}}" width="100" alt=""> </td>
                        {{-- <td>{{$product->category_id}}</td> --}}
                        <td>{{$product->category->name}}</td>

                        <td><button class="btn btn-primary"><a href="{{route('product.edit', $product->id)}}">Edit</a></button> | <button class="btn btn-danger"><a href="{{route('product.delete', $product->id)}}" onclick="return confirm('Are You sure to Delete')">Delete</a> </button></td>
                    </tr>

                  @endforeach 
                  {{-- <tr>
                    <td>9853</td>
                    <td>Alisa Horn</td>
                    <td><button>Edit</button> | <button>Delete</button></td>
                  </tr>
                  <tr>
                    <td>7516</td>
                    <td>Zelenia Roman</td>
                    <td><button>Edit</button> | <button>Delete</button></td>
                  </tr> --}}
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

</main><!-- End #main -->




@endsection