<li class="nav-header">

                <li class="active">

                <a href="index.php"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a></li>
                
                <?php
                    // Connect to the database
                    //require_once 'index.php';
                    
                    // Check the user's level and set the display value for the "Referee" bar
                    if ($row['level'] === 'Masters') {
                        $refereeDisplay = 'block';
                    } else {
                        $refereeDisplay = 'none';
                    }
                    ?>
                <li id="referee" style="display: <?php echo $refereeDisplay; ?>">
                    <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Referee</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="" data-toggle="modal" data-target="#exampleModalCenter">Refer Referees</a></li>
                    </ul>
                </li>
				<li>

                    <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Profile</span><span class="fa arrow"></span></a>

                    <ul class="nav nav-second-level collapse">

                        <li><a href="profile.php">View Profile</a></li>

                    </ul>

                </li>
                

			<li>

                    <a href="fees.pdf"><i class="fa fa-money"></i> <span class="nav-label">Fees Structure</span></a>

                </li>

				<li>

                    <a href="status.php"><i class="fa fa-money"></i> <span class="nav-label">Get Admission Letter</span></a>

                </li>
                

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Referees</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
                <div class="modal-body">
                <form role="form" method="POST" action="../admin/add_referee.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label">Title</label>
                        <div>
                            <input type="text" class="form-control input-md" name="title"  placeholder="Enter referee's title" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Name</label>
                        <div>
                            <input type="text" class="form-control input-md" name="name"  placeholder="Enter referee's fullName" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <div>
                            <input type="email" class="form-control input-md" name="email" placeholder="Enter referee's email" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
        </div>
        </div>
    </div>
</div>
