<div class="d-xl-flex justify-content-xl-center align-items-xl-center" id="img-form">

        <form class="form_search" action="chuyenbay/tiemkiem" method="POST">
            <div class="form-row" id="row-one">
                <div class="col-12 offset-xl-0 text-capitalize" data-aos="zoom-in-down" id="waper-search">
                    <h1 class="tag-mid">&nbsp;&nbsp;<i class="fa fa-plane"></i>&nbsp; Tìm chuyến bay</h1>
                    <div class="form-row">
                        <div class="col">
                            <div class="main-select">
                                <fieldset>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline1" class="custom-control-input" name="customRadioInline" checked="">
                                        <label class="custom-control-label" for="customRadioInline1">Một chiều</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline2" class="custom-control-input" name="customRadioInline">
                                        <label class="custom-control-label" for="customRadioInline2">Khứ hồi</label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-11 col-sm-12 col-md-6 col-xl-3 offset-xl-0">
                            <div class="form-group">
                                <label>Điểm Khởi hành</label>
                                <select class="js-example-placeholder-single form-control" name="from-fight">
                                    <option value="TPHCM">Hồ Chí Minh</option>
                                    <option value="HA NOI">Hà Nội</option>
                                    <option value="DA NANG">Đà Nẵng</option>
                                    <option value="PHU QUOC">Phú Quốc</option>
                                    <option value="NHA TRANG">Nha Trang</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-11 col-sm-12 col-md-6 col-xl-3">
                            <div class="form-group"><label>Điểm đến</label>
                                <select class="js-example-placeholder-single form-control" name="to-fight">
                                    <option value="HA NOI">Hà Nội</option>
                                    <option value="TPHCM">Hồ Chí Minh</option>
                                    <option value="DA NANG">Đà Nẵng</option>
                                    <option value="NHA TRANG">Nha Trang</option>
                                    <option value="HAI PHONG">Hải Phòng</option>
                                    <option value="PHU QUOC">Phú Quốc</option>
                                    <option value="CA MAU">Cà Mau</option>
                                    <option value="DA LAT">Đà Lạt</option>
                                    <option value="DIEN BIEN PHU">Điện Biên Phủ</option>
                                </select>
                            </div>
                            <div class="col">
                                <div class="form-group"><label>Ngày đi</label>
                                    <div class="input-group mb-3">
                                        <input class="form-control" type="text" id="datepicker" name="form-date" >
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group"><label>Ngày về</label>
                                <div class="input-group mb-3">
                                        <input class="form-control" type="text" id="datepicker-to" name="form-date" >
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-6 col-sm-12 col-md-6 col-xl-3">
                            <div class="form-group">
                                <label>Người lớn</label>
                                <div class="form-control">
                                    <div class="icon-img" id="khach">
                                        <img src="public/img/nguoilon.png" alt="">
                                        <label>
                                            <b>Người lớn</b>
                                            <p>>=12</p>
                                        </label>
                                    </div>
                                    <div class="input-group chung mb-3">
                                        <div class="input-group-prepend">
                                        <button onclick="minusform('nguoilon')" class="btn btn-outline-light text-dark" type="button">-</button>
                                        </div>
                                        <input type="text" class="form-control" onkeyup="testkey('nguoilon')" id="nguoilon"  aria-label="" value="1" name="nguoilon">
                                        <div class="input-group-append">
                                        <button class="btn btn-outline-light text-dark" type="button" onclick="plusform('nguoilon')">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-12 col-md-6 col-xl-3">
                            <div class="form-group">
                                <label>Trẻ em&nbsp;</label>
                                <div class="form-control">
                                    <div class="icon-img" id="khach">
                                        <img src="public/img/treem.png" alt="">
                                        <label>
                                            <b>Trẻ em</b>
                                            <p>< 12 tuổi</p>
                                        </label>
                                    </div>
                                    <div class="input-group chung mb-3">
                                        <div class="input-group-prepend">
                                        <button onclick="minusform('treem')" class="btn btn-outline-light text-dark" type="button">-</button>
                                        </div>
                                        <input type="text" class="form-control" onkeyup="testkey('treem')" id="treem"  aria-label="" value="1" name="treem">
                                        <div class="input-group-append">
                                        <button onclick="plusform('treem')" class="btn btn-outline-light text-dark" type="button">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Em bé</label>
                                <div class="form-control">
                                    <div class="icon-img" id="khach">
                                        <img src="public/img/embe.png" alt="">
                                        <label>
                                            <b>Em bé</b>
                                            <p>< 24 tháng</p>
                                        </label>
                                    </div>
                                    <div class="input-group chung mb-3">
                                        <div class="input-group-prepend">
                                        <button onclick="minusform('embe')" class="btn btn-outline-light text-dark" type="button">-</button>
                                        </div>
                                        <input type="text" class="form-control" onkeyup="testkey('embe')" id="embe"  aria-label="" value="1" name="embe">
                                        <div class="input-group-append">
                                        <button onclick="plusform('embe')" class="btn btn-outline-light text-dark" type="button">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Hạng ghế</label>
                                <div class="input-group mb-3 form-control">
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option value="1">Phổ thông</option>
                                        <option value="2">Thương gia</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 content-right"><button class="btn btn-primary form-btn" id="search" type="submit"><i class="fa fa-search"></i>&nbsp;Tìm chuyến bay</button></div>
                    </div>
                </div>
            </div>
        </form>
        </div>
        <div id="about-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xl-4 offset-xl-0 about-col">
                        <div class="jumbotron" id="about-left">
                            <h1>Đối tác hàng không</h1>
                            <p>
                                <br><br>
                                <strong>Đối tác hàng không nội địa và quốc tế</strong>
                                <br><br>Những đối tác hàng không toàn cầu sẽ chắp cánh đưa bạn đến mọi địa điểm trên thế giới.<br><br>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-8 offset-xl-0 about-col">
                        <div class="jumbotron col-right" id="about-right">
                            <img src="./public/img/logo%20fight/jet.png"><img src="./public/img/logo%20fight/vietnamari.png"><img src="./public/img/logo%20fight/vietjet.png"><img src="./public/img/logo%20fight/fight%202.png"><img src="./public/img/logo%20fight/fight3.png"><img src="./public/img/logo%20fight/fight.png">
                            <img src="./public/img/logo%20fight/scoot.jpg"><img src="./public/img/logo%20fight/fight4.png">
                            <img src="./public/img/logo%20fight/sok.png"><img src="./public/img/logo%20fight/vietnamari.png"><img src="./public/img/logo%20fight/thai.png"><img src="./public/img/logo%20fight/ari.png"><img src="./public/img/logo%20fight/fight%202.png"><img src="./public/img/logo%20fight/sok.png">
                            <img src="./public/img/logo%20fight/fight.png"><img src="./public/img/logo%20fight/vietjet.png"><img src="./public/img/logo%20fight/fight4.png">
                            <img src="./public/img/logo%20fight/sok.png"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row underline">
            <div class="col-xl-10 offset-xl-1 about-col">
                <hr>
            </div>
        </div>
        <div id="about-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xl-4 offset-xl-0 about-col">
                        <div class="jumbotron" id="about-left">
                            <h1>Đối tác thanh toán<br></h1>
                            <p><br><strong>Phương thức thanh toán an toàn và linh hoạt</strong><br><br>Những đối tác thanh toán đáng tin cậy của chúng tôi sẽ giúp cho bạn luôn an tâm thực hiện mọi giao dịch một cách thuận lợi nhất!<br><br></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-8 about-col">
                        <div class="jumbotron col-right"><img src="./public/img/logopayment/mastercard.png"><img src="./public/img/logopayment/one.png"><img src="./public/img/logopayment/payzo.jpg"><img src="./public/img/logopayment/saccome.png"><img src="./public/img/logopayment/teachcome.png"><img src="./public/img/logopayment/vietcomebank.png">
                            <img src="./public/img/logopayment/viettin.png"><img src="./public/img/logopayment/vietnampost.png">
                            <img src="./public/img/logopayment/vinmart.png"><img src="./public/img/logopayment/visa.png"><img src="./public/img/logopayment/acb.png"><img src="./public/img/logopayment/cricelk.png"><img src="./public/img/logopayment/jbd.png"><img src="./public/img/logopayment/cocomarrt.png">
                            <img src="./public/img/logopayment/bidv.png"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row underline">
            <div class="col-xl-10 offset-xl-1">
                <hr>
            </div>
        </div>
        <div class="features-boxed about-col" id="about-3">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center">Features </h2>
                    <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.</p>
                </div>
                <div class="row justify-content-center features">
                    <div class="col-sm-6 col-md-5 col-lg-4 item">
                        <div class="box"><i class="fa fa-map-marker icon"></i>
                            <h3 class="name">Works everywhere</h3>
                            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a class="learn-more" href="#">Learn more »</a></div>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-4 item">
                        <div class="box"><i class="fa fa-clock-o icon"></i>
                            <h3 class="name">Always available</h3>
                            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a class="learn-more" href="#">Learn more »</a></div>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-4 item">
                        <div class="box"><i class="fa fa-list-alt icon"></i>
                            <h3 class="name">Customizable </h3>
                            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a class="learn-more" href="#">Learn more »</a></div>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-4 item">
                        <div class="box"><i class="fa fa-leaf icon"></i>
                            <h3 class="name">Organic </h3>
                            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a class="learn-more" href="#">Learn more »</a></div>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-4 item">
                        <div class="box"><i class="fa fa-plane icon"></i>
                            <h3 class="name">Fast </h3>
                            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a class="learn-more" href="#">Learn more »</a></div>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-4 item">
                        <div class="box"><i class="fa fa-phone icon"></i>
                            <h3 class="name">Mobile-first</h3>
                            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a class="learn-more" href="#">Learn more »</a></div>
                    </div>
                </div>
            </div>
        </div>
