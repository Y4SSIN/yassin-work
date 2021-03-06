<div class="timeline-container whitespace">
    <div class="timeline-block">

        <div class="timeline">
            <ul>
                @foreach($careers as $career)
                <li>
                    <div class="content" data-aos="fade-up">
                        <img src="/storage/cover_images/careers/{{$career->cover_image}}" alt="" width="100%">
                        <div class="description">
                            <h3>{{$career->title}}</h3>
                            <h5>{{$career->description}}</h5>
                            <p>{{$career->body}}</p>
                        </div>
                    </div>
                    <div class="time">
                        <h4>{{$career->start_date->format('F Y')}}</h4>
                    </div>
                </li>
                @endforeach
            </ul>
            <div style="clear: both;"></div>
        </div>

    </div>
</div>

