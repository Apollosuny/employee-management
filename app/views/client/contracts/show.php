<div class="container mt-4" style="min-height: 100vh;">
    <div>
      <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="<?php echo _WEB_ROOT; ?>/dashboard/contracts">Back</a>
      <div class="mt-4">
        <h2>Contract</h2>
      </div>
      <div class="bg-info-subtle contracts">
        <div class="d-flex align-items-center g-10">
          <div class="fs-5">Contract type</div>
          <div class="fs-4 fw-semibold"><?php echo $contract['contractTypeName'] ? $contract['contractTypeName'] : '' ?></div>
        </div>
        <div class="d-flex align-items-center g-10">
          <div class="fs-5">Position</div>
          <div class="fs-4 fw-semibold"><?php echo $contract['positionName'] ? $contract['positionName'] : '' ?></div>
        </div>
        <div class="d-flex align-items-center g-10">
          <div class="fs-5">Salary</div>
          <div class="fs-4 fw-semibold">$<?php echo $contract['salary'] ? $contract['salary'] : '' ?></div>
        </div>
        <div class="d-flex align-items-center g-10">
          <div class="fs-5">Signed Date</div>
          <div class="fs-4 fw-semibold"><?php echo $contract['signedDate'] ? $contract['signedDate'] : '' ?></div>
        </div>
        <div class="d-flex align-items-center g-10">
          <div class="fs-5">Start Date</div>
          <div class="fs-4 fw-semibold"><?php echo $contract['startDate'] ? $contract['startDate'] : '' ?></div>
        </div>
        <div class="d-flex align-items-center g-10">
          <div class="fs-5">End Date</div>
          <div class="fs-4 fw-semibold"><?php echo $contract['endDate'] ? $contract['endDate'] : '' ?></div>
        </div>
        <div class="d-flex align-items-center g-10">
          <div class="fs-5">Description</div>
          <div class="fs-4 fw-semibold"><?php echo $contract['description'] ? $contract['description'] : '' ?></div>
        </div>
      </div>
    </div>
</div>