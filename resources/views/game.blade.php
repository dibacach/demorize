<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="Memorize game DEMORIZE">
    <meta name="keywords" content="Memorize , Game">
    <meta name="author" content="Daniel Ibacache">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- ========== Title ========== -->
    <title>Demorize</title>
    <!-- ========== Favicon Ico ========== -->
    <!--<link rel="icon" href="fav.ico">-->
    <!-- ========== STYLESHEETS ========== -->
    <!-- Bootstrap CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Fonts Icon CSS -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/et-line.css')}}" rel="stylesheet">
    <link href="{{asset('css/ionicons.min.css')}}" rel="stylesheet">
    <!-- Carousel CSS -->
    <link href="{{asset('css/slick.css')}}" rel="stylesheet">
    <!-- Magnific-popup -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <!-- Custom styles for this template -->
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
</head>
<body>
<div class="loader">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>

<div class="body-container container-fluid">
    <a class="menu-btn" href="javascript:void(0)">
        <i class="ion ion-grid"></i>
    </a>
    <div class="row justify-content-center">
        @include('layout/sidebar')
        <!--=================== content body ====================-->
        <div class="col-lg-10 col-md-10 col-12 body_block align-content-center">
            <div class="portfolio">
                <div class="container-fluid">
                    <div class="justify-content-center no-gutters">
                        <div class="col-sm-12 col-md-6 col-lg-3"></div>
                        <div class="container-fluid container-margin h-100">
                            <div class="row mb-1 h-100">
                                <div class="col-12 h-100">
                                    <div class="col-12">
                                        <div class="row p-3">
                                            <div class="col-4">
                                                <select class="custom-select" name="level" id="level">
                                                    <option value="0">--Select a mode--</option>
                                                    <option value="1">Easy</option>
                                                    <option value="2">Medium</option>
                                                    <option value="3">Hard</option>
                                                </select>
                                            </div>
                                            <div class="col-4 text-center"><h2 id='crono'>00:00:00</h2></div>
                                            <div class="col-4 text-right">
                                                <button class="btn" onclick="play();">Play</button>
                                                <button class="btn">Resset</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12" id="gameboard"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=================== content body end ====================-->
    </div>
</div>


<!-- jquery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- bootstrap -->
<script src="{{asset('js/popper.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/waypoints.min.js')}}"></script>
<!--slick carousel -->
<script src="{{asset('js/slick.min.js')}}"></script>
<!--Portfolio Filter-->
<script src="{{asset('js/imgloaded.js')}}"></script>
<script src="{{asset('js/isotope.js')}}"></script>
<!-- Magnific-popup -->
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<!--Counter-->
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<!-- WOW JS -->
<script src="{{asset('js/wow.min.js')}}"></script>
<!-- Custom js -->
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/demorize.js')}}"></script>
<script>
    function play(){
        //--------------------------
        if(timeout==0)
        {
            if($("#level").val() == 0){
                alert("you must select a level");
                return false;
            }
            
            $.ajax({
                method: "POST",
                url: "{{url('gameboard')}}",
                data: {
                    _token: "{{csrf_token()}}",
                    level: $("#level").val()
                },
                success: function(data){
                    $("#gameboard").html(data);
                    inicio=vuelta=new Date().getTime();
                    running();
                },
                beforeSend: function(){}
            });
        }else{
            // stop cronometer
            clearTimeout(timeout);
            timeout=0;
        }
        //--------------------------
    }
</script>
</body>
</html>
