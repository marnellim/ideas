<x-app-layout>
    <div class="content">
        <div class="mb-8">
            <h1 style="font-size: 15px; font-weight: bold;">Date: <span id="date"> </span> &nbsp; &nbsp; &nbsp; <span id="time"></span></h1>
        </div>

        <x-primary-button>
            <a href="{{ route('posts.create') }}">Create New Post</a>
        </x-primary-button>
        
        <div class="card mt-20 justify-center text-center rounded-lg" style="border: 1px solid hsl(0, 16%, 24%); box-shadow: 0 2px 4px rgba(0, 0, 0.9, 0.9); width: 22rem; height: 16rem; padding: 20px; background-color:white;">
            <div class="card-body" style="color: rgb(16, 5, 38);" >
                <h5 class="card-title" style="font-size: 18px;">Number of Registered Users</h5>
                <p class="card-text" style="font-size: 7rem">{{ $usersCount }}</p>
            </div>
        </div>

        <div class="card mt-10 justify-center text-center rounded-lg" style="border: 1px solid hsl(0, 16%, 24%); box-shadow: 0 2px 4px rgba(0, 0, 0.9, 0.9); width: 22rem; height: 16rem; padding: 20px; background-color: rgb(255, 72, 0);">
            <div class="card-body " style="color: white;">
                <h5 class="card-title" style="font-size: 18px;">Number of Posts</h5>
                <p class="card-text" style="font-size: 7rem">{{ $usersCount }}</p>
            </div>
        </div>

    </div>
</x-app-layout>
