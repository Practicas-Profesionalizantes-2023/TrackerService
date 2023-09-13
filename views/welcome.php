<body class="bg-gray-50 dark:bg-gray-800 scrollbar scrollbar-w-3 scrollbar-thumb-rounded-[0.25rem] scrollbar-track-slate-200 scrollbar-thumb-gray-400 dark:scrollbar-track-gray-900 dark:scrollbar-thumb-gray-700">
		<nav class="fixed z-30 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
	<div class="px-3 py-3 lg:px-5 lg:pl-3">
		<div class="flex items-center justify-between">
			<div class="flex items-center justify-start">
				<button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar" class="p-2 text-gray-600 rounded cursor-pointer lg:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
					<svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
					<svg id="toggleSidebarMobileClose" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
				</button>
				<a href="/" class="flex ml-2 md:mr-24">
					<img src="https://flowbite-admin-dashboard.vercel.app/images/logo.svg" class="h-8 mr-3" alt="FlowBite Logo">
					<span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Flowbite</span>
				</a>

				<form action="#" method="GET" class="hidden lg:block lg:pl-3.5">
	<label for="topbar-search" class="sr-only">Search</label>
	<div class="relative mt-1 lg:w-96">
		<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
			<svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
		</div>
		<input type="text" name="email" id="topbar-search" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search">
	</div>
</form>
			</div>

			<div class="flex items-center">
				<div class="hidden mr-3 -mb-1 sm:block">
	<span></span>
</div>

<script async="" defer="" src="https://buttons.github.io/buttons.js"></script>

				<!-- Search mobile -->
				<button id="toggleSidebarMobileSearch" type="button" class="p-2 text-gray-500 rounded-lg lg:hidden hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
					<span class="sr-only">Search</span>
					<!-- Search icon -->
					<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
				</button>

				<!-- Dropdown menu -->
				<div id="dropdownNavbar" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
					<ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownNavbarButton">
						<li>
							<a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
						</li>
						<li>
							<a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
						</li>
						<li>
							<a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
						</li>
					</ul>
					<div class="py-2">
						<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Sign out</a>
					</div>
				</div>

				<!-- Notifications -->
				<button type="button" data-dropdown-toggle="notification-dropdown" class="p-2 text-gray-500 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700">
					<span class="sr-only">View notifications</span>
					<!-- Bell icon -->
					<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
				</button>
				<!-- Dropdown menu -->
				<div class="z-20 z-50 hidden max-w-sm my-4 overflow-hidden text-base list-none bg-white divide-y divide-gray-100 rounded shadow-lg dark:divide-gray-600 dark:bg-gray-700" id="notification-dropdown" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(1135px, 65px);" data-popper-placement="bottom">
					<div class="block px-4 py-2 text-base font-medium text-center text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
						Notifications
					</div>
					<div>
						<a href="#" class="flex px-4 py-3 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600">
							<div class="flex-shrink-0">
								<img class="rounded-full w-11 h-11" src="https://flowbite-admin-dashboard.vercel.app/images/users/bonnie-green.png" alt="Jese image">
								<div class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 border border-white rounded-full bg-primary-700 dark:border-gray-700">
									<svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
								</div>
							</div>
							<div class="w-full pl-3">
								<div class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400">
									New message from <span class="font-semibold text-gray-900 dark:text-white">Bonnie Green</span>: "Hey, what's up? All set for the presentation?"
								</div>
								<div class="text-xs font-medium text-primary-700 dark:text-primary-400">
									a few moments ago
								</div>
							</div>
						</a>
						<a href="#" class="flex px-4 py-3 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600">
							<div class="flex-shrink-0">
								<img class="rounded-full w-11 h-11" src="https://flowbite-admin-dashboard.vercel.app/images/users/jese-leos.png" alt="Jese image">
								<div class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-gray-900 border border-white rounded-full dark:border-gray-700">
									<svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path></svg>
								</div>
							</div>
							<div class="w-full pl-3">
								<div class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400">
									<span class="font-semibold text-gray-900 dark:text-white">Jese leos</span> and <span class="font-medium text-gray-900 dark:text-white">5 others</span> started following you.
								</div>
								<div class="text-xs font-medium text-primary-700 dark:text-primary-400">
									10 minutes ago
								</div>
							</div>
						</a>
						<a href="#" class="flex px-4 py-3 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600">
							<div class="flex-shrink-0">
								<img class="rounded-full w-11 h-11" src="https://flowbite-admin-dashboard.vercel.app/images/users/joseph-mcfall.png" alt="Joseph image">
								<div class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-red-600 border border-white rounded-full dark:border-gray-700">
									<svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
								</div>
							</div>
							<div class="w-full pl-3">
								<div class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400">
									<span class="font-semibold text-gray-900 dark:text-white">Joseph Mcfall</span> and <span class="font-medium text-gray-900 dark:text-white">141 others</span> love your story. See it and view more stories.
								</div>
								<div class="text-xs font-medium text-primary-700 dark:text-primary-400">
									44 minutes ago
								</div>
							</div>
						</a>
						<a href="#" class="flex px-4 py-3 border-b hover:bg-gray-100 dark:hover:bg-gray-600 dark:border-gray-600">
							<div class="flex-shrink-0">
								<img class="rounded-full w-11 h-11" src="https://flowbite-admin-dashboard.vercel.app/images/users/leslie-livingston.png" alt="Leslie image">
								<div class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-green-400 border border-white rounded-full dark:border-gray-700">
									<svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
								</div>
							</div>
							<div class="w-full pl-3">
								<div class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400">
									<span class="font-semibold text-gray-900 dark:text-white">Leslie Livingston</span> mentioned you in a comment: <span class="font-medium text-primary-700 dark:text-primary-500">@bonnie.green</span> what do you say?
								</div>
								<div class="text-xs font-medium text-primary-700 dark:text-primary-400">
									1 hour ago
								</div>
							</div>
						</a>
						<a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600">
							<div class="flex-shrink-0">
								<img class="rounded-full w-11 h-11" src="https://flowbite-admin-dashboard.vercel.app/images/users/robert-brown.png" alt="Robert image">
								<div class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-purple-500 border border-white rounded-full dark:border-gray-700">
									<svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
								</div>
							</div>
							<div class="w-full pl-3">
								<div class="text-gray-500 font-normal text-sm mb-1.5 dark:text-gray-400">
									<span class="font-semibold text-gray-900 dark:text-white">Robert Brown</span> posted a new video: Glassmorphism - learn how to implement the
									new design trend.
								</div>
								<div class="text-xs font-medium text-primary-700 dark:text-primary-400">
									3 hours ago
								</div>
							</div>
						</a>
					</div>
					<a href="#" class="block py-2 text-base font-normal text-center text-gray-900 bg-gray-50 hover:bg-gray-100 dark:bg-gray-700 dark:text-white dark:hover:underline">
						<div class="inline-flex items-center">
							<svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
							View all
						</div>
					</a>
				</div>
				<!-- Apps -->
				<button type="button" data-dropdown-toggle="apps-dropdown" class="hidden p-2 text-gray-500 rounded-lg sm:flex hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700">
					<span class="sr-only">View notifications</span>
					<!-- Icon -->
					<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
				</button>
				<!-- Dropdown menu -->
				<div class="z-20 z-50 hidden max-w-sm my-4 overflow-hidden text-base list-none bg-white divide-y divide-gray-100 rounded shadow-lg dark:bg-gray-700 dark:divide-gray-600" id="apps-dropdown" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(1175px, 65px);" data-popper-placement="bottom">
					<div class="block px-4 py-2 text-base font-medium text-center text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
						Apps
					</div>
					<div class="grid grid-cols-3 gap-4 p-4">
						<a href="#" class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600">
							<svg class="mx-auto mb-1 text-gray-500 w-7 h-7 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
							<div class="text-sm font-medium text-gray-900 dark:text-white">
								Sales
							</div>
						</a>
						<a href="#" class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600">
							<svg class="mx-auto mb-1 text-gray-500 w-7 h-7 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg>
							<div class="text-sm font-medium text-gray-900 dark:text-white">
								Users
							</div>
						</a>
						<a href="#" class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600">
							<svg class="mx-auto mb-1 text-gray-500 w-7 h-7 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z" clip-rule="evenodd"></path></svg>
							<div class="text-sm font-medium text-gray-900 dark:text-white">
								Inbox
							</div>
						</a>
						<a href="#" class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600">
							<svg class="mx-auto mb-1 text-gray-500 w-7 h-7 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path></svg>
							<div class="text-sm font-medium text-gray-900 dark:text-white">
								Profile
							</div>
						</a>
						<a href="#" class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600">
							<svg class="mx-auto mb-1 text-gray-500 w-7 h-7 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
							<div class="text-sm font-medium text-gray-900 dark:text-white">
								Settings
							</div>
						</a>
						<a href="#" class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600">
							<svg class="mx-auto mb-1 text-gray-500 w-7 h-7 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"></path><path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
							<div class="text-sm font-medium text-gray-900 dark:text-white">
								Products
							</div>
						</a>
						<a href="#" class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600">
							<svg class="mx-auto mb-1 text-gray-500 w-7 h-7 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path></svg>
							<div class="text-sm font-medium text-gray-900 dark:text-white">
								Pricing
							</div>
						</a>
						<a href="#" class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600">
							<svg class="mx-auto mb-1 text-gray-500 w-7 h-7 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 2a2 2 0 00-2 2v14l3.5-2 3.5 2 3.5-2 3.5 2V4a2 2 0 00-2-2H5zm2.5 3a1.5 1.5 0 100 3 1.5 1.5 0 000-3zm6.207.293a1 1 0 00-1.414 0l-6 6a1 1 0 101.414 1.414l6-6a1 1 0 000-1.414zM12.5 10a1.5 1.5 0 100 3 1.5 1.5 0 000-3z" clip-rule="evenodd"></path></svg>
							<div class="text-sm font-medium text-gray-900 dark:text-white">
								Billing
							</div>
						</a>
						<a href="#" class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600">
							<svg class="mx-auto mb-1 text-gray-500 w-7 h-7 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path></svg>
							<div class="text-sm font-medium text-gray-900 dark:text-white">
								Logout
							</div>
						</a>
					</div>
				</div>

				<button id="theme-toggle" data-tooltip-target="tooltip-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
	<svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
	<svg id="theme-toggle-light-icon" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
