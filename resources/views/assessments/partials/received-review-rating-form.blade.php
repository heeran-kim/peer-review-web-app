<h5>Peer Review Received: {{count($reviewsReceived)}}</h5>
<div class="bg-white p-3 border rounded m-3">
@if (count($reviewsReceived))
    <form method="POST" action="{{ route('review.rating') }}">
        @csrf
        <ul>
            @foreach ($reviewsReceived as $review)
                <input type="hidden" name="reviewsId[]" value="{{$review->id}}">
                <li><span class="fw-bold">{{$review->reviewer->name}}: </span>{{$review->text}}</li>
                <input class="bg-white p-2 border rounded my-3 ms-3 text-center"
                        name="rating[]" value="{{old('rating.' . $loop->index, $review->rating)}}"
                        style="width: 70px;"></input>
                <x-input-error :messages="$errors->get('rating.' . $loop->index)" class="mt-2" />
            @endforeach
        </ul>
        <x-primary-button class="ms-3">
            {{ __('Submit') }}
        </x-primary-button>
    </form>
@else
    <div class="text-center">No Reviews Received Yet</div>
@endif
</div>