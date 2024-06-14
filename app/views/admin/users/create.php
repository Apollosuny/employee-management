<?php
$errorsMsg = isset($errors['errors']) ? $errors['errors'] : null;

$oldData = isset($oldData['oldData']) ? $oldData['oldData'] : null;

?>

<div class="bg-body-tertiary h-100 d-flex justify-content-center" style="padding-top: 5rem; min-height: 100vh;">
    <div class="bg-body w-95 p-3 m-3 scroll-y">
        <div class="mb-3">
            <h3>Register new employee</h3>
        </div>
        <form method="post" action="<?php echo _WEB_ROOT; ?>/employee/handle_register_user">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Department</label>
                <select class="form-select" name="department" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <?php if (count($departments) > 0) {
                      foreach ($departments as $department) : 
                  ?>
                    <option value="<?php echo $department['id'] ?>"><?php echo $department['name'] ?></option>
                  <?php endforeach; 
                      } else {
                  ?>
                      <option>No data</option>
                  <?php } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>