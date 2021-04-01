<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('frontend/css/lienhe.css')}}">

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
                <form class="search" action="">
                    <input type="text" placeholder="Nhập nội dung tìm kiếm...">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </form>
            </div>
            <div class="new-layout">
                <h1 class="entry-title"><span>Liên hệ</span></h1>
                <div class="entry-content">
                    <p><span style="color: #d90404; font-size: 14pt;">
                <strong>Hội xây dựng thành phố Hà Nội</strong>
                </span>
                </p>
                <p>Giấy phép thiết lập trang thông tin điện tử số….…/GP-STTTTcủa Sở TT&amp;TT ngày…/../2019</p>
                <p>Địa chỉ: 45 đường Nguyên Hồng, quận Đống Đa, thành phố Hà Nội</p>
                <p>Email: <a href="hoixdhn@gmail.com"><u>hoixdhn@gmail.com</u></a></p>
                <p>Tel: 02437763430</p><p>Website: www.hoixaydunghanoi.org.vn</p>
                <div class="row"><div class="col-sm-6"><h3 style="font-weight: bold;margin-bottom: 10px;">Gửi thông tin liên hệ đến Tạp chí</h3>
                <div role="form" class="wpcf7" id="wpcf7-f8-p27-o1" lang="vi" dir="ltr"><div class="screen-reader-response"></div>
                <form action="" method="post" class="wpcf7-form" novalidate="novalidate"><div style="display: none;">
                    <input type="hidden" name="_wpcf7" value="8" autocomplete="off">
                    <input type="hidden" name="_wpcf7_version" value="5.1.6" autocomplete="off">
                    <input type="hidden" name="_wpcf7_locale" value="vi" autocomplete="off">
                     <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f8-p27-o1" autocomplete="off">
                      <input type="hidden" name="_wpcf7_container_post" value="27" autocomplete="off"></div>
                      <p><span class="wpcf7-form-control-wrap hoten">
                          <input type="text" name="hoten" value="" size="40" class="wpcf7-form-control wpcf7-text hoten" aria-invalid="false" placeholder="Tên" autocomplete="off"></span></p><p><span class="wpcf7-form-control-wrap tel"><input type="tel" name="tel" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel tel" aria-invalid="false" placeholder="Số điện thoại" autocomplete="off"></span></p><p><span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email email" aria-invalid="false" placeholder="Email" autocomplete="off"></span></p><p><span class="wpcf7-form-control-wrap bophan"><input type="text" name="bophan" value="" size="40" class="wpcf7-form-control wpcf7-text bophan" aria-invalid="false" placeholder="Gửi đến bộ phận" autocomplete="off"></span></p><p><span class="wpcf7-form-control-wrap textarea">
                              <textarea name="textarea" cols="43" rows="7" class="wpcf7-form-control wpcf7-textarea noidung" aria-invalid="false" placeholder="Nội dung"></textarea></span></p><p>
                              <input type="submit" value="Gửi thông tin" class="wpcf7-form-control wpcf7-submit" autocomplete="off">
                            <span class="ajax-loader"></span>
                        </p>
                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                </form>
                </div>
                </div>
                <div class="col-sm-6"><h3 style="    font-weight: bold;
                margin-bottom: 10px;">Bản đồ google map</h3>
                <div class="embed-responsive embed-responsive-21by9 mb-5">
                <iframe loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.3779899033207!2d105.80943521429765!3d21.01755649353805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab64031d4f5b%3A0x2d9c65c4e4c14420!2zNDUgTmd1ecOqbiBI4buTbmcsIEzDoW5nIEjhuqEsIMSQ4buRbmcgxJBhLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1577346990422!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" data-rocket-lazyload="fitvidscompatible" data-lazy-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.3779899033207!2d105.80943521429765!3d21.01755649353805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab64031d4f5b%3A0x2d9c65c4e4c14420!2zNDUgTmd1ecOqbiBI4buTbmcsIEzDoW5nIEjhuqEsIMSQ4buRbmcgxJBhLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1577346990422!5m2!1svi!2s" class="lazyloaded" data-was-processed="true"></iframe><noscript><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.3779899033207!2d105.80943521429765!3d21.01755649353805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab64031d4f5b%3A0x2d9c65c4e4c14420!2zNDUgTmd1ecOqbiBI4buTbmcsIEzDoW5nIEjhuqEsIMSQ4buRbmcgxJBhLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1577346990422!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></noscript>
            </div></div></div></div>
            </div>
            </div>
      </section>
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
      </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
