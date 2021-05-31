<?php
include("includes/init.php");
$nav_feedback_class = 'live';

// form CSS classes
$show_form = True;
$show_confirmation = False;

// feedback message CSS classes
$name_feedback_class = 'hidden';
$email_feedback_class = 'hidden';
$transportation_feedback_class = 'hidden';
$numOfAttendees_feedback_class = 'hidden';
$experience_feedback_class = 'hidden';
$activity_feedback_class = 'hidden';

// values
$name = '';
$email = '';
$default = '';
$car = '';
$bus = '';
$taxi_uber_lyft = '';
$bike = '';
$walking = '';
$numOfAttendees = '';
$experience = '';
$giveaway = '';
$ciderTasting = '';
$performance = '';
$appleTrail = '';

// sticky values
$sticky_name = '';
$sticky_email = '';
$sticky_default = '';
$sticky_car = '';
$sticky_bus = '';
$sticky_taxi_uber_lyft = '';
$sticky_bike = '';
$sticky_walking = '';
$sticky_numOfAttendees = '';
$sticky_experience = '';
$sticky_giveaway = '';
$sticky_ciderTasting = '';
$sticky_performance = '';
$sticky_appleTrail = '';

// Did the user submit the form?
if (isset($_POST["send"])) {

  //Get HTTP request user data
  $name = $_POST["name"]; //untrusted
  $email = $_POST["email"]; //untrusted
  $transportation = $_POST["mode-of-transportation"]; //untrusted
  $numOfAttendees = $_POST["number-of-attendees"]; //untrusted
  $experience = $_POST["how-was-your-experience"]; //untrusted
  $giveaway = $_POST["activity-one"]; //untrusted
  $ciderTasting = $_POST["activity-two"]; //untrusted
  $performance = $_POST["activity-three"]; //untrusted
  $appleTrail = $_POST["activity-four"]; //untrusted

  $form_valid = TRUE;

  // Name is required. Is it empty?
  if ( empty($name) ) {
    $form_valid = FALSE;
    $name_feedback_class = '';
  }

  // Email is required. Is it empty?
  if ( empty($email) ) {
    $form_valid = FALSE;
    $email_feedback_class = '';
  }

  // Transportation field is required. Is it empty?
  if ( empty($transportation) ) {
    $form_valid = FALSE;
    $transportation_feedback_class = '';
  }

  // Number of Attendees field is required. Is it empty?
  if ( empty($numOfAttendees) ) {
    $form_valid = FALSE;
    $numOfAttendees_feedback_class = '';
  }

  // Experience field is required. Is it empty?
  if ( $experience == '' ) {
    $form_valid = FALSE;
    $experience_feedback_class = '';
  }

  // Was at least one of the check boxes checked off?
  if ( empty($giveaway) && empty($ciderTasting) && empty($performance) && empty($appleTrail) ) {
    $form_valid = FALSE;
    $activity_feedback_class = '';
  }

  if ($form_valid) {
    // form is valid, hide form, and show the confirmation page
    $show_form = False;
    $show_confirmation = True;
  } else {
    // form is invlaid, set the sticky values
    $sticky_name = $name; //tainted
    $sticky_email = $email; //tainted
    $sticky_default = ( ($transportation == '') ? 'selected' : '' );
    $sticky_car = ( ($transportation == 'car') ? 'selected' : '' );
    $sticky_bus = ( ($transportation == 'bus') ? 'selected' : '' );
    $sticky_taxi_uber_lyft = ( ($transportation == 'taxi-uber-lyft') ? 'selected' : '' );
    $sticky_bike = ( ($transportation == 'bike') ? 'selected' : '' );
    $sticky_walking = ( ($transportation == 'walking') ? 'selected' : '' );
    $sticky_numOfAttendees = $numOfAttendees; //tainted
    $sticky_experience = $experience; //tainted
    $sticky_giveaway = ( empty($giveaway) ? '' : 'checked' );
    $sticky_ciderTasting = ( empty($ciderTasting) ? '' : 'checked' );
    $sticky_performance = ( empty($performance) ? '' : 'checked' );
    $sticky_appleTrail = ( empty($appleTrail) ? '' : 'checked' );
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ithaca Apple Harvest Festival Feedback Form</title>
  <link rel="stylesheet" type="text/css" href="/public/styles/site.css"/>
  <!-- <script src="scripts/jquery-3.5.1.js" type="text/javascript"></script> -->
  <!-- <script src="scripts/validation.js" type="text/javascript" async></script> -->
</head>
<body>

  <?php include("includes/header.php"); ?>

  <?php if ($show_confirmation) { ?>
    <section>
      <div class= "increase-font">
        <h1>Feedback form Confirmation</h2>
      </div>
      <div class= "increase-fontOne">
        <h3>Your response has been recorded</h3>
        <h5>Thank you <em>&quot;<?php echo htmlspecialchars($name); ?>&quot;</em> for taking time out of your day to provide feedback for the Ithaca Apple Harvest Festival</h5>
        <h5>We will email you shortly at <em>&quot;<?php echo htmlspecialchars($email); ?>&quot;</em> to follow up with your experiences at the festival.
      </div>
      <div class= "increase-font">
        <h4>The following are your responses to the form</h4>
      </div>
      <div class= "increase-fontOne">
        <h5>Transportation: <em><?php echo htmlspecialchars($transportation); ?></em></h5>
        <h5>Number of Attendees: <em><?php echo htmlspecialchars($numOfAttendees); ?></em></h5>
        <h5>Experience: <em><?php echo htmlspecialchars($experience); ?></em></h5>
        <h5>List of Activities that you participated in: </h5>
        <h6><em><?php echo htmlspecialchars($giveaway); ?></em></h6>
        <h6><em><?php echo htmlspecialchars($ciderTasting); ?></em></h6>
        <h6><em><?php echo htmlspecialchars($performance); ?></em></h6>
        <h6><em><?php echo htmlspecialchars($appleTrail); ?></em></h6>
      </div>
    </section>
  <?php } ?>

  <?php if ($show_form) { ?>
    <section>
      <form id="feedBack" method="post" action="/feedback" novalidate>
        <div id="instructions">
          ***Please fill out the following form to provide feedback about your experience at the Ithaca Apple Harvest Festival***
        </div>
        <div id="nameFeedback" class="error <?php echo $name_feedback_class; ?>">
          <p>Please enter your full name</p>
        </div>
        <div class="label-and-input">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($sticky_name); ?>"/>
        </div>
        <div id="emailFeedback" class="error <?php echo $email_feedback_class; ?>">
          <p>Please enter your email address</p>
        </div>
        <div class="label-and-input">
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($sticky_email); ?>"/>
        </div>
        <div id="transportationFeedback" class="error <?php echo $transportation_feedback_class; ?>">
          <p>Please select how you arrived at the festival</p>
        </div>
        <div class="label-and-input">
          <label for="mode-of-transportation">Primary Mode of Transportation:</label>
          <select name="mode-of-transportation" id="mode-of-transportation" required>
            <option value="" <?php echo $sticky_default; ?>>Select how you arrived at the festival</option>
            <option value="car" <?php echo $sticky_car; ?>>Car</option>
            <option value="bus" <?php echo $sticky_bus; ?>>Bus</option>
            <option value="taxi-uber-lyft" <?php echo $sticky_taxi_uber_lyft; ?>>Taxi/Uber/Lyft</option>
            <option value="bike" <?php echo $sticky_bike; ?>>Bike</option>
            <option value="walking" <?php echo $sticky_walking; ?>>Walking</option>
          </select>
        </div>
        <div id="attendeeFeedback" class="error <?php echo $numOfAttendees_feedback_class; ?>">
          <p>Please select the number of visitors (including yourself; please select a number greater than 0)</p>
        </div>
        <div class="label-and-input">
          <label for="number-of-attendees">Number of Attendee(s):</label>
          <input type="number" name="number-of-attendees" id="number-of-attendees" value="<?php echo htmlspecialchars($sticky_numOfAttendees); ?>" min="1" />
        </div>
        <div id="experienceFeedback" class="error <?php echo $experience_feedback_class; ?>">
          <p>Please write about your experiences at the festival today</p>
        </div>
        <div class="label-and-input">
          <label for="how-was-your-experience">How was your experience?</label>
          <textarea id="how-was-your-experience" name="how-was-your-experience" rows="10" cols="80"><?php echo htmlspecialchars($sticky_experience); ?></textarea>
        </div>
        <div id="end">
          <div id="activitiesFeedback" class="error-final <?php echo $activity_feedback_class; ?>">
            <p>Please click on all of the boxes below for all of the activitie(s) that you participated in</p>
          </div>
          <div class="lastP">
            Please select all of the activitie(s) that you participated in:
          </div>
          <div class="label-and-input-check">
            <div class="box">
              <div class="inputer">
                <input type="checkbox" id="activity-one" name="activity-one" value="giveaway" <?php echo $sticky_giveaway; ?>>
              </div>
              <div class="labeler">
                <label for="activity-one">I participated in the giveaway</label>
              </div>
            </div>
            <div class="box">
              <div class="inputer">
                <input type="checkbox" id="activity-two" name="activity-two" value="craft-cider-tasting" <?php echo $sticky_ciderTasting; ?>>
              </div>
              <div class="labeler">
                <label for="activity-two">I participated in the craft cider tasting</label>
              </div>
            </div>
            <div class="box">
              <div class="inputer">
                <input type="checkbox" id="activity-three" name="activity-three" value="live-performance" <?php echo $sticky_performance; ?>>
              </div>
              <div class="labeler">
                <label for="activity-three">I watched the live performances</label>
              </div>
            </div>
            <div class="box">
              <div class="inputer">
                <input type="checkbox" id="activity-four" name="activity-four" value="apple-harvest-trail" <?php echo $sticky_appleTrail; ?>>
              </div>
              <div class="labeler">
                <label for="activity-four">I participated in the Apple Harvest Trail</label>
              </div>
            </div>
          </div>
        </div>
        <button type="submit" name="send" id="send">Submit Feedback</button>
      </form>
    </section>
  <?php } ?>

  <?php include("includes/footer.php"); ?>

</body>
</html>
