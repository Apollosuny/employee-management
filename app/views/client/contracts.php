<div class="container" style="min-height: 100vh;">
    <div class="mt-4"><a
            class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
            href="<?php echo _WEB_ROOT; ?>/dashboard">Back</a></div>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Salary</th>
                <th scope="col">Signed Date</th>
                <th scope="col">Start Date</th>
                <th scope="col">End Date</th>
                <th scope="col">Position</th>
                <th scope="col">Contract Type</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($contracts) > 0) {
                foreach ($contracts as $contract):
                    ?>
                    <tr>
                        <td><?php echo $contract['id']; ?></td>
                        <td>$<?php echo $contract['salary']; ?></td>
                        <td><?php echo $contract['signedDate']; ?></td>
                        <td><?php echo $contract['startDate']; ?></td>
                        <td><?php echo $contract['endDate']; ?></td>
                        <td><?php echo $contract['positionName']; ?></td>
                        <td><?php echo $contract['contractTypeName']; ?></td>
                        <td><?php echo $contract['status']; ?></td>
                        <td>
                            <a href="<?php echo _WEB_ROOT; ?>/dashboard/contracts/show/<?php echo $contract['id']; ?>"
                                class="btn btn-link btn-sm btn-rounded">
                                Show detail
                            </a>
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