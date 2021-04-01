<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

    <link rel="stylesheet" href=" {{asset('frontend/owlcarousel/assets/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/owlcarousel/assets/owl.theme.default.min.css')}}">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="{{asset('frontend/owlcarousel/owl.carousel.min.js')}}"></script>
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

        <script >
            $(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
});

        </script>
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
            {{-- {{route('frontend.tintuc')}} --}}

            <li><a href="{{url('lienhe')}}">Liên hệ</a></li>
            <li><a href="{{url('admin/home')}}">Admin</a></li>





            @if (Auth::check())
                <li class="login"><a href="user-login">Xin chào : {{Auth::user()->name}}</a></li>
                    <li class=""><a href="logout">Đăng xuất</a></li>
            @else

                     <li class="login"><a href="user-login">Đăng nhập</a></li>

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
                <div class="btn-news">Trang chủ</div>
                <form class="search" action="search/" method="GET">
                    <input name="keyword" type="text" placeholder="Nhập nội dung tìm kiếm...">

                </form>
            </div>
            <div class="news-content">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-8">

                                <div class="news-content-img">
                                    <img width="100%" src=" {{asset('upload/' . $view_hight->image)}}" alt="">

                                    <a href="bai-viet/chi-tiet/{{$view_hight->id}}">{{$view_hight->title}}</a>
                                    <p class="view_hight">{{$view_hight->content}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="news-right">
                                    <img src="{{asset('frontend/images/news8.png')}}" width="100%" alt="">
                                     @foreach ($baiviet as $item)
                                <hr>
                                    <a href="bai-viet/chi-tiet/{{$item->id}}"><p>{{$item->title}}</p></a>
                                <hr>
                                @endforeach


                                </div>
                            </div>
                        </div>

                     <div class="owl-carousel">
                         @foreach ($baiviet as $bv)
                             <div class="list_news">
                                <img src="{{asset('upload/' . $bv->image)}}" alt="">
                                <a href="bai-viet/chi-tiet/{{$bv->id}}">{{$bv->title}}</a>
                            </div>
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
                <div class="row banner-content">
                    <div class="col-6">
                        <img class="img-banner" height="100%" src="{{asset('frontend/images/banner2.png')}}" width="100%" alt="">
                    </div>

                    <div class="col-6">
                        <img class="img-banner" height="100%" src=" {{asset('frontend/images/banner4.png')}}" width="100%" alt="">
                    </div>
                </div>

                    <div class="row">

                         @foreach ($danhmuc  as $item)
                    <div class="col-lg-4">
                        <div class="category-title">
                            <div class="category-title-one">
                                <h2 class="heading1"><a title="CLB doanh nghiệp" href="">{{$item->name}}</a></h2>
                            </div>
                            <div class="category-content">
                                <img src="{{asset('upload/' . $item->logo)}}" style="max-height:200px" width="100%" alt="">
                                <div class="entry-title">
                                    @foreach ($baiviet as $items)
                                    @if ($items->danh_muc_id == $item->id)
                                             <h3><a href="bai-viet/chi-tiet/{{$items->id}}">{{$items->title}}</a></h3>
                                                                             <div class="entry-description">
                                    <p class="cate_show">{{$items->content}}</p>
                                </div>

                                    @endif

                                      @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                      @endforeach
                </div>


            </div>
        </div>
      </section><!--end news-->
      <footer class="footer">
          <div class="container">
              <div class="row">
                  <div class="col-6">
                      <div class="footer-left">
                          <h4 class="widget-title">Hội xây dựng thành phố hà nội</h4>
                          <div class="textwidget">
                              <p>Địa chỉ: 01 Trịnh Văn Bô, Nam Từ Liêm , Hà Nội</p>
                              <p>Email: hathph09667@fpt.edu.vn</p>
                              <p>Tel: 0975869291</p>
                              <p>Website: www.hoixaydunghanoi.org.vn</p>
                          </div>
                          <div class="footer-icon">
                              <ul>
                              <li>
                                  <a href="#"><svg xmlns="http://www.w3.org/2000/svg" style="color: blue;" width="28" height="28" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                </svg></a>
                            </li>
                            <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" style="color: red;" width="28" height="28" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.122C.002 7.343.01 6.6.064 5.78l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
</svg></a></li>
                          </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="textwidget">
                          <p>Chịu trách nhiệm chính: Ông: Trịnh Đình Long Phó Chủ tịch kiêm Tổng thư ký Hội Xây dựng Hà Nội</p>
                          <p>Giấy phép thiết lập trang thông tin điện tử số….…/GP-STTTTcủa Sở TT&amp;TT ngày…/../2019</p>
                          <p>Yêu cầu ghi rõ nguồn: <a href="http://www.hoixaydunghanoi.org.vn">
                            <u>www.hoixaydunghanoi.org.vn </u></a>khi sử dụng thông tin từ website này</p>
                        </div>
                  </div>
              </div>
          </div>
      </footer>
     </section><!--end section-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
