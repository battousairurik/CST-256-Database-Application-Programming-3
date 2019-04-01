<table class="table table-bordered table-striped datatable">
    <thead>
        <tr>
            <th>Name</th>
            <th>Color</th>
            <th> </th>
        </tr>
    </thead>
    
    <tbody>
        @if (count($tags) > 0)
            @foreach ($tags as $tag)
                <tr data-entry-id="{{ $tag->id }}">
                    <td field-key='name'>{{ $tag->name }}</td>
                    <td field-key='color'>{{ $tag->color }}</td>
                    <td style="background-color:{{ $tag->color }}"> </td>
                    <td>
                        <a href="{{ route('admin.tags.edit',[$tag->id]) }}" class="btn btn-xs btn-info">Edit</a>
                        {!! Form::open(array(
                            'style' => 'display: inline-block;',
                            'method' => 'DELETE',
                            'onsubmit' => "return confirm('Are you sure?');",
                            'route' => ['admin.tags.destroy', $tag->id])) !!}
                        {!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="3">No entries in table</td>
            </tr>
        @endif
    </tbody>
</table>