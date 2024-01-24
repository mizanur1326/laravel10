@extends('backend.layouts.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Tables</h1>
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
                    <h5 class="card-title">Search Table</h5>
                    <form action="" method="get">
                        <input type="search" name="search" placeholder="Serach Here" id="">
                    </form>
    
                  <!-- Default Table -->
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Sl</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Image</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
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
                  <!-- End Default Table Example -->
                </div>
              </div>
  
        </div>
      </div>
    </section>
  
  </main>

@endsection