</button>
<div id="tooltip-toggle" role="tooltip" class="absolute z-10 inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm tooltip opacity-0 invisible" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(1093px, 63px);" data-popper-placement="bottom">
	Toggle dark mode
	<div class="tooltip-arrow" data-popper-arrow="" style="position: absolute; left: 0px; transform: translate(69px, 0px);"></div>
</div>

				<!-- Profile -->
				<div class="flex items-center ml-3">
					<div>
						<button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button-2" aria-expanded="false" data-dropdown-toggle="dropdown-2">
							<span class="sr-only">Open user menu</span>
							<img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
						</button>
					</div>
					<!-- Dropdown menu -->
					<div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-2" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(1263px, 61px);" data-popper-placement="bottom">
						<div class="px-4 py-3" role="none">
							<p class="text-sm text-gray-900 dark:text-white" role="none">
								Neil Sims
							</p>
							<p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
								neil.sims@flowbite.com
							</p>
						</div>
						<ul class="py-1" role="none">
							<li>
								<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
							</li>
							<li>
								<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
							</li>
							<li>
								<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Earnings</a>
							</li>
							<li>
								<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav><!-- TODO: Dynamic dropdowns --><aside id="sidebar" class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 hidden w-64 h-full pt-16 font-normal duration-75 lg:flex transition-width" aria-label="Sidebar">
	<div class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
		<div class="flex flex-col flex-1 pt-5 pb-28 overflow-y-auto scrollbar scrollbar-w-2 scrollbar-thumb-rounded-[0.1667rem] scrollbar-thumb-slate-200 scrollbar-track-gray-400 dark:scrollbar-thumb-slate-900 dark:scrollbar-track-gray-800">
			<div class="flex-1 px-3 space-y-1 bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
				<ul class="pb-2 space-y-2">
					<li>
						<form action="#" method="GET" class="lg:hidden">
							<label for="mobile-search" class="sr-only">Search</label>
							<div class="relative">
								<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
									<svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
								</div>
								<input type="text" name="email" id="mobile-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-200 dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search">
							</div>
						</form>
					</li>
					<li>
						<a href="https://themesberg.github.io/flowbite-astro-admin-dashboard/" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
							<svg fill="currentColor" class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
								<path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z"></path>
								<path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z"></path>
							</svg>
							<span class="ml-3" sidebar-toggle-item="">Welcome</span>
						</a>
					</li>
					<li>
						<a href="https://themesberg.github.io/flowbite-astro-admin-dashboard/dashboard" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
							<svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
							<span class="ml-3" sidebar-toggle-item="">Dashboard</span>
						</a>
					</li>
					<li>
						<button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700" aria-controls="dropdown-layouts" data-collapse-toggle="dropdown-layouts">
							<svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
								<path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
							</svg>
							<span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item="">Layouts</span>
							<svg sidebar-toggle-item="" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
						</button>
						<ul id="dropdown-layouts" class="hidden py-2 space-y-2">
							<li>
								<a href="https://themesberg.github.io/flowbite-astro-admin-dashboard/layouts/stacked" class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Stacked</a>
							</li>
							<li>
								<a href="https://themesberg.github.io/flowbite-astro-admin-dashboard/layouts/sidebar" class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Sidebar</a>
							</li>
						</ul>
					</li>
					<li>
						<button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700" aria-controls="dropdown-crud" data-collapse-toggle="dropdown-crud">
							<svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
								<path clip-rule="evenodd" fill-rule="evenodd" d="M.99 5.24A2.25 2.25 0 013.25 3h13.5A2.25 2.25 0 0119 5.25l.01 9.5A2.25 2.25 0 0116.76 17H3.26A2.267 2.267 0 011 14.74l-.01-9.5zm8.26 9.52v-.625a.75.75 0 00-.75-.75H3.25a.75.75 0 00-.75.75v.615c0 .414.336.75.75.75h5.373a.75.75 0 00.627-.74zm1.5 0a.75.75 0 00.627.74h5.373a.75.75 0 00.75-.75v-.615a.75.75 0 00-.75-.75H11.5a.75.75 0 00-.75.75v.625zm6.75-3.63v-.625a.75.75 0 00-.75-.75H11.5a.75.75 0 00-.75.75v.625c0 .414.336.75.75.75h5.25a.75.75 0 00.75-.75zm-8.25 0v-.625a.75.75 0 00-.75-.75H3.25a.75.75 0 00-.75.75v.625c0 .414.336.75.75.75H8.5a.75.75 0 00.75-.75zM17.5 7.5v-.625a.75.75 0 00-.75-.75H11.5a.75.75 0 00-.75.75V7.5c0 .414.336.75.75.75h5.25a.75.75 0 00.75-.75zm-8.25 0v-.625a.75.75 0 00-.75-.75H3.25a.75.75 0 00-.75.75V7.5c0 .414.336.75.75.75H8.5a.75.75 0 00.75-.75z"></path>
							</svg>
							<span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item="">CRUD</span>
							<svg sidebar-toggle-item="" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
						</button>
						<ul id="dropdown-crud" class="hidden space-y-2 py-2">
							<!-- if not (eq .Params.group crud) }}hidden {{ end }} -->
							<li>
								<!-- {{ if eq $page_slug "products" }} -->
								<!-- bg-gray-100 dark:bg-gray-700 -->
								<a href="https://themesberg.github.io/flowbite-astro-admin-dashboard/crud/products" class="text-base text-gray-900 rounded-lg flex items-center p-2 group hover:bg-gray-100 transition duration-75 pl-11 dark:text-gray-200 dark:hover:bg-gray-700">Products</a>
							</li>
							<li>
								<!--  {{ if eq $page_slug "users" }} -->
								<!-- bg-gray-100 dark:bg-gray-700 -->
								<a href="https://themesberg.github.io/flowbite-astro-admin-dashboard/crud/users" class="text-base text-gray-900 rounded-lg flex items-center p-2 group hover:bg-gray-100 transition duration-75 pl-11 dark:text-gray-200 dark:hover:bg-gray-700">Users</a>
							</li>
						</ul>
					</li>
					<li>
						<!-- {{ if eq $page_slug "settings" }} -->
						<a href="https://themesberg.github.io/flowbite-astro-admin-dashboard/settings" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
							<svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
								<path clip-rule="evenodd" fill-rule="evenodd" d="M8.34 1.804A1 1 0 019.32 1h1.36a1 1 0 01.98.804l.295 1.473c.497.144.971.342 1.416.587l1.25-.834a1 1 0 011.262.125l.962.962a1 1 0 01.125 1.262l-.834 1.25c.245.445.443.919.587 1.416l1.473.294a1 1 0 01.804.98v1.361a1 1 0 01-.804.98l-1.473.295a6.95 6.95 0 01-.587 1.416l.834 1.25a1 1 0 01-.125 1.262l-.962.962a1 1 0 01-1.262.125l-1.25-.834a6.953 6.953 0 01-1.416.587l-.294 1.473a1 1 0 01-.98.804H9.32a1 1 0 01-.98-.804l-.295-1.473a6.957 6.957 0 01-1.416-.587l-1.25.834a1 1 0 01-1.262-.125l-.962-.962a1 1 0 01-.125-1.262l.834-1.25a6.957 6.957 0 01-.587-1.416l-1.473-.294A1 1 0 011 10.68V9.32a1 1 0 01.804-.98l1.473-.295c.144-.497.342-.971.587-1.416l-.834-1.25a1 1 0 01.125-1.262l.962-.962A1 1 0 015.38 3.03l1.25.834a6.957 6.957 0 011.416-.587l.294-1.473zM13 10a3 3 0 11-6 0 3 3 0 016 0z"></path>
							</svg>
							<span class="ml-3" sidebar-toggle-item="">Settings</span>
						</a>
					</li>
					<li>
						<button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700" aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
							<svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm2 10a1 1 0 10-2 0v3a1 1 0 102 0v-3zm2-3a1 1 0 011 1v5a1 1 0 11-2 0v-5a1 1 0 011-1zm4-1a1 1 0 10-2 0v7a1 1 0 102 0V8z" clip-rule="evenodd"></path></svg>
							<span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item="">Pages</span>
							<svg sidebar-toggle-item="" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
						</button>
						<ul id="dropdown-pages" class="hidden py-2 space-y-2">
							<li>
								<a href="https://themesberg.github.io/flowbite-astro-admin-dashboard/pages/pricing" class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Pricing</a>
							</li>
							<li>
								<a href="https://themesberg.github.io/flowbite-astro-admin-dashboard/pages/maintenance" class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Maintenance</a>
							</li>
							<li>
								<a href="https://themesberg.github.io/flowbite-astro-admin-dashboard/pages/404" class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">404 not found</a>
							</li>
							<li>
								<a href="https://themesberg.github.io/flowbite-astro-admin-dashboard/pages/500" class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">500 server error</a>
							</li>
						</ul>
					</li>
					<li>
						<button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700" aria-controls="dropdown-auth" data-collapse-toggle="dropdown-auth">
							<svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg>
							<span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item="">Authentication</span>
							<svg sidebar-toggle-item="" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
						</button>
						<ul id="dropdown-auth" class="hidden py-2 space-y-2">
							<li>
								<a href="https://themesberg.github.io/flowbite-astro-admin-dashboard/authentication/sign-in" class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Sign in</a>
							</li>
							<li>
								<a href="https://themesberg.github.io/flowbite-astro-admin-dashboard/authentication/sign-up" class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Sign up</a>
							</li>
							<li>
								<a href="https://themesberg.github.io/flowbite-astro-admin-dashboard/authentication/forgot-password" class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Forgot password</a>
							</li>
							<li>
								<a href="https://themesberg.github.io/flowbite-astro-admin-dashboard/authentication/reset-password" class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Reset password</a>
							</li>
							<li>
								<a href="https://themesberg.github.io/flowbite-astro-admin-dashboard/authentication/profile-lock" class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Profile lock</a>
							</li>
						</ul>
					</li>
					<li>
						<button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700" aria-controls="dropdown-playground" data-collapse-toggle="dropdown-playground">
							<svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
								<path clip-rule="evenodd" fill-rule="evenodd" d="M6.672 1.911a1 1 0 10-1.932.518l.259.966a1 1 0 001.932-.518l-.26-.966zM2.429 4.74a1 1 0 10-.517 1.932l.966.259a1 1 0 00.517-1.932l-.966-.26zm8.814-.569a1 1 0 00-1.415-1.414l-.707.707a1 1 0 101.415 1.415l.707-.708zm-7.071 7.072l.707-.707A1 1 0 003.465 9.12l-.708.707a1 1 0 001.415 1.415zm3.2-5.171a1 1 0 00-1.3 1.3l4 10a1 1 0 001.823.075l1.38-2.759 3.018 3.02a1 1 0 001.414-1.415l-3.019-3.02 2.76-1.379a1 1 0 00-.076-1.822l-10-4z"></path>
							</svg>
							<span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item="">Playground</span>
							<svg sidebar-toggle-item="" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
						</button>
						<!--  {{ if not (eq .Params.group "playground") }}hidden {{ end }} -->
						<ul id="dropdown-playground" class="hidden space-y-2 py-2">
							<li>
								<!-- {{ if eq $page_slug "stacked" }} -->
								<!--  bg-gray-100 dark:bg-gray-700 -->
								<a href="https://themesberg.github.io/flowbite-astro-admin-dashboard/playground/stacked" class="text-base text-gray-900 rounded-lg flex items-center p-2 group hover:bg-gray-100 transition duration-75 pl-11 dark:text-gray-200 dark:hover:bg-gray-700">Stacked</a>
								<!-- <a
									href={url('playground/kitchen-sink')}
									class="text-base text-gray-900 rounded-lg flex items-center p-2 group hover:bg-gray-100 transition duration-75 pl-11 dark:text-gray-200 dark:hover:bg-gray-700"
									>Kitchen Sink</a
								> -->
							</li>
							<li>
								<!-- {{ if eq $page_slug "sidebar" }} -->
								<!--  bg-gray-100 dark:bg-gray-700 -->
								<a href="https://themesberg.github.io/flowbite-astro-admin-dashboard/playground/sidebar" class="text-base text-gray-900 rounded-lg flex items-center p-2 group hover:bg-gray-100 transition duration-75 pl-11 dark:text-gray-200 dark:hover:bg-gray-700">Sidebar</a>
								<a href="https://themesberg.github.io/flowbite-astro-admin-dashboard/playground/data" class="text-base text-gray-900 rounded-lg flex items-center p-2 group hover:bg-gray-100 transition duration-75 pl-11 dark:text-gray-200 dark:hover:bg-gray-700">API data</a>
							</li>
						</ul>
					</li>
				</ul>
				<div class="pt-2 space-y-2">
					<a href="https://github.com/themesberg/flowbite-astro-admin-dashboard" target="_blank" class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
						<svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
							<path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg>
						<span class="ml-3" sidebar-toggle-item="">GitHub Repository</span>
					</a>
					<a href="https://flowbite.com/docs/getting-started/introduction/" target="_blank" class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
						<svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
						<span class="ml-3" sidebar-toggle-item="">Flowbite Docs</span>
					</a>
					<a href="https://flowbite.com/docs/components/alerts/" target="_blank" class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
						<svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>
						<span class="ml-3" sidebar-toggle-item="">Components</span>
					</a>
					<a href="https://github.com/themesberg/flowbite-astro-admin-dashboard/issues" target="_blank" class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
						<svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path></svg>
						<span class="ml-3" sidebar-toggle-item="">Support</span>
					</a>
				</div>
			</div>
		</div>
		<div class="absolute bottom-0 left-0 justify-center hidden w-full p-4 space-x-4 bg-white lg:flex dark:bg-gray-800" sidebar-bottom-menu="">
			<a href="#" class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
				<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z"></path></svg>
			</a>
			<a href="/settings/" data-tooltip-target="tooltip-settings" class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
				<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
			</a>
			<div id="tooltip-settings" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(71px, -64px);" data-popper-placement="top">
				Settings page
				<div class="tooltip-arrow" data-popper-arrow="" style="position: absolute; left: 0px; transform: translate(55px, 0px);"></div>
			</div>
			<button type="button" data-dropdown-toggle="language-dropdown" class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
				<svg class="h-5 w-5 rounded-full mt-0.5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3900 3900"><path fill="#b22234" d="M0 0h7410v3900H0z"></path><path d="M0 450h7410m0 600H0m0 600h7410m0 600H0m0 600h7410m0 600H0" stroke="#fff" stroke-width="300"></path><path fill="#3c3b6e" d="M0 0h2964v2100H0z"></path><g fill="#fff"><g id="d"><g id="c"><g id="e"><g id="b"><path id="a" d="M247 90l70.534 217.082-184.66-134.164h228.253L176.466 307.082z"></path><use xlink:href="#a" y="420"></use><use xlink:href="#a" y="840"></use><use xlink:href="#a" y="1260"></use></g><use xlink:href="#a" y="1680"></use></g><use xlink:href="#b" x="247" y="210"></use></g><use xlink:href="#c" x="494"></use></g><use xlink:href="#d" x="988"></use><use xlink:href="#c" x="1976"></use><use xlink:href="#e" x="2470"></use></g></svg>
			</button>
			<!-- Dropdown -->
			<div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700" id="language-dropdown" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(184px, 970px);" data-popper-placement="bottom">
				<ul class="py-1" role="none">
					<li>
						<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
							<div class="inline-flex items-center">
								<svg class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-us" viewBox="0 0 512 512">
									<g fill-rule="evenodd">
										<g stroke-width="1pt">
											<path fill="#bd3d44" d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"></path>
											<path fill="#fff" d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"></path>
										</g>
										<path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)"></path>
										<path fill="#fff" d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z" transform="scale(3.9385)"></path>
									</g>
								</svg>
								English (US)
							</div>
						</a>
					</li>
					<li>
						<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
							<div class="inline-flex items-center">
								<svg class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-de" viewBox="0 0 512 512">
									<path fill="#ffce00" d="M0 341.3h512V512H0z"></path>
									<path d="M0 0h512v170.7H0z"></path>
									<path fill="#d00" d="M0 170.7h512v170.6H0z"></path>
								</svg>
								Deutsch
							</div>
						</a>
					</li>
					<li>
						<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
							<div class="inline-flex items-center">
								<svg class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-it" viewBox="0 0 512 512">
									<g fill-rule="evenodd" stroke-width="1pt">
										<path fill="#fff" d="M0 0h512v512H0z"></path>
										<path fill="#009246" d="M0 0h170.7v512H0z"></path>
										<path fill="#ce2b37" d="M341.3 0H512v512H341.3z"></path>
									</g>
								</svg>
								Italiano
							</div>
						</a>
					</li>
					<li>
						<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
							<div class="inline-flex items-center">
								<svg class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="flag-icon-css-cn" viewBox="0 0 512 512">
									<defs>
										<path id="a" fill="#ffde00" d="M1-.3L-.7.8 0-1 .6.8-1-.3z"></path>
									</defs>
									<path fill="#de2910" d="M0 0h512v512H0z"></path>
									<use width="30" height="20" transform="matrix(76.8 0 0 76.8 128 128)" xlink:href="#a"></use>
									<use width="30" height="20" transform="rotate(-121 142.6 -47) scale(25.5827)" xlink:href="#a"></use>
									<use width="30" height="20" transform="rotate(-98.1 198 -82) scale(25.6)" xlink:href="#a"></use>
									<use width="30" height="20" transform="rotate(-74 272.4 -114) scale(25.6137)" xlink:href="#a"></use>
									<use width="30" height="20" transform="matrix(16 -19.968 19.968 16 256 230.4)" xlink:href="#a"></use>
								</svg>
								中文 (繁體)
							</div>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</aside>

