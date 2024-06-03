<?php
$successMsg = isset($success['success']) ? $success['success'] : null;
$updatedSuccessMsg = isset($updated_success['updated_success']) ? $updated_success['updated_success'] : null;
$deletedSuccessMsg = isset($deleted_success['deleted_success']) ? $deleted_success['deleted_success'] : null;
?>
<div class="bg-body-tertiary h-100 d-flex justify-content-center" style="padding-top: 5rem; min-height: 100vh;">
    <div class="bg-body m-3 w-95 p-3 scroll-y">
        <?php
            if (!empty($successMsg)) {
                echo "
                    <div class='alert alert-success' role='alert'>" .
                    $successMsg
                    . "</div>
                    ";
            }
            if (!empty($updatedSuccessMsg)) {
                echo "
                    <div class='alert alert-success' role='alert'>" .
                    $updatedSuccessMsg
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
        <h3>All departments</h3>
        <div>
            <a href="<?php echo _WEB_ROOT; ?>/admin/departments/create" class="btn btn-info">Create department</a>
        </div>
    </div>
    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
            <tbody>
            <?php if (count($departments) > 0) {
                    foreach ($departments as $department) :
                ?>
                        <tr>
                            <td><?php echo $department['id']; ?></td>
                            <td><?php echo $department['name']; ?></td>
                            <td><?php echo $department['phone']; ?></td>
                            <td><?php echo $department['email']; ?></td>
                            <td><?php echo $department['address']; ?></td>
                            <td><?php echo $department['description']; ?></td>
                            <td>
                                <a href="<?php echo _WEB_ROOT; ?>/admin/departments/edit/<?php echo $department['id']; ?>" class="btn btn-link btn-sm btn-rounded">
                                    Edit
                                </a>
                                <form method="post" action="<?php echo _WEB_ROOT; ?>/department/handle_delete_department/<?php echo $department['id']; ?>">
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
                        <td colspan="7" class="text-center">No data</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>