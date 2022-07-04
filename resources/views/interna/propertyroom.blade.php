<div class="content-user_inf">
    <span class="pf-u skeleton">
        @if ( file_exists( storage_path('app/public/uploadAvatar/' . \App\Models\User::AvatarInterna( $content['user_id'] )  ) ) )
            <img src="{{ URL::asset('storage/uploadAvatar/') .'/'. \App\Models\User::AvatarInterna( $content['user_id'] )  }}" alt="">
        @else
            <img src="{{ URL::asset('assets/img/avatar') }}/{{ \App\Models\User::AvatarInterna( $content['user_id'] ) }}" alt="">
        @endif
    </span>
    <div class="wh-p100">
        <h2 class="h2-guests mr-b8 skeleton skeleton_txt">{{ ucwords( strtolower( \App\Models\RoomsProperty::TypeName( $content['like_place'] ) . ' ' . \App\Models\RoomsProperty::PropertyName( $content['property_type'] ) ) ) }} hosted by {{ \App\Models\User::Name( $content['user_id'] ) }}</h2>
        <ol class="skeleton skeleton_txt">
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