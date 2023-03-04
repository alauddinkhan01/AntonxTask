    <script>
        $(function() {
            @if (Session::has('loggedOut'))
                Swal.fire({
                    icon: 'success',
                    title: 'Great!',
                    text: '{{ Session::get('loggedOut') }}',
                    timer: 2000,
                    showConfirmButton: false
                })
            @endif
            @if (Session::has('Payment'))
                Swal.fire({
                    icon: 'success',
                    title: 'Great!',
                    text: '{{ Session::get('Payment') }}',
                    timer: 2000,
                    showConfirmButton: false
                })
            @endif
        });
        $(document).ready(function() {
            localStorage.removeItem('Data');
            localStorage.removeItem('Size');
            setTimeout(() => {
                $(".alert").hide()
            }, 4000);
        })
    </script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#login-form-btn").click(function() {
            $.ajax({
                type: "POST",
                url: "{{ route('login') }}",
                data: $("#login-form").serialize(),
                success: function(response) {

                    Swal.fire({
                        icon: 'success',
                        title: 'Great!',
                        text: 'You are logged in successfully!',
                        timer: 2000,
                        showConfirmButton: false
                    }).then(function() {
                        window.location.href = "/";
                    });
                },
                error: function(error) {
                    if (error.responseJSON.email) {
                        $("#login-error-email").text(error.responseJSON.email);
                    } else {
                        $("#login-error-email").text("");
                    }

                    if (error.responseJSON.password) {
                        $("#login-error-password").text(error.responseJSON.password);
                    } else {
                        $("#login-error-password").text("");
                    }
                    $("#login-error-msg").text(error.responseJSON.message);
                }

            });
            //your form execution code
        });
        $("#register-form-btn").click(function() {
            $.ajax({
                type: "POST",
                url: "{{ route('register') }}",
                data: $("#register-form").serialize(),
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Great!',
                        text: 'You are Registered and LoggedIn Successfully',
                        timer: 2000,
                        showConfirmButton: false
                    }).then(function() {
                        window.location.href = "/"
                    });
                },
                error: function(error) {
                    console.log(error);
                    if (error.responseJSON.email) {
                        $("#reg-email-error").text(error.responseJSON.email);
                    } else {
                        $("#reg-email-error").text("");
                    }
                    if (error.responseJSON.name) {
                        $("#reg-name-error").text(error.responseJSON.name);
                    } else {
                        $("#reg-name-error").text("");
                    }
                    if (error.responseJSON.password) {
                        $("#reg-password-error").text(error.responseJSON.password);
                    } else {
                        $("#reg-password-error").text("");
                    }
                }
            });
        });

        $("#register-popup").click(function() {
            $(".form-control").val("");
        });
        $("#login-link").click(function() {
            $("#register").modal("hide");
            $(".form-control").val("");
        });

        $("#loginModal").on('hidden.bs.modal', function(e) {
            $(".form-control").val("");
        });
        $("#register").on('hidden.bs.modal', function(e) {
            $(".form-control").val("");
        });


        $("#login-show-password").click(function() {
            $(this).addClass('d-none');
            $("#login-password-input").attr('type', 'text');
            $("#login-hide-password").removeClass('d-none');
        });
        $("#login-hide-password").click(function() {
            $(this).addClass('d-none');
            $("#login-password-input").attr('type', 'password');
            $("#login-show-password").removeClass('d-none');
        });

        $("#signup-show-password").click(function() {
            $(this).addClass('d-none');
            $(".signup-password").attr('type', 'text');
            $("#signup-hide-password").removeClass('d-none');
        });
        $("#signup-hide-password").click(function() {
            $(this).addClass('d-none');
            $(".signup-password").attr('type', 'password');
            $("#signup-show-password").removeClass('d-none');
        });

        $("#confirm-show-password").click(function() {
            $(this).addClass('d-none');
            $(".confirm-password").attr('type', 'text');
            $("#confirm-hide-password").removeClass('d-none');
        });
        $("#confirm-hide-password").click(function() {
            $(this).addClass('d-none');
            $(".confirm-password").attr('type', 'password');
            $("#confirm-show-password").removeClass('d-none');
        });
    </script>
