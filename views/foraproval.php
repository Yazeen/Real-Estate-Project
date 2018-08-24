<?php include'header.php';
//FALSE header('location: index.php');
if( !isset($_SESSION['role']) ) header('location: index.php');
else if ( ($_SESSION['role'] != 'admin' && $_SESSION['role'] != 'moderator') ) header('location: index.php');
?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <!-- <span class="pull-right"><a href="index.php">Home</a> / Buy, Sell & Rent Properties.</span> -->
	<?php if( isset($_SESSION['username'] ) ) echo '<span class="pull-right">Hi, '.ucwords($_SESSION['username']). '.</span>'; 
	else echo '<span class="pull-right"> Hi, Guest.</span>'; ?>
    <h2><u>Pending For Approval</u></h2>
</div>
</div>
<!-- banner -->

<?php  ?>


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 ">

<div class="hot-properties hidden-xs"></div>

</div>

<div class="col-lg-9 col-sm-8">
<div class="sortby clearfix">

</div>
<div class="row">

    <?php
    require_once ('../vendor/autoload.php');
    use App\Classes\RealEstate\RealEstate;
    $real_estate = new RealEstate();
    $allData = $real_estate->index();
	$i = 0;

    foreach ($allData as $oneData){
        $image = explode(",",$oneData->images);
		if( $oneData->approved == 'false' ) 
		{
			$i++;
    ?>

     <!-- properties -->
      <div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder"><img src="../resources/images/properties/<?php echo $image[0];?>" class="img-responsive" alt="properties">
        </div>
        <h4><a href="#"><?php echo $oneData->name;?></a></h4>
        <p class="price">Price: <?php echo number_format( $oneData->monthly_charges );?> INR.</p>
        <a class="btn btn-primary" href="approve.php?id=<?php echo $oneData->id;?>">Approve</a>
		 <a class="btn btn-secondary" href="delete.php?id=<?php echo $oneData->id;?>">Delete</a>
      </div>
      </div>
      <!-- properties -->
    <?php } } ?>

</div>
<?php if( $i == 0 ) echo '<h3>No Property listings pending for approval.</h3>'; else echo '<div class="pull-left result">Showing:' .$i. ' of ' .$i. '</div>'; ?>
</div>
</div>
</div>
</div>

<?php include'footer.php';?> 