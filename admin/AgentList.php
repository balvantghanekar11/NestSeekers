<!doctype html>
<html lang="en">

<!-- Mirrored from demos.creative-tim.com/bs3/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 May 2019 15:14:39 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <?php include_once("LoadFile1.php");?>
    <?php include_once("Connection.php");?>
</head>
<?php

/* Update Perform on IsActive field Start*/
    if(isset($_REQUEST['Active']))
    {
        $up="update tblUser set IsActive='".$_REQUEST['Active']."' where UserID='".$_REQUEST['UID']."'";
        mysqli_query($con,$up);
    }
/* Update Perform on IsActive field End*/
/* Update Perform on IsVeriified field Start*/
    if(isset($_REQUEST['Verified']))
    {
        $up="update tblUser set IsVerified='".$_REQUEST['Verified']."' where UserID='".$_REQUEST['UID']."'";
        mysqli_query($con,$up);
    }
/* Update Perform on IsVeriified field End*/
?>


<body >
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

	<div class="wrapper">

	    <!-- SideMenu -->
            <?php include_once("SideBarMenu.php");?>

        <!-- SideMenu -->
	    <div class="main-panel">
			<?php include_once("NavBar.php");?>

			<div class="content">
					<div class="container-fluid"><a href="">Agent List /</a><hr>
                         <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">assignment</i>
                </div>

                <div class="card-content">
                    <h4 class="card-title">Agent List</h4>
                    <div class="toolbar">
                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>
                    <div class="material-datatables">
                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                  <!--   <th>Sold Project</th> -->
                                    <!-- <th>Expire Membership </th> -->
                                    <th>Active</th>
                                    <th>Verified</th>
                                    <!-- <th class="disabled-sorting text-right">Actions</th> -->
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                   <!--  <th>Sold Project</th> -->
                                <!--     <th>Expire Membership </th> -->
                                    <th>Active</th>
                                    <th>Verified</th>
                                    <!-- <th class="text-right">Actions</th> -->
                                </tr>
                            </tfoot>
                            <tbody>
                                <!-- Select Agent  -->

                                <?php
                                    $select_Agent="select * from tblUser where UserType='A'";
                                    $ExecuteAgent=mysqli_query($con,$select_Agent) or die(mysqli_error($con));
                                    while($fetchAgent=mysqli_fetch_array($ExecuteAgent))
                                    {
                                ?>
                                <tr>
                                    <td><?php echo $fetchAgent['FirstName']." ".$fetchAgent['MiddleName']." ".$fetchAgent['LastName'];?></td>
                                   <!--  <td>3</td> -->
                                   <!--  <td>180 day</td> -->
                                    <td>
                                        <?php if($fetchAgent['IsActive']==0)
                                          {
                                        ?>
                                            <a href="?UID=<?php echo $fetchAgent['UserID']; ?>&Active=1" class="btn btn-simple btn-danger btn-icon "><i class="material-icons" style="font-size: 25px;">close</i></a>                                      
                                        <?php
                                            } 
                                            else
                                            {
                                        ?>
                                            <a href="?UID=<?php echo $fetchAgent['UserID']; ?>&Active=0" class="btn btn-simple btn-danger btn-icon "><i class="material-icons" style="color: green;font-size: 25px;">done</i></a>
                                        <?php
                                            }
                                        ?>                                 
                                    </td>
                                    <td>
                                        <?php if($fetchAgent['IsVerified']==0)
                                          {
                                        ?>
                                            <a href="?UID=<?php echo $fetchAgent['UserID']; ?>&Verified=1" class="btn btn-simple btn-danger btn-icon "><i class="material-icons" style="font-size: 25px;">close</i></a>                                      
                                        <?php
                                            } 
                                            else
                                            {
                                        ?>
                                            <a href="?UID=<?php echo $fetchAgent['UserID']; ?>&Verified=0" class="btn btn-simple btn-danger btn-icon "><i class="material-icons" style="color: green;font-size: 25px;">done</i></a>
                                        <?php
                                            }
                                        ?>                                 
                                    </td>
                                   <!--  <td class="text-right">
                                        <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">favorite</i></a>
                                        <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="material-icons">dvr</i></a>
                                        <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>
                                    </td>
 -->                                </tr>
                                <?php
                                    }
                                ?>
                               
                            </tbody>
                        </table>
                    </div>
                </div><!-- end content-->
            </div><!--  end card  -->
        </div> <!-- end col-md-12 -->
    </div> <!-- end row -->

                    </div>
			</div>
			
            <?php include_once("Footer.php"); ?>
			
		</div>
	</div>
	<!-- fixed Plugin -->
    <!-- fixed plugin -->

</body>
  
 <?php include_once("LoadJS.php");?>

<!-- Mirrored from demos.creative-tim.com/bs3/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 May 2019 15:15:15 GMT -->
</html>
