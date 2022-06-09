<!doctype html>
<html id="#top">
  <head>
    <meta charset="utf-8">
    @yield('title')
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/home.css" rel="stylesheet">
    <script src="js/articles_management.js" defer></script>
  </head>
  <body>
    <header class="blog-header">
      <nav class="nav-header">
        @yield('href_header')
        <form class="search-container" name="search">
          <input class="search-input" type="text" placeholder="Search">
        </form>
        <button class="usericon">
          <i class="zmdi zmdi-account-o zmdi-hc-3x" onclick="openNav()"></i>
        </button>
      </nav>
      
    </header>

    <main class="container">
      <div id="Modal" class="modal">
        <div class="modal-content">
        </div>
      </div>

      <div id="sidenav" class="sidenav">
        <a class="closebutton" onclick="closeNav()">&times;</a>
        <div class="info-sidenav">  
          <div class="user-logo">
            <img id="info" src="img/user-icon.png" alt="user-logo">
          </div>
          <span id='nickname'>{{ Session::get('username'); }}</span> 
          <a href="{{ route('logout') }}" class="no-decoration">
            <span>
              Log Out
              <i class="fa fa-sign-out" aria-hidden="true"></i>
            </span>
          </a>
          <a href="{{ route('view.delete') }}" class="no-decoration">
            <span>
              Delete account
              <i class="fa fa-trash-o" aria-hidden="true"></i>
            </span>
          </a>
        </div>
      </div>

      <div class="opacity"></div>


      <div class="articles-and-widget-container">
        <div class="widgets-container">
        @yield('widgets')
        </div>
        <div class="articles-container">

          @foreach($allArticles as $article)
            <article id="{{$article->id}}" data-id="{{$article->id}}" class="article">
              <img src="../storage/app/public/article_img/{{$article->img}}.jpg" alt="{{$article->type}} news">
              <h2 class="margin" id="title">
                {{$article->title}}
              </h2>
              <div class="article-text" id="paragraph+body">
                <span class="margin hidden" id="paragraph">
                  {{$article->heading}}
                </span>
                <span class="margin hidden" id="body">
                  {{$article->paragraph}}
                </span>
              </div>
              <a class="expand-post margin" id="{{$article->id}}">Continue reading...</a>
              <section class="buttonSection" id="{{$article->id}}">
                <span>{{$article->total_likes}}</span>
                <button class="like-dislike-button" id="{{$article->id}}" name="green">
                  <i class="fa fa-thumbs-up fa-lg" aria-hidden="true" id="1"></i>
                </button>
                <button class="like-dislike-button" id="{{$article->id}}" name="red">
                  <i class="fa fa-thumbs-down fa-lg" aria-hidden="true" id="1"></i>
                </button class="like-dislike-button" id="{{$article->id}}" name="red">
              </section>
            </article>

          @endforeach

        </div>
      </div>
    </main>
      
    <footer class="blog-footer">
      <div class="div-footer">
        <div id="homework">
          <a href="#">HW1</a>
        </div>

        <div class="footer-info">
          <ul class="ul-footer">
            <li>
              <a href="#">About Us</a>
            </li>
            <li>
              <a href="#">Contact Us</a>
            </li>
            <li>
              <a href="#">Legal</a>
            </li>
          </ul>
        </div>

        <div class="newsletter">
          <p>Subscribe to our Newsletter</p>
          <form id="subscribe-form">
            <input class="footer-news" placeholder="Enter your email">
            <button id="footer-sub">Submit</button>
          </form>
        </div>
      </div>
      <section class="at">@1000005950</section>

    </footer>
  </body>
</html>
