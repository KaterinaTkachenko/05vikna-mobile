<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/2f787edd5f.js" crossorigin="anonymous"></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">    
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"> --}}
    {{-- <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'/> --}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <link href = "{{ asset('fonts/stylesheet.css') }}" rel = "stylesheet" type = "text/css" />

    <!-- Styles -->
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main>            
            <div class="overlay"><div id="loader"></div></div>
            <div style="position: relative">
                <div class="upper js-upper">
                    <div class="upper__btn js-upper">
                        <img src="../../images/upper.png" alt="">
                    </div>
                </div>   
            </div>  
            @yield('content')
        </main>
    </div>

    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script src="{{ asset('js/jquery.maskedinput.js') }}"></script>    
    
    <script>
        $(".phone").mask("+38 (099) 999-99-99", {
            completed: function(){
              $(".phone").removeClass('is-invalid');
            },
            onInvalid: function(){
              $(".phone").addClass('is-invalid');
            }            
        });

        function submitForm(pageName, widget, phoneId) {
            var phone = $(phoneId).val();
            var username = $('#username').val();
            var section1, section2, section3, section4;
            if($(".mySlides1")){
                var select1 = $('.select1').val();
                var select2 = $('.select2').val();
                var select3 = $('.select3').val();
                var select4 = $('.select4').val();
                var select5 = $('.select5').val();
                var sectionCount;
                if(!$('.wins').hasClass('hidden'))
                    sectionCount = $('.wins .calc_active').attr('data-name');
                else{
                    sectionCount = $('.doors .calc_doors_active').attr('data-name');
                }

                $(".mySlides1").each(function(){
                    if($(this).css("display")=="block"){
                        section1 = ($(this).find('div').html());
                    }
                });

                $(".mySlides2").each(function(){
                    if($(this).css("display")=="block"){
                        section2 = ($(this).find('div').html());
                    }
                });

                $(".mySlides3").each(function(){
                    if($(this).css("display")=="block"){
                        section3 = ($(this).find('div').html());
                    }
                });

                $(".mySlides4").each(function(){
                    if($(this).css("display")=="block"){
                        section4 = ($(this).find('div').html());
                    }
                });
            }

            if (phone.trim() == "") {
                $(phoneId).addClass("is-invalid");
                $(phoneId).focus();
                return false;
            } else {
                document.querySelector('.overlay').style.display = "block";
                document.getElementById("loader").style.display = "block";  
                $.ajaxSetup({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "/submit_modal",
                    data: "contactFrmSubmit=2&phone=" + phone + "&page=" + pageName + "&widget=" + widget + '&username=' + username + '&select1=' + select1 + '&select2=' + select2 + '&select3=' + select3 + '&select4=' + select4 + '&select5=' + select5 + '&sectionCount=' + sectionCount + '&section1=' + section1+ '&section2=' + section2+ '&section3=' + section3+ '&section4=' + section4,                   
                    success: function(msg) {
                        if (msg == "ok") {
                            document.querySelector('.overlay').style.display = "none";
                            document.getElementById("loader").style.display = "none";  
                            $("#modal-ok").modal('show');       
                            $("#modal-zamer .modal-title").html('Ваша заявка принята!');
                            $("#modal-zamer .statusMsg").html(
                                '<p>Спасибо за обращение в нашу компанию!</p><p>Мы перезвоним Вам в ближайшее время.</p>'
                            );
                        } else {
                            if (msg == "error") {
                                $("#phone-modal").addClass("is-invalid");
                            } else {
                                $("#modal-zamer .statusMsg").html(
                                    '<span style="color:red;">Произошла ошибка, попробуйте еще раз позже</span>'
                                );
                            }
                        }
                        $("#modal-zamer .submitBtn").removeAttr("disabled");
                        $("#modal-zamer .modal-body").css("opacity", "");
                    }
                });
            }
        }

        function submitModal(pageName, widget, phone, modal) {
            var phoneVal = $(phone).val();            

            if (phoneVal.trim() == "") {
                $(phone).addClass("is-invalid");
                $(phone).focus();
                return false;
            } else {                
                $.ajaxSetup({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "/submit_modal",
                    data: "contactFrmSubmit=1&phone=" + phoneVal + "&page=" + pageName + "&widget=" + widget , 
                    beforeSend: function() {
                        $(modal + " .submitBtn").attr("disabled", "disabled");
                        $(modal + " .modal-body").css("opacity", ".5");
                        $('.spinner').css("display", "block");
                    },
                    success: function(msg) {
                        if (msg == "ok") {
                            $('.spinner').css("display", "none");
                            
                            $(modal).modal('show');
                            $(modal + "  .modal-body>div").css("display", "none");
                            if ($(phone).hasClass("is-invalid"))
                                $(phone).removeClass("is-invalid");                            
                            $(modal + " .modal-title").html('Ваша заявка принята!');
                            $(modal + " .statusMsg").html(
                                '<p>Спасибо за обращение в нашу компанию!</p><p>Мы перезвоним Вам в ближайшее время.</p>'
                            );
                        } else {
                            if (msg == "error") {
                                $(phone).addClass("is-invalid");
                            } else {
                                $(modal + " .statusMsg").html(
                                    '<span style="color:red;">Произошла ошибка, попробуйте еще раз позже</span>'
                                );
                            }
                        }
                        $(modal + " .submitBtn").removeAttr("disabled");
                        $(modal + " .modal-body").css("opacity", "");
                    }
                });
            }
        }


        $('#modal-zamer').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var modal__title = button.attr('data-title');
            var modal__btn = button.attr('data-button');
            var modal__statusMsg = button.attr('data-msg');
            if(modal__title){
                var modal = $(this);
                modal.find('.modal-title').html(modal__title);
                if(modal__btn)
                    modal.find('.submitBtn').html(modal__btn);
                else
                    modal.find('.submitBtn').html(modal__title);
                modal.find('.statusMsg span').html(modal__statusMsg);
            }
        });

        $('#modal-zamer').on('hidden.bs.modal', function () {
            location.reload();
        });

        $('#modal-ok').on('hidden.bs.modal', function () {
            location.reload();
        });

        $('#modal-call').on('hidden.bs.modal', function () {
            location.reload();
        });

        var slideIndex = [1,1,1,1];
        var slideId = ["mySlides1", "mySlides2", "mySlides3", "mySlides4"];
        if($('.mySlides1').length > 0)
            showSlides(1, 0);

        function plusSlides(n, no) {
            showSlides(slideIndex[no] += n, no);
        }

        function showSlides(n, no) {
            var i;
            var x = document.getElementsByClassName(slideId[no]);
            if (n > x.length) {slideIndex[no] = 1}    
            if (n < 1) {slideIndex[no] = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
            x[slideIndex[no]-1].style.display = "block";  
        }        
    </script>
</body>
</html>
