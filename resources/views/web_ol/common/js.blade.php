<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
<script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

<script type="text/javascript">
    function GetTest(value) {
        $.ajax({
            url: "{{ route('getTests') }}",
            type: 'GET',
            data: {
                test_name: value
            },
            success: function(response) {
                $('#listofsearchresults').css('display', 'block');
                $('#listofsearchresults').html(response.html);
            },
            error: function(error) {
                console.log(error);
            }
        });

    }
    $(document).on('click', function(event) {
        if (!$(event.target).closest('.form').length) {
            $('#listofsearchresults').hide();
        }
    });
</script>
