<div class="relative" x-data="{isVisible: true}" @click.away="isVisible = false">
    <input wire:model.debounce.300ms="search"
           type="text"
           class="bg-gray-800 text-sm rounded-full focus:outline-none focus:shadow-outline w-64 px-3 pl-8 py-1"
           placeholder="Search (Press '/' to focus)"
           x-ref="search"
           @keydown.window="
                if (event.keyCode === 191)
                    event.preventDefault();
                    $refs.search.focus();
           "
           @focus="isVisible = true"
           @keydown.escape.window="isVisible = false"
           @keydown="isVisible = true"
           @keydown.shift.tab="isVisible = false"
    >

    <div class="absolute top-0 flex items-center h-full ml-2">
        <svg class="fill-current text-gray-400 w-4" viewBox="0 0 24 24">
            <path class="heroicon-ui"
                  d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z"/>
        </svg>
    </div>

    <div wire:loading style="position:absolute ;border-top-color:transparent"
         class="top-1.5 right-0 mr-3 w-4 h-4 border-4 border-gray-400 border-solid rounded-full animate-spin"></div>

    @if(strlen($search) >= 3)
        <div class="absolute z-50 bg-gray-800 text-xs rounded w-64 mt-2" x-show.transition.opacity.duration.200="isVisible">
            @if(count($searchResults) > 0)
                <div class="divide-y divide-gray-300">
                    @foreach($searchResults as $game)
                        <div>
                            <a href="{{route('games.show', $game['slug'])}}"
                               class="block hover:bg-gray-700 flex items-center rounded transition ease-in-out duration-150 py-3 px-3"
                               @if($loop->last)
                               @keydown.tab="isVisible = false"
                                    @endif
                            >
                                @if(isset($game['cover']))
                                    <img src="{{Str::replaceFirst('thumb', 'cover_small', $game['cover']['url'])}}"
                                         alt="cover"
                                         class="w-10">
                                @else
                                    <p>No Cover</p>
                                @endif
                                <span class="ml-4"> {{$game['name']}} </span>
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="px-3 py-3">No results for "{{ $search }}"</div>
            @endif
        </div>
    @endif
</div>
