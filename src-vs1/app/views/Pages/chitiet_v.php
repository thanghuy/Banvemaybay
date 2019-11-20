<div>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" id="menu" style="/*border-top: 0px;*//*border-bottom: 1px solid blue !improtant;*/background-color: #05779c;">
            <div class="container"><a class="navbar-brand" data-bs-hover-animate="rubberBand" href="#" style="color: rgb(72,63,63);"><img src="assets/img/logo-white.png"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse menu-nav" id="navcol-1" style="color: rgb(36,133,149);font-family: Alegreya, serif;">
                    <ul class="nav navbar-nav ml-auto" id="frames-menu" style="font-size: 18px;">
                        <li class="nav-item one" role="presentation"><a class="nav-link active">Trang chủ</a></li>
                        <li class="nav-item two" role="presentation"><a class="nav-link" href="#">Khuyến Mãi</a></li>
                        <li class="nav-item three" role="presentation"><a class="nav-link" href="#">Giới Thiệu</a></li>
                        <li class="nav-item" role="presentation"></li>
                        <li class="nav-item" role="presentation"><a class="nav-link four" href="#">Quản lý đặt chỗ</a></li>
                        <li class="dropdown nav-item five"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" id="scroll" href="#">Vé máy bay</a>
                            <div class="dropdown-menu" role="menu" style="background-color: #ffffff;"><a class="dropdown-item" role="presentation" href="#" style="color: rgb(1,129,247);">Vé Nội Địa&nbsp;</a><a class="dropdown-item" role="presentation" href="#" style="color: rgb(1,129,247);">Vé Quốc Tế</a><a class="dropdown-item"
                                    role="presentation" href="#" style="color: rgb(1,129,247);">Vé Theo Hãng</a></div>
                        </li>
                    </ul><span class="ml-auto navbar-text actions" style="width: 230px;"> <button class="btn btn-primary float-left" id="login" type="button" style="background-color: rgb(245,247,249);color: rgb(0,0,0);"><i class="fa fa-user" style="font-size: 20px;color: rgb(69,168,224);"></i>&nbsp;Đăng nhập&nbsp;<i class="fa fa-angle-down"></i></button><a class="btn btn-light float-right action-button" role="button" href="#" style="background-color: rgb(23,129,227);">Đăng ký</a></span></div>
    </div>
    </nav>
    </div>
    <div>
        <div class="container">
            <form method="GET" action="chitiet/KT">
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="col-md-3">
                                <div class="jumbotron">
                                    <section id="vertical-menu">
                                        <div class="list-group"><a class="list-group-item" href="#"> <i class="fa fa-user fa-fw"></i>&nbsp;Thông tin khách hàng</a><a class="list-group-item" href="#"> <i class="fa fa-list-alt fa-fw"></i>&nbsp;Xem đơn hàng</a><a class="list-group-item"
                                                href="#"> <i class="fa fa-sign-out fa-fw"></i>&nbsp;Đăng xuất</a></div>
                                    </section>
                                </div>
                            </div>
                            <div class="col">
                                <form>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="jumbotron">
                                                <div class="form-row">
                                                    <div class="col">
                                                        <p>Họ và tên</p>
                                                    </div>
                                                    <div class="col">
                                                        <p>Địa chỉ email</p>
                                                    </div>
                                                    <div class="col">
                                                        <p>Số điện thoại</p>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3"><input value="<?php echo $_SESSION['account']['TenKH']?>" name="tenKH" class="form-control" type="text"></div>
                                                    <div class="col-md-3 offset-md-1"><input value="<?php echo $_SESSION['account']['Email']?>" name="email" class="form-control" type="email"></div>
                                                    <div class="col-md-3 offset-md-1"><input value="<?php echo $_SESSION['account']['SDT']?>" name="sdt" class="form-control" type="tel"></div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3">
                                                        <p></p>
                                                    </div>
                                                    <div class="col-md-3 offset-md-1">
                                                        <p></p>
                                                    </div>
                                                    <div class="col-md-3 offset-md-1">
                                                        <p></p>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3">
                                                        <p></p>
                                                    </div>
                                                    <div class="col-md-3 offset-md-1">
                                                        <p></p>
                                                    </div>
                                                    <div class="col-md-3 offset-md-1">
                                                        <p></p>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3">
                                                        <p>Ngày sinh</p>
                                                    </div>
                                                    <div class="col-md-3 offset-md-1">
                                                        <p>CMND</p>
                                                    </div>
                                                    <div class="col-md-3 offset-md-1">
                                                        <p>Giới tính</p>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3"><input value="<?php echo $_SESSION['account']['NgaySinh']?>" name="ngaysinh" class="form-control" type="date"></div>
                                                    <div class="col-md-3 offset-md-1"><input value="<?php echo $_SESSION['account']['CMND']?>" name="CMND" class="form-control" type="number"></div>
                                                    <div class="col-md-3 offset-md-1"><select name=gt class="form-control"><option value="1" <?php if($_SESSION['account']['GioiTinh']==1) echo "selected" ?> >Nam</option><option <?php if($_SESSION['account']['GioiTinh']==0) echo "selected" ?> value="0">Nữ</option></select></div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3">
                                                        <p></p>
                                                    </div>
                                                    <div class="col-md-3 offset-md-1">
                                                        <p></p>
                                                    </div>
                                                    <div class="col-md-3 offset-md-1">
                                                        <p></p>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3">
                                                        <p></p>
                                                    </div>
                                                    <div class="col-md-3 offset-md-1">
                                                        <p></p><button class="btn btn-primary"name="thongtinKH" type="submit">Lưu thay đổi</button></div>
                                                    <div class="col-md-3 offset-md-1">
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>