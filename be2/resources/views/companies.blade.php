<!DOCTYPE html>
@extends('layout')

@section('title', 'Page Title')


@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <body class="antialiased">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
  </symbol>
</svg>

<div class="container py-3">
  

  <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
    <h1 class="display-4 fw-normal">List of Companies</h1>
    <p class="fs-5 text-muted">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
  </div>
    <!-- table -->
    <table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Adddress</th>
        <th scope="col">Phone</th>
        </tr>
    </thead>
    <tbody>
        @foreach($companies as $company)
            <tr>
                <th scope="row">{!!$company->company_id!!}</th>
                <td>{!!$company->company_name!!}</td>
                <td>{!!$company->company_address!!}</td>
                <td>{!!$company->company_phone!!}</td>
            </tr>
        @endforeach
      
    </tbody>
   
    </table>
    {{ $companies ->links()}}
 
</div>

    

</body>
</html>
@endsection
