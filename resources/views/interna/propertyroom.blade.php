<div class="content-user_inf">
    <span class="pf-u">
        <img src="{{ URL::asset('assets/img/avatar/' . \App\Models\User::AvatarInterna( $content['user_id'] )) }}" alt="">
    </span>
    <div class="wh-p100">
        <h2 class="h2-guests">{{ ucwords( strtolower( $content['like_place'] . ' ' . $content['property_type'] ) ) }} hosted by {{ \App\Models\User::Name( $content['user_id'] ) }}</h2>
        <ol>
            <li class="len26si">
                <span class="span-guests">{{ $content['number_guests'] }} guests</span>
            </li>

            <li class="len26si">
                <span class="span-guests">{{ $content['bedrooms'] }} bedroom</span>
            </li>

            <li class="len26si">
                <span class="span-guests">{{ $content['bed'] }} beds</span>
            </li>

            <li class="len26si">
                <span class="span-guests">{{ $content['bathrooms'] }} baths</span>
            </li>
        </ol>
    </div>
</div>