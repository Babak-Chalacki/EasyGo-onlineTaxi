
<div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="{{ url("/admin") }}">
          <svg class="bi"><use xlink:href="#house-fill"/></svg>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2" href="{{url('/admin/order')}}">
          <svg class="bi"><use xlink:href="#file-earmark"/></svg>
          Orders
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2" href="{{url("/admin/passengers")}}">
          <svg class="bi"><use xlink:href="#people"/></svg>
          passengers
        </a>
      </li>
      <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2" href="{{url("/admin-diver")}}">
            <i class="fas fa-taxi"></i>
            drivers
        </a>
    </li>
    <li class="nav-item">
      <a class="nav-link d-flex align-items-center gap-2" href="#">
        <svg class="bi"><use xlink:href="#graph-up"/></svg>
        Reports
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link d-flex align-items-center gap-2" href="{{ url("/admin/comment") }}">
        <i class="fas fa-comments"></i>
        comments
      </a>
    </li>
    </ul>

    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
      <span>Saved reports</span>
      <a class="link-secondary" href="#" aria-label="Add a new report">
        <svg class="bi"><use xlink:href="#plus-circle"/></svg>
      </a>
    </h6>
    <ul class="nav flex-column mb-auto">
      <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2" href="#">
          <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
          Current month
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2" href="#">
          <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
          Last quarter
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2" href="#">
          <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
          Social engagement
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2" href="#">
          <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
          Year-end sale
        </a>
      </li>
    </ul>

    <hr class="my-3">

    <ul class="nav flex-column mb-auto">
      <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2" href="#">
          <svg class="bi"><use xlink:href="#gear-wide-connected"/></svg>
          Settings
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2" href="#">
          <svg class="bi"><use xlink:href="#door-closed"/></svg>
          Sign out
        </a>
      </li>
    </ul>
  </div>
