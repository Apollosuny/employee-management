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
            <h3>All Contract Types</h3>
            <div>
                <a href="<?php echo _WEB_ROOT; ?>/admin/contract-types/create" class="btn btn-info">Create new contract type</a>
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
                <?php if (count($contractTypes) > 0) {
                    foreach ($contractTypes as $contractType) :
                ?>
                        <tr>
                            <td><?php echo $contractType['id']; ?></td>
                            <td><?php echo $contractType['name']; ?></td>
                            <td><?php echo $contractType['description']; ?></td>
                            <td><?php echo $contractType['createdAt']; ?></td>
                            <td>
                                <a href="<?php echo _WEB_ROOT; ?>/admin/contract-types/edit/<?php echo $contractType['id']; ?>" class="btn btn-link btn-sm btn-rounded">
                                    Edit
                                </a>
                                <form method="post" action="<?php echo _WEB_ROOT; ?>/contractType/handle_delete_contract_type/<?php echo $contractType['id']; ?>">
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