<div class="fixed inset-0 z-10 hidden bg-gray-900/50 dark:bg-gray-900/90" id="sidebarBackdrop">
</div><div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
		<div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900 min-h-screen">
			<div class="bg-gradient-to-r from-slate-100 to-slate-200 dark:from-slate-900 dark:to-slate-800 text-slate-800 dark:text-slate-100 mb-20 p-4 lg:p-16 shadow-xl shadow-slate-200 dark:shadow-slate-900 astro-FBYZQWZ3">
	<header class="p-8 flex justify-center items-center flex-wrap flex-col w-full mt-16 astro-FBYZQWZ3">
		<div class="flex justify-center w-full astro-FBYZQWZ3">
			<div class="svg-inline w-16 h-16 text-violet-700 dark:text-violet-100 astro-FBYZQWZ3"><svg width="63" height="79" viewBox="0 0 63 79" fill="none" xmlns="http://www.w3.org/2000/svg">
	<path d="M19.4924 65.9282C15.6165 62.432 14.4851 55.0859 16.0999 49.7638C18.8998 53.1193 22.7793 54.1822 26.7977 54.7822C33.0013 55.7081 39.0937 55.3618 44.8565 52.5637C45.5158 52.2434 46.125 51.8174 46.8454 51.386C47.3861 52.9341 47.5268 54.497 47.338 56.0877C46.8787 59.9617 44.9251 62.9542 41.8177 65.2227C40.5752 66.13 39.2604 66.9411 37.9771 67.7967C34.0346 70.4262 32.9679 73.5095 34.4494 77.9946C34.4846 78.1038 34.5161 78.2131 34.5957 78.4797C32.5828 77.5909 31.1124 76.2965 29.9921 74.5946C28.8088 72.7984 28.2458 70.8114 28.2162 68.6615C28.2014 67.6152 28.2014 66.5597 28.0588 65.5282C27.7107 63.0135 26.5144 61.8876 24.2608 61.8227C21.9479 61.7561 20.1183 63.1672 19.6331 65.3893C19.5961 65.5597 19.5424 65.7282 19.4887 65.9263L19.4924 65.9282Z" fill="currentColor"></path>
	<path d="M0 51.3932C0 51.3932 10.5979 46.2433 21.2254 46.2433L29.2382 21.5069C29.5381 20.3106 30.4141 19.4977 31.4029 19.4977C32.3918 19.4977 33.2677 20.3106 33.5677 21.5069L41.5804 46.2433C54.1672 46.2433 62.8058 51.3932 62.8058 51.3932C62.8058 51.3932 44.8044 2.47586 44.7692 2.37772C44.2526 0.931458 43.3804 0 42.2045 0H20.6032C19.4273 0 18.5903 0.931458 18.0384 2.37772C17.9995 2.47401 0 51.3932 0 51.3932Z" fill="currentColor"></path>
