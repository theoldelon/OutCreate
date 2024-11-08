@extends('front.layouts.app')

@section('main')
<div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
    <h1 class="text-4xl font-extrabold text-center text-gray-900">How It Works</h1>

    <p class="mt-4 text-lg text-center text-gray-600">
        Learn how to get started and make the most of our platform. Here’s a simple guide for clients and freelancers.
    </p>

    <div class="mt-10 space-y-12 md:grid md:grid-cols-2 md:gap-8 md:space-y-0">
        <!-- Client Process -->
        <div class="flex flex-col items-center">
            <div class="bg-blue-500 text-white p-6 rounded-full mb-6">
                <i class="fas fa-briefcase text-3xl"></i>
            </div>
            <h2 class="text-2xl font-semibold text-gray-900">For Clients</h2>
            <p class="mt-4 text-center text-gray-700">
                As a client, you can post job listings, review applicants, and hire talent that fits your needs. It’s simple, efficient, and easy to manage your recruitment.
            </p>
            <div class="mt-6">
                <a href="{{ route('account.createJob') }}" class="btn btn-primary">Post a Job</a>
            </div>
        </div>

        <!-- Freelancer Process -->
        <div class="flex flex-col items-center">
            <div class="bg-green-500 text-white p-6 rounded-full mb-6">
                <i class="fas fa-user-tie text-3xl"></i>
            </div>
            <h2 class="text-2xl font-semibold text-gray-900">For Freelancers</h2>
            <p class="mt-4 text-center text-gray-700">
                As a freelancer, browse through job listings, apply for roles, and showcase your skills to get hired. Start building your portfolio and career today.
            </p>
            <div class="mt-6">
                <a href="{{ route('jobs') }}" class="btn btn-primary">Browse Jobs</a>
            </div>
        </div>
    </div>

    <div class="mt-12 text-center">
        <h2 class="text-3xl font-semibold text-gray-900">Why Choose Us?</h2>
        <p class="mt-4 text-lg text-gray-700">
            Our platform connects talented freelancers with clients who need quality work. We ensure a smooth, secure, and reliable experience for both parties.
        </p>
    </div>

    <!-- How It Works Steps -->
    <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="text-center">
            <div class="text-4xl text-blue-500">
                <i class="fas fa-clipboard-list"></i>
            </div>
            <h3 class="mt-4 text-xl font-semibold text-gray-900">Step 1: Sign Up</h3>
            <p class="mt-2 text-gray-700">
                Create an account as a client or freelancer and fill out your profile with the necessary details.
            </p>
        </div>

        <div class="text-center">
            <div class="text-4xl text-blue-500">
                <i class="fas fa-search"></i>
            </div>
            <h3 class="mt-4 text-xl font-semibold text-gray-900">Step 2: Browse & Post Jobs</h3>
            <p class="mt-2 text-gray-700">
                Clients post job listings, and freelancers browse through available opportunities to apply.
            </p>
        </div>

        <div class="text-center">
            <div class="text-4xl text-blue-500">
                <i class="fas fa-check-circle"></i>
            </div>
            <h3 class="mt-4 text-xl font-semibold text-gray-900">Step 3: Hire & Get Hired</h3>
            <p class="mt-2 text-gray-700">
                After reviewing applications, clients can hire freelancers, and freelancers can start working.
            </p>
        </div>
    </div>

    <!-- Success Stories Section -->
    <div class="mt-16 text-center">
        <h2 class="text-3xl font-semibold text-gray-900">Success Stories</h2>
        <p class="mt-4 text-lg text-gray-700">
            Hear from real clients and freelancers who found success on our platform. Our users have built lasting collaborations that helped grow businesses and careers.
        </p>

        <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Example success story 1 -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <p class="text-gray-600 italic">"Thanks to this platform, we found the perfect freelancer to help us develop our website. The process was seamless and fast!"</p>
                <p class="mt-4 text-gray-900 font-semibold">Sarah T., Marketing Manager</p>
            </div>
            <!-- Example success story 2 -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <p class="text-gray-600 italic">"This platform helped me land my first big project. I highly recommend it to any freelancer looking to build their career."</p>
                <p class="mt-4 text-gray-900 font-semibold">John D., Web Developer</p>
            </div>
            <!-- Example success story 3 -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <p class="text-gray-600 italic">"The client I hired was fantastic! The process was transparent, and we were able to communicate easily throughout the project."</p>
                <p class="mt-4 text-gray-900 font-semibold">Mia L., CEO</p>
            </div>
        </div>
    </div>

    <!-- Tips for Clients and Freelancers -->
    <div class="mt-16 bg-gray-50 py-12">
        <h2 class="text-3xl font-semibold text-center text-gray-900">Tips for Clients & Freelancers</h2>
        <p class="mt-4 text-lg text-center text-gray-700">
            Maximize your success by following these simple tips tailored for both clients and freelancers.
        </p>

        <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-8">
            <!-- Tips for Clients -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h3 class="text-xl font-semibold text-gray-900">For Clients</h3>
                <ul class="mt-4 list-disc pl-5 text-gray-700">
                    <li>Provide clear job descriptions and expectations.</li>
                    <li>Review freelancer portfolios to find the best match.</li>
                    <li>Communicate effectively to ensure smooth collaboration.</li>
                    <li>Offer fair compensation for quality work.</li>
                </ul>
            </div>

            <!-- Tips for Freelancers -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h3 class="text-xl font-semibold text-gray-900">For Freelancers</h3>
                <ul class="mt-4 list-disc pl-5 text-gray-700">
                    <li>Ensure your profile and portfolio are up-to-date.</li>
                    <li>Craft personalized proposals for each job.</li>
                    <li>Stay professional in communication and deliverables.</li>
                    <li>Set clear terms and expectations with clients before starting.</li>
                </ul>
            </div>
        </div>
    </div>

</div>
@endsection

@section('customJs')
@endsection
