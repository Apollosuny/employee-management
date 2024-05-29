<?php 
$user = Session::data('user')['user'];
?>
<header class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo $user['role'] == 'employee' ? _WEB_ROOT.'/dashboard' : _WEB_ROOT.'/admin/adminpanel' ?>">Company</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" style="gap: 16px;" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 ">
                    <li class="nav-item d-flex justify-content-between align-items-center" style="gap: 20px">
                        <div class="section-employee-info d-flex gap-2" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="avatar">
                                <img src="<?php echo _WEB_ROOT; ?>/public/assets/images/default-avatar.jpg" style="" />
                            </div>
                            <div class="info d-flex flex-column">
                                <h3 class="username"><?php echo $user['username'] ? $user['username'] : 'Default name' ?></h3>
                                <span class="user-role"><?php echo $user['role'] ? $user['role'] : 'Default role' ?></span>
                            </div>
                        </div>
                        <div>
                            <form method="POST" action="<?php echo _WEB_ROOT; ?>/auth/logout">
                                <button class="dropdown-item" type="submit">Logout</button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>