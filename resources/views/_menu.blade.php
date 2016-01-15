                
<div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><span>N</span>extBridge</a>
                </div>        
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/">Home</a></li>
                         @if (Auth::check())
                             <li><a href="/dashboard">Dashboard</a></li>
                             <li><a href="/auth/logout">logout</a></li>
                             @else
                             <li><a href="/auth/login">login</a></li>
                            @endif
                       
                        
                        <li><a href="/signup">Register</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>