<div class="bg-body-tertiary h-100 d-flex justify-content-center" style="padding-top: 5rem; min-height: 100vh;">
    <div class="bg-body w-95 m-3 p-3 scroll-y">
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
            <h3>All Contracts</h3>
            <div>
                <a href="<?php echo _WEB_ROOT; ?>/admin/contracts/create" class="btn btn-info">Create new contract</a>
            </div>
        </div>
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                    <th>No</th>
                    <th>Salary</th>
                    <th>Signed Date</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Position</th>
                    <th>Contract Type</th>
                    <th>User</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($contracts) > 0) {
                    foreach ($contracts as $contract) :
                ?>
                        <tr>
                            <td><?php echo $contract['id']; ?></td>
                            <td>$<?php echo $contract['salary']; ?></td>
                            <td><?php echo $contract['signedDate']; ?></td>
                            <td><?php echo $contract['startDate']; ?></td>
                            <td><?php echo $contract['endDate']; ?></td>
                            <td><?php echo $contract['positionName']; ?></td>
                            <td><?php echo $contract['contractTypeName']; ?></td>
                            <td><?php echo $contract['user']; ?></td>
                            <td>
                                <a href="<?php echo _WEB_ROOT; ?>/admin/contracts/edit/<?php echo $contract['id']; ?>" class="btn btn-link btn-sm btn-rounded">
                                    Edit
                                </a>
                                <form method="post" action="<?php echo _WEB_ROOT; ?>/contract/handle_delete_contract/<?php echo $contract['id']; ?>">
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
                        <td colspan="9" class="text-center">No data</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>