<style>
    .nav-link.active {
        background-color: white !important;
        color: black !important;
    }
</style>

<div class="container-fluid">

        <div class="border justify-content-center me-5 mt-5 border-3 col-12">
            <div class="fs-5 fw-bolder text-primary m-3">Thông tin nhân viên</div>
            <ul class="nav nav-tabs ms-4" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active bg-info text-black" id="home-tab" data-bs-toggle="tab"
                        data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                        aria-selected="true">Cá nhân</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link bg-info text-black ms-2" id="profile-tab" data-bs-toggle="tab"
                        data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane"
                        aria-selected="false">Hợp đồng lao động</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link bg-info text-black ms-2" id="pills-contact-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                        aria-selected="false">Chấm Công</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <!-- Cá nhân -->
                <div class="tab-pane fade show active bg-" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                    tabindex="0">
                    <div class="row d-flex">
                        <div class="col-3 ms-4 g-0">
                            <!-- <div class="avatar"> -->
                            <img class="mt-3 mb-2 rounded img-thumbnail img-fluid"
                                src="https://htmediagroup.vn/wp-content/uploads/2022/08/Anh-cong-so-1-min.jpg"
                                id="avatar" alt="anh_ca_nhan" />
                            <!-- </div> -->
                            <input type="file" id="file" name="avatar" class="d-none" />
                            <label for="file" class="fs-6 fs-6 border text-center rounded text-light"
                                style="background-color: gray;cursor:pointer;"> <span
                                    style="font-size: clamp(10px,3vw,18px); padding:5px">Chọn Ảnh</span></label>
                            <div class="mt-4 lh-1">
                                <p>Mã NV: <span class="fw-bold" style="font-size: clamp(9px,3vw,18px);">NV0001</span>
                                </p>
                                <p>Họ Tên: <span class="fw-bold" style="font-size: clamp(9px,3vw,18px);">Nguyễn Văn
                                        A</span></p>
                                <p>Giới tính: <span class="fw-bold" style="font-size: clamp(9px,3vw,18px);">Nam</span>
                                </p>
                            </div>
                            <!-- <div class="note pt-3 pb-4 pe-5 ps-4"> -->
                            <!-- <label for="note">*Ghi chú</label> -->
                            <!-- </div> -->
                            <!-- <div class="col">
                                
                                <textarea class="note mt-3 mb-4 me-5" id="note" name="note" rows="10"  placeholder="*Ghi chú"></textarea>
                            </div> -->
                        </div>
                        <div class="col-8 container-fluid">
                            <div class="row">

                                <div class="col-6 mt-3">
                                    <form>
                                        <!-- Mã nhân viên -->
                                        <div class="mb-1">
                                            <label for="maNV" class="form-label"
                                                style="font-size: clamp(10px,3vw,18px);">Mã Nhân viên</label>
                                            <input type="text" class="form-control"
                                                style="font-size: clamp(9px,3vw,18px);" id="maNv" placeholder="NV001">
                                        </div>

                                        <!-- Quận/Huyện -->
                                        <div class="mb-1">
                                            <label for="quan_huyen" class="form-label"
                                                style="font-size: clamp(10px,3vw,18px);">Quận/Huyện</label>
                                            <input type="text" class="form-control" id="quan_huyen"
                                                style="font-size: clamp(9px,3vw,18px);" placeholder="Quận/Huyện">
                                        </div>

                                        <!-- cmnd -->
                                        <div class="mb-1">
                                            <label for="cmnd" class="form-label"
                                                style="font-size: clamp(10px,3vw,18px);">CMND/CCCD</label>
                                            <input type="number" class="form-control" id="cmnd"
                                                style="font-size: clamp(9px,3vw,18px);" placeholder="CMND/CCCD">
                                        </div>
                                        <!-- Ngày cấp -->
                                        <div class="mb-1">
                                            <label for="ngay_cap" class="form-label"
                                                style="font-size: clamp(10px,3vw,18px);">Ngày cấp</label>
                                            <input type="date" class="form-control" id="ngay_cap"
                                                style="font-size: clamp(9px,3vw,18px);" placeholder="Ngày cấp">
                                        </div>
                                        <!-- Nơi cấp -->
                                        <div class="mb-1">
                                            <label for="noi_cap" class="form-label"
                                                style="font-size: clamp(10px,3vw,18px);">Nơi cấp</label>
                                            <input type="text" class="form-control" id="noi_cap"
                                                style="font-size: clamp(9px,3vw,18px);"
                                                placeholder="Cục Cảnh sát quản lý hành chính về trật tự xã hội.">
                                        </div>
                                        <!-- Nguyên quán -->
                                        <div class="mb-1">
                                            <label for="nguyen_quan" class="form-label"
                                                style="font-size: clamp(10px,3vw,18px);">Nguyên quán</label>
                                            <input type="text" class="form-control" id="nguyen_quan"
                                                style="font-size: clamp(9px,3vw,18px);" placeholder="Hà Nội">
                                        </div>
                                        <!-- Dân tộc -->
                                        <div class="mb-1">
                                            <label for="dan_toc" class="form-label"
                                                style="font-size: clamp(10px,3vw,18px);">Dân tộc</label>
                                            <input type="text" class="form-control" id="dan_toc"
                                                style="font-size: clamp(9px,3vw,18px);" placeholder="Kinh">
                                        </div>
                                        <!-- Thưởng trú -->
                                        <div class="mb-1">
                                            <label for="thuong_tru" class="form-label"
                                                style="font-size: clamp(10px,3vw,18px);">Thường trú</label>
                                            <input type="text" class="form-control" id="thuong_tru"
                                                style="font-size: clamp(9px,3vw,18px);" placeholder="Sơn Tây">
                                        </div>
                                        <!-- Hộ khẩu -->
                                        <div class="mb-1">
                                            <label for="ho_khau" class="form-label"
                                                style="font-size: clamp(10px,3vw,18px);">Hộ khẩu</label>
                                            <input type="text" class="form-control" id="ho_khau"
                                                style="font-size: clamp(9px,3vw,18px);" placeholder="Hà Nội">
                                        </div>
                                    </form>

                                </div>

                                <!-- right -->
                                <div class="col-6 mt-3">
                                    <form>
                                        <!-- Họ và tên  -->
                                        <div class="mb-1">
                                            <label for="ten_dem" class="form-label"
                                                style="font-size: clamp(10px,3vw,18px);">Họ và tên</label>
                                            <!-- <input type="text" class="form-control" id="ten_dem" placeholder="Nguyễn Văn"> -->
                                            <input type="text" class="form-control"
                                                style="font-size: clamp(9px,3vw,18px);" id="ten_dem"
                                                placeholder="Nguyễn Văn A">
                                        </div>
                                        <!-- Ngày sinh - Nơi sinh -->
                                        <div class="mb-1 row">
                                            <div class="col-6">
                                                <label for="ngay_sinh" class="form-label"
                                                    style="font-size: clamp(8px,2vw,18px);">Ngày Sinh</label>
                                                <input type="date" class="form-control" id="ngay_sinh"
                                                    style="font-size: clamp(5px,2vw,18px);" placeholder="1/1/2024">
                                            </div>
                                            <div class="col-6">
                                                <label for="nơi_sinh" class="form-label"
                                                    style="font-size: clamp(8px,2vw,18px);">Nơi Sinh</label>
                                                <input type="text" class="form-control" id="noi_sinh"
                                                    style="font-size: clamp(5px,2vw,18px);" placeholder="Hà Nội">
                                            </div>
                                        </div>
                                        <!-- Số tài khoản -->
                                        <div class="mb-1">
                                            <label for="so_tai_khoan" class="form-label"
                                                style="font-size: clamp(10px,3vw,18px);">Số tài khoản</label>
                                            <input type="text" class="form-control" id="so_tai_khoan"
                                                style="font-size: clamp(9px,3vw,18px);"
                                                placeholder="Nhập số tài khoản ngân hàng">
                                        </div>
                                        <!-- tên ngân hàng -->
                                        <div class="mb-1">
                                            <label for="ten_ngan_hang" class="form-label"
                                                style="font-size: clamp(10px,3vw,18px);">Tên ngân hàng</label>
                                            <input type="text" class="form-control" id="ten_ngan_hang"
                                                style="font-size: clamp(9px,3vw,18px);"
                                                placeholder="Nhập tên ngân hàng">
                                        </div>
                                        <!-- Điện thoại -->
                                        <div class="mb-1">
                                            <label for="phone" class="form-label"
                                                style="font-size: clamp(10px,3vw,18px);">Điện thoại</label>
                                            <input type="number" class="form-control" id="phone"
                                                style="font-size: clamp(9px,3vw,18px);" placeholder="09********">
                                        </div>
                                        <!-- Tạm trú -->
                                        <div class="mb-1">
                                            <label for="tam_tru" class="form-label"
                                                style="font-size: clamp(10px,3vw,18px);">Tạm trú, tạm vắng</label>
                                            <input type="text" class="form-control" id="tam_tru"
                                                style="font-size: clamp(9px,3vw,18px);" placeholder="Tạm trú, tạm vắng">
                                        </div>
                                        <!--  -->
                                        <div class="mb-1 row">
                                            <div class="col-6">
                                                <label for="quoc_tich" class="form-label"
                                                    style="font-size: clamp(8px,2vw,18px);">Quốc tịch</label>
                                                <input type="text" class="form-control" id="quoc_tich"
                                                    style="font-size: clamp(5px,2vw,18px);" placeholder="Việt Nam">
                                            </div>
                                            <div class="col-6">
                                                <label for="tthn" class="form-label"
                                                    style="font-size: clamp(8px,2vw,18px);">TT hôn nhân</label>
                                                <select name="tthn" id="tthn" class="form-control"
                                                    style="font-size: clamp(5px,2vw,18px);">
                                                    <option value="select">-- Select option --</option>
                                                    <option value="chưa kết hôn">Chưa kết hôn</option>
                                                    <option value="sống chung">Sống chung</option>
                                                    <option value="đang có vợ/chồng">Đang có vợ/chồng</option>
                                                    <option value="goá">Goá</option>
                                                    <option value="ly thân">Ly thân</option>
                                                    <option value="ly hôn">Ly hôn</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Email -->
                                        <div class="mb-1">
                                            <label for="email" class="form-label"
                                                style="font-size: clamp(10px,3vw,18px);">Email</label>
                                            <input type="email" class="form-control" id="email"
                                                style="font-size: clamp(9px,3vw,18px);"
                                                placeholder="user_name@gmail.com">
                                        </div>
                                        <!-- văn hoá -->
                                        <div class="mb-1 row">
                                            <div class="col-6">
                                                <label for="van_hoa" class="form-label"
                                                    style="font-size: clamp(8px,2vw,18px);">Trình độ văn hoá</label>
                                                <input type="text" class="form-control" id="van_hoa"
                                                    style="font-size: clamp(5px,2vw,18px);" placeholder="12/12">
                                            </div>
                                            <div class="col-6">
                                                <label for="tthn" class="form-label"
                                                    style="font-size: clamp(8px,2vw,18px);">Trình độ học vấn</label>
                                                <select name="tthn" id="tthn" class="form-control"
                                                    style="font-size: clamp(5px,2vw,18px);">
                                                    <option value="select">-- Select option --</option>
                                                    <option value="chưa kết hôn">Tiểu học</option>
                                                    <option value="sống chung">THCS</option>
                                                    <option value="đang có vợ/chồng">THPT</option>
                                                    <option value="goá">Cao Đẳng</option>
                                                    <option value="ly thân">Đại Học</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Hợp đồng lao động -->
                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                    tabindex="0">
                    <div id="content">
                        <div class="section container">

                            <div class="mt-2">

                                <div class="col border border-2" style="margin: 0 auto;">
                                    <h3 class="text-center mt-4">CỘNG HOÀ XÃ HỘI CHỦ NGHĨA VIỆT NAM</h3>
                                    <h4 class="text-center">Độc lập - Tự do - Hạnh phúc</h4>
                                    <h5 class="text-center">----------</h5>
                                    <h2 class="text-center mt-4 mb-5">HỢP ĐỒNG LAO ĐỘNG</h2>
                                    <i class="ms-3">Căn cứ vào Bộ luật lao động ngày 20 tháng 11 năm 2019;</i>
                                    <br />
                                    <i class="ms-3">Căn cứ vào nhu cầu của các Bên</i>
                                    <p class="ms-3 fw-bold">Hôm nay, ngày <input type="number" value="date" id="date"
                                            oninput="CheckText()" /> tháng <input type="number" value="month" id="month"
                                            oninput="CheckText()" /> năm <input type="number" value="year" id="year"
                                            oninput="CheckText()" />.
                                    </p>
                                    <p class="ms-3">Công ty <input type="text" id="company" />, chúng tôi gồm: </p>
                                    <u class="ms-3"><b>Bên A: Người sử dụng lao động</b></u>
                                    <p class="ms-3">Công ty: <input type="text" id="company"></p>
                                    <p class="ms-3">Địa chỉ: <input type="text" id="address"></p>
                                    <p class="ms-3">Điện thoại: <input type="text" id="phone"></p>
                                    <p class="ms-3">Đại diện: <input type="text" id="dai_dien"> Chức vụ:<input
                                            type="text" id="chuc_vu">
                                        Quốc tịch: <input type="text" id="national"> </p>
                                    <u class="ms-3"><b>Bên B: Người lao động</b></u>
                                    <p class="ms-3">Ông/Bà: <input type="text" id="ong_ba"></p>
                                    <p class="ms-3">Quốc tịch: <input type="text" id="national"></p>
                                    <p class="ms-3">Ngày sinh: <input type="text" id="birthday"></p>
                                    <p class="ms-3">Nơi sinh: <input type="text" id="noi_sinh"></p>
                                    <p class="ms-3">Địa chỉ thường trú: <input type="text" id="thuong_tru"></p>
                                    <p class="ms-3">Địa chỉ tạm trú: <input type="text" id="tam_tru"></p>
                                    <p class="ms-3">Số CMND/CCCD: <input type="text" id="cccd"> Cấp ngày: <input
                                            type="date" id="cap_ngay" /></p>
                                    <p class="ms-3">Tại: <input type="text" id="tai"></p>
                                    <i class="ms-3">Cùng thoả thuận ký kết Hợp đồng lao động (HĐLĐ) và cam kết làm đúng
                                        những điều khoản
                                        sau
                                        đây:</i><br>
                                    <!-- Điều 1 -->
                                    <b class="ms-3"><u>Điều 1</u> Công việc, địa điểm làm việc và thời hạn của Hợp đồng
                                    </b>
                                    <p class="ms-3">Loại hợp đồng: <input type="number" id="loai_hop_dong"> tháng - Ký
                                        lần thứ <input type="number" id="ky_lan_thu" /></p>
                                    <p class="ms-3">Từ ngày: <input type="text" id="date"> Đến ngày <input type="date"
                                            id="den_ngay" />
                                    </p>
                                    <p class="ms-3">- Địa điểm làm việc: <input type="text" id="dia_diem_lam_viec"></p>
                                    <p class="ms-3">- Bộ phận công tác:</p>
                                    <p class="ms-3">+ Phòng: <input type="text" id="phong"></p>
                                    <p class="ms-3">+ Phòng: <input type="text" id="phong"></p>
                                    <p class="ms-3">+ Chức danh chuyên môn (vị trí công tác): <input type="text"
                                            id="chu_danh_chuyen_mon">
                                    </p>
                                    <p class="ms-3">- Nhiệm vụ công việc như sau:</p>
                                    <p class="ms-3">+ Thực hiện công việc theo đúng chức danh chuyên môn của mình dưới
                                        sự quản lý, điều
                                        hành
                                        của Ban Giám đốc (và các cá nhân được bổ nhiệm hoặc ủy quyền phụ trách).</p>
                                    <p class="ms-3">+ Phối hợp cùng với các bộ phận, phòng ban khác trong Người sử dụng
                                        lao động để phát
                                        huy
                                        tối đa hiệu quả công việc.</p>
                                    <p class="ms-3">+ Hoàn thành những công việc khác tùy thuộc theo yêu cầu kinh doanh
                                        của Người sử
                                        dụng
                                        lao động và theo quyết định của Ban Giám đốc (và các cá nhân được bổ nhiệm hoặc
                                        ủy quyền phụ
                                        trách).
                                    </p>

                                    <!-- Điều 2 -->
                                    <b class="ms-3"><u>Điều 2</u> Lương, phụ cấp, các khoản bổ sung khác </b>
                                    <p class="ms-3">- Lương căn bản: <input type="text" id="lg_can_ban">
                                    <p class="ms-3">- Phụ cấp: <input type="text" id="phu_cap">
                                    <p class="ms-3">- Các khoản bổ sung khác: tùy quy định cụ thể của Công ty
                                    <p class="ms-3">- Hình thức trả lương: Tiền mặt hoặc chuyển khoản.
                                    <p class="ms-3">- Thời hạn trả lương: Được trả lương vào ngày … của tháng.
                                    <p class="ms-3">- Chế độ nâng bậc, nâng lương: Người lao động được xét nâng bậc,
                                        nâng lương theo kết
                                        quả
                                        làm việc và theo quy định của Người sử dụng lao động.
                                        <br>
                                        <!-- Điều 3 -->
                                        <b class="ms-3"><u>Điều 3</u> Thời giờ làm việc, nghỉ ngơi, bảo hộ lao động,
                                            BHXH, BHYT, BHTN
                                        </b>
                                    <p class="ms-3">- Thời giờ làm việc: … giờ/ngày, … giờ/tuần, Nghỉ hàng tuần: ngày ……
                                    <p class="ms-3">- Từ ngày Thứ …. đến ngày Thứ …… hàng tuần:
                                    <p class="ms-3">+ Buổi sáng : …………………
                                    <p class="ms-3">+ Buổi chiều: …………………
                                    <p class="ms-3">- Chế độ nghỉ ngơi các ngày lễ, tết, phép năm:
                                    <p class="ms-3">+ Người lao động được nghỉ lễ, tết theo luật định; các ngày nghỉ lễ
                                        nếu trùng với
                                        ngày
                                        nghỉ thì sẽ được nghỉ bù vào ngày trước hoặc ngày kế tiếp tùy theo tình hình cụ
                                        thể mà Ban lãnh
                                        đạo
                                        Công ty sẽ chỉ đạo trực tiếp.
                                    <p class="ms-3">+ Người lao động đã ký HĐLĐ chính thức và có thâm niên công tác 12
                                        tháng thì sẽ được
                                        nghỉ phép năm có hưởng lương (01 ngày phép/01 tháng, 12 ngày phép/01 năm);
                                        trường hợp có thâm
                                        niên
                                        làm việc dưới 12 tháng thì thời gian nghỉ hằng năm được tính theo tỷ lệ tương
                                        ứng với số thời
                                        gian
                                        làm việc.
                                    <p class="ms-3">- Thiết bị và công cụ làm việc sẽ được Công ty cấp phát tùy theo nhu
                                        cầu của công
                                        việc.
                                    <p class="ms-3">- Điều kiện an toàn và vệ sinh lao động tại nơi làm việc theo quy
                                        định của pháp luật
                                        hiện hành.
                                    <p class="ms-3">- Bảo hiểm xã hội, bảo hiểm y tế và bảo hiểm thất nghiệp: Theo quy
                                        định của pháp
                                        luật.
                                        <br>
                                        <!-- Điều 4 -->
                                        <b class="ms-3"><u>Điều 4</u> Đào tạo, bồi dưỡng, các quyền lợi và nghĩa vụ liên
                                            quan của người
                                            lao
                                            động </b>
                                    <p class="ms-3">- Đào tạo, bồi dưỡng: Người lao động được đào tạo, bồi dưỡng, huấn
                                        luyện tại nơi làm
                                        việc hoặc được gửi đi đào tạo theo quy định của Công ty và yêu cầu công việc.
                                    <p class="ms-3">- Khen thưởng: Người lao động được khuyến khích bằng vật chất và
                                        tinh thần khi có
                                        thành
                                        tích trong công tác hoặc theo quy định của Công ty.
                                    <p class="ms-3">- Các khoản thỏa thuận khác gồm: tiền cơm trưa, thưởng mặc định, hỗ
                                        trợ xăng xe,
                                        điện
                                        thoại, nhà ở, trang phục…, theo quy định của Công ty.
                                    <p class="ms-3">- Nghĩa vụ liên quan của người lao động:
                                    <p class="ms-3">+ Tuân thủ hợp đồng lao động.
                                    <p class="ms-3">+ Thực hiện công việc với sự tận tâm, tận lực và mẫn cán, đảm bảo
                                        hoàn thành công
                                        việc
                                        với hiệu quả cao nhất theo sự phân công, điều hành (bằng văn bản hoặc bằng
                                        miệng) của Ban Giám
                                        đốc
                                        (và các cá nhân được Ban Giám đốc bổ nhiệm hoặc ủy quyền phụ trách).
                                    <p class="ms-3">+ Hoàn thành công việc được giao và sẵn sàng chấp nhận mọi sự điều
                                        động khi có yêu
                                        cầu.
                                    <p class="ms-3">+ Nắm rõ và chấp hành nghiêm túc kỷ luật lao động, an toàn lao động,
                                        vệ sinh lao
                                        động,
                                        phòng cháy chữa cháy, văn hóa Công ty, nội quy lao động và các chủ trương, chính
                                        sách của Công
                                        ty.
                                    <p class="ms-3">+ Trong trường hợp được cử đi đào tạo thì nhân viên phải hoàn thành
                                        khoá học đúng
                                        thời
                                        hạn, phải cam kết sẽ phục vụ lâu dài cho Công ty sau khi kết thúc khoá học và
                                        được hưởng nguyên
                                        lương, các quyền lợi khác được hưởng như người đi làm.
                                    <p class="ms-3">Nếu sau khi kết thúc khóa đào tạo mà nhân viên không tiếp tục hợp
                                        tác với Công ty
                                        thì
                                        nhân viên phải hoàn trả lại 100% phí đào tạo và các khoản chế độ đã được nhận
                                        trong thời gian
                                        đào
                                        tạo..
                                    <p class="ms-3">+ Bồi thường vi phạm vật chất: Theo quy định nội bộ cuả Công ty và
                                        quy định cuả pháp
                                        luật hiện hành;
                                    <p class="ms-3">+ Có trách nhiệm đề xuất các giải pháp nâng cao hiệu quả công việc,
                                        giảm thiểu các
                                        rủi
                                        ro. Khuyến khích các đóng góp này được thực hiện bằng văn bản.
                                    <p class="ms-3">+ Thuế TNCN, nếu có: do người lao động đóng. Công ty sẽ tạm khấu trừ
                                        trước khi chi
                                        trả
                                        cho người lao động theo quy định.</p>
                                    <br>

                                    <!-- Điều 5 -->
                                    <b class="ms-3"><u>Điều 5</u> Nghĩa vụ và quyền lợi của Người sử dụng lao động </b>
                                    <p class="ms-3"><i><b>1. Nghĩa vụ</b></i>
                                    <p class="ms-3">- Thực hiện đầy đủ những điều kiện cần thiết đã cam kết trong HĐLĐ
                                        để Người lao động
                                        đạt
                                        hiệu quả công việc cao. Bảo đảm việc làm cho Người lao động theo HĐLĐ đã ký.
                                    <p class="ms-3">- Thanh toán đầy đủ, đúng hạn các chế độ và quyền lợi cho người lao
                                        động theo hợp
                                        đồng
                                        lao động, thỏa ước lao động tập thể (nếu có);
                                    <p class="ms-3"><i><b>2. Quyền lợi</b></i>
                                    <p class="ms-3">- Điều hành Người lao động hoàn thành công việc theo HĐLĐ (bố trí,
                                        điều chuyển công
                                        việc
                                        cho Người lao động theo đúng chức năng chuyên môn).
                                    <p class="ms-3">- Có quyền chuyển tạm thời lao động, ngừng việc, thay đổi, tạm hoãn,
                                        chấm dứt HĐLĐ
                                        và áp
                                        dụng các biện pháp kỷ luật theo quy định của Pháp luật hiện hành và theo nội quy
                                        của Công ty
                                        trong
                                        thời gian HĐLĐ còn giá trị.
                                    <p class="ms-3">- Có quyền đòi bồi thường, khiếu nại với cơ quan liên đới để bảo vệ
                                        quyền lợi của
                                        mình
                                        nếu Người lao động vi phạm Pháp luật hay các điều khoản của HĐLĐ.
                                    <p class="ms-3">+ Hoàn thành công việc được giao và sẵn sàng chấp nhận mọi sự điều
                                        động khi có yêu
                                        cầu.
                                        <br>
                                        <b class="ms-3"><u>Điều 6</u> Những thỏa thuận khác </b> <br>
                                        <input type="text" class="form-control" placeholder="thoả thuận khác"
                                            id="nhung_thoa_thuan_khac">
                                        <!-- Điều 7 -->
                                        <b class="ms-3"><u>Điều 7</u> Điều khoản thi hành </b> <br>
                                    <p class="ms-3">- Những vấn đề về lao động không ghi trong hợp đồng lao động này thì
                                        áp dụng quy
                                        định
                                        cuả thỏa ước tập thể, trường hợp chưa có thỏa ước thì áp dụng quy định của pháp
                                        luật lao động.
                                    <p class="ms-3">- Hợp đồng này được lập thành 2 bản có giá trị pháp lý như nhau, mỗi
                                        bên giữ 1 bản
                                        và có
                                        hiệu lực kể từ ngày ký.
                                    <p class="ms-3">- Khi ký kết các phụ lục hợp đồng lao động thì nội dung của phụ lục
                                        cũng có giá trị
                                        như
                                        các nội dung cuả bản hợp đồng này.

                                        <!-- Chốt -->
                                    <div class="row text-center mt-5 mb-5">
                                        <div class="col-6 mb-5">
                                            <h5>NGƯỜI LAO ĐỘNG</h5>
                                            <p>(Ký, ghi rõ họ tên)</p>
                                        </div>
                                        <div class="col-6">
                                            <h5>NGƯỜI SỬ DỤNG LAO ĐỘNG</h5>
                                            <p>(Ký, ghi rõ họ tên)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chấm công -->

                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
                    tabindex="0">
                    <h1 class="text-center mt-5">Dashboard Chấm Công</h1>
                    <div class="row">
                        <div class="col-md-6 mb-5" style="margin: 0 auto;">

                            <div id="chart-container">
                                <canvas id="chart"></canvas>
                            </div>
                        </div>
                    </div>

                    <script>
                        const ctx = document.getElementById('chart').getContext('2d');
                        const data = {
                            labels: ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ Nhật'],
                            datasets: [{
                                label: 'Số Giờ Làm Việc',
                                data: [8, 7, 12, 8, 6, 5, 8],
                                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                borderColor: 'rgba(75, 192, 192, 1)',
                                borderWidth: 2
                            }]
                        };

                        const options = {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                        };

                        const chart = new Chart(ctx, {
                            type: 'bar',
                            data: data,
                            options: options
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    
        const image = document.querySelector('img');
        const input = document.querySelector('input');
    
        input.addEventListener('change', (e) => {
            const file = e.target.files[0]
            const reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = (event) => {
                image.src = event.target.result;
                localStorage.setItem('selectedImage', event.target.result);
            };
        });
    
        const savedImage = localStorage.getItem('selectedImage');
        if (savedImage) {
            image.src = savedImage;
        }
    
    </script>