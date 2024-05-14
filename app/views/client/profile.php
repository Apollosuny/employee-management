<div class="container" style="min-height: 100vh;">
    <div class="tab-pane fade show active bg-" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
        <div class="row d-flex">
            <div class="col-3 ms-4 g-0">
                <!-- <div class="avatar"> -->
                <img class="mt-3 mb-2 rounded img-thumbnail img-fluid" src="https://htmediagroup.vn/wp-content/uploads/2022/08/Anh-cong-so-1-min.jpg" id="avatar" alt="anh_ca_nhan" />
                <!-- </div> -->
                <input type="file" id="file" name="avatar" class="d-none" />
                <label for="file" class="fs-6 fs-6 border text-center rounded text-light" style="background-color: gray;cursor:pointer;"> <span style="font-size: clamp(10px,3vw,18px); padding:5px">Chọn Ảnh</span></label>
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
                    <!-- right -->
                    <div class="col-12 mt-3">
                        <form>
                            <!-- Họ và tên  -->
                            <div class="mb-1">
                                <label for="ten_dem" class="form-label" style="font-size: clamp(10px,3vw,18px);">First Name</label>
                                <input type="text" class="form-control" style="font-size: clamp(9px,3vw,18px);" id="ten_dem" placeholder="Nguyễn Văn A">
                            </div>
                            <div class="mb-1">
                                <label for="ten_dem" class="form-label" style="font-size: clamp(10px,3vw,18px);">Last Name</label>
                                <input type="text" class="form-control" style="font-size: clamp(9px,3vw,18px);" id="ten_dem" placeholder="Nguyễn Văn A">
                            </div>

                            <!-- Ngày sinh - Nơi sinh -->
                            <div class="mb-1 row">
                                <div class="col-6">
                                    <label for="ngay_sinh" class="form-label" style="font-size: clamp(8px,2vw,18px);">Date of birth</label>
                                    <input type="date" class="form-control" id="ngay_sinh" style="font-size: clamp(5px,2vw,18px);" placeholder="1/1/2024">
                                </div>
                            </div>

                            <!-- Gender -->
                            <div class="mb-1 row">
                                <div class="col-6">
                                    <label for="gender" class="form-label" style="font-size: clamp(8px,2vw,18px);">Gender</label>
                                    <div class="d-flex align-items-center" style="gap: 10px">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Male
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Điện thoại -->
                            <!-- <div class="mb-1">
                                            <label for="phone" class="form-label"
                                                style="font-size: clamp(10px,3vw,18px);">Điện thoại</label>
                                            <input type="number" class="form-control" id="phone"
                                                style="font-size: clamp(9px,3vw,18px);" placeholder="09********">
                                        </div> -->
                            <!-- Tạm trú -->
                            <div class="mb-1">
                                <label for="address" class="form-label" style="font-size: clamp(10px,3vw,18px);">Address</label>
                                <input type="text" class="form-control" id="address" style="font-size: clamp(9px,3vw,18px);" placeholder="Tạm trú, tạm vắng">
                            </div>
                            <!--  -->

                            <!-- Email -->
                            <!-- <div class="mb-1">
                                            <label for="email" class="form-label"
                                                style="font-size: clamp(10px,3vw,18px);">Email</label>
                                            <input type="email" class="form-control" id="email"
                                                style="font-size: clamp(9px,3vw,18px);"
                                                placeholder="user_name@gmail.com">
                                        </div> -->
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>