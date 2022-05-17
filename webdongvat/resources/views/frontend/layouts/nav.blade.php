<!--Menu -->
	<nav id="fixNav" style="  opacity: 0.6">
		<ul>
			<li>
				<a href="{{route('home')}}">Home</a>
			</li>
			<li>
				<a href="{{route('backend')}}">Backend</a>
			</li>
			<li>
				<a href="{{route('adopt')}}">Adopt</a>
				<ul>
					
					<li style="background-color: red;">
						
						<?php subMenu($parent); ?>
					</li>

					
				</ul>
			</li>
			<li><a href="{{route('loginmain')}}">Login</a></li>
			<li>
				<a href="{{route('support')}}">Support</a>
			</li>
			<li>
				<a href="{{route('news')}}">Tin Tức</a>
			</li>
			<li>
				<a href="{{route('volunteer')}}">Volunteer</a>
			</li>
		</ul>
	</nav>
	<!--Menu -->
