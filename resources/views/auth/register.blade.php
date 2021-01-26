@extends('layouts.admin-template')

@section('content')

        <!-- Validation Errors -->
 <!--        <x-auth-validation-errors class="mb-4" :errors="$errors" /> -->

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="form-group">

                <input type="text"  name="name" id="name" value="{{old('name')}}"  class="block mt-1 w-full form-control"    placeholder="Enter Your Username" required autofocus/>
            </div> 
            <!-- Email -->
            <div class="form-group">

                <input type="email"  name="email" id="name" value="{{old('email')}}"  class="block mt-1 w-full form-control"    placeholder="Enter Your Email" required autofocus/>
            </div>
          
            <!-- Password -->
            <div class="form-group">
                <input type="password" name="password" id="password" class="block mt-1 w-full form-control"   placeholder="Enter Your Password"   value="{{old('password')}}" required autocomplete="new password" />
            </div>
             <!-- password_confirmation -->
            <div class="form-group">
               
        <input type="password_confirmation" name="password_confirmation" id="password_confirmation" value="{{old('password_confirmation')}}" placeholder="Enter Your Confirm Password" class="block mt-1 w-full form-control"   required  />
            </div>

       

<div class="form-group">
    <button type="submit" class="btn btn-info btn-block">Rgister</button>   
</div>
<div class="mg-t-20 tx-center mg-b-20">Already Register? <a href="{{ route('login') }}" class="tx-info">Login Here</a></div>

     
  
        </form>
@endsection
