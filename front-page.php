<?php get_header(); ?>




<body>
    <?php $jumbo = get_field('jumbotron'); ?>
  <div class="jumbotron jumbotron-fluid" style="padding-top: 200px; padding-bottom: 300px; margin-bottom: 60px; background: url(<?php echo $jumbo['jumbotron_image']; ?>), center, center, no-repeat; background-attachment: fixed; background-size: cover;">
    <div class="container">
      <h1 class="display-4 text-white"><?php echo $jumbo['jumbotron_title']; ?></h1>
      <p class="lead text-white"><?php echo $jumbo['jumbotron_text']; ?></p>
    </div>
  </div>

  <div class="container" >
    <div class="row" style="padding-bottom: 60px;">
        <?php $services = get_field('services'); ?>
          <div class="col-lg-4">
            <img src="<?php echo $services['column_image1']; ?>" style="margin-bottom: 20px;" width="80" height="80">
            <h2><?php echo $services['column_heading1']; ?></h2>
            <p><?php echo $services['column_text1']; ?></p>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
          </div>
          <div class="col-lg-4">
          <img src="<?php echo $services['column_image2']; ?>" style="margin-bottom: 20px;" width="80" height="80">
            <h2><?php echo $services['column_heading2']; ?></h2>
            <p><?php echo $services['column_text2']; ?></p>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
          </div>
          <div class="col-lg-4">
          <img src="<?php echo $services['column_image3']; ?>" style="margin-bottom: 20px;" width="80" height="80">
            <h2><?php echo $services['column_heading3']; ?></h2>
            <p><?php echo $services['column_text3']; ?></p>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
          </div>
    </div>


    <hr class="featurette-divider">
    <?php $location = get_field('locations'); ?>
    <div class="row featurette" style="padding-bottom: 60px; margin-top: 40px;">
          <div class="col-md-7">
            <h2 class="featurette-heading"><?php echo $location['featurette_heading']; ?><br> <span class="text-muted"><?php echo $location['featurette_subheading'] ?></span></h2>
            <p class="lead"><?php echo $location['featurette_text'];?></p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="<?php echo $location['featurette_image']; ?>"  style="width: 500px; height: 500px;">
          </div>
        </div>
        <hr class="featurette-divider">

        <div class="row featurette" style="padding-bottom: 60px; margin-top: 40px;">
        <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="<?php echo $location['featurette_image1']; ?>"  style="width: 500px; height: 500px;">
          </div>
          <div class="col-md-7">
            <h2 class="featurette-heading"><?php echo $location['featurette_heading1']; ?><br> <span class="text-muted"><?php echo $location['featurette_subheading1'] ?></span></h2>
            <p class="lead"><?php echo $location['featurette_text1'];?></p>
          </div>

        </div>
        <hr class="featurette-divider">

  </div>
<div>
<?php get_footer(); ?>