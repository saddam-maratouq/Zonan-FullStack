<?php
// includes/components/sidebar.php
$nav = require __DIR__ . '/../config/nav-config.php';

$current = str_replace('\\', '/', urldecode($_SERVER['PHP_SELF']));



?>

<div class="sidebar-wrapper">
  <ul class="nav">

    <?php foreach ($nav as $item): ?>

      <?php if (empty($item['children'])): ?>
        <!-- Single link -->
        <li class="<?= $current === $item['url'] ? 'active' : '' ?>">
          <a href="<?= $item['url'] ?>">
            <i class="nc-icon <?= $item['icon'] ?>"></i>
            <p><?= $item['title'] ?></p>
          </a>
        </li>

      <?php else: ?>
        <!-- Parent: active if ANY child matches -->
        <?php
          $menuId = 'menu-' . preg_replace('/[^a-z0-9]+/i', '-', strtolower($item['title']));
          $isChildActive = false;
          foreach ($item['children'] as $child) {
              if ($current === $child['url']) { $isChildActive = true; break; }
          }
        ?>
        <li class="<?= $isChildActive ? 'active' : '' ?>">
          <a data-toggle="collapse"
             href="#<?= $menuId ?>"
             class="<?= $isChildActive ? '' : 'collapsed' ?>"
             aria-expanded="<?= $isChildActive ? 'true' : 'false' ?>">
            <i class="nc-icon <?= $item['icon'] ?>"></i>
            <p><?= $item['title'] ?> <b class="caret"></b></p>
          </a>
          <div class="collapse <?= $isChildActive ? 'show' : '' ?>" id="<?= $menuId ?>">
            <ul class="nav">
              <?php foreach ($item['children'] as $child): ?>
                <li>
                  <a href="<?= $child['url'] ?>">
                    <span class="sidebar-normal"><?= $child['title'] ?></span>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </li>

      <?php endif; ?>

    <?php endforeach; ?>

  </ul>
</div>