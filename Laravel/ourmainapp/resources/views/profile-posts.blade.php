{{-- <x-profile :sharedData = "$sharedData" >

{{-- :avatar="$avatar" :username="$username" :currentlyFollowing="$currentlyFollowing" :postCount="$postCount" --}}
     {{-- <div class="list-group">
        @foreach ($posts as $post)
     <a href="/post/{{$post->id}}" class="list-group-item list-group-item-action">
          <img class="avatar-tiny" src="{{$post -> userData -> avatar}}" />
          <strong>{{$post->title}}</strong> on {{$post->created_at->format('n/j/Y')}}
        </a>    
        @endforeach
      </div> --}}
{{-- </x-profile> --}} 




<x-profile :sharedData="$sharedData">
  <div class="list-group">
        @foreach($posts as $post)
        <a href="/post/{{$post->id}}" class="list-group-item list-group-item-action">
          <img class="avatar-tiny" src="{{$post->userData->avatar}}" />
          <strong>{{$post->title}}</strong> on {{$post->created_at->format('n/j/Y')}}
        </a>
        @endforeach
      </div>
</x-profile>