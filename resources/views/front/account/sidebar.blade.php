<div class="shadow-lg mb-4 p-3">
    <div class="s-body text-center mt-3">
        <div class="flex justify-center">
            <img src="{{ Auth::user()->image ? asset('profile_pic/' . Auth::user()->image) : asset('assets/assets/images/avatar7.png') }}" 
                 alt="avatar" 
                 class="rounded-full h-36 w-36 object-cover transition-transform duration-200 transform hover:scale-105">
        </div>
        <h5 class="mt-3 pb-0 text-lg font-semibold">{{ Auth::user()->name }}</h5>
        <p class="text-muted mb-1 fs-6">{{ Auth::user()->designation }}</p>
        <div class="d-flex justify-content-center mb-2">
            <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="btn btn-primary">Change Profile Picture</button>
        </div>
    </div>
</div>

<div class="bg-white shadow rounded p-4">
    <h3 class="text-lg font-semibold mb-4 text-gray-800 flex items-center">
        <i class="fas fa-user-cog mr-2 text-blue-500"></i> 
        Account Menu
    </h3>
    
    <!-- Account Menu Links -->
    <ul class="bg-white">
        <li>
            <a href="{{ route('account.show', ['id' => Auth::user()->id]) }}" class="flex items-center p-2 text-gray-700 hover:bg-blue-200 rounded transition">
                <i class="fas fa-user mr-2 text-blue-500"></i> Account
            </a>
        </li>
        <li>
            <a href="{{ route('account.profile') }}" class="flex items-center p-2 text-gray-700 hover:bg-blue-200 rounded transition">
                <i class="fas fa-cog mr-2 text-blue-500"></i> Account Settings
            </a>
        </li>

        <!-- Client-Specific Menu -->
        @if (Auth::user()->role == 'client' || Auth::user()->role == 'admin')
            <li>
                <a href="{{ route('account.createJob') }}" class="flex items-center p-2 text-gray-700 hover:bg-blue-200 rounded transition">
                    <i class="fas fa-plus-circle mr-2 text-blue-500"></i> Post a Job
                </a>
            </li>
            <li>
                <a href="{{ route('account.myJobs') }}" class="flex items-center p-2 text-gray-700 hover:bg-blue-200 rounded transition">
                    <i class="fas fa-briefcase mr-2 text-blue-500"></i> My Jobs
                </a>
            </li>
        @endif

        <!-- Freelancer-Specific Menu -->
        @if (Auth::user()->role == 'freelancer' || Auth::user()->role == 'admin')
            <li>
                <a href="{{ route('account.myJobApplications') }}" class="flex items-center p-2 text-gray-700 hover:bg-blue-200 rounded transition">
                    <i class="fas fa-file-alt mr-2 text-blue-500"></i> Jobs Applied
                </a>
            </li>
            <li>
                <a href="{{ route('account.savedJobs') }}" class="flex items-center p-2 text-gray-700 hover:bg-blue-200 rounded transition">
                    <i class="fas fa-heart mr-2 text-blue-500"></i> Saved Jobs
                </a>
            </li>
            <!-- Additional freelancer links can go here -->
        @endif
    </ul>
</div>
