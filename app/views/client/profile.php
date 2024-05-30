<?php
$successMsg = isset($success['success']) ? $success['success'] : null;
$errorMsg = isset($error['error']) ? $error['error'] : null;
?>

<div class=" position-relative" style="min-height: 100vh;">
    <div class="bg-body-secondary profile-wrapper"
        style="width: 90%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%)">
        <div class="my-2"><a
                class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                href="<?php echo _WEB_ROOT; ?>/dashboard">Back</a></div>
        <?php
        if (!empty($successMsg)) {
            echo "
                <div class='alert alert-success' role='alert'>" .
                $successMsg
                . "</div>
                ";
        }
        if (!empty($errorMsg)) {
            echo "
                <div class='alert alert-danger' role='alert'>" .
                $errorMsg
                . "</div>
                ";
        }
        ?>
        <div>
            <h2>Profile</h2>
        </div>
        <form method="post" enctype="multipart/form-data"
            action="<?php echo _WEB_ROOT; ?>/profile/update/<?php echo $profile['id'] ?>">
            <div class="row d-flex">
                <div class="col-3 ms-4 g-0">
                    <!-- <div class="avatar"> -->
                    <img class="mt-3 mb-2 rounded img-thumbnail img-fluid" src="<?php echo $profile['avatar'] ?
                        "/public/assets/uploads/" . $profile['avatar'] :
                        "https://htmediagroup.vn/wp-content/uploads/2022/08/Anh-cong-so-1-min.jpg" ?>" id="avatar"
                        alt="anh_ca_nhan" />
                    <!-- </div> -->

                    <div class="mt-3">
                        <label for="file">Change avatar</label>
                        <input type="file" class="mt-3" id="file" name="file" />
                    </div>
                </div>
                <div class="col-8 container-fluid">
                    <div class="row">
                        <!-- right -->
                        <div class="col-12 mt-3">
                            <!-- Họ và tên  -->
                            <div class="mb-1">
                                <label for="firstName" class="form-label" style="font-size: clamp(10px,3vw,18px);">First
                                    Name</label>
                                <input type="text" class="form-control" style="font-size: clamp(9px,3vw,18px);"
                                    id="firstName" name="firstName"
                                    value="<?php echo $profile['firstName'] ? $profile['firstName'] : "" ?>"
                                    placeholder="Nguyễn Văn A">
                            </div>
                            <div class="mb-1">
                                <label for="lastName" class="form-label" style="font-size: clamp(10px,3vw,18px);">Last
                                    Name</label>
                                <input type="text" class="form-control" style="font-size: clamp(9px,3vw,18px);"
                                    id="lastName" name="lastName"
                                    value="<?php echo $profile['lastName'] ? $profile['lastName'] : "" ?>"
                                    placeholder="Nguyễn Văn A">
                            </div>

                            <!-- Ngày sinh - Nơi sinh -->
                            <div class="mb-1 row">
                                <div class="col-6">
                                    <label for="dob" class="form-label" style="font-size: clamp(8px,2vw,18px);">Date of
                                        birth</label>
                                    <input type="date" class="form-control" id="dob"
                                        style="font-size: clamp(5px,2vw,18px);" name="dob"
                                        value="<?php echo $profile['dob'] ? $profile['dob'] : null ?>"
                                        placeholder="1/1/2024">
                                </div>
                            </div>

                            <!-- Gender -->
                            <div class="mb-1 row">
                                <div class="col-6">
                                    <label for="gender" class="form-label"
                                        style="font-size: clamp(8px,2vw,18px);">Gender</label>
                                    <div class="d-flex align-items-center" style="gap: 10px">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" <?php echo $profile['gender'] == 'male' ? "checked" : "" ?> id="gender-male"
                                                value="male">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Male
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" <?php echo $profile['gender'] == 'female' ? "checked" : "" ?> id="gender-female"
                                                value="female">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-1">
                                <label for="address" class="form-label"
                                    style="font-size: clamp(10px,3vw,18px);">Address</label>
                                <input type="text" class="form-control" id="address"
                                    style="font-size: clamp(9px,3vw,18px);" name="address"
                                    value="<?php echo $profile['address'] ? $profile['address'] : "" ?>"
                                    placeholder="Tạm trú, tạm vắng">
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary mt-5">Update</button>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>