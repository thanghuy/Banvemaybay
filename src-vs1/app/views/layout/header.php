<div id="header" style="position: absolute">
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" id="menu">
                <div class="container">
                    <a class="navbar-brand" id="logo" data-bs-hover-animate="rubberBand" href="#">
                        <img src="./public/img/logo-white.png">
                    </a>
                    <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse menu-nav" id="navcol-1">
                        <ul class="nav navbar-nav ml-auto" id="frames-menu">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link action" href="#" id="trangchu">Trang chủ</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href="#">Khuyến Mãi</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href="#">Giới Thiệu</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href="#">Quản lý đặt chỗ</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link"  href="chuyenbay/ChuyenBay">Vé máy bay</a>
                            </li>
                        </ul>
                        <span class="ml-auto navbar-text actions" style="width: 230px;">
                         <button class="btn btn-primary float-left" id="login" type="button" data-toggle="modal" data-target="#exampleModalCenter" style="background-color: rgb(245,247,249);color: rgb(0,0,0);" ><i class="fa fa-user" style="font-size: 20px;color: rgb(69,168,224);"></i>&nbsp;<?php
                        if(isset($_SESSION['account'])){

                            echo $_SESSION['account']['TenKH'];
                        }
                        else {
                            echo "Đăng nhập";
                        }
                         ?>&nbsp;
                         </button>
                            <a class="btn btn-light float-right action-button" role="button" href="#" style="background-color: rgb(23,129,227);" data-toggle="modal" data-target="#dangki">Đăng ký</a>
                            </span>
                    </div>
                </div>
            </nav>
        </div>
        <div class="clear"></div>