<main class="" style="height: 100vh;">
    <div class="row h-100 g-0">
        <div class="col-2">
            <?php $this->render('admin/components/sidebar') ?>
        </div>
        <div class="col-10">
            <div class="bg-body">
                <div class="p-3 d-flex justify-content-between">
                    <div class="section-search">
                        <div class="input-group">
                            <div class="form-outline" data-mdb-input-init>
                                <input type="search" id="form1" class="form-control" placeholder="Search" />
                            </div>
                            <button type="button" class="btn btn-primary" data-mdb-ripple-init>
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="section-user-info d-flex gap-2">
                        <div class="avatar">
                            <img src="<?php echo _WEB_ROOT; ?>/public/assets/images/default-avatar.jpg" />
                        </div>
                        <div class="info d-flex flex-column">
                            <h3 class="username">Apollosuny</h3>
                            <span class="user-role">Superadmin</span>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->render($content); ?>
        </div>
    </div>
</main>