<?php $department = isset($department) ? $department : [] ?>
<div class="bg-body-tertiary h-100 d-flex justify-content-center align-items-center">
    <div class="bg-body w-95 h-95 p-3">
        <div class="mb-3">
            <h3>Edit department</h3>
        </div>
        <form method="post" action="<?php echo _WEB_ROOT; ?>/department/handle_update_department/<?php echo $department['id']; ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" value="<?php echo $department['name'] ? $department['name'] : "" ?>" class="form-control" id="name" placeholder="Input position name here ...">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" value="<?php echo $department['phone'] ? $department['phone'] : "" ?>" class="form-control" id="name" placeholder="Input position name here ...">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Email</label>
                <input type="text" name="email" value="<?php echo $department['email'] ? $department['email'] : "" ?>" class="form-control" id="name" placeholder="Input position name here ...">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Address</label>
                <input type="text" name="address" value="<?php echo $department['address'] ? $department['address'] : "" ?>" class="form-control" id="name" placeholder="Input position name here ...">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" value="<?php echo $department['description'] ? $department['description'] : "" ?>" name="description" class="form-control" id="description" placeholder="Write description here ...">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>