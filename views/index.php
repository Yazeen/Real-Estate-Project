<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <!-- <span class="pull-right"><a href="index.php">Home</a> / Buy, Sell & Rent Properties.</span> -->
	<?php if( isset($_SESSION['username'] ) ) echo '<span class="pull-right">Hi, '.ucwords($_SESSION['username']). '.</span>'; 
	else echo '<span class="pull-right"> Hi, Guest.</span>'; ?>
    <h2 class="heading">Homepage</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 ">

  <div class="search-form">
    <h4><span class="glyphicon glyphicon-search"></span> Search Properties here</h4>
		<form action="search-result.php" method="get" class="form form-group">
            <input type="text" class="form-control" name="search" placeholder="Search by Name/Address">
            <button class="btn btn-primary">Search</button>
		</form>
  </div>



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
		if( $oneData->approved == 'true' ) 
		{
			$i++;
    ?>

     <!-- properties -->
      <div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder"><img src="../resources/images/properties/<?php echo $image[0];?>" class="img-responsive" alt="properties">
        </div>
        <h4><a href="property-detail.php?id=<?php echo $oneData->id;?>"><?php echo $oneData->name;?></a></h4>
        <p class="price">Price: <?php echo number_format( $oneData->monthly_charges );?> INR.</p>
        <a class="btn btn-primary" href="property-detail.php?id=<?php echo $oneData->id;?>">View Details</a>
      </div>
      </div>
      <!-- properties -->
    <?php } } ?>

</div>
<?php echo '<div class="pull-left result">Showing:' .$i. ' of ' .$i. '</div>'; ?>
</div>
</div>
</div>
</div>

<?php include'footer.php'; ?> 