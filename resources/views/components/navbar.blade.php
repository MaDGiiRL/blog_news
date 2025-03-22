 <!-- Top Banner -->
 <div class="top-banner">
     Subscribe to our Newsletter For New & latest Blogs and Resources <a href="#" class="text-warning">↗</a>
 </div>

 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-dark">
     <div class="container">
         <a class="navbar-brand" href="{{ route('index') }}">
             <img src="/images/Logo.png" alt="FutureTech Logo">
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav ms-auto">
                 <li class="nav-item">
                     <a class="nav-link active" href="{{ route('index') }}">Home</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('news.top_usa') }}">Top USA Headlines</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('news.tech') }}">Tech News</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('news.apple') }}">Apple News</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('news.bitcoin') }}">Bitcoin News</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('news.sources') }}">News by Country</a>
                 </li>
             </ul>
             <a href="#" class="btn btn-custom ms-3">Contact Us</a>
         </div>
     </div>
 </nav>