<?php
$successMsg = isset($success['success']) ? $success['success'] : null;
$updatedSuccessMsg = isset($updated_success['updated_success']) ? $updated_success['updated_success'] : null;
$deletedSuccessMsg = isset($deleted_success['deleted_success']) ? $deleted_success['deleted_success'] : null;
?>

<div class="bg-body-tertiary h-100 d-flex justify-content-center" style="padding-top: 5rem">
    <div class="bg-body p-3 m-3 w-95 scroll-y">
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
            <h3>All positions</h3>
            <div>
                <a href="<?php echo _WEB_ROOT; ?>/admin/positions/create" class="btn btn-info">Create new position</a>
            </div>
        </div>
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($positions) > 0) {
                    foreach ($positions as $position) :
                ?>
                        <tr>
                            <td><?php echo $position['id']; ?></td>
                            <td><?php echo $position['name']; ?></td>
                            <td><?php echo $position['description']; ?></td>
                            <td><?php echo $position['createdAt']; ?></td>
                            <td>
                                <a href="<?php echo _WEB_ROOT; ?>/admin/positions/edit/<?php echo $position['id']; ?>" class="btn btn-link btn-sm btn-rounded">
                                    Edit
                                </a>
                                <form method="post" action="<?php echo _WEB_ROOT; ?>/position/handle_delete_position/<?php echo $position['id']; ?>">
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
                        <td colspan="5" class="text-center">No data</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>