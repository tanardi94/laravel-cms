<script src={{asset('js/core/popper.min.js')}}></script>
<script src={{asset('js/core/bootstrap.min.js')}}></script>
<script src={{asset('js/plugins/perfect-scrollbar.min.js')}}></script>
<script src={{asset('js/plugins/smooth-scrollbar.min.js')}}></script>
<script src={{asset('js/plugins/chartjs.min.js')}}></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('js/material-dashboard.min.js?v=3.1.0')}}"></script>
<script>
    @if (Session::has('message'))
        var type = "{{ Session::get('alert-type', 'message', 'errors') }}"
        toastr.options = {
            timeOut: 10000,
            positionClass: 'toast-top-center',
            // tapToDismiss: true,
        }
        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('message') }}", 'FYI');
                break;

            case 'success':
                toastr.success("{{ Session::get('message') }}", 'Yeay, Success!');
                break;

            case 'warning':
                toastr.warning("{{ Session::get('message') }}", 'Please Be Careful!');

                break;

            case 'error':
                toastr.error("{!! Session::get('message') !!}", 'There are errors!');

                break;
        }
    @endif
</script>
