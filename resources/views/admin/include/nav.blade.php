<div class="site-sidebar">
	<div class="custom-scroll custom-scroll-light">
		<ul class="sidebar-menu">
			<li class="menu-title">Admin Dashboard</li>
			<li>
				<a href="{{ route('admin.dashboard') }}" class="waves-effect waves-light">
					<span class="s-icon"><i class="ti-control-record"></i></span>
					<span class="s-text">Dashboard</span>
				</a>
			</li>

			<!-- <li>
				<a href="{{ route('admin.dispatcher.index') }}" class="waves-effect waves-light">
					<span class="s-icon"><i class="ti-power-off"></i></span>
					<span class="s-text">Offline Booking</span>
				</a>
			</li> -->
			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-power-off"></i></span>
					<span class="s-text">Offline Booking</span>
				</a>
				<ul>
					<li><a href="{{ route('admin.dispatcher.indexcreate') }}">Book Now</a></li>
					<li><a href="{{ route('admin.dispatcher.index') }}">All Book</a></li>
				</ul>
			</li>
			
			<li>
				<a href="{{ route('admin.heatmap') }}" class="waves-effect waves-light">
					<span class="s-icon"><i class="ti-location-pin"></i></span>
					<span class="s-text">Heat Map</span>
				</a>
			</li>



			<!--<li class="menu-title">Delivery</li>
			<li>
				<a href="{{ route('admin.delivery') }}" class="waves-effect waves-light">
					<span class="s-icon"><i class="ti-package"></i></span>
					<span class="s-text">Package Delivery</span>
				</a>
			</li>


			<li class="menu-title">Rental</li>
			<li>
				<a href="{{ route('admin.rental') }}" class="waves-effect waves-light">
					<span class="s-icon"><i class="ti-car"></i></span>
					<span class="s-text">Car Rental</span>
				</a>
			</li>

			<li class="menu-title">Airport</li>
			<li>
				<a href="{{ route('admin.airport') }}" class="waves-effect waves-light">
					<span class="s-icon"><i class="ti-money"></i></span>
					<span class="s-text">Airport Rates</span>
				</a>
			</li>

			<li class="menu-title">Surge</li>

			<li>
				<a href="{{ route('admin.surge') }}" class="waves-effect waves-light">
					<span class="s-icon"><i class="ti-location-pin"></i></span>
					<span class="s-text">Geo-Fencing</span>
				</a>
			</li>-->
                       
			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-user"></i></span>
					<span class="s-text">Users</span>
				</a>
				<ul>
					<li><a href="{{ route('admin.user.index') }}">All User</a></li>
					<li><a href="{{ route('admin.user.create') }}">Add User</a></li>
				</ul>
			</li>
			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-basketball"></i></span>
					<span class="s-text">Driver</span>
				</a>
				<ul>
					<li><a href="{{ route('admin.provider.index') }}">All Driver</a></li>
					<li><a href="{{ route('admin.provider.create') }}">Add Driver</a></li>
				</ul>
			</li>
			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-headphone"></i></span>
					<span class="s-text">Executive</span>
				</a>
				<ul>
					<li><a href="{{ route('admin.dispatch-manager.index') }}">All Executive</a></li>
					<li><a href="{{ route('admin.dispatch-manager.create') }}">Add Executive</a></li>
				</ul>
			</li>
			<!--<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-crown"></i></span>
					<span class="s-text">Fleet Owner</span>
				</a>
				<ul>
					<li><a href="{{ route('admin.fleet.index') }}">List Fleets</a></li>
					<li><a href="{{ route('admin.fleet.create') }}">Add New Fleet Owner</a></li>
				</ul>
			</li>-->
			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-layout-grid2-thumb"></i></span>
					<span class="s-text">Manager</span>
				</a>
				<ul>
					<li><a href="{{ route('admin.account-manager.index') }}">All Managers</a></li>
					<li><a href="{{ route('admin.account-manager.create') }}">Add Manager</a></li>
				</ul>
			</li>
			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-files"></i></span>
					<span class="s-text">Finance</span>
				</a>
				<ul>
					<li><a href="{{ route('admin.ride.statement') }}">Trip Revenue</a></li>
                                        <li><a href="{{ route('admin.payment') }}">Trip History</a></li>
					<li><a href="{{ route('admin.ride.statement.provider') }}">Driver Earning</a></li>
					<li><a href="{{ route('admin.ride.statement.today') }}">Daily Revenue</a></li>
					<li><a href="{{ route('admin.ride.statement.monthly') }}">Monthly Revenue</a></li>
					<li><a href="{{ route('admin.ride.statement.yearly') }}">Yearly Revenue</a></li>
				</ul>
			</li>
			<li>
				<a href="{{ route('admin.map.index') }}" class="waves-effect waves-light">
					<span class="s-icon"><i class="ti-map-alt"></i></span>
					<span class="s-text">Live Location</span>
				</a>
			</li>
			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-star"></i></span>
					<span class="s-text">Ratings &amp; Reviews</span>
				</a>
				<ul>
					<li><a href="{{ route('admin.user.review') }}">User Ratings</a></li>
					<li><a href="{{ route('admin.provider.review') }}">Driver Ratings</a></li>
				</ul>
			</li>
			<li>
				<a href="{{ route('admin.requests.index') }}" class="waves-effect  waves-light">
					<span class="s-icon"><i class="ti-pie-chart"></i></span>
					<span class="s-text">All Trips</span>
				</a>
			</li>
			<li>
				<a href="{{ route('admin.requests.scheduled') }}" class="waves-effect  waves-light">
					<span class="s-icon"><i class="ti-timer"></i></span>
					<span class="s-text">Scheduled Trips</span>
				</a>
			</li>
			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-view-grid"></i></span>
					<span class="s-text">Driver Category</span>
				</a>
				<ul>
					<li><a href="{{ route('admin.service.index') }}">All Category</a></li>
					<li><a href="{{ route('admin.service.create') }}">Add Category</a></li>
				</ul>
			</li>
			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-layout-tab"></i></span>
					<span class="s-text">Driver Documents</span>
				</a>
				<ul>
					<li><a href="{{ route('admin.document.index') }}">All Documents</a></li>
					<li><a href="{{ route('admin.document.create') }}">Add Document</a></li>
				</ul>
			</li>

			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-bookmark-alt"></i></span>
					<span class="s-text">Promo Code</span>
				</a>
				<ul>
					<li><a href="{{ route('admin.promocode.index') }}">List Promo Code</a></li>
					<li><a href="{{ route('admin.promocode.create') }}">Add New Promo Code</a></li>
				</ul>
			</li>
			
			<!--<li>
				<a href="{{ route('admin.payment') }}" class="waves-effect  waves-light">
					<span class="s-icon"><i class="ti-infinite"></i></span>
					<span class="s-text">Payment History</span>
				</a>
			</li>-->
			<li>
				<a href="{{ route('admin.settings.payment') }}" class="waves-effect  waves-light">
					<span class="s-icon"><i class="ti-money"></i></span>
					<span class="s-text">Payment Settings</span>
				</a>
			</li>
			<!--<li class="menu-title">Settings</li>-->
			<li>
				<a href="{{ route('admin.settings') }}" class="waves-effect  waves-light">
					<span class="s-icon"><i class="ti-settings"></i></span>
					<span class="s-text">Web Settings</span>
				</a>
			</li>
			<li class="with-sub">
				<a href="#" class="waves-effect  waves-light">
					<span class="s-caret"><i class="fa fa-angle-down"></i></span>
					<span class="s-icon"><i class="ti-bookmark-alt"></i></span>
					<span class="s-text">Pages</span>
				</a>
				<ul>
					<li><a href="{{ route('admin.privacy') }}">Privacy Policy</a></li>
					<li><a href="{{ route('admin.help') }}">Help</a></li>
                                        <li><a href="{{ route('admin.translation') }}">Translations</a></li>
				</ul>
			</li>


			<!--<li class="menu-title">Account</li>-->
			<!--<li>
				<a href="{{ route('admin.profile') }}" class="waves-effect  waves-light">
					<span class="s-icon"><i class="ti-user"></i></span>
					<span class="s-text">Account Settings</span>
				</a>
			</li>-->
			<!--<li>
				<a href="{{ route('admin.password') }}" class="waves-effect  waves-light">
					<span class="s-icon"><i class="ti-exchange-vertical"></i></span>
					<span class="s-text">Change Password</span>
				</a>
			</li>-->
			<li class="compact-hide">
				<a href="{{ url('/admin/logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
					<span class="s-icon"><i class="ti-power-off"></i></span>
					<span class="s-text">Logout</span>
                </a>

                <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
			</li>
			
		</ul>
	</div>
</div>