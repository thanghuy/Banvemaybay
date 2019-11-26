<div class="img-banner-product"><img src="./public/img/bannesprodurt.png"></div>
    <div class="d-xl-flex" id="about-product">
        <div class="container content-product">
            <div class="row">
                <div class="col-md-12 col-xl-10 offset-xl-1" id="about-search">
                    <h4 class="text-left"><?php echo changbay::getFullName($_SESSION['timkiem']['diemdi']) ?> - Sân bay <?php echo $data['sanbaydi'] ?>&nbsp;
                        <i class="fa fa-long-arrow-right">    
                        </i>&nbsp;<?php echo changbay::getFullName($_SESSION['timkiem']['diemden']) ?> - Sân bay <?php echo $data['sanbayden'] ?>
                    </h4>
                    <p>Thứ 2 , <?php echo $_SESSION['timkiem']['ngaydi'] ?></p>
                    <p id="about-people"><?php echo $_SESSION['timkiem']['songuoi'] ?> &nbsp;| &nbsp;<?php echo changbay::gethangghe($_SESSION['timkiem']['HangGhe']) ?><button class="btn btn-primary" id="btn-search" type="button">Tìm kiếm khác</button></p>
                </div>
            </div>
            <div class="row" id="main-product-search">
                <div class="col-md-12 col-xl-10 offset-xl-1" id="change-search">
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
                            </div>
                            <div class="col">
                                        <div class="form-group"><label>Ngày đi</label>
                                            <div class="input-group mb-3">
                                                <input class="form-control" type="text" id="datepicker" onchange="myFunction()" name="from-date" >
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <div class="col">
                                <div class="form-group"><label>Ngày về</label>
                                <div class="input-group mb-3">
                                        <input class="form-control" type="text" id="datepicker-to" name="from-date" >
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
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
                                                <input type="text" class="form-control" onkeyup="testkey('treem')" id="treem"  aria-label="" value="0" name="treem">
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
                                                <input type="text" class="form-control" onkeyup="testkey('embe')" id="embe"  aria-label="" value="0" name="embe">
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
                                            <select class="custom-select" name="hangghe" id="inputGroupSelect01">
                                                <option value="1">Phổ thông</option>
                                                <option value="2">Thương gia</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 content-right"><button name="timkiemmain" class="btn btn-primary form-btn" id="search" type="submit"><i class="fa fa-search"></i>&nbsp;Tìm chuyến bay</button></div>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            
            <form class="form_search" action="chuyenbay/loc" method="POST" id="search-advanced">
                <div class="row" id="search-advanced">
                    <div class="col-xl-1 offset-xl-1">
                        <span>Bộ lọc :</span>
                    </div>
                    <div class="col-md-12 col-xl-2 offset-xl-0">
                        <select name="filter_diemden">
                            <optgroup label="Chọn điểm đến">
                                <option value="" hidden>Điểm đến</option>
                                <option value="HA NOI">Hà Nội</option>
                                <option value="TPHCM">Hồ Chí Minh</option>
                                <option value="DA NANG">Đà nẵng</option>
                                <option value="NHA TRANG">Nha Trang</option>
                                <option value="HAI PHONG">Hải Phòng</option>
                                <option value="PHU QUOC">Phú Quốc</option>
                                <option value="CA MAU">Cà Mau</option>
                                <option value="DA LAT">Đà Lạt</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-xl-2">
                        <select name="filter_hang">
                            <optgroup label="Chọn hãng hàng không">
                                <option value="0" hidden >Hãng</option>
                                <option value="1">VietJet Air</option>
                                <option value="2">VietNam Airlines</option>
                                <option value="3">Jetstar Pacific Airlines</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-xl-2">
                        <select name="filter_thoigian">
                            <optgroup label="Chọn thời gian bay">
                                <option value="0" hidden >Thời gian</option>
                                <option value="1">00.00 - 06.00</option>
                                <option value="2">06.00 - 12.00</option>
                                <option value="3">12.00 - 18.00</option>
                                <option value="4">18.00 - 00.00</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-xl-2 offset-xl-0">
                        <select name="filter_gia">
                            <optgroup label="Chọn giá">
                                <option value="0" hidden >Giá</option>
                                <option value="1">&lt 500.000 VND</option>
                                <option value="2">&lt 750.000 VND</option>
                                <option value="3">&lt 1.000.000 VND</option>
                                <option value="4">&lt 1.250.000 VND</option>
                                <option value="5">&lt 1.500.000 VND</option>
                                <option value="6">&lt 1.750.000 VND</option>
                                <option value="7">&lt 2.000.000 VND</option>
                                <option value="8">&gt 2.000.000 VND</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-xl-2 offset-xl-0">
                        <button type="submit" form="search-advanced">Lọc</button>
                    </div>
                </div>
            </form>

            <div class="row">
                <div class="col-xl-10 offset-xl-1" id="product-item">
                    <h6>Kết quả :&nbsp;</h6>
                </div>
            </div>
            <div class="row" id="demo">
			<?php
			$dsChuyenBay = $data['dsChuyenBay'];
			$numchuyenbay = count($dsChuyenBay);
			
			if ($numchuyenbay == 0)
			{
				echo "Khong tim thay ket qua!";
			} else {
				for ($i=0; $i<$numchuyenbay; $i++) {
                    $cb = new changbay();
                    $cb->getGia($dsChuyenBay[$i]['Gia'],$dsChuyenBay[$i]['GiaHang'],$_SESSION['timkiem']['NguoiLon'],$_SESSION['timkiem']['TreEm']);
			?>
                <div class="col-xl-10 offset-xl-1 item-product">
                    <div class="row">
                        <div class="col">
                            <img class="img-item" src="<?php echo $dsChuyenBay[$i]['HinhAnh'] ?>">
                            <label>&nbsp;<?php echo $dsChuyenBay[$i]['Hang'] ?></label>
                            <div class="show-detail">
                                <span id="idfight<?php echo $dsChuyenBay[$i]['ID_ChuyenBay'] ?>" class="bay" onclick="chitietcb(<?php echo $dsChuyenBay[$i]['ID_ChuyenBay']?>)">Chi tiết chuyến bay</span>
                                <hr class="show-1 <?php echo $dsChuyenBay[$i]['ID_ChuyenBay'] ?>">
                            </div>
                        </div>
                        <div class="col">
                            <label class="icon-to-fight"><?php echo $dsChuyenBay[$i]['ThoiGianDi'] ?>
                                <i class="fa fa-plane"></i>
                            </label>
                            <p><?php echo changbay::getFullName($_SESSION['timkiem']['diemdi']) ?></p><span></span>
                            <div class="show-detail ve">
                                <span id="iddetail<?php echo $dsChuyenBay[$i]['ID_ChuyenBay'] ?>" class="ve-1" onclick="chitietve(<?php echo $dsChuyenBay[$i]['ID_ChuyenBay']?>)">Chi tiết vé</span>
                                <hr class="show-2 <?php echo $dsChuyenBay[$i]['ID_ChuyenBay'] ?>">
                            </div>
                        </div>
                        <div class="col"><label><?php echo $dsChuyenBay[$i]['ThoiGianDen'] ?></label>
                            <p><?php echo changbay::getFullName($_SESSION['timkiem']['diemden']) ?></p>
                        </div>
                        <div class="col-xl-2">
                            <label>2h 10m</label>
                            <p>Bay thẳng</p>
                        </div>
                        <div class="col">
                            <span class="price"><?php echo $cb->gia1Ve() ?>&nbsp;</span>
                            <label class="guest">/khách</label>
                            <?php
                                $func = "";
                                if ($data['khuhoi'])
                                    $func = "chuyenbay/chontrang2/1";
                                else
                                    $func = "thongtindatve/thongtin";
                                // <input type="hidden" name="machuyenbay" value="<?php echo $dsChuyenBay[$i]['ID_ChuyenBay']
                            ?>
                            <form action="<?php echo $func ?>" method="POST">
                                <input type="hidden" name="machuyenbay" value="16">
                                <button class="btn btn-primary select-fight" type="submit">Chọn chuyến bay</button>
                            </form>
                        </div>
                    </div>
                    <div class="row detail-product" id="detail-fight<?php echo $dsChuyenBay[$i]['ID_ChuyenBay'] ?>">
                        <div class="col-xl-3">
                            <div>
                                <img class="img-item" src="<?php echo $dsChuyenBay[$i]['HinhAnh'] ?>">
                            </div>
                            <div>
                                <span><?php echo $dsChuyenBay[$i]['Hang']." ".$dsChuyenBay[$i]['MaMayBay'] ?></span>
                                <span>&nbsp; <?php echo changbay::gethangghe($_SESSION['timkiem']['HangGhe']) ?></span>
                            </div>
                        </div>
                        <div class="col-xl-3 detail-item">
                            <div class="time-go"><span class="form-to">Khởi hành&nbsp;</span></div>
                            <div>
                                <span>Thời gian : &nbsp;</span>
                                <span class="highlight"><?php echo $dsChuyenBay[$i]['ThoiGianDi'] ?></span>
                            </div>
                            <div>
                                <span class="highlight">Ngày <?php echo $dsChuyenBay[$i]['NgayDi'] ?>&nbsp;</span>
                            </div>
                            <div>
                                <span class="time-fight"><i class="fa fa-clock-o"></i>&nbsp;2h10m(Thời gian bay)</span>
                            </div>
                            <div>
                                <span class="form-to">Điểm đến</span>
                            </div>
                            <div>
                                <span>&nbsp;Thời gian :&nbsp;</span>
                                <span class="highlight"><?php echo $dsChuyenBay[$i]['ThoiGianDen'] ?></span>
                            </div>
                            <div class="time-end">
                                <span class="highlight">Ngày <?php echo $dsChuyenBay[$i]['NgayDi'] ?></span>
                            </div>
                        </div>
                        <div class="col detail-item">
                            <div class="time-go">
                                <span class="form-to">Từ <?php echo changbay::getFullName($_SESSION['timkiem']['diemdi']) ?></span>
                            </div>
                            <div><span> <?php echo changbay::getTP($_SESSION['timkiem']['diemdi']) ?></span></div>
                            <div>
                                <span>Sân bay :&nbsp;</span><span class="highlight"><?php echo $data['sanbaydi'] ?></span>
                            </div>
                            <div><span class="time-fight"><i class="fa fa-long-arrow-down"></i></span></div>
                            <div>
                                <span class="form-to">Đến <?php echo changbay::getFullName($_SESSION['timkiem']['diemden']) ?></span>
                            </div>
                            <div><span> <?php echo changbay::getTP($_SESSION['timkiem']['diemden']) ?></span></div>
                            <div class="time-end"><span>Sân bay :&nbsp;</span>
                                <span class="highlight"><?php echo $data['sanbayden'] ?><br><br>
                                </span>
                            </div>
                            <div></div>
                        </div>
                        <div class="col-xl-3">
                            <div class="time-go">
                                <p>Máy bay Airbus A320</p>
                            </div>
                            <div>
                                <p>Khoảng cách ghế ( 29 inch )</p>
                            </div>
                            <div>
                                <p>Hành lý xách tay ( 7kg )&nbsp;</p>
                            </div>
                        </div>
                    </div>
                    <div class="row detail-ticker" id="ticker<?php echo $dsChuyenBay[$i]['ID_ChuyenBay'] ?>">
                        <div class="col-xl-4">
                            <div>
                                <img class="img-item" src="<?php echo $dsChuyenBay[$i]['HinhAnh'] ?>">
                                <span>&nbsp;<?php echo $dsChuyenBay[$i]['Hang'] ?></span>
                            </div>
                            <div><span class="form-to">&nbsp;<?php echo changbay::getTP($_SESSION['timkiem']['diemdi']) ?> - <?php echo changbay::getTP($_SESSION['timkiem']['diemden']) ?></span></div>
                            <div><span>&nbsp;<?php echo changbay::gethangghe($_SESSION['timkiem']['HangGhe']) ?></span></div>
                        </div>
                        <div class="col detail-item">
                            <div class="time-go"><span><i class="fa fa-ban"></i>&nbsp;Không hoàn tiền</span></div>
                            <div>
                                <p><i class="fa fa-check-circle-o"></i>&nbsp;Đăng nhập để nhận điểm thưởng khi đặt chỗ.</p>
                            </div>
                        </div>
                        <div class="col detail-item">
                            <div class="time-go"><span>Vé người lớn cơ bản (x<?php echo $_SESSION['timkiem']['NguoiLon'] ?>)&nbsp;</span></div>
                            <div><span>Vé trẻ em cơ bản (x<?php echo $_SESSION['timkiem']['TreEm'] ?>)&nbsp;</span></div>
                            <div><span>Vé em bé cơ bản (x<?php echo $_SESSION['timkiem']['EmBe'] ?>)&nbsp;</span></div>
                            <div><span class="thue">Thuế&nbsp;</span></div>
                            <div class="time-end"><span class="total-money">Thành tiền &nbsp;</span></div>
                        </div>
                        <div class="col detail-item">
                            <div class="time-go"><span class="price"><?php echo $cb->giaNguoilon() ?></span></div>
                            <div><span class="price"><?php echo $cb->giaTreem() ?></span></div>
                            <div><span class="price">0 VND</span></div>
                            <div><span class="thue">Đã bao gồm</span></div>
                            <div class="time-end"><span class="price"><?php echo $cb->giatong() ?></span></div>
                        </div>
                    </div>
                </div>
			<?php
			}} // end for, end else
			?>
            </div>
            <div class="row">
                <div class="col-xl-10 offset-xl-5">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php
                            if(( $data['trang'] > 1) && ($data['tongtrang'] > 1)){
                                $a = "chuyenbay/chontrang/".(string)($data['trang']-1);
                                echo '<li class="page-item">
                                <a class="page-link" href="'.$a.'" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                </li>';
                                // echo '<li class="page-item">
                                // <a class="page-link" id="x" aria-label="Previous">
                                //     <span aria-hidden="true">&laquo;</span>
                                //     <span class="sr-only">Previous</span>
                                // </a>
                                // </li>';
                                // echo "<script>
                                // $(`#x`).attr(`onclick`,`phantrangAjax('".$data['diemdi']."','".$data['diemden']."',".$data['ngaydi'].",".$data['songuoi'].",".$data['trang'].")`);
                                // </script>";
                            }
                            for ($i = 0; $i < $data['tongtrang']; $i++)
                            {
                                if ($i + 1 == $data['trang']) {
                                    $page = $i+1;
                                    echo '<li class="page-item active"><a class="page-link" href="#">'.$page.'</a></li>';
                                } else {
                                    $s = "<a class='page-link' href=\"chuyenbay/chontrang/".(string)($i+1);
                                    $s .= "\">".(string)($i+1)."</a>";
                                    echo '<li class="page-item">'.$s.'</li>';
                                }
                            }
                            if(( $data['trang'] < $data['tongtrang']) && ($data['tongtrang'] > 1)){
                                $a = "chuyenbay/chontrang/".(string)($data['trang']+1);
                                echo '<li class="page-item">
                                <a class="page-link" href="'.$a.'" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                                </li>';
                            }
                        ?>
                    </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>