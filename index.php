<?php
// index.php - home page. Shared layout comes from the include files.
$pageTitle       = 'Home';
$heading         = 'Goblin Great Gym';
$slogan          = 'Train hard. Grow strong. Get Goblin fit.';
$metaDescription = 'Goblin Great Gym builds digital platforms for gyms and fitness communities.';

require __DIR__ . '/header.inc';
?>
    <main id="main">
      <section aria-labelledby="about-heading">
        <h2 id="about-heading">Who We Are</h2>
        <p class="intro">
          Goblin Great Gym builds digital platforms for gyms and fitness
          communities — covering class bookings, membership management, and
          performance tracking, all in one place.
        </p>
        <p>
          We are hiring across technology, design and data.
          <a class="button-link" href="jobs.php">View current vacancies</a>
        </p>
      </section>

      <section aria-labelledby="programs-heading">
        <h2 id="programs-heading">Our Programs</h2>
        <table>
          <caption>
            Membership tiers and included services
          </caption>
          <thead>
            <tr>
              <th scope="col">Tier</th>
              <th scope="col" colspan="2">Included Services</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Basic</th>
              <td colspan="2">Gym access, class booking app</td>
            </tr>
            <tr>
              <th scope="row">Pro</th>
              <td>Gym access, class booking app</td>
              <td>Performance tracking dashboard</td>
            </tr>
            <tr>
              <th scope="row" rowspan="2">Elite</th>
              <td colspan="2">All Pro features</td>
            </tr>
            <tr>
              <td>1-on-1 coaching</td>
              <td>Nutrition planning</td>
            </tr>
          </tbody>
        </table>
      </section>

      <section aria-labelledby="acknowledgement-heading">
        <h2 id="acknowledgement-heading">Acknowledgement of Country</h2>
        <p>
          Goblin Great Gym acknowledges the Wurundjeri Woi Wurrung and Bunurong
          peoples of the Kulin Nation as the Traditional Owners of the lands on
          which we operate, and pays respect to Aboriginal and Torres Strait
          Islander Elders past and present. We are committed to creating
          inclusive employment pathways and welcome applications from Aboriginal
          and Torres Strait Islander peoples.
        </p>
      </section>
    </main>

<?php require __DIR__ . '/footer.inc'; ?>
