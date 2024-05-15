<div class="bg-body-tertiary h-100 d-flex justify-content-center align-items-center">
    <div class="bg-body w-95 h-95 p-3">
        <div class="mb-3">
            <h3>Create new position</h3>
        </div>
        <form method="post" action="<?php echo _WEB_ROOT; ?>/position/hanle_create_position">
            <div class="mb-3">
                <label for="name" class="form-label">Position name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Input position name here ...">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" class="form-control" id="description" placeholder="Write description here ...">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>