</svg>
</div>
		</div>

		<div class="format dark:format-invert lg:format-lg mt-32 astro-FBYZQWZ3">
			<p class="text-4xl lg:text-8xl dark:text-slate-200 text-slate-600 leading-tight astro-FBYZQWZ3">
				Hello <a rel="noopener nofollow" href="https://astro.build" class="font-bold text-transparent bg-clip-text bg-gradient-to-br from-pink-400 to-violet-800 dark:from-pink-300 dark:to-violet-700 no-underline astro-FBYZQWZ3">Astro</a>…
				<br class="astro-FBYZQWZ3">meet <a rel="noopener nofollow" href="https://flowbite.com" class="font-bold text-blue-600 dark:text-blue-500 no-underline astro-FBYZQWZ3">Flowbite</a>!
			</p>

			<div class="flex justify-center w-full astro-FBYZQWZ3">
				<div data-trigger-confettis="" class="astro-2WRV7662">
	<button type="button" class="text-blue-800 hover:text-white border border-blue-700 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-100 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800 astro-FBYZQWZ3">Click me!</button>
</div>

<div class="wrapper astro-2WRV7662">
	<canvas id="confettis" class="astro-2WRV7662"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/confetti-js@0.0.18/dist/index.min.js"></script>
			</div>
		</div>

		<div class="flex justify-center w-full my-16 astro-FBYZQWZ3">
			<div class="svg-inline w-16 h-16 astro-FBYZQWZ3"><svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
	<path d="M24.5194 13.4429C24.4453 13.9533 24.1087 14.6468 23.7226 15.2497C23.2354 16.0105 22.4622 16.5433 21.5774 16.7283L17.6797 17.5434C17.0533 17.6744 16.4852 18.0022 16.0587 18.479L13.503 21.3357C13.0227 21.8725 12.687 21.7445 12.687 21.0244C12.6812 21.0511 11.4186 24.3072 14.7646 26.2371C16.0502 26.9787 17.9009 26.7122 19.1865 25.9707L25.9983 22.0416C28.5458 20.5722 30.3445 18.0863 30.9424 15.2089C30.966 15.095 30.9843 14.9808 31.004 14.8667L24.5194 13.4429Z" fill="url(#paint0_linear_2484_3243)"></path>
	<path d="M22.7528 9.51774C24.0384 10.2593 24.5637 11.3633 24.5637 12.8464C24.5637 13.0477 24.5479 13.2466 24.5194 13.4425L27.2641 14.6215L31.004 14.8663C31.4829 12.0948 30.5444 9.24202 28.862 6.97445C27.5959 5.268 25.9667 3.78714 24.0081 2.65738C22.417 1.73966 20.7636 1.13501 19.1025 0.803223L17.2361 3.22023L16.6465 5.99559L22.7528 9.51774Z" fill="url(#paint1_linear_2484_3243)"></path>
	<path d="M0.783597 11.5518C0.782899 11.554 0.784832 11.5546 0.78556 11.5524C0.929583 11.1205 1.11018 10.6385 1.33564 10.1237C2.51334 7.4343 4.78286 5.64062 7.57492 4.72608C10.367 3.81156 13.4155 4.13212 15.9601 5.59988L16.6465 5.99578L19.1025 0.803412C11.291 -0.756765 3.30728 3.83253 0.793528 11.5217C0.792327 11.5254 0.787957 11.5382 0.783597 11.5518Z" fill="url(#paint2_linear_2484_3243)"></path>
	<path d="M18.9199 25.9704C17.6343 26.712 16.0503 26.712 14.7647 25.9704C14.5902 25.8697 14.4257 25.7566 14.2701 25.634L12.0091 27.1885L10.0603 30.3376C12.2233 32.1377 15.0321 32.7164 17.839 32.3945C19.9513 32.1523 22.0495 31.4832 24.0082 30.3534C25.5992 29.4357 26.9501 28.3075 28.0682 27.0361L26.9063 24.2128L25.0262 22.4482L18.9199 25.9704Z" fill="url(#paint3_linear_2484_3243)"></path>
	<path d="M14.2701 25.6341C13.2796 24.8539 12.6872 23.6572 12.6872 22.3754V22.2476V11.5724C12.6872 10.9687 12.865 10.8661 13.3884 11.168C12.5823 10.703 10.7203 9.10701 8.42118 10.4331C7.13557 11.1747 6.0769 12.8116 6.0769 14.2946V22.1529C6.0769 25.0917 7.59906 28.1573 9.79448 30.1133C9.88132 30.1906 9.97122 30.2636 10.0603 30.3377L14.2701 25.6341Z" fill="url(#paint4_linear_2484_3243)"></path>
	<path d="M27.9105 5.8123C27.909 5.8106 27.9075 5.81197 27.909 5.81368C28.2114 6.15428 28.5389 6.5515 28.8725 7.00399C30.6149 9.36765 31.2659 12.3613 30.6627 15.2343C30.0594 18.1072 28.2573 20.5846 25.7126 22.0523L25.0262 22.4482L28.0683 27.0361C33.3265 21.0576 33.3401 11.8554 27.9316 5.83594C27.9291 5.83306 27.9201 5.82287 27.9105 5.8123Z" fill="url(#paint5_linear_2484_3243)"></path>
	<path d="M6.34355 14.2944C6.34354 12.8113 7.13552 11.4408 8.42113 10.6993C8.59565 10.5986 8.77601 10.5129 8.96002 10.4395L8.74304 7.70603L7.21862 4.57861C4.57671 5.55005 2.4397 7.55766 1.31528 10.1471C0.469097 12.0957 9.792e-06 14.2458 0 16.5052C0 18.3407 0.302549 20.0735 0.845533 21.6767L3.87391 22.083L6.34355 21.3387V14.2944V14.2944Z" fill="url(#paint6_linear_2484_3243)"></path>
	<path d="M8.96003 10.4395C10.1316 9.97264 11.4652 10.0584 12.5763 10.6993L12.6871 10.7632L21.5825 15.8941C22.2065 16.254 22.1498 16.6082 21.4445 16.7557L21.9577 16.6484C22.6329 16.5072 23.2498 16.1621 23.7216 15.6592C24.5327 14.7946 24.8305 13.7515 24.8305 12.8463C24.8304 11.3632 24.0385 9.99274 22.7529 9.2512L15.941 5.32209C13.3935 3.85267 10.3394 3.53934 7.5461 4.46083C7.4356 4.49727 7.32744 4.5386 7.21863 4.57861L8.96003 10.4395Z" fill="url(#paint7_linear_2484_3243)"></path>
	<path d="M19.3222 32.1523C19.3245 32.1518 19.3241 32.1498 19.3218 32.1503C18.8753 32.2417 18.3673 32.3264 17.8083 32.3888C14.8881 32.7145 11.9676 31.781 9.77876 29.8225C7.58999 27.8641 6.3436 25.0662 6.3436 22.1307L6.34359 21.3389L0.845581 21.6769C3.39893 29.2156 11.369 33.8285 19.2912 32.1588C19.295 32.158 19.3083 32.1553 19.3222 32.1523Z" fill="url(#paint8_linear_2484_3243)"></path>
	<defs>
		<linearGradient id="paint0_linear_2484_3243" x1="20.0599" y1="24.2701" x2="23.2075" y2="13.307" gradientUnits="userSpaceOnUse">
			<stop stop-color="#1724C9"></stop>
			<stop offset="1" stop-color="#1C64F2"></stop>
		</linearGradient>
		<linearGradient id="paint1_linear_2484_3243" x1="27.3093" y1="10.9001" x2="19.0297" y2="2.64962" gradientUnits="userSpaceOnUse">
			<stop stop-color="#1C64F2"></stop>
			<stop offset="1" stop-color="#0092FF"></stop>
		</linearGradient>
		<linearGradient id="paint2_linear_2484_3243" x1="16.1645" y1="5.52115" x2="3.67432" y2="6.3104" gradientUnits="userSpaceOnUse">
			<stop stop-color="#0092FF"></stop>
			<stop offset="1" stop-color="#45B2FF"></stop>
		</linearGradient>
		<linearGradient id="paint3_linear_2484_3243" x1="15.3198" y1="29.1626" x2="26.5366" y2="26.1359" gradientUnits="userSpaceOnUse">
			<stop stop-color="#1C64F2"></stop>
			<stop offset="1" stop-color="#0092FF"></stop>
		</linearGradient>
		<linearGradient id="paint4_linear_2484_3243" x1="7.26881" y1="16.1827" x2="15.2325" y2="24.4347" gradientUnits="userSpaceOnUse">
			<stop stop-color="#1724C9"></stop>
			<stop offset="1" stop-color="#1C64F2"></stop>
		</linearGradient>
		<linearGradient id="paint5_linear_2484_3243" x1="25.4505" y1="22.1356" x2="31.007" y2="10.9345" gradientUnits="userSpaceOnUse">
			<stop stop-color="#0092FF"></stop>
			<stop offset="1" stop-color="#45B2FF"></stop>
		</linearGradient>
		<linearGradient id="paint6_linear_2484_3243" x1="5.36387" y1="9.63067" x2="2.39054" y2="20.8063" gradientUnits="userSpaceOnUse">
			<stop stop-color="#1C64F2"></stop>
			<stop offset="1" stop-color="#0092FF"></stop>
		</linearGradient>
		<linearGradient id="paint7_linear_2484_3243" x1="20.5431" y1="9.09912" x2="9.67768" y2="11.8044" gradientUnits="userSpaceOnUse">
			<stop stop-color="#1724C9"></stop>
			<stop offset="1" stop-color="#1C64F2"></stop>
		</linearGradient>
		<linearGradient id="paint8_linear_2484_3243" x1="6.40679" y1="21.8566" x2="13.3326" y2="32.2745" gradientUnits="userSpaceOnUse">
			<stop stop-color="#0092FF"></stop>
			<stop offset="1" stop-color="#45B2FF"></stop>
		</linearGradient>
	</defs>
