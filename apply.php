<?php
// apply.php - application form. Posts to process_eoi.php, which validates
// everything again on the server. The job list comes from the jobs table.
require_once __DIR__ . '/db_connect.php';

$jobOptions = $conn->query('SELECT job_ref, title FROM jobs ORDER BY job_ref');

$pageTitle       = 'Apply';
$heading         = 'Job Application Form';
$slogan          = 'Tell us about yourself and the role you want.';
$metaDescription = 'Apply for a position at Goblin Great Gym.';

require __DIR__ . '/header.inc';
?>
    <main id="main">
      <h2>Your Application</h2>
      <p class="form-note">
        Fields marked <span class="required" aria-hidden="true">*</span> are required.
      </p>

      <form action="process_eoi.php" method="post">
        <fieldset class="full-width">
          <legend>Position</legend>
          <div>
            <label for="refnum"
              >Job Reference Number <span class="required" aria-hidden="true">*</span></label
            >
            <select id="refnum" name="refnum" aria-describedby="refnum-hint" required>
              <option value="">Select a position</option>
              <?php while ($job = $jobOptions->fetch_assoc()): ?>
              <option value="<?= e($job['job_ref']) ?>"><?= e($job['job_ref']) ?> – <?= e($job['title']) ?></option>
              <?php endwhile; ?>
            </select>
            <small id="refnum-hint" class="hint">Six letters or digits, for example FT1001.</small>
          </div>
        </fieldset>

        <fieldset class="full-width">
          <legend>Personal Details</legend>
          <div class="fields">
            <div>
              <label for="fname"
                >First Name <span class="required" aria-hidden="true">*</span></label
              >
              <input
                type="text"
                id="fname"
                name="fname"
                pattern="[A-Za-z]{1,20}"
                maxlength="20"
                required
              />
            </div>

            <div>
              <label for="lname"
                >Last Name <span class="required" aria-hidden="true">*</span></label
              >
              <input
                type="text"
                id="lname"
                name="lname"
                pattern="[A-Za-z]{1,20}"
                maxlength="20"
                required
              />
            </div>

            <div>
              <label for="dob"
                >Date of Birth <span class="required" aria-hidden="true">*</span></label
              >
              <input
                type="text"
                id="dob"
                name="dob"
                pattern="\d{2}/\d{2}/\d{4}"
                placeholder="dd/mm/yyyy"
                aria-describedby="dob-hint"
                required
              />
              <small id="dob-hint" class="hint">Format: dd/mm/yyyy</small>
            </div>

            <div>
              <fieldset class="options">
                <legend>Gender <span class="required" aria-hidden="true">*</span></legend>
                <span class="option">
                  <input type="radio" id="male" name="gender" value="male" required />
                  <label for="male">Male</label>
                </span>
                <span class="option">
                  <input type="radio" id="female" name="gender" value="female" />
                  <label for="female">Female</label>
                </span>
                <span class="option">
                  <input type="radio" id="other" name="gender" value="other" />
                  <label for="other">Other</label>
                </span>
              </fieldset>
            </div>
          </div>
        </fieldset>

        <fieldset class="full-width">
          <legend>Address</legend>
          <div class="fields">
            <div class="full-width">
              <label for="street"
                >Street Address <span class="required" aria-hidden="true">*</span></label
              >
              <input
                type="text"
                id="street"
                name="street"
                maxlength="40"
                required
              />
            </div>

            <div>
              <label for="suburb"
                >Suburb/Town <span class="required" aria-hidden="true">*</span></label
              >
              <input
                type="text"
                id="suburb"
                name="suburb"
                maxlength="40"
                required
              />
            </div>

            <div>
              <label for="state"
                >State <span class="required" aria-hidden="true">*</span></label
              >
              <select id="state" name="state" required>
                <option value="">Select</option>
                <option>VIC</option>
                <option>NSW</option>
                <option>QLD</option>
                <option>NT</option>
                <option>WA</option>
                <option>SA</option>
                <option>TAS</option>
                <option>ACT</option>
              </select>
            </div>

            <div>
              <label for="postcode"
                >Postcode <span class="required" aria-hidden="true">*</span></label
              >
              <input
                type="text"
                id="postcode"
                name="postcode"
                pattern="\d{4}"
                maxlength="4"
                aria-describedby="postcode-hint"
                required
              />
              <small id="postcode-hint" class="hint">Four digits, for example 3122.</small>
            </div>
          </div>
        </fieldset>

        <fieldset class="full-width">
          <legend>Contact Details</legend>
          <div class="fields">
            <div>
              <label for="email"
                >Email <span class="required" aria-hidden="true">*</span></label
              >
              <input type="email" id="email" name="email" required />
            </div>

            <div>
              <label for="phone"
                >Phone Number <span class="required" aria-hidden="true">*</span></label
              >
              <input
                type="tel"
                id="phone"
                name="phone"
                pattern="\d{8,12}"
                aria-describedby="phone-hint"
                required
              />
              <small id="phone-hint" class="hint">8 to 12 digits, no spaces.</small>
            </div>
          </div>
        </fieldset>

        <fieldset class="full-width">
          <legend>Skills</legend>
          <div class="options">
            <p class="hint" id="skills-hint">
              Select at least one skill <span class="required" aria-hidden="true">*</span>
            </p>
            <!-- skills[] sends every ticked box to PHP as an array -->
            <span class="option">
              <input type="checkbox" id="skill1" name="skills[]" value="coaching" aria-describedby="skills-hint" />
              <label for="skill1">Coaching</label>
            </span>
            <span class="option">
              <input type="checkbox" id="skill2" name="skills[]" value="nutrition" aria-describedby="skills-hint" />
              <label for="skill2">Nutrition Planning</label>
            </span>
            <span class="option">
              <input type="checkbox" id="skill3" name="skills[]" value="data" aria-describedby="skills-hint" />
              <label for="skill3">Data Analysis</label>
            </span>
          </div>

          <label for="otherskills">Other Skills</label>
          <textarea id="otherskills" name="otherskills" rows="4"></textarea>
        </fieldset>

        <div class="full-width">
          <button type="submit">Submit Application</button>
        </div>
      </form>
    </main>

<?php require __DIR__ . '/footer.inc'; ?>
