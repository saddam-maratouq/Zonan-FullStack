<?php
// includes/sidebar.php
require_once __DIR__ . '/../config/config.php';
?>

<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
  <div class="logo">
    <a href="<?php echo BASE_URL; ?>pages/dashboard.php" class="simple-text logo-normal">
      <?php echo $currentStore['name']; ?>
    </a>
  </div>
  
  <div class="sidebar-wrapper">
    <ul class="nav">
      
      <?php foreach ($sidebarMenu as $item): ?>
        
        <?php if ($item['type'] === 'single'): ?>
          <!-- Single Item -->
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL . $item['link']; ?>">
              <i class="material-icons"><?php echo $item['icon']; ?></i>
              <p><?php echo $item['title']; ?></p>
            </a>
          </li>

        <?php elseif ($item['type'] === 'group'): ?>
          <!-- Group/Dropdown Item (Products) -->
          <li class="nav-item">
            <!-- The main clickable link that toggles the collapse -->
            <a class="nav-link" data-toggle="collapse" href="#menu-<?php echo strtolower($item['title']); ?>" aria-expanded="false">
              <i class="material-icons"><?php echo $item['icon']; ?></i>
              <p><?php echo $item['title']; ?> <b class="caret"></b></p>
            </a>
            
            <!-- The collapsible sub-menu -->
            <div class="collapse" id="menu-<?php echo strtolower($item['title']); ?>">
              <ul class="nav" style="padding-left: 20px;">
                <?php foreach ($item['submenu'] as $subitem): ?>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL . $subitem['link']; ?>">
                      <i class="material-icons" style="font-size: 16px;">chevron_right</i>
                      <p style="font-size: 13px;"><?php echo $subitem['title']; ?></p>
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </li>
          
          <!-- Add the dashed divider after Products -->
          <li style="margin: 10px 15px; border-bottom: 1px dashed #ccc;"></li>

        <?php endif; ?>

      <?php endforeach; ?>

    </ul>
  </div>
</div>