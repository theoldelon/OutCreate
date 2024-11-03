@extends('front.layouts.app')

@section('main')
<section class="section-5 bg-2">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3">
                @include('front.account.sidebar')
            </div>
            <div class="col-lg-9 flex justify-center">
                <div class="container mx-auto py-8">                 @include('front.message')
                    <div class="card border-0 shadow-lg mb-8 rounded-lg">
                        <div class="card-body p-6">
                            <h3 class="text-xl font-bold mb-6 text-gray-800 flex items-center">
                                <i class="fas fa-user-circle mr-2 text-blue-500"></i> My Profile
                            </h3>
            
                            <div class="space-y-6">
                                <div class="flex items-center">
                                    <i class="fas fa-user mr-2 text-gray-500"></i>
                                    <div>
                                        <h2 class="block text-sm font-medium text-gray-700 mb-1">Name</h2>
                                        <p>{{ $user->name }}</p>
                                    </div>
                                </div>
            
                                <div class="flex items-center">
                                    <i class="fas fa-envelope mr-2 text-gray-500"></i>
                                    <div>
                                        <h2 class="block text-sm font-medium text-gray-700 mb-1">Email</h2>
                                        <p>{{ $user->email }}</p>
                                    </div>
                                </div>
            
                                <div class="flex items-center">
                                    <i class="fas fa-briefcase mr-2 text-gray-500"></i>
                                    <div>
                                        <h2 class="block text-sm font-medium text-gray-700 mb-1">Designation</h2>
                                        <p>{{ $user->designation }}</p>
                                    </div>
                                </div>
            
                                <div class="flex items-center">
                                    <i class="fas fa-mobile-alt mr-2 text-gray-500"></i>
                                    <div>
                                        <h2 class="block text-sm font-medium text-gray-700 mb-1">Mobile</h2>
                                        <p>{{ $user->mobile }}</p>
                                    </div>
                                </div>
            
                                <div class="flex items-center">
                                    <i class="fas fa-dollar-sign mr-2 text-gray-500"></i>
                                    <div>
                                        <h2 class="block text-sm font-medium text-gray-700 mb-1">Hourly Rate</h2>
                                        <p>{{ $user->hourly_rate }}</p>
                                    </div>
                                </div>
            
                                <div class="flex items-center">
                                    <i class="fas fa-clock mr-2 text-gray-500"></i>
                                    <div>
                                        <h2 class="block text-sm font-medium text-gray-700 mb-1">Availability</h2>
                                        <p>{{ ucfirst($user->availability) }}</p>
                                    </div>
                                </div>
            
                                <div class="flex items-center">
                                    <i class="fas fa-info-circle mr-2 text-gray-500"></i>
                                    <div>
                                        <h2 class="block text-sm font-medium text-gray-700 mb-1">Bio</h2>
                                        <p>{{ $user->bio }}</p>
                                    </div>
                                </div>
            
                                <div class="flex items-center">
                                    <i class="fas fa-star mr-2 text-gray-500"></i>
                                    <div>
                                        <h2 class="block text-sm font-medium text-gray-700 mb-1">Skills</h2>
                                        <p>{{ $user->skills }}</p>
                                    </div>
                                </div>
            
                                <div class="flex items-center">
                                    <i class="fas fa-globe mr-2 text-gray-500"></i>
                                    <div>
                                        <h2 class="block text-sm font-medium text-gray-700 mb-1">Website</h2>
                                        <p>
                                            <a href="{{ $user->website }}" target="_blank" rel="noopener noreferrer">{{ $user->website }}</a>
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
</section>
@endsection
@section('customJs')
@endsection