</svg>
    </div>
		</div>
	</header>

	<section class="flex justify-center w-full pb-24 astro-FBYZQWZ3">
		<div class="w-full format dark:format-invert astro-FBYZQWZ3">
			<pre class="astro-code github-dark" style="background-color: #0d1117; overflow-x: auto;" tabindex="0"><code><span class="line"><span style="color: #C9D1D9">git clone \</span></span>
<span class="line"><span style="color: #C9D1D9">https:</span><span style="color: #FF7B72">//</span><span style="color: #79C0FF">github.com</span><span style="color: #FF7B72">/</span><span style="color: #C9D1D9">themesberg</span><span style="color: #FF7B72">/</span><span style="color: #C9D1D9">flowbite</span><span style="color: #FF7B72">-</span><span style="color: #C9D1D9">astro</span><span style="color: #FF7B72">-</span><span style="color: #C9D1D9">admin</span><span style="color: #FF7B72">-</span><span style="color: #C9D1D9">dashboard.git</span></span></code></pre>
		</div>
	</section>

	<article class="flex justify-center pt-32 pb-32 astro-FBYZQWZ3">
		<div class="w-full readme format dark:format-invert lg:format-lg astro-FBYZQWZ3">
			<h1 class="text-center astro-FBYZQWZ3">
				<!-- {readMe.getHeadings()[0].text} -->
				Flowbite Astro Admin&nbsp;Dashboard
			</h1>
			<h1 id="flowbite-astro-admin-dashboard"><a href="https://themesberg.github.io/flowbite-astro-admin-dashboard/">Flowbite Astro Admin Dashboard</a> <a href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fgithub.com%2Fthemesberg%2Fflowbite-astro-admin-dashboard&amp;text=Check%20out%20this%20open-source%20admin%20dashboard%20built%20with%20Flowbite%2C%20Astro%20and%20Tailwind%20CSS"><img src="https://img.shields.io/twitter/url/http/shields.io.svg?style=social&amp;logo=twitter" alt="Tweet"></a></h1>
<!-- NOTE: This is a Tailwind in MD experiment, to make it nice when rendered with Astro -->
<div align="center" class="flex flex-wrap justify-evenly w-full">
	<a href="https://github.com/themesberg/flowbite-astro-admin-dashboard"><img src="https://img.shields.io/badge/version-v1.0.2-blue" alt="version"></a>
	<a href="LICENSE"><img src="https://img.shields.io/badge/license-MIT-blue.svg" alt="license"></a>
	<a href="https://github.com/themesberg/flowbite-admin-dashboard/issues?q=is%3Aopen+is%3Aissue"><img src="https://img.shields.io/github/issues/themesberg/flowbite-astro-admin-dashboard.svg" alt="GitHub issues open"></a>
	<a href="https://github.com/themesberg/flowbite-admin-dashboard/issues?q=is%3Aissue+is%3Aclosed"><img src="https://img.shields.io/github/issues-closed-raw/themesberg/flowbite-astro-admin-dashboard.svg" alt="GitHub issues closed"></a>
