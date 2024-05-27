<div class="bg-body-tertiary h-100 d-flex justify-content-center" style="padding-top: 5rem">
    <div class="bg-body w-95 p-3 m-3 scroll-y">
        <div class="mb-3">
            <h3>Create new contract</h3>
        </div>
        <form method="post" action="<?php echo _WEB_ROOT; ?>/contract/hanle_create_contract">
            <div class="mb-3">
                <label for="salary" class="form-label">Salary</label>
                <input type="number" name="salary" class="form-control" id="salary" placeholder="">
            </div>
            <div class="mb-3">
                <label for="signed_date" class="form-label">Signed Date</label>
                <input type="date" name="signed_date" class="form-control" id="signed_date" placeholder="">
            </div>
            <div class="mb-3">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="date" name="start_date" class="form-control" id="start_date" placeholder="">
            </div>
            <div class="mb-3">
                <label for="end_date" class="form-label">End Date</label>
                <input type="date" name="end_date" class="form-control" id="end_date" placeholder="">
            </div>
            <div class="mb-3">
              <label for="position" class="form-label">Position</label>
              <select class="form-select" name="position" required>
                <option selected>Open this select menu</option>
                <?php if (count($positions) > 0) {
                    foreach ($positions as $position) : 
                ?>
                  <option value="<?php echo $position['id'] ?>"><?php echo $position['name'] ?></option>
                <?php endforeach; 
                    } else {
                ?>
                    <option>No data</option>
                <?php } ?>
              </select>
            </div>
            <div class="mb-3">
              <label for="contract_type" class="form-label">Contract type</label>
              <select class="form-select" name="contract_type" required>
                <option selected>Open this select menu</option>
                  <?php if (count($contractTypes) > 0) {
                      foreach ($contractTypes as $contractType) : 
                  ?>
                    <option value="<?php echo $contractType['id'] ?>"><?php echo $contractType['name'] ?></option>
                  <?php endforeach; 
                      } else {
                  ?>
                    <option>No data</option>
                <?php } ?>
              </select>
            </div>
            <div class="mb-3">
              <label for="employee" class="form-label">Employee</label>
              <select class="form-select" name="employee" required>
                <option selected>Open this select menu</option>
                  <?php if (count($employees) > 0) {
                      foreach ($employees as $employee) : 
                  ?>
                    <option value="<?php echo $employee['id'] ?>"><?php echo $employee['username'] ?></option>
                  <?php endforeach; 
                      } else {
                  ?>
                    <option>No data</option>
                <?php } ?>
              </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" class="form-control" id="description" placeholder="Write description here ...">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>