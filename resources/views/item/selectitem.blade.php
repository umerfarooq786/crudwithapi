@include('inc.header')

<section id="services">
    <div class="container">
        <header class="section-header wow fadeInUp">
            <h3>What needs to be repaired?</h3>

        </header>
<div class="row">
    @if(count($items) > 0)
        @foreach($items->all() as $item)

            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                {{--<h4 class="title"><a href='{{url("/brands/{$item->id}")}}'>{{ $item->item_name }} </a></h4>--}}
                <h4 class="title"><a href="{{url('/brands/'.$item->id. '/'. $item->category_id)}}">{{ $item->item_name }} </a></h4>
            </div>
        @endforeach
    @endif
</div>
    </div>
</section>
@include('inc.footer')