</div>
<p><a class="hidden" href="https://themesberg.github.io/flowbite-astro-admin-dashboard/"><img class="w-full rounded-md overflow-hidden" src="https://flowbite.s3.amazonaws.com/templates/flowbite-admin-dashboard/flowbite-admin-dashboard-preview.png" alt="Flowbite Admin Dashboard Live Preview"></a></p>
<p>This project is a free and open-source UI admin dashboard template built with the components from <a href="https://github.com/themesberg/flowbite">Flowbite</a> and based on the utility-first <a href="https://github.com/tailwindlabs/tailwindcss">Tailwind CSS</a> framework featuring charts, tables, widgets, CRUD layouts, modals, drawers, and more.</p>
<p>This admin dashboard can quickly help you get started building an application for your project using the newest UI/UX development technologies in the open-source area including Tailwind CSS and Flowbite.</p>
<hr>
<div align="center" class="flex flex-wrap justify-evenly w-full my-16">
	<a href="https://stackblitz.com/github/themesberg/flowbite-astro-admin-dashboard"><img src="https://developer.stackblitz.com/img/open_in_stackblitz.svg" alt="Open in StackBlitz"></a>
	<a href="https://codesandbox.io/p/github/themesberg/flowbite-astro-admin-dashboard/main"><img src="https://assets.codesandbox.io/github/button-edit-lime.svg" alt="Open with CodeSandbox"></a>
</div>
<div class="hidden">
<hr>
<h2 id="table-of-contents">Table of Contents</h2>
<details><summary>Click to expand</summary>
<ul>
<li><a href="#table-of-contents">Table of Contents</a></li>
<li><a href="#-demo-pages">🕹 Demo pages</a></li>
<li><a href="#-built-with-flowbite">🌀 Built with Flowbite</a></li>
<li><a href="#-tailwind-css-utility-classes">💨 Tailwind CSS utility classes</a></li>
<li><a href="#-15-example-pages">📊 15 example pages</a></li>
<li><a href="#-advanced-components">🧱 Advanced components</a></li>
<li><a href="#-flowbite-documentation">📚 Flowbite documentation</a></li>
<li><a href="#-development">👨‍🚀 Development</a>
<ul>
<li><a href="#%EF%B8%8F-workflow">⚙️ Workflow</a></li>
<li><a href="#-quick-start">🚀 Quick start</a></li>
<li><a href="#project-structure">Project Structure</a></li>
<li><a href="#-tools">🛠 Tools</a></li>
</ul>
</li>
<li><a href="#browser-support">Browser Support</a></li>
<li><a href="#resources">Resources</a>
<ul>
<li><a href="#javascript-frameworks">JavaScript Frameworks</a></li>
<li><a href="#back-end-frameworks">Back-end Frameworks</a></li>
</ul>
</li>
<li><a href="#reporting-issues">Reporting Issues</a></li>
<li><a href="#technical-support-or-questions">Technical Support or Questions</a></li>
<li><a href="#licensing">Licensing</a></li>
<li><a href="#useful-links">Useful Links</a></li>
<li><a href="#authors">Authors</a></li>
</ul>
</details>
<hr>
</div>
<div class="hidden">
<h2 id="-demo-pages">🕹 Demo pages</h2>















<table><thead><tr><th>Dashboard</th><th>Stacked Layout</th><th>Products (CRUD)</th></tr></thead><tbody><tr><td><a href="http://themesberg.github.io/flowbite-astro-admin-dashboard/"><img src="https://flowbite.s3.amazonaws.com/templates/flowbite-admin-dashboard/github/homepage.jpg" alt="Dashboard"></a></td><td><a href="http://themesberg.github.io/flowbite-astro-admin-dashboard/layouts/stacked/"><img src="https://flowbite.s3.amazonaws.com/templates/flowbite-admin-dashboard/github/stacked.jpg" alt="Stacked Layout"></a></td><td><a href="http://themesberg.github.io/flowbite-astro-admin-dashboard/crud/products/"><img src="https://flowbite.s3.amazonaws.com/templates/flowbite-admin-dashboard/github/products-crud.jpg" alt="Products (CRUD)"></a></td></tr></tbody></table>















<table><thead><tr><th>Users (CRUD)</th><th>Settings</th><th>Pricing page</th></tr></thead><tbody><tr><td><a href="http://themesberg.github.io/flowbite-astro-admin-dashboard/crud/users/"><img src="https://flowbite.s3.amazonaws.com/templates/flowbite-admin-dashboard/github/users.jpg" alt="Users (CRUD)"></a></td><td><a href="http://themesberg.github.io/flowbite-astro-admin-dashboard/settings/"><img src="https://flowbite.s3.amazonaws.com/templates/flowbite-admin-dashboard/github/settings.jpg" alt="Settings"></a></td><td><a href="http://themesberg.github.io/flowbite-astro-admin-dashboard/pages/pricing/"><img src="https://flowbite.s3.amazonaws.com/templates/flowbite-admin-dashboard/github/pricing.jpg" alt="Pricing page"></a></td></tr></tbody></table>















<table><thead><tr><th>Login page</th><th>Register page</th><th>Reset password</th></tr></thead><tbody><tr><td><a href="http://themesberg.github.io/flowbite-astro-admin-dashboard/authentication/sign-in/"><img src="https://flowbite.s3.amazonaws.com/templates/flowbite-admin-dashboard/github/login.jpg" alt="Login page"></a></td><td><a href="http://themesberg.github.io/flowbite-astro-admin-dashboard/authentication/sign-up/"><img src="https://flowbite.s3.amazonaws.com/templates/flowbite-admin-dashboard/github/register.jpg" alt="Register page"></a></td><td><a href="http://themesberg.github.io/flowbite-astro-admin-dashboard/authentication/reset-password/"><img src="https://flowbite.s3.amazonaws.com/templates/flowbite-admin-dashboard/github/reset-password.jpg" alt="Reset password"></a></td></tr></tbody></table>















<table><thead><tr><th>Forgot password</th><th>Profile lock</th><th>Maintenance page</th></tr></thead><tbody><tr><td><a href="http://themesberg.github.io/flowbite-astro-admin-dashboard/authentication/forgot-password/"><img src="https://flowbite.s3.amazonaws.com/templates/flowbite-admin-dashboard/github/forgot-password.jpg" alt="Forgot password"></a></td><td><a href="http://themesberg.github.io/flowbite-astro-admin-dashboard/authentication/profile-lock/"><img src="https://flowbite.s3.amazonaws.com/templates/flowbite-admin-dashboard/github/profile-lock.jpg" alt="Profile lock"></a></td><td><a href="http://themesberg.github.io/flowbite-astro-admin-dashboard/pages/maintenance/"><img src="https://flowbite.s3.amazonaws.com/templates/flowbite-admin-dashboard/github/maintenance.jpg" alt="Maintenance page"></a></td></tr></tbody></table>















