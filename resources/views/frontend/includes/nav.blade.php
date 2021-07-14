<div class="main-nav ">
    <nav class="navbar navbar-default">
        <div class="container">


            <div class="navbar-header">
                <button type="button" class="main-menu-toggle navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{url('img/logo-fs.png')}}">
                </a>
            </div>


            <div class="bottomnav collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <!--<li class=""><img src="https://www.foodstudio.lk/img/logo-fs-round.png"></li>-->

                <div class="container">
                    <div class="row">
                        <div class="leftLogo col-md-1">
                            <div class="navLogoRound navLogoRound-d-none">
                                <img src="{{url('img/logo-fs-round.png')}}">
                            </div>
                        </div>
                        <div class="col-md-10">
                            <ul class="nav navbar-nav navbar-center">

                                <li class="{{ Request::segment(1)==null ? 'active' :null }}">
                                    <a href="{{url('/')}}">
                                        Home              </a>
                                </li>
                                <li class="{{ Request::segment(1)=='about-us' ? 'active' :null }}">
                                    <a href="{{url('about-us')}}">
                                        About Us              </a>
                                </li>
                                <li class="{{ Request::segment(1)=='tenant-and-cuisines' ? 'active' :null }}">
                                    <a href="{{url('tenant-and-cuisines/1')}}">
                                        Tenants &amp; Cuisines              </a>
                                </li>
                                <li class="{{ Request::segment(1)=='whats-on' ? 'active' :null }}">
                                    <a href="{{url('whats-on')}}">
                                        What's On              </a>
                                </li>
                                <li class="{{ Request::segment(1)=='event-spaces' ? 'active' :null }}">
                                    <a href="{{url('event-spaces')}}">
                                        Event Spaces              </a>
                                </li>
                                <li class="{{ Request::segment(1)=='media' ? 'active' : (Request::segment(1)=='media-tenant' ? 'active' :(Request::segment(1)=='media-video' ? 'active' :(Request::segment(1)=='media-social' ? 'active' :null) ) )   }}">    
                                 
                                    <a href="{{url('media')}}">
                                        Media              </a>
                                </li>
                                
                                <li class="{{ Request::segment(1)=='fs-store' ? 'active' :null }}">
                                    <a href="{{url('fs-store')}}">
                                        FS Store              </a>
                                </li>
                                <li class="{{ Request::segment(1)=='careers' ? 'active' :null }}">
                                    <a href="{{url('careers')}}">
                                        Careers              </a>
                                </li>
                                <li class="{{ Request::segment(1)=='contact-us' ? 'active' :null }}">
                                    <a href="{{url('contact-us')}}">
                                        Contact Us              </a>
                                </li>
                            </ul>
                        </div>
                        <div class="leftLogo col-md-1">
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </nav>
</div>