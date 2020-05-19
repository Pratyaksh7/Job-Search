<!-- partial: -->
		<nav class="sidebar">
      <div class="sidebar-header">
        <a href="index.php" class="sidebar-brand">
          <img src="<?= base_url(); ?>assets/images/nd-logo.gif" width="20px"> n<span>dimensionstudio</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="<?= base_url("opportunity"); ?>" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">Table Block</li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="layout"></i>
              <span class="link-title">Jobs</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="emails">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="<?= base_url("admin/get_industry_list"); ?>" class="nav-link">Industry</a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url("admin/get_function_list"); ?>" class="nav-link">Function</a>
                </li>
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a href="modal.php" class="nav-link">
              <i class="link-icon" data-feather="calendar"></i>
              <span class="link-title">Modal</span>
            </a>
          </li>
          <li class="nav-item nav-category">Forms</li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
              <i class="link-icon" data-feather="feather"></i>
              <span class="link-title">Form Elements</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="uiComponents">
              <ul class="nav sub-menu">
				<li class="nav-item">
                  <a href="basic-elements.php" class="nav-link">Basic Elements</a>
                </li>
                <li class="nav-item">
                  <a href="advance-elements.php" class="nav-link">Advanced Elements</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Pages</li>
		  <li class="nav-item">
            <a href="login.php" class="nav-link">
              <i class="link-icon"  data-feather="unlock"></i>
              <span class="link-title">Login</span>
            </a>
          </li>
		  <li class="nav-item">
            <a href="register.php" class="nav-link">
              <i class="link-icon" data-feather="user"></i>
              <span class="link-title">Register</span>
            </a>
          </li>
		  <li class="nav-item">
            <a href="404.php" class="nav-link">
              <i class="link-icon" data-feather="cloud-off"></i>
              <span class="link-title">404</span>
            </a>
          </li>
         </ul>
      </div>
    </nav>
 