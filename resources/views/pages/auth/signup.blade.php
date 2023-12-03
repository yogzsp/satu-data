@extends('layouts.form')

@section('custom-head')

@endsection

@section('content')
  
  <div class="container form-account w-25 mx-3 p-4 bg-white border border-1 border-dark rounded-4" >
    @csrf
    <form>
      <div class="text-center mb-4">
        <i>
          <h2 class="fw-bold">Register</h2>
          <p>Already have an account? <a href="{{route('login-pages')}}">Login here</a></p>
        <i>
      </div>
      <div class="input-group mb-4">
        <input type="text" class="rounded-3 border-custom p-2 form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-4">
        <input type="password" class="rounded-3 border-custom p-2 form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-4">
        <button type="submit" class="bg-cus btn btn-primary rounded-3 border-custom p-2 w-100">Submit</button>
      </div>
    </form>
  </div>

@endsection 