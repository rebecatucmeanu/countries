<body>
<div class="wrapper">
    <nav id="sidebar">
        <div class="mb-3">
            <h4>Countries</h4>
        </div>
        <ul class="list-unstyled">
            <?php
                $classHome = '';
                $classES = '';
                $classFR = '';
                $classDE = '';
                $classIT = '';
                $classUK = '';
                $classPT = '';
                $classNE = '';
                $classSWE = '';
                $classSWI = '';
                $classNOR = '';

                if ($selected == 'Home') {
                    $classHome = 'active';
                } elseif ($selected == 'Spain') {
                    $classES = 'active';
                } elseif ($selected == 'France') {
                    $classFR = 'active';
                } elseif ($selected == 'Germany') {
                    $classDE = 'active';
                } elseif ($selected == 'Italy') {
                    $classIT = 'active';
                } elseif ($selected == 'United Kingdom') {
                    $classUK = 'active';
                } elseif ($selected == 'Portugal') {
                    $classPT = 'active';
                } elseif ($selected == 'Netherlands') {
                    $classNE = 'active';
                } elseif ($selected == 'Sweden') {
                    $classSWE = 'active';
                } elseif ($selected == 'Switzerland') {
                    $classSWI = 'active';
                } elseif ($selected == 'Norway') {
                    $classNOR = 'active';
                }
            ?>
            <li><a href="<?php echo base_url()?>Countries/showCountry1/Home" class="home <?php echo $classHome ?>" >Home</a></li>
            <li><a href="<?php echo base_url()?>Countries/showCountry2/Spain" class="spain <?php echo $classES ?>">Spain</a></li>
            <li><a href="<?php echo base_url()?>Countries/showCountry3/France" class="france <?php echo $classFR ?>">France</a></li>
            <li><a href="<?php echo base_url()?>Countries/showCountry4/Germany" class="germany <?php echo $classDE ?>">Germany</a></li>
            <li><a href="<?php echo base_url()?>Countries/showCountry5/Italy" class="italy <?php echo $classIT ?>">Italy</a></li>
            <li><a href="<?php echo base_url()?>Countries/showCountry6/UnitedKingdom" class="uk <?php echo $classUK ?>">United Kingdom</a></li>
            <li><a href="<?php echo base_url()?>Countries/showCountry7/Portugal" class="portugal" <?php echo $classPT ?>>Portugal</a></li>
            <li><a href="<?php echo base_url()?>Countries/showCountry8/Netherlands" class="netherlands <?php echo $classNE ?>">Netherlands</a></li>
            <li><a href="<?php echo base_url()?>Countries/showCountry9/Sweden" class="sweden <?php echo $classSWE ?>">Sweden</a></li>
            <li><a href="<?php echo base_url()?>Countries/showCountry10/Switzerland" class="switzerland <?php echo $classSWI ?>">Switzerland</a></li>
            <li><a href="<?php echo base_url()?>Countries/showCountry11/Norway" class="norway <?php echo $classNOR ?>">Norway</a></li>
        </ul>
    </nav>