<ul class="nav nav-pills">
    <li class="nav-item"><a class="nav-link <?php if ($title == "Mental Status Examination") echo 'active'; ?>" href="<?php echo base_url('doctor/mental_status_exam'); ?>">Mental Status Exam Examination</a></li>
    <li class="nav-item"><a class="nav-link <?php if ($title == "Physical Examination") echo 'active'; ?>" href="<?php echo base_url('doctor/physical_exam'); ?>">Physical Examination</a></li>
    <li class="nav-item"><a class="nav-link <?php if ($title == "Neurological Examination") echo 'active'; ?>" href="<?php echo base_url('doctor/neuro_exam'); ?>">Neurological Examination</a></li>
</ul>