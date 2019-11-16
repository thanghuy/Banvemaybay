<div class="img-banner-product"><img src="./public/img/bannesprodurt.png"></div>
    <div class="d-xl-flex" id="about-product">
        <div class="container content-product">
            <div class="row">
                <div class="col-md-12 col-xl-10 offset-xl-1" id="about-search">
                    <h4 class="text-left">Hà Nội (HAN) - Sân bay nội bài&nbsp;
                        <i class="fa fa-long-arrow-right">    
                        </i>&nbsp;TP HCM(SGN) - Sân bay tân sơn nhất
                    </h4>
                    <p>Thứ 2 , 27 tháng 10 2019</p>
                    <p id="about-people">1 người &nbsp;| &nbsp;Phổ thông<button class="btn btn-primary" id="btn-search" type="button">Tìm kiếm khác</button></p>
                </div>
            </div>
            <div class="row" id="search-advanced">
                <div class="col-xl-1 offset-xl-1">
                    <span>Bộ lọc :</span>
                </div>
                <div class="col-md-12 col-xl-2 offset-xl-0">
                    <select>
                        <optgroup label="Chọn điểm đến">
                            <option value="1" hidden>Điểm đến</option>
                            <option value="13">This is item 2</option>
                            <option value="14">This is item 3</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-xl-2">
                    <select>
                        <optgroup label="Chọn hãng hàng không">
                            <option value="" hidden >Hãng</option>
                            <option value="13">This is item 2</option>
                            <option value="14">This is item 3</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-xl-2">
                    <select>
                        <optgroup label="Chọn thời gian bay">
                            <option value="" hidden >Thời gian</option>
                            <option value="13">This is item 2</option>
                            <option value="14">This is item 3</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-xl-2 offset-xl-0">
                    <select>
                        <optgroup label="Chọn giá">
                            <option value="" hidden >Giá</option>
                            <option value="13">This is item 2</option>
                            <option value="14">This is item 3</option>
                        </optgroup>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-10 offset-xl-1" id="product-item">
                    <h6>Kết quả :&nbsp;</h6>
                </div>
            </div>
            <div class="row">
			<?php
			$dsChuyenBay = $data['dsChuyenBay'];
			$numchuyenbay = count($dsChuyenBay);
			
			if ($numchuyenbay == 0)
			{
				echo "Khong tim thay ket qua!";
			} else {
				for ($i=0; $i<$numchuyenbay; $i++) {
			?>
                <div class="col-xl-10 offset-xl-1 item-product">
                    <div class="row">
                        <div class="col"><img class="img-item" src="./public/img/logo%20fight/vietjet.png"><label>&nbsp;VietJet Air</label>
                            <div class="show-detail">
                                <span id="idfight" class="bay">Chi tiết chuyến bay</span>
                                <hr class="show-1">
                            </div>
                        </div>
                        <div class="col"><label class="icon-to-fight"><?php echo $dsChuyenBay[$i]['ThoiGianDi'] ?><i class="fa fa-plane"></i></label>
                            <p><?php echo changbay::getFullName($data['diemdi']) ?></p><span></span>
                            <div class="show-detail ve">
                                <span id="iddetail" class="ve-1">Chi tiết vé</span>
                                <hr class="show-2">
                            </div>
                        </div>
                        <div class="col"><label><?php echo $dsChuyenBay[$i]['ThoiGianDen'] ?></label>
                            <p><?php echo changbay::getFullName($data['diemden']) ?></p>
                        </div>
                        <div class="col-xl-2"><label>2h 10m</label>
                            <p>Bay thẳng</p>
                        </div>
                        <div class="col"><span class="price">1.194.308 VND&nbsp;</span><label class="guest">/khách</label>
                            <form action="thongtindatve/thongtin">
                                <button class="btn btn-primary select-fight" type="submit">Chọn chuyến bay</button>
                            </form>
                        </div>
                    </div>
                    <div class="row detail-product" id="detail-fight">
                        <div class="col-xl-3">
                            <div><img class="img-item" src="./public/img/logo%20fight/vietjet.png"></div>
                            <div><span>VietJet BL-709</span><span>&nbsp; Phổ thông</span></div>
                        </div>
                        <div class="col-xl-3 detail-item">
                            <div class="time-go"><span class="form-to">Khởi hành&nbsp;</span></div>
                            <div><span>Thời gian : &nbsp;</span><span class="highlight">14 : 20</span></div>
                            <div><span class="highlight">Ngày 27 th 10 2019&nbsp;</span></div>
                            <div><span class="time-fight"><i class="fa fa-clock-o"></i>&nbsp;2h10m(Thời gian bay)</span></div>
                            <div><span class="form-to">Điểm đến</span></div>
                            <div><span>&nbsp;Thời gian :&nbsp;</span><span class="highlight">16 : 20</span></div>
                            <div class="time-end"><span class="highlight">Ngày 27 th 10 2019</span></div>
                        </div>
                        <div class="col detail-item">
                            <div class="time-go"><span class="form-to">Từ TP Hà Nội</span></div>
                            <div><span>Hà Nội (HAN)</span></div>
                            <div><span>Sân bay :&nbsp;</span><span class="highlight">Nội Bài</span></div>
                            <div><span class="time-fight"><i class="fa fa-long-arrow-down"></i></span></div>
                            <div><span class="form-to">Đến TP Hồ Chí Minh</span></div>
                            <div><span>TP HCM (SGN)</span></div>
                            <div class="time-end"><span>Sân bay :&nbsp;</span><span class="highlight">Tân Sơn Nhất<br><br></span></div>
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
                    <div class="row detail-ticker" id="ticker">
                        <div class="col-xl-4">
                            <div><img class="img-item" src="./public/img/logo%20fight/vietjet.png"><span>&nbsp;VietJet Air</span></div>
                            <div><span class="form-to">&nbsp;Hà Nội (HAN) - TP HCM (SGN)</span></div>
                            <div><span>&nbsp;Phổ thông</span></div>
                        </div>
                        <div class="col detail-item">
                            <div class="time-go"><span><i class="fa fa-ban"></i>&nbsp;Không hoàn tiền</span></div>
                            <div>
                                <p><i class="fa fa-check-circle-o"></i>&nbsp;Đăng nhập để nhận điểm thưởng khi đặt chỗ.</p>
                            </div>
                        </div>
                        <div class="col detail-item">
                            <div class="time-go"><span>Vé người lớn cơ bản (x1)&nbsp;</span></div>
                            <div><span>Vé trẻ em cơ bản (x1)&nbsp;</span></div>
                            <div><span>Vé em bé cơ bản (x1)&nbsp;</span></div>
                            <div><span class="thue">Thuế&nbsp;</span></div>
                            <div class="time-end"><span class="total-money">Thành tiền &nbsp;</span></div>
                        </div>
                        <div class="col detail-item">
                            <div class="time-go"><span class="price">1.194.308 VND</span></div>
                            <div><span class="price">1.120.308 VND</span></div>
                            <div><span class="price">0 VND</span></div>
                            <div><span class="thue">Đã bao gồm</span></div>
                            <div class="time-end"><span class="price">2.400.308 VND</span></div>
                        </div>
                    </div>
                </div>
			<?php
			}} // end for, end else
			
			for ($i = 0; $i < $data['tongtrang']; $i++)
			{
				if ($i == $data['trang']) {
					echo $i + 1;
				} else {
					$s = "<a href=\"chuyenbay/chontrang/".$data['diemdi'];
					$s .= "/".$data['diemden'];
					if (strlen($data['ngaydi']) != 0) {
						$s .= "/" . $data['ngaydi'];
					} else {
						$s .= "/" . date("yyyy-MM-dd");
					}
					$s .= "/".(string)$data['songuoi'];
					$s .= "/".(string)($i+1);
					$s .= "\">".(string)($i+1)."</a>";
					echo $s;
				}
			}
			?>
            </div>
        </div>
    </div>