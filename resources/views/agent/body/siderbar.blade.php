<!-- partial:partials/_sidebar.html -->
@php
    $id = Auth::user()->id;
    $agent = App\Models\User::findOrFail($id);
    $status = $agent->status;
@endphp

<nav class="sidebar">
    <div class="sidebar-header">
      <a href="#" class="sidebar-brand">
        Khalifa<span>Dash</span>
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
          <a href="{{route('Agent_Dashboard')}}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Agent Dashboard</span>
          </a>
        </li>

        @if ($status === "active")
            
        
        <li class="nav-item nav-category">RealState</li>
        {{-- <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">PropertyType</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="emails">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('all.types')}}" class="nav-link">All Type</a>
              </li>
              <li class="nav-item">
                <a href="{{route('add.type')}}" class="nav-link">Add Type</a>
              </li>
              
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#Amenitie" role="button" aria-expanded="false" aria-controls="Amenitie">
            <i class="link-icon" data-feather="calendar"></i>
            <span class="link-title">Amenities</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="Amenitie">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('all.Amenities')}}" class="nav-link"> All Amenities</a>
              </li>
              <li class="nav-item">
                <a href="{{route('add.amenitie')}}" class="nav-link">Add Amenitie</a>
              </li>
              
            </ul>
          </div>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#property" role="button" aria-expanded="false" aria-controls="Amenitie">
            <i class="link-icon" data-feather="calendar"></i>
            <span class="link-title">Property</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="property">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('agentAllProperties')}}" class="nav-link"> All Properties</a>
              </li>
              <li class="nav-item">
                <a href="{{route('agent.add.property')}}" class="nav-link">Add Property</a>
              </li>
             
              
            </ul>
          </div>
        </li>
       
        <li class="nav-item">
          <a class="nav-link"  href="{{route('buy.package')}}"  >
            <i class="link-icon" data-feather="calendar"></i>
            <span class="link-title">Buy Package</span>
           
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="{{route('package.history')}}"  >
            <i class="link-icon" data-feather="calendar"></i>
            <span class="link-title">Package History</span>
           
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="{{route('agent.property.message')}}"  >
            <i class="link-icon" data-feather="calendar"></i>
            <span class="link-title">Property Message</span>
           
          </a>
        </li>
       
        {{-- <li class="nav-item">
          <a href="pages/apps/chat.html" class="nav-link">
            <i class="link-icon" data-feather="message-square"></i>
            <span class="link-title">Chat</span>
          </a>
        </li> --}}
       
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
              <li class="nav-item">
                <a href="pages/ui-components/badges.html" class="nav-link">Badges</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/breadcrumbs.html" class="nav-link">Breadcrumbs</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/buttons.html" class="nav-link">Buttons</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/button-group.html" class="nav-link">Button group</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/cards.html" class="nav-link">Cards</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/carousel.html" class="nav-link">Carousel</a>
              </li>
              <li class="nav-item">
                  <a href="pages/ui-components/collapse.html" class="nav-link">Collapse</a>
                </li>
              <li class="nav-item">
                <a href="pages/ui-components/dropdowns.html" class="nav-link">Dropdowns</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/list-group.html" class="nav-link">List group</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/media-object.html" class="nav-link">Media object</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/modal.html" class="nav-link">Modal</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/navs.html" class="nav-link">Navs</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/navbar.html" class="nav-link">Navbar</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/pagination.html" class="nav-link">Pagination</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/popover.html" class="nav-link">Popovers</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/progress.html" class="nav-link">Progress</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/scrollbar.html" class="nav-link">Scrollbar</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/scrollspy.html" class="nav-link">Scrollspy</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/spinners.html" class="nav-link">Spinners</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/tabs.html" class="nav-link">Tabs</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/tooltips.html" class="nav-link">Tooltips</a>
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
        @else
            
        @endif
        
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
  