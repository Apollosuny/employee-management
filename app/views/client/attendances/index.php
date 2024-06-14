<div class="container" style="min-height: 100vh;">
  <div class="d-flex justify-content-between align-items-center mt-4">
    <div class="my-2"><a
        class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
        href="<?php echo _WEB_ROOT; ?>/dashboard">Back</a></div>
    <div>
      <form method="post" action="<?php echo _WEB_ROOT; ?>/attendance/checkin">
        <button type="submit" class="btn btn-info">Check in</button>
      </form>
    </div>
  </div>

  <table class="table table-striped mt-3">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Date</th>
        <th scope="col">Clock In At</th>
        <th scope="col">Clock Out At</th>
        <th scope="col">Work Type</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php if (count($attendances) > 0) {
        foreach ($attendances as $attendance):
          ?>
          <tr>
            <td><?php echo $attendance['id']; ?></td>
            <td><?php echo $attendance['baseDate']; ?></td>
            <td><?php echo $attendance['clockInAt']; ?></td>
            <td><?php echo $attendance['clockOutAt'] ? $attendance['clockOutAt'] : '--'; ?></td>
            <td><?php echo $attendance['workType']; ?></td>
            <td>
              <form method="post" action="<?php echo _WEB_ROOT; ?>/attendance/checkout/<?php echo $attendance['id'] ?>">
                <button type="submit" class="btn btn-link btn-sm btn-rounded">
                  Clockout
                </button>
              </form>
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