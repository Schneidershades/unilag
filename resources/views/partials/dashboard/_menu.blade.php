<a class="mobNavigation" data-toggle="collapse" href="#MobNav" role="button" aria-expanded="false" aria-controls="MobNav">
    <i class="fas fa-bars mr-2"></i>Dashboard Navigation
</a>
<div class="collapse" id="MobNav">
    <div class="dashboard-nav">
        <div class="dashboard-inner">
            <ul data-submenu-title="Main Navigation">
                <li class="active"><a href="{{route('dashboard')}}"><i class="lni lni-dashboard mr-2"></i>Dashboard</a></li>
                <li><a href="/payments"><i class="lni lni-add-files mr-2"></i>Payments</a></li>
                <li><a href="/transactions"><i class="lni lni-files mr-2"></i>History</a></li>
                <li><a href="/transactions"><i class="lni lni-files mr-2"></i>Dues</a></li>
            </ul>
            <ul data-submenu-title="My Accounts">
                <li><a href="{{route('profile')}}"><i class="lni lni-user mr-2"></i>My Profile </a></li>
                <li><a href="{{route('password')}}"><i class="lni lni-lock-alt mr-2"></i>Change Password</a></li>
                <li><a href="/logout"><i class="lni lni-power-switch mr-2"></i>Log Out</a></li>
            </ul>
        </div>					
    </div>
</div>