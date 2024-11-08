@extends('front.layouts.app')

@section('main')
<section class="section-5 bg-2">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3">
                @include('front.account.sidebar')
            </div>
            <div class="col-lg-9">
                <div class="container mx-auto py-8">
                    @include('front.message')
                    <div class="card border-0 shadow-lg mb-8 rounded-lg">
                        <div class="card-body p-6">
                            <h3 class="text-xl font-bold mb-6 text-gray-800 flex items-center">
                                <i class="fas fa-user-circle mr-2 text-blue-500"></i> My Profile
                            </h3>

                            <div class="space-y-8">
                                <!-- Personal Information -->
                                <div class="border-b pb-6 mb-6">
                                    <h4 class="text-lg font-semibold text-gray-800 mb-4">Personal Information</h4>
                                    
                                    <div class="flex items-center mb-4">
                                        <i class="fas fa-user mr-2 text-gray-500"></i>
                                        <div>
                                            <h5 class="block text-sm font-medium text-gray-700 mb-1">Name</h5>
                                            <p class="text-gray-800">{{ $user->name }}</p>
                                        </div>
                                    </div>
            
                                    <div class="flex items-center mb-4">
                                        <i class="fas fa-envelope mr-2 text-gray-500"></i>
                                        <div>
                                            <h5 class="block text-sm font-medium text-gray-700 mb-1">Email</h5>
                                            <p class="text-gray-800">{{ $user->email }}</p>
                                        </div>
                                    </div>
            
                                    <div class="flex items-center mb-4">
                                        <i class="fas fa-mobile-alt mr-2 text-gray-500"></i>
                                        <div>
                                            <h5 class="block text-sm font-medium text-gray-700 mb-1">Mobile</h5>
                                            <p class="text-gray-800">{{ $user->mobile }}</p>
                                        </div>
                                    </div>
                                </div>
            
                                <!-- Professional Information -->
                                <div class="border-b pb-6 mb-6">
                                    <h4 class="text-lg font-semibold text-gray-800 mb-4">Professional Information</h4>
            
                                    <div class="flex items-center mb-4">
                                        <i class="fas fa-briefcase mr-2 text-gray-500"></i>
                                        <div>
                                            <h5 class="block text-sm font-medium text-gray-700 mb-1">Designation</h5>
                                            <p class="text-gray-800">{{ $user->designation }}</p>
                                        </div>
                                    </div>
            
                                    <div class="flex items-center mb-4">
                                        <i class="fas fa-dollar-sign mr-2 text-gray-500"></i>
                                        <div>
                                            <h5 class="block text-sm font-medium text-gray-700 mb-1">Hourly Rate</h5>
                                            <p class="text-gray-800">{{ $user->hourly_rate }}</p>
                                        </div>
                                    </div>
            
                                    <div class="flex items-center mb-4">
                                        <i class="fas fa-clock mr-2 text-gray-500"></i>
                                        <div>
                                            <h5 class="block text-sm font-medium text-gray-700 mb-1">Availability</h5>
                                            <p class="text-gray-800">{{ ucfirst($user->availability) }}</p>
                                        </div>
                                    </div>
                                </div>
            
                                <!-- Additional Information -->
                                <div class="border-b pb-6 mb-6">
                                    <h4 class="text-lg font-semibold text-gray-800 mb-4">Additional Information</h4>
            
                                    <div class="flex items-center mb-4">
                                        <i class="fas fa-info-circle mr-2 text-gray-500"></i>
                                        <div>
                                            <h5 class="block text-sm font-medium text-gray-700 mb-1">Bio</h5>
                                            <p class="text-gray-800">{{ $user->bio }}</p>
                                        </div>
                                    </div>
            
                                    <div class="flex items-center mb-4">
                                        <i class="fas fa-star mr-2 text-gray-500"></i>
                                        <div>
                                            <h5 class="block text-sm font-medium text-gray-700 mb-1">Skills</h5>
                                            <p class="text-gray-800">{{ $user->skills }}</p>
                                        </div>
                                    </div>
            
                                    <div class="flex items-center mb-4">
                                        <i class="fas fa-globe mr-2 text-gray-500"></i>
                                        <div>
                                            <h5 class="block text-sm font-medium text-gray-700 mb-1">Website</h5>
                                            <p class="text-gray-800">
                                                <a href="{{ $user->website }}" target="_blank" class="text-blue-500 hover:underline">{{ $user->website }}</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('customJs')
@endsection
