<x-layout title="Links">
    <a href="/links/create" class="btn btn-dark mb-2">adicionar</a>
<ul class="list-group">
    @foreach($links as $link)
        <li class="list-group-item">{{$link->shortLink}} -> {{$link->longLink}}</li>
    @endforeach
</ul>
</x-layout>
