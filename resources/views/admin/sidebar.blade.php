<div class="bg-white shadow rounded p-4 mb-4">
    <h3 class="text-lg font-semibold mb-4 text-gray-800 flex items-center">
        <i class="fas fa-cogs mr-2 text-blue-500"></i>
        Admin Menu
    </h3>
    <ul class="list-group list-group-flush">
        <li class="list-group-item d-flex justify-content-between p-3 hover:bg-blue-100 transition duration-200">
            <a href="{{ route('admin.users') }}" class="flex items-center text-gray-700 no-underline">
                <i class="fas fa-users w-4 h-4 mr-2 text-blue-500"></i>
                Users
            </a>
        </li>
        <li class="list-group-item d-flex justify-content-between p-3 hover:bg-blue-100 transition duration-200">
            <a href="{{ route('admin.jobs') }}" class="flex items-center text-gray-700 no-underline">
                <i class="fas fa-briefcase w-4 h-4 mr-2 text-blue-500"></i>
                Jobs
            </a>
        </li>
        <li class="list-group-item d-flex justify-content-between p-3 hover:bg-blue-100 transition duration-200">
            <a href="{{ route('admin.jobApplications') }}" class="flex items-center text-gray-700 no-underline">
                <i class="fas fa-file-alt w-4 h-4 mr-2 text-blue-500"></i>
                Job Applications
            </a>
        </li>
        <li class="list-group-item d-flex justify-content-between p-3 hover:bg-blue-100 transition duration-200">
            <a href="{{ route('account.logout') }}" class="flex items-center text-gray-700 no-underline">
                <i class="fas fa-sign-out-alt w-4 h-4 mr-2 text-blue-500"></i>
                Logout
            </a>
        </li>
    </ul>
</div>
