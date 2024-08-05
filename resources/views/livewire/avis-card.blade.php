<div class="avis-card">
    <div class="flex items-center gap-2 font-medium">
        <span class="flex items-center justify-center h-10 w-10 rounded-full bg-[#65B741] uppercase">{{$item->user->name[0]}}</span>
        <span class="capitalize">{{$item->user->name}}</span>
    </div>
    <p class="line-clamp-6 p-4 pb-0 max-h-min">
        {{ $item->contenu }}
    </p>
</div>