<?php
$successMsg = isset($success['success']) ? $success['success'] : null;
?>

<div class="bg-body-tertiary h-100 d-flex justify-content-center" style="padding-top: 5rem; min-height: 100vh;">
    <div class="bg-body w-95 p-3 m-3 scroll-y">
    <?php
        if (!empty($successMsg)) {
            echo "
                <div class='alert alert-success' role='alert'>" .
                $successMsg
                . "</div>
                ";
        }
        if (!empty($deletedSuccessMsg)) {
            echo "
                <div class='alert alert-success' role='alert'>" .
                $deletedSuccessMsg
                . "</div>
                ";
        }
        ?>
        <div class="d-flex justify-content-between align-items-center">
            <h3>All Employees</h3>
            <div>
                <a href="<?php echo _WEB_ROOT; ?>/admin/users/register" class="btn btn-info">Register new user</a>
            </div>
        </div>
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Created at</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($users) > 0) {
                    foreach ($users as $user) : 
                ?>
                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['role']; ?></td>
                        <td><?php echo $user['createdAt']; ?></td>
                        <td><?php echo $user['status']; ?></td>
                        <td>
                            <form method="post" action="<?php echo _WEB_ROOT; ?>/employee/delete_user/<?php echo $user['id']; ?>">
                                <button type="submit" class="btn btn-link btn-sm btn-rounded">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                 <?php endforeach; 
                    } else {
                 ?>
                    <tr>
                        <td colspan="8" class="text-center">No data</td>
                    </tr>
                 <?php } ?>
            </tbody>
        </table>
    </div>
</div>