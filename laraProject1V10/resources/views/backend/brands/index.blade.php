@extends('backend.layouts.app')

@section('title', 'Brand - Brand Views');

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
                  <th>Brand ID</th>
                  <th>Brand Name</th>
                  <th>Brand Description</th>
                  {{-- <th data-type="date" data-format="YYYY/DD/MM">Start Date</th> --}}
                </tr>
              </thead>
              <tbody>   
                @foreach ($brands as $brand)                      
                                
                  <tr>
                      <td>{{ ++$i }}</td>
                      <td>{{ $brand->name }}</td>
                      <td>{{ $brand->description }}</td>                      
                      {{-- <td> <img src="{{'images/'. $product->image}}" width="100" alt=""> </td> --}}

                      <td>
                        <form action="{{ route('brands.destroy',$brand->id) }}" method="POST">
           
                            <a class="btn btn-info" href="{{ route('brands.show',$brand->id) }}">Show</a>
            
                            <a class="btn btn-primary" href="{{ route('brands.edit',$brand->id) }}">Edit</a>
           
                            @csrf
                            @method('DELETE')
              
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>

                  </tr>
                  
                  @endforeach 

              </tbody>
            </table>
            {{-- {!! $brands->links() !!} --}}

            {!! $brands->withQueryString()->links('pagination::bootstrap-5') !!}
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->

@endsection