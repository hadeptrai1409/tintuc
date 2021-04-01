<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('frontend/css/tintuc.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <section class="news_sum">
           <header class="header">
            <div class="container">
                <div class="row">
                    <div class="col-1">
                        <div class="logo">
                             <img height="105px" class="logo-img" src="{{asset('frontend/images/logo-v2-1.png')}}" alt="">
                         </div>
                    </div>
                    <div class="col-11">
                        <div class="banner">
                             <img width="100%" class="banner-img" src="{{asset('frontend/images/Banner-Tonghoixd.jpg')}}" alt="">
                        </div>
                    </div>
                </div>

            </div>
      </header><!--end header-->
      <nav class="nav">
        <div class="container">
            <div class="menu">
                <ul>
            <li><a href="{{url('/')}}">Trang chủ</a></li>
            <li><a href="{{url('tintuc')}}">Tin tức</a></li>

            <li><a href="{{url('lienhe')}}">Liên hệ</a></li>
                    <li><a href="{{url('admin/danh-muc')}}">Admin</a></li>
            @if (Auth::check())
                <li class="login"><a href="user-login">Xin chào : {{Auth::user()->name}}</a></li>
                    <li class=""><a href="logout">Đăng xuất</a></li>
            @else

                     <li class="login"><a href="{{url('user-login')}}">Đăng nhập</a></li>

                     {{-- <span style="color: red">{{$email}}</span> --}}

                      <li class="register"><a href="register">Đăng ký</a></li>

            @endif
        </ul>
            </div>
        </div>
      </nav><!--end nav-->
      <section class="news">
          <div class="container">
              <div class="new-top">
                <div class="btn-news">Tin tức mới</div>
                <form class="search" action="search/" method="GET">
                    <input type="text" placeholder="Nhập nội dung tìm kiếm...">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </form>
            </div>

            <div class="row">
                <div class="col-lg-9">
                    <div class="new-title">
                         <h1 class="entry-title"><span>Tin được đề xuất</span></h1>
                        @foreach ($cates as $item)
                         <div class="row">
                             <div class="col-lg-4">
                                 <div class="news-detail-left">
                                     <img src="{{asset('upload/' . $item->image)}}" width="100%" height="100%" alt="">
                                 </div>
                             </div>
                             <div class="col-lg-8">
                                 <div class="news-title-right">
                                     <h3><a href="bai-viet/chi-tiet/{{$item->id}}">{{$item->title}}</a></h3>
                                     <div class="year">
                                <ul>
                                    <li><svg xmlns="http://www.w3.org/2000/svg" style="margin-top: -3px;" width="13" height="13" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                                <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                                <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                </svg>
                                <span>{{$item->updated_at}}</span>
                                </li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" style="margin-left: 20px; margin-top: -3px;" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                </svg>
                                <span>{{$item->luot_view}}</span></li>
                                </ul>
                                     </div>
                                     <br>
                                     <p class="three_dots">{{$item->content}}</p>
                                 </div>
                             </div>
                         </div>
                         <hr>
                         @endforeach
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="new-content-right">
                            <img src="images/1.PNG" width="100%" alt="">
                            <h5>Tin đọc nhiều nhất    <a href="#">-Tất cả- </a></h5>
                            <div class="list-news">
                                <ul>
                                    <li>
                                        @foreach ($show_date as $item)


                                        <div class="row">
                                            <div class="col-3 pd">
                                                <div class="view-item-left text-center">
                                                <span>{{$item->luot_view}}</span>
                                                <p>Lượt đọc</p>
                                            </div>
                                            </div>
                                            <div class="col-9 pd">
                                                 <div class="view-item-right">
                                                <a class="title-show" href="bai-viet/chi-tiet/{{$item->id}}"> {{$item->title}}</a>
                                            </div>
                                            </div>
                                        </div>
                                        <hr>
                                        @endforeach
                                    </li>


                                </ul>
                            </div>
                            <h5>Giới thiệu về hội</h5>
                            <div>
                                <img src="images/news8-300x200.png" width="100%" alt="">
                            </div>
                        </div>
                </div>
            </div>

            </div>
      </section>
      </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
