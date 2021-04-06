<ul class="nav nav-pills">
    <li class="nav-item"><a class="nav-link <?php if ($title == "Transfer Notes") echo 'active'; ?>" href="<?php echo base_url('doctor/transfer_notes'); ?>">Transfer Notes</a></li>
    <!-- <li class="nav-item"><a class="nav-link" href="">Transfer In Notes</a></li> -->
    <li class="nav-item"><a class="nav-link <?php if ($title == "Progress Notes") echo 'active'; ?>" href="<?php echo base_url('doctor/progress_notes'); ?>">Progress Notes</a></li>
    <li class="nav-item"><a class="nav-link <?php if ($title == "Doctors Order") echo 'active'; ?>" href="<?php echo base_url('doctor/doctors_order'); ?>">Doctor's Order</a></li>
    <!-- <li class="nav-item"><a class="nav-link" href="">Transfer Out Notes</a></li> -->
</ul>