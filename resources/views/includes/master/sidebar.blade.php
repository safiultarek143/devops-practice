
<aside class="main-sidebar elevation-4 sidebar-dark-info">
    <a href="#" class="brand-link navbar-info">
        <span class="brand-text font-weight-light"> Bant</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->full_name }}</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
                @if(auth()->user()->role_type_id == \App\User::ADMIN)
                    <li class="nav-item has-treeview menu-open">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    
                    <!-- <li class="nav-item has-treeview {{ Request::is('admin/projects*') || Request::is('admin/costs*') || Request::is('admin/cost-categories*') || Request::is('admin/secuity-money*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fab fa-product-hunt"></i>
                            <p>
                                Project Management
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            
                            <li class="nav-item">
                                <a href="{{ route('costs.index')  }}" class="nav-link {{ Request::is('admin/costs*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Costs</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('cost-categories.index')  }}" class="nav-link {{ Request::is('admin/cost-categories*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Cost Types</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('projects.index')  }}" class="nav-link {{ Request::is('admin/projects*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Projects</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('security-money.index')  }}" class="nav-link {{ Request::is('admin/security-money*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Projects Security Money</p>
                                </a>
                            </li>
                            
                        </ul>
                    </li> -->
                    <li class="nav-item has-treeview {{ Request::is('admin/project-costs-report*') ||  Request::is('admin/collection*') || Request::is('admin/monthly-report*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fab fa-product-hunt"></i>
                            <p>
                                Post
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            
                            <!-- <li class="nav-item">
                                <a href="{{ route('project-costs-report.index')  }}" class="nav-link {{ Request::is('admin/project-costs-report*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Project Costs Report</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('monthly-cost-report.index')  }}" class="nav-link {{ Request::is('admin/monthly-report*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Monthly Costs Report</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('collection.index')  }}" class="nav-link {{ Request::is('admin/collection*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Payment collection</p>
                                </a>
                            </li> -->
                            <li class="nav-item">
                                <a href="{{ route('posts.index')  }}" class="nav-link {{ Request::is('admin/posts*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Posts</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('post-categories.index')  }}" class="nav-link {{ Request::is('admin/post-categories*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Post Categories</p>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="nav-item has-treeview {{ Request::is('admin/project-costs-report*') ||  Request::is('admin/collection*') || Request::is('admin/monthly-report*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fab fa-product-hunt"></i>
                            <p>
                                Member
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('members.index')  }}" class="nav-link {{ Request::is('admin/members*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Members</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview {{ Request::is('admin/project-costs-report*') ||  Request::is('admin/collection*') || Request::is('admin/monthly-report*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fab fa-product-hunt"></i>
                            <p>
                                Success Story
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('story.index')  }}" class="nav-link {{ Request::is('admin/story*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Success Story</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('story-category.index')  }}" class="nav-link {{ Request::is('admin/story-category*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Story Types</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview {{ Request::is('admin/events*') ||  Request::is('admin/events*')  ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fab fa-product-hunt"></i>
                            <p>
                                Event
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('events.index')  }}" class="nav-link {{ Request::is('admin/events*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Event</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('event-categories.index')  }}" class="nav-link {{ Request::is('admin/event-categories*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Event Types</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- <li class="nav-item has-treeview {{ Request::is('admin/events*') ||  Request::is('admin/products*')  ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fab fa-product-hunt"></i>
                            <p>
                                Story
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('members.index')  }}" class="nav-link {{ Request::is('admin/members*') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Story</p>
                                </a>
                            </li>
                        </ul>
                    </li> -->
                @endif
            </ul>
        </nav>
    </div>
</aside>
