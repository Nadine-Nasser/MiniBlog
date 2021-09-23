<div class="sidebar" data-color="purple" data-background-color="black" data-image="img/sidebar-2.jpg">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
      -->
    <div class="logo">
      <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        Creative Tim
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
          <li class="nav-item {{ (request()->is('category*')) ? 'active' : ''  }}">
            <a class="nav-link" href="{{route('category.index')}}">
              <i class="material-icons">Category</i>
              <p>Category</p>
            </a>
          </li>
          <li class="nav-item {{ (request()->is('post*')) ? 'active' : ''  }}">
            <a class="nav-link" href="{{route('post.index')}}">
              <i class="material-icons">Post</i>
              <p>Post</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="javascript:void(0)">
              <i class="material-icons">Setting</i>
              <p>Setting</p>
            </a>
          </li>
          <li class="nav-item {{ (request()->is('profile*')) ? 'active' : ''  }}">
            <a class="nav-link" href="{{route('profile.index')}}">
              <i class="material-icons">Profile</i>
              <p>Profile</p>
            </a>
          </li>
        <!-- your sidebar here -->
      </ul>
    </div>
  </div>
