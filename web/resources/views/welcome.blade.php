<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Search Engine</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
 
        <!-- Styles -->
 
         <!-- <link href="css/app.css" rel="stylesheet">        --> 
      
        
         <style>
         html, body {
                background-color: grey;
                color: white;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .header{
height:100vh;
left:50%;
background-position: center;
display:flex;
justify-content:center;
align-items:center;
font-family:sans-serif;
}
h1
{

    color:orange;
    margin-bottom: 200px;
    margin-top:2px;
    font-size: 50px;
    letter-spacing: 2px;

}

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
                
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 100px;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            /* .m-b-md {
                margin-bottom: 30px;
            } */
            .form-box .search{

             height:30px;
            width:80%;
             padding:15px 20px;
             border: none;
            font-weight:bold;
              outline:black;

}

/* .form-box .speech img {
        float:right;
        width:40px
      } */

.search-btn
{
   height: 56px;
   width: 14%;
   padding:15px 15px;
   background: orange;
   border: black;
   color: grey;




      } */

         </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                        <a href="{{ url('/home') }}">Home</a>
                         @auth
                         <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <!-- <div class="title m-b-md">
                Search Engine -->

        <div class="header">
		<form id="labnol" action="{{URL::to('/search')}}" method="POST" role="search">
        {{ csrf_field() }}
      <h1> SEARCH ENGINE</h1>
		  <div class="form-box">
         
          <input type ="text" class="search" name="q" placeholder = "Search" id="transcript" />
          <img onclick="startSearch()" src="//i.imgur.com/cHidSVu.gif" />
          <button class ="search-btn" type="submit"> Search</button><br>
</div>
</div>

<!-- HTML5 Speech Recognition API -->
<script type="text/javascript">
  function startSearch() {

    if (window.hasOwnProperty('webkitSpeechRecognition')) {

      var recognition = new webkitSpeechRecognition();

      recognition.continuous = false;
      recognition.interimResults = false;

      recognition.lang = "en-US";
      recognition.start();

      recognition.onresult = function(e) {
        document.getElementById('transcript').value
                                 = e.results[0][0].transcript;
        recognition.stop();
        document.getElementById('q').submit();
      };

      recognition.onerror = function(e) {
        recognition.stop();
      }

    }
  }
</script>
 
          <br>
        
      </form>
                </div>
            </div>
        </div>
    </body>

</html>