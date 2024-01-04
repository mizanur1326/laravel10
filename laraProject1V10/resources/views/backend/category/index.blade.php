@extends('backend.layouts.app')

@section('title', 'Category - Category Views');

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
              <h5 class="card-title">Categories</h5>
              
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>Category ID</th>
                    <th>Category Name</th>
                    <th>Action</th>
                    {{-- <th data-type="date" data-format="YYYY/DD/MM">Start Date</th> --}}
                  </tr>
                </thead>
                <tbody>   
                    @foreach ($category as $cat)                       
                                  
                    <tr>
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->name}}</td>
                        <td><button class="btn btn-primary">Edit</button> | <button class="btn btn-danger">Delete</button></td>
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