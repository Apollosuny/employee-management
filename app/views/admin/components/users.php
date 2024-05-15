<div class="bg-body-tertiary h-100 d-flex justify-content-center align-items-center">
    <div class="bg-body w-95 h-95 p-3">
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
                            <button type="button" class="btn btn-link btn-sm btn-rounded">
                                Edit
                            </button>
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