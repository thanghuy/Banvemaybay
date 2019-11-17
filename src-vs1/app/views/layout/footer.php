<div id="footer" class="footer-dark">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 item">
                            <h3>Về Chúng Tôi</h3>
                            <ul>
                                <li><a href="#">Cách đặt chỗ</a></li>
                                <li><a href="#">Trợ giúp</a></li>
                                <li><a href="#">Liên hệ chúng tôi</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 item">
                            <h3>Sản Phẩm</h3>
                            <ul>
                                <li><a href="#">Vé máy bay</a></li>
                                <li><a href="#">Đưa đón sân bay</a></li>
                                <li><a href="#">Khách sạn</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 item text">
                            <h3>Khác&nbsp;</h3>
                            <p><br>Bạn có thể liên hệ qua hotline 1900-6978, chat trực tuyến hoặc gửi email về&nbsp;<a href="mailto:cs@traveloka.com">cs@traveloka.com</a>&nbsp;để được hỗ trợ kịp thời.<br><br><br></p>
                        </div>
                        <div class="col item social">
                            <a href="#" class="icon-f-one">
                                <i class="icon ion-social-facebook"></i>
                            </a>
                            <a href="#" class="icon-f-two">
                                <i class="icon ion-social-twitter"></i>
                            </a>
                            <a href="#" class="icon-f-three">
                                <i class="icon ion-social-youtube"></i></a>
                            <a href="#" class="icon-f-four">
                                <i class="icon ion-social-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <p class="copyright">Huy Thắng © 2019</p>
                </div>
            </footer>

            <!--Modal đăng nhập-->
            <form action="dangnhap/dn" name="sign_in" method="POST" onsubmit="return check_sign_in()">
                <div style="color: #000000;" class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div id='lg' class="modal-dialog modal-dialog-centered modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Đăng nhập tài khoản</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Usename</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input name="username" style="border: 1px solid;" type="text" class="form-control" id="username">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Mật khẩu</p>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="">Quên mật khẩu</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input name="password" style="border: 1px solid;" type="text" class="form-control" id="password">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="login" class="btn btn-primary">Đăng nhập</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- kết thúc modal-->

            <!--Modal đăng kí-->
            <form name="sign_up" action="" onsubmit="return check_sign_up()">
                <div style="color: #000000;" class="modal fade" id="dangki" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div id='lg' class="modal-dialog modal-dialog-centered modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Đăng kí tài khoản</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                            </div>
                            <div class="modal-body">
                                
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>Tên tài khoản</p>
                                    </div>
                                    <div class="col-md-8">
                                        <input name="username" style="border: 1px solid;" type="text" class="form-control" id="username">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8"><p id="alert_0" class="alert"></p></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>Mật khẩu</p>
                                    </div>
                                    <div class="col-md-8">
                                    <input name="password" style="border: 1px solid;" type="text" class="form-control" id="password">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8"><p id="alert_1" class="alert"></p></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>Nhập lại mật khẩu</p>
                                    </div>
                                    <div class="col-md-8">
                                        <input name="repassword" style="border: 1px solid;" type="text" class="form-control" id="repassword">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8"><p id="alert_2" class="alert"></p></div>
                                </div>
                                <div class="row">
                                <div class="col-md-4">
                                        <p>Email</p>
                                    </div>
                                    <div class="col-md-8">
                                        <input name="email" style="border: 1px solid;" type="text" class="form-control" id="email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8"><p id="alert_3" class="alert"></p></div>
                                </div>
                                <div class="row">
                                <div class="col-md-4">
                                        <p>Địa chỉ</p>
                                    </div>
                                    <div class="col-md-8">
                                        <input name="address" style="border: 1px solid;" type="text" class="form-control" id="address">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8"><p id="alert_4" class="alert"></p></div>
                                </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger">Đăng kí</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- kết thúc modal đăng kí-->
            <div id="snackbar">Ngày tháng không hợp lệ</div>
        </div>