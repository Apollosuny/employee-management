<div class="bg-body-tertiary h-100 d-flex justify-content-center" style="padding-top: 5rem">
    <div class="bg-body w-95 p-3 m-3 scroll-y">
        <div class="mb-3">
            <h3>Create new contract type</h3>
        </div>
        <form method="post" action="<?php echo _WEB_ROOT; ?>/contractType/hanle_create_contract_type">
            <div class="mb-3">
                <label for="name" class="form-label">Type name</label>
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