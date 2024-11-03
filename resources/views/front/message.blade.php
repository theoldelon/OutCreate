@if (Session::has('success'))
<div class="alert alert-success alert-dismissible fade show fixed-top m-4" role="alert" id="success-alert">
    {{ Session::get('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (Session::has('error'))
<div class="alert alert-danger alert-dismissible fade show fixed-top m-4" role="alert" id="error-alert">
    {{ Session::get('error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@section('customJs')
<script type="text/javascript">
    // Automatically hide alerts after 2 seconds
    setTimeout(function() {
        var successAlert = document.getElementById('success-alert');
        var errorAlert = document.getElementById('error-alert');

        if (successAlert) {
            successAlert.classList.remove('show');
            successAlert.style.display = 'none'; // Use this to hide it completely
        }
        
        if (errorAlert) {
            errorAlert.classList.remove('show');
            errorAlert.style.display = 'none'; // Use this to hide it completely
        }
    }, 2000);
</script>
@endsection
