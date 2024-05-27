<div class="bg-body h-100">
    <div class="d-flex flex-column px-4 pt-3">
        <div class="sidebar-logo">
            <img src="<?php echo _WEB_ROOT; ?>/public/assets/images/logo.png" alt="Logo" />
        </div>
        <div class="d-flex flex-column gap-3 mt-4 list-group">
            <a 
                href="<?php echo _WEB_ROOT; ?>/admin/adminpanel" 
                style="color: black" 
                class="
                    hover
                    text-decoration-none 
                    text-center 
                    <?php echo strstr("/admin/adminpanel", $_SERVER['REQUEST_URI']) ?  'bg-info-subtle p-2 rounded' : '' ?>
                "
            >
                <div>
                    <span>Dashboard</span>
                </div>
            </a>
            <a href="<?php echo _WEB_ROOT; ?>/admin/users" style="color: black" class="hover text-decoration-none text-center <?php echo strstr("/admin/users", $_SERVER['REQUEST_URI']) ?  'bg-info-subtle p-2 rounded' : '' ?>">
                <div>
                    <span>Users</span>
                </div>
            </a>
            <a href="<?php echo _WEB_ROOT; ?>/admin/contracts" style="color: black" class="hover text-decoration-none text-center <?php echo strstr("/admin/contracts", $_SERVER['REQUEST_URI']) ?  'bg-info-subtle p-2 rounded' : '' ?>">
                <div>
                    <span>Contracts</span>
                </div>
            </a>
            <a href="<?php echo _WEB_ROOT; ?>/admin/positions" style="color: black" class="hover text-decoration-none text-center <?php echo strstr("/admin/positions", $_SERVER['REQUEST_URI']) ?  'bg-info-subtle p-2 rounded' : '' ?>">
                <div>
                    <span>Positions</span>
                </div>
            </a>
            <a href="<?php echo _WEB_ROOT; ?>/admin/contract-types" style="color: black" class="hover text-decoration-none text-center <?php echo strstr("/admin/contract-types", $_SERVER['REQUEST_URI']) ?  'bg-info-subtle p-2 rounded' : '' ?>">
                <div>
                    <span>Contract type</span>
                </div>
            </a>
            <a href="<?php echo _WEB_ROOT; ?>/admin/departments" style="color: black" class="hover text-decoration-none text-center <?php echo strstr("/admin/departments", $_SERVER['REQUEST_URI']) ?  'bg-info-subtle p-2 rounded' : '' ?>">
                <div>
                    <span>Departments</span>
                </div>
            </a>
            <div class="text-decoration-none text-center hover">
                <span>Settings</span>
            </div>
            <div class="text-decoration-none text-center hover">
                <form method="POST" action="<?php echo _WEB_ROOT; ?>/auth/logout">
                    <button class="dropdown-item" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>