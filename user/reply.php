<?php
session_start();
require_once '../admin/config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="container-fluid">
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Referee's Feedback</h5>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" id="refereeForm">
                        <div class="form-group">
                            <label class="control-label">Applicant's Name</label>
                            <div>
                                <input type="text" class="form-control input-md" name="name" value="<?php echo $name; ?>">
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label class="control-label">Enter Your View About the Applicant</label>
                            <div class='col-md-6'>
                                <textarea class="form-control input-md" name="view" placeholder="Enter your view about the applicant" rows="15" style="width: 200%"></textarea>
                            </div>
                        </div> 
                        <div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS (Popper.js included) and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#exampleModalCenter').modal('show');
    });
    </script>
    
</body>
</html>
    
