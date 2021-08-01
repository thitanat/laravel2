<div class="table-responsive">
    <table class="table" id="courses-table">
        <thead>
        <tr>
            <th>User Id</th>
        <th>Category Id</th>
        <th>Title</th>
        <th>Description</th>
        <th>Objective</th>
        <th>Playlist Url</th>
        <th>View Count</th>
        <th>Status</th>
        <th>Subscriber Count</th>
        <th>Photo</th>
        <th>Actual Price</th>
        <th>Discount Price</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($courses as $courses)
            <tr>
                <td>{{ $courses->user_id }}</td>
            <td>{{ $courses->category_id }}</td>
            <td>{{ $courses->title }}</td>
            <td>{{ $courses->description }}</td>
            <td>{{ $courses->objective }}</td>
            <td>{{ $courses->playlist_url }}</td>
            <td>{{ $courses->view_count }}</td>
            <td>{{ $courses->status }}</td>
            <td>{{ $courses->subscriber_count }}</td>
            <td>{{ $courses->photo }}</td>
            <td>{{ $courses->actual_price }}</td>
            <td>{{ $courses->discount_price }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['courses.destroy', $courses->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('courses.show', [$courses->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        @if (Auth::user()->role_id<3)
                        <a href="{{ route('courses.edit', [$courses->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt" style="border-width: thin;"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        @endif
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
