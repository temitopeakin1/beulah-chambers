<?php
if (!isset($TEAM_MEMBERS_LIST)) {
  include __DIR__ . '/team-members-list.php';
}
$current = isset($profile['current_slug']) ? $profile['current_slug'] : '';
$education = isset($profile['education']) ? $profile['education'] : [];
$memberships = isset($profile['memberships']) ? $profile['memberships'] : [];
$practice_areas = isset($profile['practice_areas']) ? $profile['practice_areas'] : [];
?>
<section class="partner-profile ptb--100" id="partner-profile">
  <div class="partner-profile__wrap">
    <h1 class="partner-profile__title"><?php echo htmlspecialchars($profile['title'] ?? 'Profile'); ?></h1>

    <div class="partner-profile__row">
      <div class="partner-profile__left">
        <div class="partner-profile__photo">
          <img src="<?php echo htmlspecialchars($profile['image'] ?? ''); ?>" alt="<?php echo htmlspecialchars($profile['image_alt'] ?? $profile['name'] ?? ''); ?>">
        </div>
      </div>

      <div class="partner-profile__right">
        <div class="partner-profile__col">
          <?php if (!empty($education)) : ?>
          <h2 class="partner-profile__heading">EDUCATION</h2>
          <ul class="partner-profile__list">
            <?php foreach ($education as $item) : ?>
            <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>
          <?php if (!empty($memberships)) : ?>
          <h2 class="partner-profile__heading">MEMBER</h2>
          <ul class="partner-profile__list">
            <?php foreach ($memberships as $item) : ?>
            <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>
        </div>
        <div class="partner-profile__col">
          <?php if (!empty($practice_areas)) : ?>
          <h2 class="partner-profile__heading">PRACTICE AREA</h2>
          <ul class="partner-profile__list">
            <?php foreach ($practice_areas as $item) : ?>
            <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <?php if (!empty($profile['bio'])) : ?>
    <div class="partner-profile__bio">
      <?php echo $profile['bio']; ?>
    </div>
    <?php endif; ?>

    <div class="partner-profile__others">
      <div class="partner-profile__others-list">
        <?php foreach ($TEAM_MEMBERS_LIST as $m) : if ($m['slug'] === $current) continue; ?>
        <a href="<?php echo htmlspecialchars($team_base . $m['slug'] . '.php'); ?>" class="partner-profile__other-link"><?php echo htmlspecialchars($m['name']); ?></a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
