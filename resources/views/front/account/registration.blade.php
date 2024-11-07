@extends('front.layouts.app')

@section('main')
<section class="section-5">
    <div class="container my-5">
        <div class="py-lg-2">&nbsp;</div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-5">
                <div class="card shadow border-0 p-5">
                    <h1 class="h3">Register</h1>
                    <form action="{{ route('account.processRegistration') }}" method="POST" id="registrationForm">
                        @csrf
                        <input type="hidden" name="role" value="{{ request('role') }}">

                        <div class="mb-3">
                            <label for="name" class="mb-2">Name*</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required>
                            <p></p>
                        </div> 
                        <div class="mb-3">
                            <label for="email" class="mb-2">Email*</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" required>
                            <p></p>
                        </div> 
                        <div class="mb-3">
                            <label for="password" class="mb-2">Password*</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" required>
                            <p></p>
                        </div> 
                        <div class="mb-3">
                            <label for="confirm_password" class="mb-2">Confirm Password*</label>
                            <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Please confirm Password" required>
                            <p></p>
                        </div> 
                        <button class="btn btn-primary mt-2" type="submit">Register</button>
                    </form>                    
                </div>
                <div class="mt-4 text-center">
                    <p>Have an account? <a href="{{ route('account.login') }}">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('customJs')
<script>
$("#registrationForm").submit(function(e){
    e.preventDefault();

    $.ajax({
        url: '{{ route("account.processRegistration") }}',
        type: 'post',
        data: $("#registrationForm").serializeArray(),
        dataType: 'json',
        success: function(response) {
            if (response.status == false) {
                var errors = response.errors;
                // Handle errors (similar to your existing error handling)
                handleErrors(errors);
            } else {
                // Handle successful registration (similar to your existing success handling)
                clearErrors();
                window.location.href = '{{ route("account.login") }}';
            }
        }
    });
});

function handleErrors(errors) {
    // Handle form validation errors (same as before)
    // Similar to the original code, adjust the UI based on error messages
}

function clearErrors() {
    // Clear error classes and messages
}
</script>
@endsection