<table><thead><tr><th>404 not found</th><th>500 server error</th><th>Playground</th></tr></thead><tbody><tr><td><a href="http://themesberg.github.io/flowbite-astro-admin-dashboard/pages/404/"><img src="https://flowbite.s3.amazonaws.com/templates/flowbite-admin-dashboard/github/404.jpg" alt="404 not found"></a></td><td><a href="http://themesberg.github.io/flowbite-astro-admin-dashboard/pages/500/"><img src="https://flowbite.s3.amazonaws.com/templates/flowbite-admin-dashboard/github/500.jpg" alt="500 server error"></a></td><td><a href="http://themesberg.github.io/flowbite-astro-admin-dashboard/playground/sidebar/"><img src="https://flowbite.s3.amazonaws.com/templates/flowbite-admin-dashboard/github/playground.jpg" alt="Playground"></a></td></tr></tbody></table>
<ul>
<li><a href="http://themesberg.github.io/flowbite-astro-admin-dashboard/">Live Preview</a></li>
</ul>
</div>
<h2 id="-built-with-flowbite">🌀 Built with Flowbite</h2>
<p>The interactive components such as the navbars, modals, drawers, and tooltips are all based on the popular <a href="https://flowbite.com/">open-source component library called Flowbite</a> which enables us to use these elements by creating more complex set of pages and widgets inside a fully-fledged admin dashboard template.</p>
<h2 id="-tailwind-css-utility-classes">💨 Tailwind CSS utility classes</h2>
<p>All of the pages, widgets, and components are solely based on the utility-first classes from Tailwind CSS and it is compatible with the latest <code>v3.x</code> of the technology by automatically purging all of the classes based on the template paths.</p>
<h2 id="-15-example-pages">📊 15 example pages</h2>
<p>Get started with 15 advanced examples pages including two different layouts of a dashboard’s homepage full of charts widgets, tables, datepickers, and statistics and also with two CRUD layout pages for products, users, a settings page, authentication pages for login and register and even custom 404 and 500 error pages.</p>
<h2 id="-advanced-components">🧱 Advanced components</h2>
<p>This admin dashboard contains many advanced components both from Flowbite but also from other third-party libraries such as ApexCharts which have been customly tailored with Tailwind CSS classes and designed based on the <a href="https://flowbite.com/figma/">Flowbite Design System</a>.</p>
<h2 id="-flowbite-documentation">📚 Flowbite documentation</h2>
<p>If you want to use this project we recommend to also <a href="https://flowbite.com/docs/getting-started/introduction/">study the component library</a> that we used to build this dashboard because you can use even more components from that library to enhance the examples that we’ve coded here already.</p>
<h2 id="-development">👨‍🚀 Development</h2>
<h3 id="️-workflow">⚙️ Workflow</h3>
<p>This product is built using the following widely used technologies:</p>
<ul>
<li>Tailwind CSS: <a href="https://tailwindcss.com/">tailwindcss.com</a></li>
<li>Flowbite: <a href="http://flowbite.com/">flowbite.com</a></li>
<li>Astro: <a href="https://astro.build/">astro.build</a></li>
</ul>
<h3 id="-quick-start">🚀 Quick start</h3>
<ol>
<li>Clone this repository or download the ZIP file</li>
<li>Make sure that you have <strong>Node.js</strong> and NPM, PNPM or Yarn installed</li>
<li>Install the project dependencies from the <code>package.json</code> file:</li>
</ol>
<pre is:raw="" class="astro-code" style="background-color: #0d1117; overflow-x: auto;"><code><span class="line"><span style="color: #C9D1D9">pnpm install</span></span>
<span class="line"><span style="color: #8B949E"># or</span></span>
<span class="line"><span style="color: #C9D1D9">npm install</span></span>
<span class="line"><span style="color: #8B949E"># or</span></span>
<span class="line"><span style="color: #C9D1D9">yarn</span></span></code></pre>
<p><em>PNPM is the package manager of choice for illustration, but you can use what you want.</em></p>
<ol>
<li>Launch the Astro local development server on <code>localhost:2121</code> by running the following command:</li>
</ol>
<pre is:raw="" class="astro-code" style="background-color: #0d1117; overflow-x: auto;"><code><span class="line"><span style="color: #C9D1D9">pnpm run dev</span></span></code></pre>
<p>You can also build the project and get the distribution files inside the <code>dist/</code> folder by running:</p>
<pre is:raw="" class="astro-code" style="background-color: #0d1117; overflow-x: auto;"><code><span class="line"><span style="color: #C9D1D9">pnpm run build</span></span></code></pre>
<p>Then, you can preview the generated build with a local web server:</p>
<pre is:raw="" class="astro-code" style="background-color: #0d1117; overflow-x: auto;"><code><span class="line"><span style="color: #C9D1D9">pnpm run preview</span></span></code></pre>
<p>For deployment, see the GitHub workflow, where you can plug your target (pre-configured for GitHub pages).
See <a href="https://docs.astro.build/en/guides/deploy">docs.astro.build/en/guides/deploy</a></p>
<p>Website is configured for static deployment, but you can flip it to <strong>Server-Side rendering</strong> by simply
uncommenting <code>output: "server"</code> in the <code>./astro.config.mjs</code>.</p>
<hr>
<h3 id="project-structure">Project Structure</h3>
<p>After cloning this repository, you’ll find the following (simplified) structure:</p>
<pre is:raw="" class="astro-code" style="background-color: #0d1117; overflow-x: auto;"><code><span class="line"><span style="color: #C9D1D9">🛬</span></span>
<span class="line"><span style="color: #C9D1D9">├── 💧 data</span></span>
<span class="line"><span style="color: #C9D1D9">│   └── </span><span style="color: #FF7B72">**</span><span style="color: #C9D1D9">/</span><span style="color: #FF7B72">*</span><span style="color: #C9D1D9">.json                        </span><span style="color: #8B949E"># Satic data sources for REST etc.</span></span>
<span class="line"><span style="color: #C9D1D9">│</span></span>
<span class="line"><span style="color: #C9D1D9">└── src</span></span>
<span class="line"><span style="color: #C9D1D9">    │</span></span>
<span class="line"><span style="color: #C9D1D9">    ├── 🧱 app</span></span>
<span class="line"><span style="color: #C9D1D9">    │   └── </span><span style="color: #FF7B72">**</span><span style="color: #C9D1D9">/</span><span style="color: #FF7B72">*</span><span style="color: #C9D1D9">.astro                   </span><span style="color: #8B949E"># Application-wide components</span></span>
<span class="line"><span style="color: #C9D1D9">    │</span></span>
<span class="line"><span style="color: #C9D1D9">    ├── 🌠 assets</span></span>
<span class="line"><span style="color: #C9D1D9">    │   └── </span><span style="color: #FF7B72">**</span><span style="color: #C9D1D9">/</span><span style="color: #FF7B72">*</span><span style="color: #C9D1D9">.{svg,…}                 </span><span style="color: #8B949E"># Transformable assets</span></span>
<span class="line"><span style="color: #C9D1D9">    │</span></span>
<span class="line"><span style="color: #C9D1D9">    ├── 🧱 components</span></span>
<span class="line"><span style="color: #C9D1D9">    │   └── </span><span style="color: #FF7B72">**</span><span style="color: #C9D1D9">/</span><span style="color: #FF7B72">*</span><span style="color: #C9D1D9">.astro                   </span><span style="color: #8B949E"># Simple, atomic UI elements</span></span>
<span class="line"><span style="color: #C9D1D9">    │</span></span>
<span class="line"><span style="color: #C9D1D9">    ├── 📚 lib</span></span>
<span class="line"><span style="color: #C9D1D9">    │   └── </span><span style="color: #FF7B72">**</span><span style="color: #C9D1D9">/</span><span style="color: #FF7B72">*</span><span style="color: #C9D1D9">.ts                      </span><span style="color: #8B949E"># Utilities (Databases, APIs…)</span></span>
<span class="line"><span style="color: #C9D1D9">    │</span></span>
<span class="line"><span style="color: #C9D1D9">    ├── 🧱 modules</span></span>
<span class="line"><span style="color: #C9D1D9">    │   └── </span><span style="color: #FF7B72">**</span><span style="color: #C9D1D9">/</span><span style="color: #FF7B72">*</span><span style="color: #C9D1D9">.astro                   </span><span style="color: #8B949E"># Complex views made of elements</span></span>
<span class="line"><span style="color: #C9D1D9">    │</span></span>
<span class="line"><span style="color: #C9D1D9">    ├── 📑 pages</span></span>
<span class="line"><span style="color: #C9D1D9">    │   ├── </span><span style="color: #FF7B72">**</span><span style="color: #C9D1D9">/</span><span style="color: #FF7B72">*</span><span style="color: #C9D1D9">.astro                   </span><span style="color: #8B949E"># File-based client routes</span></span>
<span class="line"><span style="color: #C9D1D9">    │   │</span></span>
<span class="line"><span style="color: #C9D1D9">    │   └── 🌐 api</span></span>
<span class="line"><span style="color: #C9D1D9">    │        └── [...entities].ts        </span><span style="color: #8B949E"># Catch-all endpoint for CRUD ops.</span></span>
<span class="line"><span style="color: #C9D1D9">    │</span></span>
<span class="line"><span style="color: #C9D1D9">    ├── 🚀 services</span></span>
<span class="line"><span style="color: #C9D1D9">    │   └── </span><span style="color: #FF7B72">*</span><span style="color: #C9D1D9">.ts                         </span><span style="color: #8B949E"># Server-side CRUD operations</span></span>
<span class="line"><span style="color: #C9D1D9">    │</span></span>
<span class="line"><span style="color: #C9D1D9">    └── 📐 types</span></span>
<span class="line"><span style="color: #C9D1D9">        └── </span><span style="color: #FF7B72">*</span><span style="color: #C9D1D9">.ts                         </span><span style="color: #8B949E"># Data entities typings</span></span>
<span class="line"></span></code></pre>
<h3 id="-tools">🛠 Tools</h3>
<p>Efforts have been put on fast <strong>onboarding</strong> and <strong>developer experience</strong>.</p>
<p>This project comes with extensive support for TypeScript, Astro, Tailwind, and VS Code.<br>
It is configured with sensible defaults, a bit of opinions, plus some tricks to make it plays nice together.</p>
<ul>
<li><strong>TypeScript</strong>: <em>strictest</em> Astro’s settings. Full-stack, type-safe code base</li>
<li><strong>ESLint</strong>: featuring <code>astro-eslint-parser</code> + <code>eslint-plugin-astro</code></li>
<li><strong>Prettier</strong>: featuring <code>prettier-plugin-astro</code> (bundled with <code>astro</code>)</li>
<li><strong>Editorconfig</strong>: conforming with prettier</li>
<li><strong>VS Code</strong>: extensions recommendations, tooling settings</li>
<li><strong>Tailwind</strong>: Astro integration (using Vite and PostCSS)</li>
<li><strong>Flowbite</strong>: dependencies (core, typography), settings</li>
<li><strong>GitHub</strong>: a <a href="https://github.com/themesberg/flowbite-astro-admin-dashboard/tree/main/.github/workflows">pre-configured workflow</a> for deployment (using PNPM cache)</li>
<li><strong>Sandboxes</strong>: project is tested against and fully compatible with web containers</li>
</ul>
<p>Feel free to hack those settings to cater for your own needs.</p>
<div align="center">
<a href="https://user-images.githubusercontent.com/603498/224380239-0aff9ec2-3436-4fca-a842-230f29dd9677.png"><img class="w-full rounded-md overflow-hidden" alt="ide-tooling" src="https://user-images.githubusercontent.com/603498/224380239-0aff9ec2-3436-4fca-a842-230f29dd9677.png"></a>
<a href="https://user-images.githubusercontent.com/603498/224374764-dd1f98f8-df45-43c0-97f7-4b89ec427628.png"><img class="w-full rounded-md overflow-hidden" alt="gh-workflow" src="https://user-images.githubusercontent.com/603498/224374764-dd1f98f8-df45-43c0-97f7-4b89ec427628.png"></a>
<a href="https://user-images.githubusercontent.com/603498/224353577-51262536-742a-4204-b85f-3f83c209697d.png"><img class="w-full rounded-md overflow-hidden" alt="gh-workflow" src="https://user-images.githubusercontent.com/603498/224353577-51262536-742a-4204-b85f-3f83c209697d.png"></a>
</div>
<h2 id="browser-support">Browser Support</h2>
<p>At present, we officially aim to support the last two versions of the following browsers:</p>
<div align="center" class="flex justify-between w-full">
<img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/chrome.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/firefox.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/edge.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/safari.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/opera.png" width="64" height="64">
</div>
<h2 id="resources">Resources</h2>
<ul>
<li>
<p>Live preview: <a href="https://themesberg.github.io/flowbite-astro-admin-dashboard/">https://themesberg.github.io/flowbite-astro-admin-dashboard/</a></p>
</li>
<li>
<p>Flowbite documentation: <a href="https://flowbite.com/docs/getting-started/introduction/">https://flowbite.com/docs/getting-started/introduction/</a></p>
</li>
<li>
<p>Tailwind CSS documentation: <a href="https://tailwindcss.com/">https://tailwindcss.com/</a></p>
</li>
<li>
<p>License Agreement: <a href="https://flowbite.com/docs/getting-started/license/">https://flowbite.com/docs/getting-started/license/</a></p>
</li>
<li>
<p>Issues: <a href="https://github.com/themesberg/flowbite-admin-dashboard/issues">Github Issues Page</a></p>
</li>
</ul>
<h3 id="javascript-frameworks">JavaScript Frameworks</h3>
<p>Here’s a list of compatible technologies and guides for Flowbite and Tailwind CSS:</p>
<p>The awesome open-source community also built and currently maintains the following standalone libraries for React, Vue, Svelte, and Angular:</p>
<ul>
<li><a href="https://github.com/themesberg/flowbite-react">🌀 Flowbite React Library</a></li>
<li><a href="https://github.com/themesberg/flowbite-vue">🍀 Flowbite Vue Library</a></li>
<li><a href="https://github.com/themesberg/flowbite-svelte">🎸 Flowbite Svelte Library</a></li>
<li><a href="https://github.com/themesberg/flowbite-angular">📕 Flowbite Angular Library</a></li>
</ul>
<p>We also wrote integration guides for the following front-end frameworks and libraries:</p>
<ul>
<li><a href="https://flowbite.com/docs/getting-started/react/">📝 Flowbite with React guide</a></li>
<li><a href="https://flowbite.com/docs/getting-started/next-js/">📝 Flowbite with Next.js guide</a></li>
<li><a href="https://flowbite.com/docs/getting-started/vue/">📝 Flowbite with Vue guide</a></li>
<li><a href="https://flowbite.com/docs/getting-started/nuxt-js/">📝 Flowbite with Nuxt.js guide</a></li>
<li><a href="https://flowbite.com/docs/getting-started/svelte/">📝 Flowbite with Svelte guide</a></li>
</ul>
<h3 id="back-end-frameworks">Back-end Frameworks</h3>
<p>Flowbite has a great integration with most of the back-end frameworks because it relies on vanilla JavaScript:</p>
<ul>
<li><a href="https://flowbite.com/docs/getting-started/laravel/">📚 Using Flowbite with Laravel</a></li>
<li><a href="https://flowbite.com/docs/getting-started/rails/">🚊 Using Flowbite with Ruby on Rails 7</a></li>
<li><a href="https://flowbite.com/docs/getting-started/django/">🐸 Using Flowbite with Django</a></li>
<li><a href="https://flowbite.com/docs/getting-started/flask/">🌶 Using Flowbite with Flask</a></li>
</ul>
<h2 id="reporting-issues">Reporting Issues</h2>
<p>We use GitHub Issues as the official bug tracker for Flowbite Admin Dashboard. Here are some advices for our users that want to report an issue:</p>
<ol>
<li>Make sure that you are using the latest version of Flowbite Admin Dashboard. Check the CHANGELOG from your dashboard on the <a href="https://github.com/themesberg/flowbite-admin-dashboard/releases">GitHub releases page</a>.</li>
<li>Providing us reproducible steps for the issue will shorten the time it takes for it to be fixed.</li>
<li>Some issues may be browser specific, so specifying in what browser you encountered the issue might help.</li>
</ol>
<h2 id="technical-support-or-questions">Technical Support or Questions</h2>
<p>If you have questions or need help integrating the product please <a href="https://flowbite.com/contact/">contact us</a> instead of opening an issue.</p>
<h2 id="licensing">Licensing</h2>
<ul>
<li>Copyright 2019-2023 Bergside Inc. (<a href="https://flowbite.com">https://flowbite.com</a>)</li>
<li>Open-source under the <a href="https://github.com/themesberg/flowbite-admin-dashboard/blob/main/LICENSE">MIT License</a></li>
</ul>
<h2 id="useful-links">Useful Links</h2>
<ul>
<li>📚 <a href="https://flowbite.com/">Flowbite Library</a> - Open-source components built with Tailwind CSS</li>
<li>🎨 <a href="https://flowbite.com/figma/">Flowbite Figma</a> - Design system built for Figma</li>
<li>🧱 <a href="https://flowbite.com/blocks/">Flowbite Blocks</a> - Building sections for website and applications</li>
<li>💎 <a href="https://flowbite.com/pro/">Flowbite Pro</a> - A larger collection of the open-source version of the latter three</li>
</ul>
<h2 id="authors">Authors</h2>
<ul>
<li><a href="https://twitter.com/Julian_Cataldo">Julian Cataldo</a></li>
<li><a href="https://twitter.com/zoltanszogyenyi">Zoltán Szőgyényi</a></li>
<li><a href="https://twitter.com/roberttanislav">Robert Tanislav</a></li>
</ul>
		</div>
	</article>
</div>

			<footer class="p-4 my-6 mx-4 bg-white rounded-lg shadow md:flex md:items-center md:justify-between md:p-6 xl:p-8 dark:bg-gray-800">
	<ul class="flex flex-wrap items-center mb-6 space-y-1 md:mb-0">
		<li>
			<a href="#" class="mr-4 text-sm font-normal text-gray-500 hover:underline md:mr-6 dark:text-gray-400">Terms and conditions</a>
		</li>
		<li>
			<a href="#" class="mr-4 text-sm font-normal text-gray-500 hover:underline md:mr-6 dark:text-gray-400">Privacy Policy</a>
		</li>
		<li>
			<a href="#" class="mr-4 text-sm font-normal text-gray-500 hover:underline md:mr-6 dark:text-gray-400">Licensing</a>
		</li>
		<li>
			<a href="#" class="mr-4 text-sm font-normal text-gray-500 hover:underline md:mr-6 dark:text-gray-400">Cookie Policy</a>
		</li>
		<li>
			<a href="#" class="text-sm font-normal text-gray-500 hover:underline dark:text-gray-400">Contact</a>
		</li>
	</ul>
	<div class="flex space-x-6 sm:justify-center">
		<a href="#" class="text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
			<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
				<path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
			</svg>
		</a>
		<a href="#" class="text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
			<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
				<path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
			</svg>
		</a>
		<a href="#" class="text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
			<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
				<path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
			</svg>
		</a>
		<a href="#" class="text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
			<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
				<path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
			</svg>
		</a>
		<a href="#" class="text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
			<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
				<path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd"></path>
			</svg>
		</a>
	</div>
</footer>

<p class="my-10 text-sm text-center text-gray-500">
	© 2019 - 2023 —
	<a href="https://flowbite.com/" class="hover:underline" target="_blank">Flowbite.com</a>. All rights reserved.
</p>
		</div>
	</div>
	

</body>