<x-app-layout>
    <div class="container">
        <div class="content">
            <div class="row flex">
                @foreach($users as $index => $user)
                @if($index % 7 === 0 && $index !== 0)
                    </div><div class="row flex">
                    @endif
                <div class="col-md-6">
                    <div class="card mt-10 mr-10 text-center rounded-lg" style="border: 1px solid #ddd; box-shadow: 0 2px 4px rgba(0, 0, 0.9, 0.9); width: 10rem; height: 10rem; padding: 20px; background-color:white;">
                        <div class="card-body mt-2">
                            <a href=""><i class="fas fa-user" style="font-size: 3em;"></i></a>
                            <h5 class="card-title">{{$user->name}}</h5>
                            <p class="card-text"><strong>User ID:</strong> {{$user->id}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>