<div class="bg-body h-100">
    <div class="d-flex flex-column px-4 pt-3">
        <div class="sidebar-logo">
            <img src="<?php echo _WEB_ROOT; ?>/public/assets/images/logo.png" alt="Logo" />
        </div>
        <div class="d-flex flex-column gap-3 mt-4">
            <a href="<?php echo _WEB_ROOT; ?>/admin/adminpanel">
                <div>
                    <span>Dashboard</span>
                </div>
            </a>
            <a href="<?php echo _WEB_ROOT; ?>/admin/users">
                <div>
                    <span>Users</span>
                </div>
            </a>
            <a href="<?php echo _WEB_ROOT; ?>/admin/contracts">
                <div>
                    <span>Contracts</span>
                </div>
            </a>
            <a href="<?php echo _WEB_ROOT; ?>/admin/positions">
                <div>
                    <span>Positions</span>
                </div>
            </a>
            <a href="<?php echo _WEB_ROOT; ?>/admin/contract-types">
                <div>
                    <span>Contract type</span>
                </div>
            </a>
            <a href="<?php echo _WEB_ROOT; ?>/admin/departments">
                <div>
                    <span>Departments</span>
                </div>
            </a>
            <div>
                <span>Settings</span>
            </div>
            <div>
                <form method="POST" action="<?php echo _WEB_ROOT; ?>/auth/logout">
                    <button class="dropdown-item" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>