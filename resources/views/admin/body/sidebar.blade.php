<nav class="sidebar">
    <div class="sidebar-header">
      <a href="#" class="sidebar-brand">
        Matjel<span>R Estate</span>
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
          <a href="{{ route('admin.dashboard') }}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item nav-category">RealEstate</li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">Property Type </span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="emails">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{ route('all.type') }}" class="nav-link">All Type</a>
              </li>
              
              <li class="nav-item">
                <a href="{{ route('add.type') }}" class="nav-link">Add Type</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#amenitie" role="button" aria-expanded="false" aria-controls="emails">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">Amenitie  </span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="amenitie">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{ route('all.amenitie') }}" class="nav-link">All Amenitie</a>
              </li>
              <li class="nav-item">
                <a href="pages/email/read.html" class="nav-link">Add Amenitie</a>
              </li>

            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#property" role="button" aria-expanded="false" aria-controls="emails">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">Property  </span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="property">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{ route('all.property') }}" class="nav-link">All Property</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('add.property') }}" class="nav-link">Add Property</a>
              </li>

            </ul>
          </div>
        </li>



        <li class="nav-item nav-category">Components</li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
            <i class="link-icon" data-feather="feather"></i>
            <span class="link-title">UI Kit</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="uiComponents">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="pages/ui-components/accordion.html" class="nav-link">Accordion</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/alerts.html" class="nav-link">Alerts</a>
              </li>
              
              
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false" aria-controls="advancedUI">
            <i class="link-icon" data-feather="anchor"></i>
            <span class="link-title">Advanced UI</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="advancedUI">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="pages/advanced-ui/cropper.html" class="nav-link">Cropper</a>
              </li>
              <li class="nav-item">
                <a href="pages/advanced-ui/owl-carousel.html" class="nav-link">Owl carousel</a>
              </li>
              <li class="nav-item">
                <a href="pages/advanced-ui/sortablejs.html" class="nav-link">SortableJs</a>
              </li>
              <li class="nav-item">
                <a href="pages/advanced-ui/sweet-alert.html" class="nav-link">Sweet Alert</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#forms" role="button" aria-expanded="false" aria-controls="forms">
            <i class="link-icon" data-feather="inbox"></i>
            <span class="link-title">Forms</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="forms">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="pages/forms/basic-elements.html" class="nav-link">Basic Elements</a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced-elements.html" class="nav-link">Advanced Elements</a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">Editors</a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/wizard.html" class="nav-link">Wizard</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link"  data-bs-toggle="collapse" href="#charts" role="button" aria-expanded="false" aria-controls="charts">
            <i class="link-icon" data-feather="pie-chart"></i>
            <span class="link-title">Charts</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="charts">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="pages/charts/apex.html" class="nav-link">Apex</a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">ChartJs</a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">Flot</a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/morrisjs.html" class="nav-link">Morris</a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/peity.html" class="nav-link">Peity</a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/sparkline.html" class="nav-link">Sparkline</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#tables" role="button" aria-expanded="false" aria-controls="tables">
            <i class="link-icon" data-feather="layout"></i>
            <span class="link-title">Table</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="tables">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="pages/tables/basic-table.html" class="nav-link">Basic Tables</a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data-table.html" class="nav-link">Data Table</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#icons" role="button" aria-expanded="false" aria-controls="icons">
            <i class="link-icon" data-feather="smile"></i>
            <span class="link-title">Icons</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="icons">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="pages/icons/feather-icons.html" class="nav-link">Feather Icons</a>
              </li>
              <li class="nav-item">
                <a href="pages/icons/flag-icons.html" class="nav-link">Flag Icons</a>
              </li>
              <li class="nav-item">
                <a href="pages/icons/mdi-icons.html" class="nav-link">Mdi Icons</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item nav-category">Pages</li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" role="button" aria-expanded="false" aria-controls="general-pages">
            <i class="link-icon" data-feather="book"></i>
            <span class="link-title">Special pages</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="general-pages">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="pages/general/blank-page.html" class="nav-link">Blank page</a>
              </li>
              <li class="nav-item">
                <a href="pages/general/faq.html" class="nav-link">Faq</a>
              </li>
              <li class="nav-item">
                <a href="pages/general/invoice.html" class="nav-link">Invoice</a>
              </li>
              <li class="nav-item">
                <a href="pages/general/profile.html" class="nav-link">Profile</a>
              </li>
              <li class="nav-item">
                <a href="pages/general/pricing.html" class="nav-link">Pricing</a>
              </li>
              <li class="nav-item">
                <a href="pages/general/timeline.html" class="nav-link">Timeline</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#authPages" role="button" aria-expanded="false" aria-controls="authPages">
            <i class="link-icon" data-feather="unlock"></i>
            <span class="link-title">Authentication</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="authPages">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="pages/auth/login.html" class="nav-link">Login</a>
              </li>
              <li class="nav-item">
                <a href="pages/auth/register.html" class="nav-link">Register</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#errorPages" role="button" aria-expanded="false" aria-controls="errorPages">
            <i class="link-icon" data-feather="cloud-off"></i>
            <span class="link-title">Error</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="errorPages">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="pages/error/404.html" class="nav-link">404</a>
              </li>
              <li class="nav-item">
                <a href="pages/error/500.html" class="nav-link">500</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item nav-category">Docs</li>
        <li class="nav-item">
          <a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link">
            <i class="link-icon" data-feather="hash"></i>
            <span class="link-title">Documentation</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>