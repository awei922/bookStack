<?php $type = $entity->getType(); ?>
<a href="{{ $entity->getUrl() }}" class="{{$type}} {{$type === 'page' && $entity->draft ? 'draft' : ''}} {{$classes ?? ''}} entity-list-item" data-entity-type="{{$type}}" data-entity-id="{{$entity->id}}">
    {{--<span role="presentation" class="icon text-{{$type}}">@icon($type)</span>--}}
    @icon($type)
    <div class="content">
            <h4 class="entity-list-item-name break-text">{{ $entity->name }}</h4>
            {{ $slot ?? '' }}
    </div>
</a>