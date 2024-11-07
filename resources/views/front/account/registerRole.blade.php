@extends('front.layouts.app')

@section('main')
<section class="section-5 flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-8">
        <h2 class="text-3xl font-bold text-gray-800 text-center mb-4">Join Our Community</h2>
        <p class="text-gray-600 text-center mb-8">Whether you're here to find work or hire professionals, we have the right account for you.</p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Register as Freelancer -->
            <div class="bg-blue-50 p-6 rounded-lg shadow">
                <h3 class="text-xl font-semibold text-blue-700 mb-2">Register as a Freelancer</h3>
                <p class="text-gray-600 mb-4">
                    Showcase your skills, find new opportunities, and work with clients from all over the world.
                </p>
                <ul class="list-disc list-inside text-gray-500 mb-4">
                    <li>Access a wide range of projects</li>
                    <li>Flexible work schedule</li>
                    <li>Direct payments for your work</li>
                </ul>
                <a href="{{ route('account.registration', ['role' => 'freelancer']) }}" 
                   class="block w-full bg-blue-600 text-white text-center py-3 rounded-lg font-semibold hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                    Register as Freelancer
                </a>
            </div>
            
            <!-- Register as Client -->
            <div class="bg-green-50 p-6 rounded-lg shadow">
                <h3 class="text-xl font-semibold text-green-700 mb-2">Register as a Client</h3>
                <p class="text-gray-600 mb-4">
                    Post your projects, hire skilled freelancers, and bring your ideas to life with top talent.
                </p>
                <ul class="list-disc list-inside text-gray-500 mb-4">
                    <li>Find skilled professionals for your needs</li>
                    <li>Easy project management</li>
                    <li>Secure payment and flexible options</li>
                </ul>
                <a href="{{ route('account.registration', ['role' => 'client']) }}"
                   class="block w-full bg-green-600 text-white text-center py-3 rounded-lg font-semibold hover:bg-green-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                    Register as Client
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
